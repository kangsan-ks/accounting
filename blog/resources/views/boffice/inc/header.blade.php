<!DOCTYPE html>
<html class="no-js h-100" lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>중소회계법인 | ADMIN</title>
        <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components." />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="/styles/shards-dashboards.1.1.0.min.css" />
        <link rel="stylesheet" href="/styles/extras.1.1.0.min.css" />
        <link rel="stylesheet" href="/styles/index.css" />
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
        <script src="/scripts/extras.1.1.0.min.js"></script>
        <script src="/scripts/shards-dashboards.1.1.0.min.js"></script>
        <script src="/scripts/app/app-blog-overview.1.1.0.js"></script>
        <script src="/scripts/index.js"></script>
        <script src="/js/ckeditor4/ckeditor.js"></script>
    </head>
    <body class="h-100">
        <div class="container-fluid">
            <div class="row">
                <!-- Main Sidebar -->
                <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                    <div class="main-navbar">
                        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                            <a class="navbar-brand w-100 mr-0" href="/boffice" style="line-height: 25px;">
                                <img src="/img/logo.png" class="dash_logo">
                            </a>
                            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                                <i class="material-icons">&#xE5C4;</i>
                            </a>
                        </nav>
                    </div>
                    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
                        <div class="input-group input-group-seamless ml-3">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search" />
                        </div>
                    </form>
                    <div class="nav-wrapper">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '메인') active @endif" href="/boffice">
                                    <i class="material-icons">home</i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '홈페이지 관리') active on @endif" href="#none">
                                    <i class="material-icons">shopping_cart</i>
                                    <span>홈페이지 관리</span>
                                    <i class="material-icons right">add_circle_outline</i>

                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '슬라이드') active @endif" href="/boffice/list?bcc=SLIDER">
                                        <span>슬라이드</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '팝업관리') active @endif" href="/boffice/list?bcc=POPUP">
                                        <span>팝업관리</span>
                                    </a>
                                </div>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '회원회계법인') active on @endif" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>회원회계법인</span>
                                    <i class="material-icons right">add_circle_outline</i>

                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '회계법인현황') active @endif" href="/boffice/list?bcc=BC002">
                                        <span>회계법인현황</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '회비납부현황') active @endif" href="/boffice/list?bcc=BC003">
                                        <span>회비납부현황</span>
                                    </a>
                                </div>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '협의회소개') active on @endif" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>협의회소개</span>
                                    <i class="material-icons right">add_circle_outline</i>
                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '회계법인현황') active @endif" href="/boffice/list?bcc=BC002">
                                        <span>회계법인현황</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '사업보고') active @endif" href="/boffice/list?bcc=BC004">
                                        <span>사업보고</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '결산보고') active @endif" href="/boffice/list?bcc=BC005">
                                        <span>결산보고</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '사업계획') active @endif" href="/boffice/list?bcc=BC006">
                                        <span>사업계획</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '예산') active @endif" href="/boffice/list?bcc=BC007">
                                        <span>예산</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '공동사업') active on @endif" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>공동사업</span>
                                    <i class="material-icons right">add_circle_outline</i>

                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '전문인세무보험') active @endif" href="/boffice/list?bcc=FAQ">
                                        <span>전문인세무보험</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '공동구매') active @endif" href="/boffice/list?bcc=BC008">
                                        <span>공동구매</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == 'PA,회계CFO아웃소싱') active @endif" href="/boffice/list?bcc=BC009">
                                        <span>PA,회계CFO아웃소싱</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '자문요청') active @endif" href="/boffice/list?bcc=BC010">
                                        <span>자문요청</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '게시판') active @endif" href="/boffice/list?bcc=BC011">
                                        <span>게시판</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '업무자료실') active @endif" href="/boffice/list?bcc=BC012">
                                        <span>업무자료실</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '제도개선') active on @endif" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>제도개선</span>
                                    <i class="material-icons right">add_circle_outline</i>

                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '회계감사제도개선') active @endif" href="/boffice/list?bcc=BC013">
                                        <span>회계감사제도개선</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '한공회운영개선') active @endif" href="/boffice/list?bcc=BC014">
                                        <span>한공회운영개선</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '커뮤니티') active on @endif" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>커뮤니티</span>
                                    <i class="material-icons right">add_circle_outline</i>

                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '자유게시판') active @endif" href="/boffice/list?bcc=BC015">
                                        <span>자유게시판</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '질문게시판') active @endif" href="/boffice/list?bcc=BC016">
                                        <span>질문게시판</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '업무협조게시판') active @endif" href="/boffice/list?bcc=BC017">
                                        <span>업무협조게시판</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '감사업무') active @endif" href="/boffice/list?bcc=BC018">
                                        <span>감사업무</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '세무업무') active @endif" href="/boffice/list?bcc=BC019">
                                        <span>세무업무</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '컨설팅업무') active @endif" href="/boffice/list?bcc=BC020">
                                        <span>컨설팅업무</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '기타업무') active @endif" href="/boffice/list?bcc=BC021">
                                        <span>기타업무</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '회계투명성지원센터') active on @endif" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>회계투명성지원센터</span>
                                    <i class="material-icons right">add_circle_outline</i>

                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '자문신청') active @endif" href="/boffice/list?bcc=BC022">
                                        <span>자문신청</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '자문내용게시판') active @endif" href="/boffice/list?bcc=BC023">
                                        <span>자문내용게시판</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '자문보고') active @endif" href="/boffice/list?bcc=BC024">
                                        <span>자문보고</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '품질관리지원') active @endif" href="/boffice/list?bcc=BC025">
                                        <span>품질관리지원</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '품질관리도입') active @endif" href="/boffice/list?bcc=BC026">
                                        <span>품질관리도입</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '품질관리교육') active @endif" href="/boffice/list?bcc=BC027">
                                        <span>품질관리교육</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '품질관리자료실') active @endif" href="/boffice/list?bcc=BC028">
                                        <span>품질관리자료실</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '교육') active on @endif" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>교육</span>
                                    <i class="material-icons right">add_circle_outline</i>

                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '정기연수') active @endif" href="/boffice/list?bcc=BC029">
                                        <span>정기연수</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '웹연수') active @endif" href="/boffice/list?bcc=BC030">
                                        <span>웹연수</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '교육자료실') active @endif" href="/boffice/list?bcc=BC031">
                                        <span>교육자료실</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->b_title01 == '사용자 관리') active on @endif" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>사용자 관리</span>
                                    <i class="material-icons right">add_circle_outline</i>

                                </a>
                                <div class="dep2">
                                    <a class="nav-link @if(request()->b_title02 == '일반회원') active @endif" href="/boffice/FMlist?mem_cate=0">
                                        <span>일반회원</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '회계회원') active @endif" href="/boffice/FMlist?mem_cate=1">
                                        <span>회계회원</span>
                                    </a>
                                    <a class="nav-link @if(request()->b_title02 == '자문회원') active @endif" href="/boffice/FMlist?mem_cate=9">
                                        <span>자문회원</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>

                <!-- End Main Sidebar -->
                <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                    <div class="main-navbar sticky-top bg-white">
                        <!-- Main Navbar -->
                        <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                            <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                            </form>
                            <ul class="navbar-nav border-left flex-row">
                                <li class="nav-item border-right dropdown notifications cust DPIB">
                                    <a class="nav-link nav-link-icon text-center" href="/" role="button" id="" data-toggle="" aria-haspopup="" aria-expanded="">
                                        <div class="nav-link-icon__wrapper">
                                            <i class="material-icons DPIB">home</i><p class="DPIB mb-0" style="line-height: 2.5rem;">홈페이지</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item border-right dropdown notifications cust DPIB">
                                    <a class="nav-link nav-link-icon text-center" href="/boffice/adm_set" role="button" id="" data-toggle="" aria-haspopup="" aria-expanded="">
                                        <div class="nav-link-icon__wrapper">
                                            <i class="material-icons DPIB">vpn_key</i><p class="DPIB mb-0" style="line-height: 2.5rem;">계정수정</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item border-right dropdown notifications cust DPIB">
                                    <a class="nav-link nav-link-icon text-center" href="/boffice/logoutAction" role="button" id="" data-toggle="" aria-haspopup="" aria-expanded="">
                                        <div class="nav-link-icon__wrapper">
                                            <i class="material-icons DPIB">lock_open</i><p class="DPIB mb-0" style="line-height: 2.5rem;">로그아웃</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <nav class="nav">
                                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                                    <i class="material-icons">&#xE5D2;</i>
                                </a>
                            </nav>
                        </nav>
                    </div>
                    <!-- / .main-navbar -->
                    <div class="main-content-container container-fluid px-4">
                        <!-- Page Header -->
                        <div class="page-header row no-gutters py-4">
                            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                                <span class="text-uppercase page-subtitle">{{request()->b_title01}}</span>
                                <h3 class="page-title mt-1">{{request()->b_title02}}</h3>
                            </div>
                        </div>
