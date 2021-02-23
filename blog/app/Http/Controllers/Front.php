<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Classes\CommonFunction;
use App\Classes\PagingFunction;
use App\Admin;
use App\User;
use Auth;
use DB;
use App\Classes\jsonRPCClient;
 
class Front extends Controller

{
    
    public function main(Request $request){

        $commons = new CommonFunction();

		$agent = $commons->getBrowser();
		$device = "";
		$walletSize = 0;
		$curreny_id = !$request->cu ? '' : $request->cu;

		if(stripos($agent['userAgent'], 'android-web-app') !== false) {
			$device = 'webapp';
		} else if(stripos($agent['userAgent'], 'Android') !== false) {
			$device = 'Android';
		} else if(stripos($agent['userAgent'], 'iPhone') !== false) {
			$device = 'iPhone';
		} else {
			$device = 'browser';
		}

		if($device == 'iPhone' || $device == 'Android' || $device == 'webapp') {

			$statistics_1_count = DB::table('statistics')
					->select(DB::raw('count(*) as cnt'))
					->where('ip', $_SERVER['REMOTE_ADDR'])
					->where('access_type', 'MOBILE')
					->where('reg_date', date("Y-m-d"))
					->first();

			if($statistics_1_count->cnt <= 0) {

				DB::table('statistics')->insert(
					[
						'access_type' => 'MOBILE',
						'ip' => $_SERVER['REMOTE_ADDR'],
						'reg_date' => date("Y-m-d"),
						'reg_time' => date("H:i:s"),
						'out_url'  => request()->headers->get('referer'),
					]
				);

			}

		} else {

			$statistics_1_count = DB::table('statistics')
					->select(DB::raw('count(*) as cnt'))
					->where('ip', $_SERVER['REMOTE_ADDR'])
					->where('access_type', 'PC')
					->where('reg_date', date("Y-m-d"))
					->first();

			if($statistics_1_count->cnt <= 0) {

				DB::table('statistics')->insert(
					[
						'access_type' => 'PC',
						'ip' => $_SERVER['REMOTE_ADDR'],
						'reg_date' => date("Y-m-d"),
						'reg_time' => date("H:i:s"),
						'out_url'  => request()->headers->get('referer'),
					]
				);

			}

		}
        
        $return_list = array();

        $popup = DB::table('popup_list')
            ->where('use_status', 'Y')
            ->orderBy('idx', 'desc')
            ->get();
        
        $main_slider = DB::table('board')
            ->where('bc_code', 'SLIDER')
            ->where('use_status', 'Y')
            ->orderBy('prino', 'desc')
            ->get();

        $main_list_01 = DB::table('board')
            ->select('idx', 'bc_code', 'subject', 'attach_file', 'reg_date')
            ->where('use_status', 'Y')
            ->whereIn('bc_code', ['BC015','BC016','BC017'])
            ->orderBy('idx', 'desc')
            ->take(4)
            ->get();
        
        $main_list_02 = DB::table('board')
            ->select('idx', 'bc_code', 'subject', 'attach_file', 'reg_date')
            ->where('use_status', 'Y')
            ->whereIn('bc_code', ['BC018','BC019','BC020', 'BC021'])
            ->orderBy('idx', 'desc')
            ->take(4)
            ->get();

        $return_list['popup'] = $popup;
        $return_list['main_slider'] = $main_slider;
        $return_list['main_list_01'] = $main_list_01;
        $return_list['main_list_02'] = $main_list_02;
        
        return view('index', $return_list);
    }

    public function info(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/sub/';
        if($request->segment(3) != ''){
        $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
        }else{
        $view_url .= $request->segment(1).'/'.$request->segment(2);
        }
        $return_list = array();

        if($request->segment(2) == 'm_accounting' && $request->segment(3) == 'account'){

            $list = DB::table('board')
                ->where('bc_code', 'BC002')
                ->orderBy('idx', 'desc')
                ->get();

            foreach($list as $key => $value){
                
                $list[$key]->listData = DB::table('board_add_datas')
                    ->where('parent_board_idx', $value->idx)
                    ->orderBy('idx', 'asc')
                    ->get();
                
                $list[$key]->sumData = DB::table('board_add_datas')->where('parent_board_idx', $value->idx)->sum('price03_data');

            }

            // print_r($listDataSum);
            // $listDataCnt = count($listData);
            // echo $listDataCnt;

            $listCnt = DB::table('board')
                ->where('bc_code', 'BC002')
                ->count();

            $return_list['list'] = $list;
            $return_list['list2'] = $list;
            $return_list['listCnt'] = $listCnt;
            // $return_list['listData'] = $listData;
            // $return_list['listDataCnt'] = $listDataCnt;
            // $return_list['listDataSum'] = $listDataSum;
        }

        return view($view_url, $return_list);
    }
    public function business(Request $request){

        $return_list = array();

        if(session('user_id') == '' && $request->segment(2) == 'advice'){
            echo '<script>alert("로그인이 필요한 기능입니다."); location.href="/login"</script>';
            exit;
        }

        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/sub/';
        $view_url .= $request->segment(1).'/'.$request->segment(2);

        

        if($request->segment(2) == 'insurance'){
            $bc_code = $request->bcc;

            $return_list = array();
            
            $paging_option = array(
                "pageSize" => 100,
                "blockSize" => 10
            );
    
            $thisPage = ($request->page) ? $request->page : 1 ;
            $paging = new PagingFunction($paging_option);
    
            $totalQuery = DB::table('board');
            $totalQuery->where('bc_code', $bc_code);
            $totalCount = $totalQuery->get()->count();
            $paging_view = $paging->fr_paging2($totalCount, $thisPage, "page");
            
    
            $query = DB::table('board')
                ->select('idx', 'subject', 'writer', 'writer2', 'reg_date', 'start_period', 'attach_file', 'contents')
                ->where('bc_code', $bc_code);
    
            if($request->page != "" && $request->page > 1) {
                $query->skip(($request->page - 1) * $paging_option["pageSize"]);
            }
    
            $view_list = $query->orderBy('idx', 'desc')->take($paging_option["pageSize"])->get();
            
            $number = $totalCount-($paging_option["pageSize"]*($thisPage-1));
    
            $return_list['view_list'] = $view_list;
            $return_list["number"] = $number;
            $return_list["totalCount"] = $totalCount;
            $return_list["paging_view"] = $paging_view;
            $return_list["page"] = $thisPage;
        }

        return view($view_url, $return_list);
    }
    public function system(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/sub/';
        $view_url .= $request->segment(1).'/'.$request->segment(2);

        $return_list = array();

        return view($view_url, $return_list);
    }
    public function commu(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/sub/';
        if($request->segment(3) != ''){
        $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
        }else{
        $view_url .= $request->segment(1).'/'.$request->segment(2);
        }
        $return_list = array();

        return view($view_url, $return_list);
    }
    public function support(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/sub/';
        if($request->segment(3) != ''){
        $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
        }else{
        $view_url .= $request->segment(1).'/'.$request->segment(2);
        }
        $return_list = array();
        return view($view_url, $return_list);
    }
    public function edu(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/sub/';
        if($request->segment(3) != ''){
        $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
        }else{
        $view_url .= $request->segment(1).'/'.$request->segment(2);
        }
        $return_list = array();
        return view($view_url, $return_list);
    }
    public function login(Request $request){
        
        $return_list = array();

        return view('sub/login', $return_list);
    }
    public function join(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/sub/';
        $view_url .= $request->segment(1).'/'.$request->segment(2);

        $return_list = array();

        return view($view_url, $return_list);
    }

    /*게시판*/
    public function list(Request $request){
        
        $bc_code = $request->bcc;

        $return_list = array();
        
        function level_check($code){

            if($code == 'BC015'){
                if(session('user_level') == 0){
                    return true;
                }
            }elseif($code == 'BC016'){
                if(session('user_level') > 0){
                    return true;
                }
            }elseif($code == 'BC017'){
                if(session('user_level') > 0){
                    return true;
                }
            }elseif($code == 'BC022'){
                if(session('user_level') == 0){
                    return true;
                }
            }elseif($code == 'BC023'){
                if(session('user_level') >= 9){
                    return true;
                }
            }elseif($code == 'BC024'){
                if(session('user_level') >= 9){
                    return true;
                }
            }elseif($code == 'BC025'){
                if(session('user_level') == 0){
                    return true;
                }
            }elseif($code == 'BC026'){
                if(session('user_level') == 0){
                    return true;
                }
            }elseif($code == 'BC027'){
                if(session('user_level') == 0){
                    return true;
                }
            }else{
                return false;
            }

        }

        $return_list['write_btn_chk'] = level_check($bc_code);

        if($request->bcc == 'BC023' || $request->bcc == 'BC024'){
            if(session('user_level') < 9){
                echo '<script>alert("권한이 없습니다."); location.href="/";</script>';
            }
        }

        

        if($request->bcc != 'BC022'){
            $paging_option = array(
                "pageSize" => 10,
                "blockSize" => 10
            );
    
            $thisPage = ($request->page) ? $request->page : 1 ;
            $paging = new PagingFunction($paging_option);

            $totalQuery = DB::table('board');
            $totalQuery->where('bc_code', $bc_code);
            if($bc_code == 'BC023'){
                $totalQuery->where('lever9_idx', session('user_idx'));
            }
            if($bc_code == 'BC024'){
                $totalQuery->where('writer2', session('user_id'));
            }
            $totalCount = $totalQuery->get()->count();
            $paging_view = $paging->fr_paging2($totalCount, $thisPage, "page");
            

            $query = DB::table('board')
                ->select('idx', 'subject', 'writer', 'writer2', 'reg_date', 'start_period', 'attach_file', 'category', 'bc_code')
                ->where('bc_code', $bc_code);
            if($bc_code == 'BC023'){
                $query->where('lever9_idx', session('user_idx'));
            }
            if($bc_code == 'BC024'){
                $totalQuery->where('writer2', session('user_id'));
            }
            if($request->page != "" && $request->page > 1) {
                $query->skip(($request->page - 1) * $paging_option["pageSize"]);
            }

            $view_list = $query->orderBy('idx', 'desc')->take($paging_option["pageSize"])->get();

        }else{

            $paging_option = array(
                "pageSize" => 9,
                "blockSize" => 10
            );
    
            $thisPage = ($request->page) ? $request->page : 1 ;
            $paging = new PagingFunction($paging_option);

            $totalQuery = DB::table('acc_member');
            $totalQuery->where('m_level', '9');
            $totalCount = $totalQuery->get()->count();
            $paging_view = $paging->fr_paging2($totalCount, $thisPage, "page");
            

            $query = DB::table('acc_member')
                ->select('idx', 'm_name', 'm_position', 'm_company_name', 'real_file_name', 'm_professional', 'attach_file')
                ->where('m_level', '9');

            if($request->page != "" && $request->page > 1) {
                $query->skip(($request->page - 1) * $paging_option["pageSize"]);
            }

            $view_list = $query->orderBy('idx', 'desc')->take($paging_option["pageSize"])->get();
        }
        $number = $totalCount-($paging_option["pageSize"]*($thisPage-1));

        $return_list['view_list'] = $view_list;
        $return_list["number"] = $number;
        $return_list["totalCount"] = $totalCount;
        $return_list["paging_view"] = $paging_view;
        $return_list["page"] = $thisPage;

        // print_r($view_list);

        return view('sub/board_list', $return_list);
    }
    public function write(Request $request){
        
        $return_list = array();
        $bc_code = $request->bcc;

        // echo $bc_code;

        if(session('user_id') == ''){
            echo '<script>alert("로그인이 필요한 기능입니다."); location.href="/login"</script>';
            exit;
        }

        function level_check($code){
            if($code == 'BC016'){
                if(session('user_level') == 0){
                    echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                }
            }
            if($code == 'BC017'){
                if(session('user_level') == 0){
                    echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                }
            }
            if($code == 'BC023'){
                if(session('user_level') != 9){
                    echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                }
            }
            if($code == 'BC024'){
                if(session('user_level') != 9){
                    echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                }
            }

        }


        switch($bc_code){

            case "BC004":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;

            case "BC005":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;

            case "BC006":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;

            case "BC007":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                
            case "BC008":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;

            case "BC009":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC010":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC011":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC012":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC013":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC014":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;

            case "BC016":
                level_check($bc_code);
                break;
            case "BC017":
                level_check($bc_code);
                break;
                                
            case "BC018":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC019":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC020":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC021":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC023":
                level_check($bc_code);
                break;
                                
            case "BC024":
                level_check($bc_code);
                break;
                                
            case "BC028":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC029":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                
            case "BC030":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
                                                
            case "BC031":
                echo '<script>alert("권한이 없습니다."); history.go(-1)</script>';
                break;
        }

        if($request->segment(2) == 'q_support' && $request->segment(3) == 'sp02'){
            
            if($request->pidx == ''){
                echo '<script>alert("잘못된 경로로 접근했습니다."); history.go(-1);</script>';
                exit;
            }

            

            $p_data = DB::table('acc_member')
                ->where('idx', $request->pidx)
                ->first();
            
            
            $return_list['p_data'] = $p_data;
        }

        $m_data = DB::table('acc_member')
                ->where('m_id', session('user_id'))
                ->first();

        $return_list['m_data'] = $m_data;

        return view('sub/board_write', $return_list);
    }

    public function view(Request $request){
        
        $return_list = array();

        $view_data = DB::table('board')
                        ->where('idx', $request->b_idx)
                        ->first();

        $return_list['view_data'] = $view_data;

        return view('sub/board_view', $return_list);
    }



    /* 모바일 */

    public function m(Request $request){
        
        $return_list = array();

        return view('m/index', $return_list);
    }
    public function m_login(Request $request){
        
        $return_list = array();

        return view('m/sub/m_login', $return_list);
    }

    public function m_info(Request $request){
        
        $view_url = '';
        //$view_url .= '/m/sub/m_info/m_greeting';
        $view_url .= '/m/sub/';
        if($request->segment(5) != ''){
           $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3).'/'.$request->segment(4).'/'.$request->segment(5);
        }elseif($request->segment(3) != ''){
            $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
        }else{
            $view_url .= $request->segment(1).'/'.$request->segment(2);
        }
        $return_list = array();

        return view($view_url, $return_list);
    }
    public function m_join(Request $request){
        
        $view_url = '';
        //$view_url .= '/m/sub/m_join/join';
        $view_url .= '/m/sub/';
        if($request->segment(4) != ''){
            $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3).'/'.$request->segment(4);
         }else{
             $view_url .= $request->segment(1).'/'.$request->segment(2);
         }
        $return_list = array();

        return view($view_url, $return_list);
    }
    public function m_business(Request $request){
        
        $view_url = '';
        //$view_url .= '/m/sub/m_join/join';
        $view_url .= '/m/sub/';
        if($request->segment(3) != ''){
            $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
         }else{
             $view_url .= $request->segment(1).'/'.$request->segment(2);
         }
        $return_list = array();

        return view($view_url, $return_list);
    }
    public function m_support(Request $request){
        
        $view_url = '';
        //$view_url .= '/m/sub/m_info/m_greeting';
        $view_url .= '/m/sub/';
        if($request->segment(5) != ''){
           $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3).'/'.$request->segment(4).'/'.$request->segment(5);
        }elseif($request->segment(3) != ''){
            $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
        }else{
            $view_url .= $request->segment(1).'/'.$request->segment(2);
        }
        $return_list = array();

        return view($view_url, $return_list);
    }
    public function m_commu(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/m/sub/';
        if($request->segment(3) != ''){
        $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
        }else{
        $view_url .= $request->segment(1).'/'.$request->segment(2);
        }
        $return_list = array();

        return view($view_url, $return_list);
    }
    public function m_edu(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/m/sub/';
        if($request->segment(3) != ''){
        $view_url .= $request->segment(1).'/'.$request->segment(2).'/'.$request->segment(3);
        }else{
        $view_url .= $request->segment(1).'/'.$request->segment(2);
        }
        $return_list = array();
        return view($view_url, $return_list);
    }
    public function m_system(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/m/sub/';
        $view_url .= $request->segment(1).'/'.$request->segment(2);

        $return_list = array();

        return view($view_url, $return_list);
    }
    public function m_s_result(Request $request){
        
        $return_list = array();

        return view('m/sub/m_s_result', $return_list);
    }
    /*게시판*/
    public function m_list(Request $request){
        
        $return_list = array();

        return view('m/sub/list', $return_list);
    }
    public function m_write(Request $request){
        
        $return_list = array();

        return view('m/sub/write', $return_list);
    }
    public function m_view(Request $request){
        
        $return_list = array();

        return view('m/sub/view', $return_list);
    }

    //파일 다운로드
    public function downloadFile(Request $request) {
		
		$board_infom = DB::table('board') 
					->select(DB::raw('*'))
					->where('idx', $request->idx)
					->first();

		if($board_infom->real_file_name != '' && $board_infom != null) {
			$file_name = $board_infom->attach_file;
		} else {
			$real_file_name_array = explode(".", $request->real_file_name);
			$file_name = $request->filename.".".$real_file_name_array[1];
		}

		$this->send_attachment($file_name,$_SERVER['DOCUMENT_ROOT'].$request->real_file_name);
        //$this->send_attachment($file_name,$request->real_file_name);

	}

    public function send_attachment($filename, $server_filename, $expires = 0, $speed_limit = 0) {
		
		// 서버측 파일명을 확인한다.
		
		if (!file_exists($server_filename) || !is_readable($server_filename)) {
			return false;
		}
		if (($filesize = filesize($server_filename)) == 0) {
			return false;
		}
		if (($fp = @fopen($server_filename, 'rb')) === false) {
			return false;
		}
		
		// 파일명에 사용할 수 없는 문자를 모두 제거하거나 안전한 문자로 치환한다.
		
		$illegal = array('\\', '/', '<', '>', '{', '}', ':', ';', '|', '"', '~', '`', '@', '#', '$', '%', '^', '&', '*', '?');
		$replace = array('', '', '(', ')', '(', ')', '_', ',', '_', '', '_', '\'', '_', '_', '_', '_', '_', '_', '', '');
		$filename = str_replace($illegal, $replace, $filename);
		$filename = preg_replace('/([\\x00-\\x1f\\x7f\\xff]+)/', '', $filename);
		
		// 유니코드가 허용하는 다양한 공백 문자들을 모두 일반 공백 문자(0x20)로 치환한다.
		
		$filename = trim(preg_replace('/[\\pZ\\pC]+/u', ' ', $filename));
		
		// 위에서 치환하다가 앞뒤에 점이 남거나 대체 문자가 중복된 경우를 정리한다.
		
		$filename = trim($filename, ' .-_');
		$filename = preg_replace('/__+/', '_', $filename);
		if ($filename === '') {
			return false;
		}
		
		// 브라우저의 User-Agent 값을 받아온다.
		
		$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
		$old_ie = (bool)preg_match('#MSIE [3-8]\.#', $ua);
		
		// 파일명에 숫자와 영문 등만 포함된 경우 브라우저와 무관하게 그냥 헤더에 넣는다.
		
		if (preg_match('/^[a-zA-Z0-9_.-]+$/', $filename)) {
			$header = 'filename="' . $filename . '"';
		}
		
		// IE 9 미만 또는 Firefox 5 미만의 경우.
		
		elseif ($old_ie || preg_match('#Firefox/(\d+)\.#', $ua, $matches) && $matches[1] < 5) {
			$header = 'filename="' . rawurlencode($filename) . '"';
		}
		
		// Chrome 11 미만의 경우.
		
		elseif (preg_match('#Chrome/(\d+)\.#', $ua, $matches) && $matches[1] < 11) {
			$header = 'filename=' . $filename;
		}
		
		// Safari 6 미만의 경우.
		
		elseif (preg_match('#Safari/(\d+)\.#', $ua, $matches) && $matches[1] < 6) {
			$header = 'filename=' . $filename;
		}
		
		// 안드로이드 브라우저의 경우. (버전에 따라 여전히 한글은 깨질 수 있다. IE보다 못한 녀석!)
		
		elseif (preg_match('#Android #', $ua, $matches)) {
			$header = 'filename="' . $filename . '"';
		}
		
		// 그 밖의 브라우저들은 RFC2231/5987 표준을 준수하는 것으로 가정한다.
		// 단, 만약에 대비하여 Firefox 구 버전 형태의 filename 정보를 한 번 더 넣어준다.
		
		else {
			$header = "filename*=UTF-8''" . rawurlencode($filename) . '; filename="' . rawurlencode($filename) . '"';
		}
		
		// 캐싱이 금지된 경우...
		
		if (!$expires) {
			
			// 익스플로러 8 이하 버전은 SSL 사용시 no-cache 및 pragma 헤더를 알아듣지 못한다.
			// 그냥 알아듣지 못할 뿐 아니라 완전 황당하게 오작동하는 경우도 있으므로
			// 캐싱 금지를 원할 경우 아래와 같은 헤더를 사용해야 한다.
			
			if ($old_ie) {
				header('Cache-Control: private, must-revalidate, post-check=0, pre-check=0');
				header('Expires: Sat, 01 Jan 2000 00:00:00 GMT');
			}
			
			// 그 밖의 브라우저들은 말을 잘 듣는 착한 어린이!
			
			else {
				header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
				header('Expires: Sat, 01 Jan 2000 00:00:00 GMT');
			}
		}
		
		// 캐싱이 허용된 경우...
		
		else {
			header('Cache-Control: max-age=' . (int)$expires);
			header('Expires: ' . gmdate('D, d M Y H:i:s', time() + (int)$expires) . ' GMT');
		}
		
		// 이어받기를 요청한 경우 여기서 처리해 준다.
		
		if (isset($_SERVER['HTTP_RANGE']) && preg_match('/^bytes=(\d+)-/', $_SERVER['HTTP_RANGE'], $matches)) {
			$range_start = $matches[1];
			if ($range_start < 0 || $range_start > $filesize) {
				header('HTTP/1.1 416 Requested Range Not Satisfiable');
				return false;
			}
			header('HTTP/1.1 206 Partial Content');
			header('Content-Range: bytes ' . $range_start . '-' . ($filesize - 1) . '/' . $filesize);
			header('Content-Length: ' . ($filesize - $range_start));
		} else {
			$range_start = 0;
			header('Content-Length: ' . $filesize);
		}
		
		// 나머지 모든 헤더를 전송한다.
		
		header('Accept-Ranges: bytes');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; ' . $header);
		
		// 출력 버퍼를 비운다.
		// 파일 앞뒤에 불필요한 내용이 붙는 것을 막고, 메모리 사용량을 줄이는 효과가 있다.
		
		while (ob_get_level()) {
			ob_end_clean();
		}
		
		// 파일을 64KB마다 끊어서 전송하고 출력 버퍼를 비운다.
		// readfile() 함수 사용시 메모리 누수가 발생하는 경우가 가끔 있다.
		
		$block_size = 16 * 1024;
		$speed_sleep = $speed_limit > 0 ? round(($block_size / $speed_limit / 1024) * 1000000) : 0;
		
		$buffer = '';
		if ($range_start > 0) {
			fseek($fp, $range_start);
			$alignment = (ceil($range_start / $block_size) * $block_size) - $range_start;
			if ($alignment > 0) {
				$buffer = fread($fp, $alignment);
				echo $buffer; unset($buffer); flush();
			}
		}
		while (!feof($fp)) {
			$buffer = fread($fp, $block_size);
			echo $buffer; unset($buffer); flush();
			usleep($speed_sleep);
		}
		
		fclose($fp);
		
		// 전송에 성공했으면 false를 반환한다.
		
		return false;
	}

} 
?>