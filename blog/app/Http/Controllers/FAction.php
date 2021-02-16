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
    public function main(Request $request){
        $return_list = array();

        return view('index', $return_list);
    }

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
            "m_contact_numner" => $request->m_contact_number,
            "m_email" => $request->m_email,
            "m_addr1" => $request->m_addr1,
            "m_addr2" => $request->m_addr2,
            "m_company_addr1" => $request->m_company_addr1,
            "m_company_addr2" => $request->m_company_addr2,
            "m_level" => $request->m_level
        ]);

        if($mJoinData){
            session(['user_idx' => $mJoinData]);
            session(['user_id' => $request->m_id]);
            echo '<script>alert("회원가입이 완료됐습니다."); location.href="/";</script>';
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

            if($request->auto_login){
                //자동로그인 처리
                setcookie('user_id',$mLoginData->m_id,time()+(86400*30),'/');
                setcookie('user_level',$mLoginData->m_level,time()+(86400*30),'/');
            }
            session(['user_id' => $mLoginData->m_id]);
            session(['user_level' => $mLoginData->m_level]);

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
}