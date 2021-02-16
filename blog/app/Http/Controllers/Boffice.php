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

class Boffice extends Controller
{

    public function main(Request $request)
    {

        $return_list = array();

        $today = date("Y-m-d");
        $today_01 = date("Y-m-d", strtotime("-1 day"));
        $today_02 = date("Y-m-d", strtotime("-2 day"));
        $today_03 = date("Y-m-d", strtotime("-3 day"));
        $today_04 = date("Y-m-d", strtotime("-4 day"));
        $today_05 = date("Y-m-d", strtotime("-5 day"));
        $today_06 = date("Y-m-d", strtotime("-6 day"));
        $today_07 = date("Y-m-d", strtotime("-7 day"));

        $week = date("Y-m-d", strtotime("-1 week"));
        $week_01 = date("Y-m-d", strtotime("-2 week"));
        $week_02 = date("Y-m-d", strtotime("-3 week"));
        $week_03 = date("Y-m-d", strtotime("-4 week"));
        $week_04 = date("Y-m-d", strtotime("-5 week"));
        $week_05 = date("Y-m-d", strtotime("-6 week"));
        $week_06 = date("Y-m-d", strtotime("-7 week"));

        $month = date("Y-m-d", strtotime("-1 month"));
        $month_01 = date("Y-m-d", strtotime("-2 month"));
        $month_02 = date("Y-m-d", strtotime("-3 month"));
        $month_03 = date("Y-m-d", strtotime("-4 month"));
        $month_04 = date("Y-m-d", strtotime("-5 month"));
        $month_05 = date("Y-m-d", strtotime("-6 month"));
        $month_06 = date("Y-m-d", strtotime("-7 month"));

        $year = date("Y-m-d", strtotime("-1 year"));
        $year_01 = date("Y-m-d", strtotime("-2 year"));
        $year_02 = date("Y-m-d", strtotime("-3 year"));
        $year_03 = date("Y-m-d", strtotime("-4 year"));
        $year_04 = date("Y-m-d", strtotime("-5 year"));
        $year_05 = date("Y-m-d", strtotime("-6 year"));
        $year_06 = date("Y-m-d", strtotime("-7 year"));


        //차트계산
        $sta_data_01 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today)
                        ->first();

        $sta_data_01_01 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_01)
                        ->first();

        $sta_data_01_02 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_02)
                        ->first();

        $sta_data_01_03 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_03)
                        ->first();

        $sta_data_01_04 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_04)
                        ->first();

        $sta_data_01_05 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_05)
                        ->first();

        $sta_data_01_06 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_06)
                        ->first();


        $sta_data_02 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_01)
                        ->first();

        $sta_data_02_01 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_02)
                        ->first();

        $sta_data_02_02 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_03)
                        ->first();

        $sta_data_02_03 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_04)
                        ->first();

        $sta_data_02_04 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_05)
                        ->first();

        $sta_data_02_05 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_06)
                        ->first();

        $sta_data_02_06 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', $today_07)
                        ->first();

        $sta_data_03 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', '>', $week)
                        ->first();

        $sta_data_03_01 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$week_01, $week])
                        ->first();

        $sta_data_03_02 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$week_02, $week_01])
                        ->first();

        $sta_data_03_03 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$week_03, $week_02])
                        ->first();

        $sta_data_03_04 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$week_04, $week_03])
                        ->first();

        $sta_data_03_05 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$week_05, $week_04])
                        ->first();

        $sta_data_03_06 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$week_06, $week_05])
                        ->first();

        $sta_data_04 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', '>', $month)
                        ->first();

        $sta_data_04_01 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$month_01, $month])
                        ->first();

        $sta_data_04_02 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$month_02, $month_01])
                        ->first();

        $sta_data_04_03 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$month_03, $month_02])
                        ->first();

        $sta_data_04_04 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$month_04, $month_03])
                        ->first();

        $sta_data_04_05 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$month_05, $month_04])
                        ->first();

        $sta_data_04_06 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$month_06, $month_05])
                        ->first();

        $sta_data_05_all = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->first();

        $sta_data_05 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->where('reg_date', '>', $year)
                        ->first();

        $sta_data_05_01 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$year_01, $year])
                        ->first();

        $sta_data_05_02 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$year_02, $year_01])
                        ->first();

        $sta_data_05_03 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$year_03, $year_02])
                        ->first();

        $sta_data_05_04 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$year_04, $year_03])
                        ->first();

        $sta_data_05_05 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$year_05, $year_04])
                        ->first();

        $sta_data_05_06 = DB::table('statistics')
                        ->select(DB::raw('count(*) as cnt'))
                        ->whereBetween('reg_date', [$year_06, $year_05])
                        ->first();

        //차트계산끝

        //증감률 계산

        function zero_chk($num){
            if($num == 0){
                $num = 1;
            }
            return $num;
        }

        $num01_01 = zero_chk($sta_data_01_01->cnt);
        $num01_02 = zero_chk($sta_data_01->cnt);
        $num02_01 = zero_chk($sta_data_02_01->cnt);
        $num02_02 = zero_chk($sta_data_02->cnt);
        $num03_01 = zero_chk($sta_data_03_01->cnt);
        $num03_02 = zero_chk($sta_data_03->cnt);
        $num04_01 = zero_chk($sta_data_04_01->cnt);
        $num04_02 = zero_chk($sta_data_04->cnt);
        $num05_01 = zero_chk($sta_data_05_01->cnt);
        $num05_02 = zero_chk($sta_data_05->cnt);

        // echo $num05_01;
        // echo $num05_02;

        function get_per($x, $y){
            $num = ($y - $x) / $x * 100;
            return $num;

        }

        $sta_data_01_per = round(get_per($num01_01, $num01_02));
        $sta_data_02_per = round(get_per($num02_01, $num02_02));
        $sta_data_03_per = round(get_per($num03_01, $num03_02));
        $sta_data_04_per = round(get_per($num04_01, $num04_02));
        $sta_data_05_per = round(get_per($num05_01, $num05_02));


        $BC002_list = DB::table('board')
                        ->where('bc_code', 'BC002')
                        ->limit(10)
                        ->get();

        $return_list['sta_data_01'] = $sta_data_01;
        $return_list['sta_data_01_01'] = $sta_data_01_01;
        $return_list['sta_data_01_02'] = $sta_data_01_02;
        $return_list['sta_data_01_03'] = $sta_data_01_03;
        $return_list['sta_data_01_04'] = $sta_data_01_04;
        $return_list['sta_data_01_05'] = $sta_data_01_05;
        $return_list['sta_data_01_06'] = $sta_data_01_06;

        $return_list['sta_data_02'] = $sta_data_02;
        $return_list['sta_data_02_01'] = $sta_data_02_01;
        $return_list['sta_data_02_02'] = $sta_data_02_02;
        $return_list['sta_data_02_03'] = $sta_data_02_03;
        $return_list['sta_data_02_04'] = $sta_data_02_04;
        $return_list['sta_data_02_05'] = $sta_data_02_05;
        $return_list['sta_data_02_06'] = $sta_data_02_06;

        $return_list['sta_data_03'] = $sta_data_03;
        $return_list['sta_data_03_01'] = $sta_data_03_01;
        $return_list['sta_data_03_02'] = $sta_data_03_02;
        $return_list['sta_data_03_03'] = $sta_data_03_03;
        $return_list['sta_data_03_04'] = $sta_data_03_04;
        $return_list['sta_data_03_05'] = $sta_data_03_05;
        $return_list['sta_data_03_06'] = $sta_data_03_06;

        $return_list['sta_data_04'] = $sta_data_04;
        $return_list['sta_data_04_01'] = $sta_data_04_01;
        $return_list['sta_data_04_02'] = $sta_data_04_02;
        $return_list['sta_data_04_03'] = $sta_data_04_03;
        $return_list['sta_data_04_04'] = $sta_data_04_04;
        $return_list['sta_data_04_05'] = $sta_data_04_05;
        $return_list['sta_data_04_06'] = $sta_data_04_06;

        $return_list['sta_data_05'] = $sta_data_05;
        $return_list['sta_data_05_01'] = $sta_data_05_01;
        $return_list['sta_data_05_02'] = $sta_data_05_02;
        $return_list['sta_data_05_03'] = $sta_data_05_03;
        $return_list['sta_data_05_04'] = $sta_data_05_04;
        $return_list['sta_data_05_05'] = $sta_data_05_05;
        $return_list['sta_data_05_06'] = $sta_data_05_06;
        $return_list['sta_data_05_all'] = $sta_data_05_all;

        $return_list['sta_data_01_per'] = $sta_data_01_per;
        $return_list['sta_data_02_per'] = $sta_data_02_per;
        $return_list['sta_data_03_per'] = $sta_data_03_per;
        $return_list['sta_data_04_per'] = $sta_data_04_per;
        $return_list['sta_data_05_per'] = $sta_data_05_per;


        $return_list['BC002_list'] = $BC002_list;

        return view('boffice/index', $return_list);
    }

    public function write(Request $request)
    {
        return view('boffice/write');
    }

    public function create(Request $request)
    {
        $return_list = array();

        if($request->writer == ''){
            $put_writer = '관리자';
        }else{
            $put_writer = $request->writer;
        }

        if($request->bcc == 'BC001'){

            DB::table('board')->insert([
                "bc_code" => $request->bcc,
                "subject" => $request->subject,
                "contents" => $request->contents,
                "writer" => $put_writer,
                "use_status" => $request->use_status,
                "reg_date" => \Carbon\Carbon::now()
            ]);

        }

        if($request->bcc == 'BC003' || $request->bcc == 'BC004' || $request->bcc == 'BC005' || $request->bcc == 'BC006' || $request->bcc == 'BC007' || $request->bcc == 'BC008'){

            $name_orig = '';
            $name_save = '';

            if($_FILES['files']['name'] != "") {

                $file = $_FILES['files'];
                $upload_directory = './storage/app/images/';
                $ext_str = "jpg,gif,png,Jpg,JPG,GIF,PNG,PDF,PPT,PPTX,HWP,Png,jpeg,JPEG";
                $allowed_extensions = explode(',', $ext_str);

                $max_file_size = 5242880000000000;
                $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

                // 확장자 체크
                if(!in_array($ext, $allowed_extensions)) {
                    echo "<script>alert('업로드할 수 없는 확장자 입니다.');history.go(-1);</script>";
                    exit;
                }

                // 파일 크기 체크
                if($file['size'] >= $max_file_size) {
                    //echo "<script>alert('5MB 까지만 업로드 가능합니다.');history.go(-1);</script>";
                    //exit;
                }

                $path = md5(microtime()) . '.' . $ext;
                if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {


                    $file_id = md5(uniqid(rand(), true));
                    $name_orig = $file['name'];
                    $name_save = $path;

                }

            }

            DB::table('board')->insert([
                "bc_code" => $request->bcc,
                "subject" => $request->subject,
                "attach_file" => $name_orig,
                "real_file_name" => $name_save,
                "writer" => $put_writer,
                "use_status" => $request->use_status,
                "reg_date" => \Carbon\Carbon::now()
            ]);



        }

        if($request->bcc == 'SLIDER'){

            $name_orig = '';
            $name_save = '';

            if($_FILES['files']['name'] != "") {

                $file = $_FILES['files'];
                $upload_directory = './storage/app/images/';
                $ext_str = "jpg,gif,png,Jpg,JPG,GIF,PNG,PDF,PPT,PPTX,HWP,Png,jpeg,JPEG";
                $allowed_extensions = explode(',', $ext_str);

                $max_file_size = 5242880000000000;
                $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

                // 확장자 체크
                if(!in_array($ext, $allowed_extensions)) {
                    echo "<script>alert('업로드할 수 없는 확장자 입니다.');history.go(-1);</script>";
                    exit;
                }

                $path = md5(microtime()) . '.' . $ext;

                if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {
                    $file_id = md5(uniqid(rand(), true));
                    $name_orig = $file['name'];
                    $name_save = $path;
                }

            }

            $min_prino = DB::table('board')->min('prino');

            DB::table('board')->insert([
                "bc_code" => $request->bcc,
                "subject" => $request->subject,
                "use_status" => $request->use_status,
                "attach_file" => $name_orig,
                "real_file_name" => $name_save,
                "contents" => $request->contents,
                "writer" => $put_writer,
                "prino" => $min_prino-1,
                "use_status" => $request->use_status,
                "reg_date" => \Carbon\Carbon::now()
            ]);

        }

        echo '<script>alert("게시글 작성이 완료됐습니다."); location.href="/boffice/list?bcc='.$request->bcc.'";</script>';
    }

    public function store(Request $request)
    {
        $return_list = array();
        //
    }

    public function list(Request $request)
    {
        $return_list = array();

        $paging_option = array(
			"pageSize" => 20,
			"blockSize" => 5
        );

        $thisPage = ($request->page) ? $request->page : 1 ;
		$paging = new PagingFunction($paging_option);

        $totalQuery = DB::table('board');
        $totalQuery->where('bc_code', $request->bcc);
        $totalCount = $totalQuery->get()->count();
        $paging_view = $paging->paging($totalCount, $thisPage, "page");

        $query = DB::table('board')
                        ->where('bc_code', $request->bcc);

        if($request->page != "" && $request->page > 1) {
            $query->skip(($request->page - 1) * $paging_option["pageSize"]);
        }

        if($request->bcc == 'SLIDER'){
            $view_list = $query->orderBy('prino', 'desc')->take($paging_option["pageSize"])->get();
        }else{
            $view_list = $query->orderBy('idx', 'desc')->take($paging_option["pageSize"])->get();
        }



        // 게시판 출력 글 번호 계산
		$number = $totalCount-($paging_option["pageSize"]*($thisPage-1));

        $return_list['view_list'] = $view_list;
        $return_list["number"] = $number;
        $return_list["totalCount"] = $totalCount;
        $return_list["paging_view"] = $paging_view;
        $return_list["page"] = $thisPage;

        return view('boffice/list', $return_list);
    }

    public function admList(Request $request)
    {
        $return_list = array();

        $paging_option = array(
            "pageSize" => 20,
            "blockSize" => 5
        );

        $thisPage = ($request->page) ? $request->page : 1 ;
        $paging = new PagingFunction($paging_option);

        $totalQuery = DB::table('admin_member')->select('idx');
        //$totalQuery->where('bc_code', $request->bcc);
        $totalCount = $totalQuery->get()->count();
        $paging_view = $paging->paging($totalCount, $thisPage, "page");

        $query = DB::table('admin_member');
                        //->where('bc_code', $request->bcc);

        if($request->page != "" && $request->page > 1) {
            $query->skip(($request->page - 1) * $paging_option["pageSize"]);
        }

        $view_list = $query->orderBy('idx', 'asc')->take($paging_option["pageSize"])->get();

        // 게시판 출력 글 번호 계산
        $number = $totalCount-($paging_option["pageSize"]*($thisPage-1));

        $return_list['view_list'] = $view_list;
        $return_list["number"] = $number;
        $return_list["totalCount"] = $totalCount;
        $return_list["paging_view"] = $paging_view;
        $return_list["page"] = $thisPage;

        return view('boffice/adm_set', $return_list);
    }

    public function admShow(Request $request)
    {
        $return_list = array();

        $view_data = DB::table('admin_member')
                        ->where('idx', $request->b_idx)
                        ->first();

        $return_list['view_data'] = $view_data;

        return view('boffice/adm_show', $return_list);
    }

    public function admUpdate(Request $request)
    {
        DB::table('admin_member')->where('idx', $request->b_idx)->update([
            "passwd" => Hash::make($request->passwd)
        ]);

        echo "<script>alert('계정수정이 완료됐습니다.');location.href='/boffice'</script>";
        exit;
    }

    public function show(Request $request)
    {
        $return_list = array();

        $view_data = DB::table('board')
                        ->where('idx', $request->b_idx)
                        ->first();

        $return_list['view_data'] = $view_data;

        return view('boffice/show', $return_list);
    }

    public function update(Request $request)
    {
        if($request->writer == ''){
            $put_writer = '관리자';
        }else{
            $put_writer = $request->writer;
        }

        if($request->bcc == 'BC001'){
            DB::table('board')->where('idx', $request->b_idx)->update([
                "subject" => $request->subject,
                "contents" => $request->contents,
                "use_status" => $request->use_status
            ]);
        }

        if($request->bcc == 'BC003' || $request->bcc == 'BC004' || $request->bcc == 'BC005' || $request->bcc == 'BC006' || $request->bcc == 'BC007' || $request->bcc == 'BC008'){


            if($_FILES['files']['name'] != "") {

                $file = $_FILES['files'];
                $upload_directory = './storage/app/images/';
                $ext_str = "jpg,gif,png,Jpg,JPG,GIF,PNG,PDF,PPT,PPTX,HWP,Png,jpeg,JPEG";
                $allowed_extensions = explode(',', $ext_str);

                $max_file_size = 5242880000000000;
                $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

                // 확장자 체크
                if(!in_array($ext, $allowed_extensions)) {
                    echo "<script>alert('업로드할 수 없는 확장자 입니다.');history.go(-1);</script>";
                    exit;
                }

                // 파일 크기 체크
                if($file['size'] >= $max_file_size) {
                    //echo "<script>alert('5MB 까지만 업로드 가능합니다.');history.go(-1);</script>";
                    //exit;
                }

                $path = md5(microtime()) . '.' . $ext;
                if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {


                    $file_id = md5(uniqid(rand(), true));
                    $name_orig = $file['name'];
                    $name_save = $path;

                }

                $del_file = DB::table('board')->where('idx', $request->b_idx)->first();

                unlink('./storage/app/images/'.$del_file->real_file_name);

                DB::table('board')->where('idx', $request->b_idx)->update([
                    "bc_code" => $request->bcc,
                    "subject" => $request->subject,
                    "attach_file" => $name_orig,
                    "real_file_name" => $name_save,
                    "use_status" => $request->use_status
                ]);

            }else{

                DB::table('board')->where('idx', $request->b_idx)->update([
                    "bc_code" => $request->bcc,
                    "subject" => $request->subject,
                    "use_status" => $request->use_status
                ]);

            }
        }

        if($request->bcc == 'SLIDER'){


            if($_FILES['files']['name'] != "") {

                $file = $_FILES['files'];
                $upload_directory = './storage/app/images/';
                $ext_str = "jpg,gif,png,Jpg,JPG,GIF,PNG,PDF,PPT,PPTX,HWP,Png,jpeg,JPEG";
                $allowed_extensions = explode(',', $ext_str);

                $max_file_size = 5242880000000000;
                $ext = substr($file['name'], strrpos($file['name'], '.') + 1);

                // 확장자 체크
                if(!in_array($ext, $allowed_extensions)) {
                    echo "<script>alert('업로드할 수 없는 확장자 입니다.');history.go(-1);</script>";
                    exit;
                }

                // 파일 크기 체크
                if($file['size'] >= $max_file_size) {
                    //echo "<script>alert('5MB 까지만 업로드 가능합니다.');history.go(-1);</script>";
                    //exit;
                }

                $path = md5(microtime()) . '.' . $ext;
                if(move_uploaded_file($file['tmp_name'], $upload_directory.$path)) {


                    $file_id = md5(uniqid(rand(), true));
                    $name_orig = $file['name'];
                    $name_save = $path;

                }

                $del_file = DB::table('board')->where('idx', $request->b_idx)->first();

                unlink('./storage/app/images/'.$del_file->real_file_name);

                DB::table('board')->where('idx', $request->b_idx)->update([
                    "bc_code" => $request->bcc,
                    "subject" => $request->subject,
                    "use_status" => $request->use_status,
                    "attach_file" => $name_orig,
                    "real_file_name" => $name_save,
                    "contents" => $request->contents,
                    "writer" => $put_writer,
                    "use_status" => $request->use_status
                ]);

            }else{

                DB::table('board')->where('idx', $request->b_idx)->update([
                    "bc_code" => $request->bcc,
                    "subject" => $request->subject,
                    "use_status" => $request->use_status,
                    "contents" => $request->contents,
                    "writer" => $put_writer,
                    "use_status" => $request->use_status
                ]);

            }

        }

        echo '<script>alert("게시글 수정이 완료됐습니다."); location.href="/boffice/view?bcc='.$request->bcc.'&b_idx='.$request->b_idx.'";</script>';

        $return_list = array();
    }

    public function delete(Request $request)
    {
        $del_idx = explode(',', $request->b_idx);
        //$del_idx = $request->b_idx;
        $bc_code = $request->bcc;
        //print_r($del_idx);

        foreach($del_idx as $key => $value){
            DB::table('board')
                ->where('idx', $value)
                ->delete();
        }

        echo '<script>alert("게시글 삭제가 완료됐습니다."); location.href="/boffice/list?bcc='.$request->bcc.'";</script>';

    }

    public function priListUpdate(Request $request)
    {

        $paging_option = array(
			"pageSize" => 20
        );
        $thisPage = ($request->page) ? $request->page : 1 ;
        $totalQuery = DB::table('board');
        $totalQuery->where('bc_code', $request->bcc);
        $totalCount = $totalQuery->get()->count();
        $number = $totalCount-($paging_option["pageSize"]*($thisPage-1));

        $pri_idx = explode(',', $request->b_idx);
        $bc_code = $request->bcc;
        $idx_cnt = count($pri_idx);

        $pri_data_first_arr = DB::table('board')
        ->select('idx', 'prino')
        ->where('bc_code', $bc_code);

        if($request->page != "" && $request->page > 1) {
            $pri_data_first_arr->skip(($request->page - 1) * $paging_option["pageSize"]);
        }

        $pri_data_first_arr = $pri_data_first_arr->orderBy('prino', 'desc')->take($paging_option["pageSize"])->get();
        //->first();

        $pri_data_first = $pri_data_first_arr[0]->prino;
        //$del_idx = $request->b_idx;

        // print_r($pri_idx);
        // print_r($pri_data_first);
        // exit;

        foreach($pri_idx as $key => $value){

            $priNo = $pri_data_first--;

            DB::table('board')->where('idx', $value)->update([
                'prino' => $priNo
            ]);
        }

        echo '<script>alert("우선순위 수정이 완료됐습니다."); location.href="/boffice/list?bcc='.$request->bcc.'";</script>';

    }

    public function login(Request $request)
    {
        $return_list = array();
        return view('boffice/login', $return_list);
    }

    public function loginAction(Request $request)
    {
        $return_list = array();
        $member_infom_count = DB::table('admin_member')
				->select(DB::raw('*'))
				->where('user_id', $request->id)
				->get()->count();

		if($member_infom_count > 0) {

			$member_infom = DB::table('admin_member')
					->select(DB::raw('*'))
					->where('user_id', $request->id)
					->first();

			if (Hash::check($request->pw, $member_infom->passwd)) {

				session(['adm_user_id' => $member_infom->user_id]);
				session(['adm_user_idx' => $member_infom->idx]);

				echo "<script>location.href='/boffice';</script>";

			} else {
				echo "<script>alert('비밀번호가 잘못되었습니다.');location.href='/boffice/login';</script>";

			}

		} else {
			echo "<script>alert('등록되어 있지 않은 아이디입니다.');location.href='/boffice/login';</script>";

		}
    }

    public function logoutAction(Request $request)
    {
        session()->forget('adm_user_id');
        session()->forget('adm_user_idx');

        echo "<script>alert('로그아웃 완료됐습니다.');location.href='/boffice/login';</script>";
    }
}
