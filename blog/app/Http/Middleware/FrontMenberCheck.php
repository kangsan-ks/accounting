<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;

class FrontMenberCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != ''){
            session(['user_id' => $_COOKIE['user_id']]);
            session(['user_level' => $_COOKIE['user_level']]);
            session(['user_name' => $_COOKIE['user_name']]);
        }

        $user_id = session('user_id');
        //$user_level = session('user_level');
        if($user_id != ''){
            $user_data = DB::table('acc_member')->where('m_id', $user_id)->first();
            session(['user_level' => $user_data->m_level]);
            session(['user_name' => $user_data->m_name]);
            $user_name = session('user_name');
            $user_level = session('user_level');
        }
        // echo $user_id;
        // echo $user_level;
        return $next($request);
    }
}
