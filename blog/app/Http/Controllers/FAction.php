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
 
class FAction extends Controller

{

    public function join(Request $request){
        $psData = Hash::make($request->m_passwd);
        $mJoinData = DB::table('acc_member')
        ->insertGetId([
            "m_id" => $request->m_id,
            "m_passwd" => $psData,
            "m_company_name" => $request->m_company_name,
            "m_company_number" => $request->m_company_number,
            "m_name" => $request->m_name,
            "m_position" => $request->m_position,
            "m_contact_number" => $request->m_contact_number,
            "m_email" => $request->m_email,
            "m_addr1" => $request->m_addr1,
            "m_addr2" => $request->m_addr2,
            "m_company_addr1" => $request->m_company_addr1,
            "m_company_addr2" => $request->m_company_addr2,
            "m_level" => $request->m_level,
            "approval_status" => 'N'
        ]);

        if($mJoinData){
            // session(['user_idx' => $mJoinData]);
            // session(['user_id' => $request->m_id]);
            echo '<script>alert("회원가입이 완료됐습니다. 관리자 승인 후 로그인 가능합니다."); location.href="/";</script>';
        }
    }

    public function loginAction(Request $request){
        //$psData = Hash::make($request->m_passwd);
        
        $mLoginCnt = DB::table('acc_member')
        ->where('m_id', $request->m_id)
        ->count();
        
        if($mLoginCnt > 0){
            
            $mLoginData = DB::table('acc_member')
            ->where('m_id', $request->m_id)
            ->first();

            if (!Hash::check($request->m_passwd, $mLoginData->m_passwd)) {
                echo '<script>alert("가입하지 않은 아이디이거나, 잘못된 비밀번호입니다."); history.go(-1);</script>';
                exit;
            }

            if($mLoginData->approval_status != 'Y'){
                echo '<script>alert("관리자 승인이 이루어 지지 않았습니다. 승인 후 로그인이 가능합니다."); history.go(-1);</script>';
                exit;
            }

            if($request->auto_login){
                //자동로그인 처리
                setcookie('user_idx',$mLoginData->idx,time()+(86400*30),'/');
                setcookie('user_id',$mLoginData->m_id,time()+(86400*30),'/');
                setcookie('user_level',$mLoginData->m_level,time()+(86400*30),'/');
                setcookie('user_name',$mLoginData->m_name,time()+(86400*30),'/');
            }
            session(['user_idx' => $mLoginData->idx]);
            session(['user_id' => $mLoginData->m_id]);
            session(['user_level' => $mLoginData->m_level]);
            session(['user_name' => $mLoginData->m_name]);

            echo '<script>alert("로그인 완료됐습니다."); location.href="/";</script>';
        }else{
            echo '<script>alert("가입하지 않은 아이디이거나, 잘못된 비밀번호입니다."); history.go(-1);</script>';
        }
    }

    public function logoutAction(Request $request){
        setcookie('user_id', '', time()-3600, '/');
        setcookie('user_level', '', time()-3600, '/');
        session()->forget('user_id');
        session()->forget('user_level');
        echo "<script>alert('로그아웃 완료됐습니다.');location.href='/';</script>";
    }

    public function mIdCheck(Request $request){
        
        $m_data = DB::table('acc_member')->where('m_id', $request->m_id)->count();

        if($m_data < 1){
            echo '0';
        }else{
            echo '1';
        }

    }

    public function s_result(Request $request){
        
        $return_list = array();

        $s_list_01 = DB::table('board')
            ->whereIn('bc_code', ['BC015','BC016','BC017'])
            ->where(function($query){
                $query->where('subject', 'like', '%'.request()->search_name.'%')
                    ->orWhere('contents', 'like', '%'.request()->search_name.'%');
            })
            ->orderBy('reg_date', 'desc')
            ->get();

        $s_list_02 = DB::table('board')
            ->whereIn('bc_code', ['BC018','BC019','BC020','BC021'])
            ->where(function($query){
                $query->where('subject', 'like', '%'.request()->search_name.'%')
                    ->orWhere('contents', 'like', '%'.request()->search_name.'%');
            })
            ->orderBy('reg_date', 'desc')
            ->get();

        $return_list['s_list_01'] = $s_list_01;
        $return_list['s_list_02'] = $s_list_02;

        return view('sub/s_result', $return_list);
    }

    public function advice(Request $request){

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
            "start_period" => $request->start_period,
            "writer2" => $request->writer2,
            "bc_code" => 'BC010',
            "contents" => $request->contents,
            "ust_status" => 'Y',
            "attach_file" => $name_orig,
            "real_file_name" => $name_save,
            "category" => 'advice_'.$request->cate_type,
            "prino" => $min_prino-1,
            "reg_date" => \Carbon\Carbon::now()
        ]);

        echo '<script>alert("자문요청이 완료됐습니다."); location.href="/business/advice";</script>';

    }

    public function create(Request $request)
    {
        if($request->writer == ''){
            $put_writer = '관리자';
        }else{
            $put_writer = $request->writer;
        }

        if($request->bcc != 'SLIDER' && $request->bcc != 'BC002'){

            $name_orig = '';
            $name_save = '';
            if(isset($_FILES['files'])){
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
            }

            DB::table('board')->insert([
                "bc_code" => $request->bcc,
                "subject" => $request->subject,
                "contents" => $request->contents,
                "attach_file" => $name_orig,
                "real_file_name" => $name_save,
                "writer" => $put_writer,
                "writer2" => $request->writer2,
                "use_status" => 'Y',
                "etc1" => $request->etc1,
                "contact_number" => $request->contact_number,
                "contact_number2" => $request->contact_number2,
                "email" => $request->email,
                "category" => $request->category,
                "etc1" => $request->etc1,
                "reg_date" => \Carbon\Carbon::now()
            ]);

            echo '<script>alert("글등록이 완료됐습니다."); location.href="/";</script>';

        }
    }
}