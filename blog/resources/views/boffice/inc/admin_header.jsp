<%@ page language="java" contentType="text/html; charset=utf-8" pageEncoding="utf-8"%>
<%@ include file="../../common/taglibs.jsp" %>
<!DOCTYPE html>
<html class="no-js h-100" lang="ko">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>CGV - 팬덤 | ADMIN</title>
        <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components." />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
        <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="/main/resources/styles/shards-dashboards.1.1.0.min.css" />
        <link rel="stylesheet" href="/main/resources/styles/extras.1.1.0.min.css" />
        <link rel="stylesheet" href="/main/resources/styles/index.css" />
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
        <script src="/main/resources/scripts/extras.1.1.0.min.js"></script>
        <script src="/main/resources/scripts/shards-dashboards.1.1.0.min.js"></script>
        <script src="/main/resources/scripts/app/app-blog-overview.1.1.0.js"></script>
        <script src="/main/resources/scripts/index.js"></script>
    </head>
    <body class="h-100">
        <div class="container-fluid">
            <div class="row">
                <!-- Main Sidebar -->
                <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                    <div class="main-navbar">
                        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                                <img src="/main/resources/images/common/logo_color.png" class="dash_logo">
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
                                <a class="nav-link active" href="index.jsp">
                                    <i class="material-icons">home</i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#none">
                                    <i class="material-icons">shopping_cart</i>
                                    <span>상품관리</span>
                                    <i class="material-icons right">add_circle_outline</i>
                                    
                                </a>
                                <div class="dep2">
                                    <a class="nav-link" href="list.jsp">
                                        <span>상품관리</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>재고관리</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>결재관리</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#none">
                                    <i class="material-icons">edit</i>
                                    <span>게시글관리</span>
                                    <i class="material-icons right">add_circle_outline</i>
                                    
                                </a>
                                <div class="dep2">
                                    <a class="nav-link" href="/main/cgv_admin/now_showing_list">
                                        <span>NOW SUPPORTING</span>
                                    </a>
                                    <!-- 
                                    <a class="nav-link" href="list.jsp">
                                        <span>현장스케치</span>
                                    </a>
                                     -->
                                    <a class="nav-link" href="list.jsp">
                                        <span>팬덤스케치</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>뉴스</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#none">
                                    <i class="material-icons">comment_bank</i>
                                    <span>아카이브관리</span>
                                    <i class="material-icons right">add_circle_outline</i>
                                    
                                </a>
                                <div class="dep2">
                                    <a class="nav-link" href="list.jsp">
                                        <span>커뮤니티관리</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>투표관리</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>이벤트관리</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#none">
                                    <i class="material-icons">request_page</i>
                                    <span>광고관리</span>
                                    <i class="material-icons right">add_circle_outline</i>
                                    
                                </a>
                                <div class="dep2">
                                    <a class="nav-link" href="list.jsp">
                                        <span>배너 광고 관리</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>포인트 교환소</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>게시물 관리</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#none">
                                    <i class="material-icons">event_note</i>
                                    <span>회원관리</span>
                                    <i class="material-icons right">add_circle_outline</i>
                                    
                                </a>
                                <div class="dep2">
                                    <a class="nav-link" href="/main/cgv_admin/member_list">
                                        <span>회원검색</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>기타</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#none">
                                    <i class="material-icons">insert_chart</i>
                                    <span>통계현황</span>
                                    <i class="material-icons right">add_circle_outline</i>
                                    
                                </a>
                                <div class="dep2">
                                    <a class="nav-link" href="statement.jsp">
                                        <span>상품통계</span>
                                    </a>
                                    <a class="nav-link" href="statement.jsp">
                                        <span>매출통계</span>
                                    </a>
                                    <a class="nav-link" href="statement.jsp">
                                        <span>이벤트통계</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#none">
                                    <i class="material-icons">fact_check</i>
                                    <span>기타</span>
                                    <i class="material-icons right">add_circle_outline</i>
                                </a>
                                <div class="dep2">
                                    <a class="nav-link" href="list.jsp">
                                        <span>관리자 메모</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>계정관리</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>약관 & 개인정보 처리방침</span>
                                    </a>
                                    <a class="nav-link" href="list.jsp">
                                        <span>공지사항</span>
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
                                    <a class="nav-link nav-link-icon text-center" href="/" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="nav-link-icon__wrapper">
                                            <i class="material-icons DPIB">home</i><p class="DPIB mb-0" style="line-height: 2.5rem;">홈페이지</p>
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
                                <span class="text-uppercase page-subtitle">메인</span>
                                <h3 class="page-title">Dashboard</h3>
                            </div>
                        </div>
                        