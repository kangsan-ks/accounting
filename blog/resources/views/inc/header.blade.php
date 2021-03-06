<body>
    <div id="container">
    <div id="header">
        <div class="inner">
            <div class="header_top flex_box_bet f_v_center">
                <h1 class="logo"><a href="/"><img src="/img/logo.png" alt=""></a></h1>
                <form action="/s_result" method="GET">
                    <label for="search">검색창</label>
                    <input type="text" class="search" name="search_name" placeholder="검색어를 입력해주세요." value="{{request()->search_name}}" required>
                    <input type="submit" class="submit"/>
                </form>
                <ul class="m_ship">
                    @if (session('user_id') == '')
                    <li class="login"><a href="/login">로그인</a></li>
                    <li><a href="/join/join">회원가입</a></li>    
                    @else
                    <li><a href="/FAction/logoutAction">로그아웃</a></li>
                    @endif
                    
                </ul>
            </div>
        </div>
        <div class="main_menu">
            <ul class="main_menu_list inner flex_box_left f_v_center">
                <li><a href="/info/greeting">협의회소개</a></li>
                <li><a href="/business/insurance?bcc=FAQ">공동사업</a></li>
                <li><a href="/system/audit_system/list?bcc=BC013">제도개선</a></li>
                <li><a href="/commu/c_board/board01/list?bcc=BC015">커뮤니티</a></li>
                <li><a href="/support/b_infro">회계투명성지원센터</a></li>
                <li><a href="/edu/regular/list?bcc=BC029">교육</a></li>
            </ul>
            {{-- 햄버거 --}}
        </div>
    </div>