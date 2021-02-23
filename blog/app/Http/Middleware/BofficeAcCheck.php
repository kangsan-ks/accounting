<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;

class BofficeAcCheck
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
        $now_url = $_SERVER['REQUEST_URI'];

        if(strpos($now_url, '/boffice') !== false){
            if(strpos($now_url, '/login') === false){
                $adm_id = session('adm_user_id');
                if($adm_id == ''){
                    echo "<script>alert('로그인 후 이용 가능합니다.');location.href='/boffice/login';</script>";
                }
            }
        }
        
        if($request->bcc != ''){
            $b_title_chk = $request->bcc;
        }else{
            $b_title_chk = $request->mem_cate;
        }

        switch($b_title_chk){

            case "0":
                $b_title01 = '사용자 관리';
                $b_title02 = '일반회원';
                break;
            
            case "1":
                $b_title01 = '사용자 관리';
                $b_title02 = '회계회원';
                break;

            case "9":
                $b_title01 = '사용자 관리';
                $b_title02 = '자문회원';
                break;

            case "SLIDER":
                $b_title01 = '홈페이지 관리';
                $b_title02 = '슬라이드';
                break;

            case "POPUP":
                $b_title01 = '홈페이지 관리';
                $b_title02 = '팝업관리';
                break;

            case "BC002":
                $b_title01 = '협의회소개';
                $b_title02 = '회계법인현황';
                break;

            case "BC003":
                $b_title01 = '협의회소개';
                $b_title02 = '회비납부현황';
                break;

            case "BC004":
                $b_title01 = '협의회소개';
                $b_title02 = '사업보고';
                break;

            case "BC005":
                $b_title01 = '협의회소개';
                $b_title02 = '결산보고';
                break;

            case "BC006":
                $b_title01 = '협의회소개';
                $b_title02 = '사업계획';
                break;

            case "BC007":
                $b_title01 = '협의회소개';
                $b_title02 = '예산';
                break;
                
            case "BC008":
                $b_title01 = '공동사업';
                $b_title02 = '공동구매';
                break;

            case "FAQ":
                $b_title01 = '공동사업';
                $b_title02 = '전문인세무보험';
                break;

            case "BC009":
                $b_title01 = '공동사업';
                $b_title02 = 'PA,회계CFO아웃소싱';
                break;
                                
            case "BC010":
                $b_title01 = '공동사업';
                $b_title02 = '자문요청';
                break;
                                
            case "BC011":
                $b_title01 = '공동사업';
                $b_title02 = '게시판';
                break;
                                
            case "BC012":
                $b_title01 = '공동사업';
                $b_title02 = '업무자료실';
                break;
                                
            case "BC013":
                $b_title01 = '제도개선';
                $b_title02 = '회계감사제도개선';
                break;
                                
            case "BC014":
                $b_title01 = '제도개선';
                $b_title02 = '한공회운영개선';
                break;
                                
            case "BC015":
                $b_title01 = '커뮤니티';
                $b_title02 = '자유게시판';
                break;
                                
            case "BC016":
                $b_title01 = '커뮤니티';
                $b_title02 = '질문게시판';
                break;
                                
            case "BC017":
                $b_title01 = '커뮤니티';
                $b_title02 = '업무협조게시판';
                break;
                                
            case "BC018":
                $b_title01 = '커뮤니티';
                $b_title02 = '감사업무';
                break;
                                
            case "BC019":
                $b_title01 = '커뮤니티';
                $b_title02 = '세무업무';
                break;
                                
            case "BC020":
                $b_title01 = '커뮤니티';
                $b_title02 = '컨설팅업무';
                break;
                                
            case "BC021":
                $b_title01 = '커뮤니티';
                $b_title02 = '기타업무';
                break;
                                                
            case "BC022":
                $b_title01 = '회계투명성지원센터';
                $b_title02 = '자문신청';
                break;
                                
            case "BC023":
                $b_title01 = '회계투명성지원센터';
                $b_title02 = '자문내용게시판';
                break;
                                
            case "BC024":
                $b_title01 = '회계투명성지원센터';
                $b_title02 = '자문보고';
                break;
                                
            case "BC025":
                $b_title01 = '회계투명성지원센터';
                $b_title02 = '품질관리지원';
                break;
                                
            case "BC026":
                $b_title01 = '회계투명성지원센터';
                $b_title02 = '품질관리도입';
                break;
                                
            case "BC027":
                $b_title01 = '회계투명성지원센터';
                $b_title02 = '품질관리교육';
                break;
                                
            case "BC028":
                $b_title01 = '회계투명성지원센터';
                $b_title02 = '품질관리자료실';
                break;
                                
            case "BC029":
                $b_title01 = '교육';
                $b_title02 = '정기연수';
                break;
                                
            case "BC030":
                $b_title01 = '교육';
                $b_title02 = '웹연수';
                break;
                                                
            case "BC031":
                $b_title01 = '교육';
                $b_title02 = '교육자료실';
                break;

            default :
                $b_title01 = '메인';
                $b_title02 = 'Dashboard';
        }

        $request->b_title01 = $b_title01;
        $request->b_title02 = $b_title02;

        return $next($request);
    }
}
