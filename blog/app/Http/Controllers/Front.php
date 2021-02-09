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
        
        $return_list = array();

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

        return view($view_url, $return_list);
    }
    public function business(Request $request){
        
        $view_url = '';
        //$view_url .= '/sub/info/greeting';
        $view_url .= '/sub/';
        $view_url .= $request->segment(1).'/'.$request->segment(2);

        $return_list = array();

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
    public function s_result(Request $request){
        
        $return_list = array();

        return view('sub/s_result', $return_list);
    }

    /*게시판*/
    public function list(Request $request){
        
        $return_list = array();

        return view('sub/board_list', $return_list);
    }
    public function write(Request $request){
        
        $return_list = array();

        return view('sub/board_write', $return_list);
    }
    public function view(Request $request){
        
        $return_list = array();

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

} 
?>