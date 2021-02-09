<div id="sub">
    <div class="sub_title {{request()->segment(1)}}">
        
        <h2>
            @if(request()->segment(1) == 'info')
            협의회소개
            @elseif(request()->segment(1) == 'business')
            공동사업
            @elseif(request()->segment(1) == 'system')
            제도개선
            @elseif(request()->segment(1) == 'commu')
            커뮤니티
            @elseif(request()->segment(1) == 'support')
            회계투명성지원센터
            @else
            교육
            @endif
        </h2>
        <p>서브텍스트서브텍스트서브텍스트서브텍스트서브텍스트</p>
    </div>
    <div class="inner flex_box_bet flex_box_top">
        <div class="sub_menu">
            <h4>
                @if(request()->segment(1) == 'info')
                협의회소개
                @elseif(request()->segment(1) == 'business')
                공동사업
                @elseif(request()->segment(1) == 'system')
                제도개선
                @elseif(request()->segment(1) == 'commu')
                커뮤니티
                @elseif(request()->segment(1) == 'support')
                회계투명성지원센터
                @else
                교육
                @endif
            </h4>
            @if(request()->segment(1) == 'info')
            <ul class="sub_menu_list">
                <li class=" @if(request()->segment(2) == 'greeting') on @endif ">
                    <a href="/info/greeting">회장인사말</a>
                </li>
                <li class=" @if(request()->segment(2) == 'chart') on @endif ">
                    <a href="/info/chart">조직도</a>
                </li>
                <li class=" @if(request()->segment(2) == 'm_accounting') on @endif ">
                    <a href="#" class="dep1_btn">회원회계법인<img src="/img/down_btn.png" alt="down_btn"></a>                    
                    <ul class="sub_sub_menu" >
                        <li class=" @if(request()->segment(3) == 'account') active @endif "><a href="/info/m_accounting/account">회계법인현황</a></li>
                        <li class=" @if(request()->segment(3) == 'fee') active @endif "><a href="/info/m_accounting/fee">회비납부현황</a></li> 
                    </ul>
                </li>
                <li class=" @if(request()->segment(2) == 'report') on @endif ">
                    <a href="#" class="dep1_btn">총회보고<img src="/img/down_btn.png" alt="down_btn"></a>                   
                    <ul class="sub_sub_menu">
                        <li class=" @if(request()->segment(3) == 'report01') active @endif "><a href="/info/report/report01">사업보고</a></li>
                        <li class=" @if(request()->segment(3) == 'report02') active @endif "><a href="/info/report/report02">결산보고</a></li>
                        <li class=" @if(request()->segment(3) == 'report03') active @endif "><a href="/info/report/report03">사업계획</a></li>
                        <li class=" @if(request()->segment(3) == 'report04') active @endif "><a href="/info/report/report04">예산</a></li>
                        <li class=" @if(request()->segment(3) == 'report05') active @endif "><a href="/info/report/report05">회칙</a></li>
                    </ul>                   
                </li>
            </ul>
            @elseif(request()->segment(1) == 'business')
            <ul class="sub_menu_list">
                <li class="@if(request()->segment(2) == 'insurance') on @endif "><a href="/business/insurance">전문인세무보험</a></li>
                <li class="@if(request()->segment(2) == 'buy') on @endif "><a href="/business/buy">공동구매</a></li>
                <li class="@if(request()->segment(2) == 'pa') on @endif "><a href="/business/pa">PA,회계CFO아웃소싱</a></li>
                <li class="@if(request()->segment(2) == 'advice') on @endif "><a href="/business/advice">자문요청</a></li>
                <li class="@if(request()->segment(2) == 'board') on @endif "><a href="/business/board">게시판</a></li>
                <li class="@if(request()->segment(2) == 'data_room') on @endif "><a href="/business/data_room">업무자료실</a></li>
            </ul>
            @elseif(request()->segment(1) == 'system')
            <ul class="sub_menu_list">
                <li class="@if(request()->segment(2) == 'audit_system') on @endif "><a href="/system/audit_system">회계감사제도개선</a></li>
                <li class="@if(request()->segment(2) == 'operation') on @endif "><a href="/system/operation">한공회운영개선</a></li>
            </ul>
            @elseif(request()->segment(1) == 'commu')
            <ul class="sub_menu_list">
                <li class=" @if(request()->segment(2) == 'c_board') on @endif ">
                    <a href="#" class="dep1_btn">게시판<img src="/img/down_btn.png" alt="down_btn"></a>                    
                    <ul class="sub_sub_menu">
                        <li class=" @if(request()->segment(3) == 'board01') active @endif "><a href="/commu/c_board/board01">자유게시판</a></li>
                        <li class=" @if(request()->segment(3) == 'board02') active @endif "><a href="/commu/c_board/board02">질문게시판</a></li>
                        <li class=" @if(request()->segment(3) == 'board03') active @endif "><a href="/commu/c_board/board03">업무협조게시판</a></li>
                    </ul>
                </li>
                <li class=" @if(request()->segment(2) == 'c_data_room') on @endif ">
                    <a href="#" class="dep1_btn">자료실<img src="/img/down_btn.png" alt="down_btn"></a>                    
                    <ul class="sub_sub_menu">
                        <li class=" @if(request()->segment(3) == 'room01') active @endif "><a href="/commu/c_data_room/room01">감사업무</a></li>
                        <li class=" @if(request()->segment(3) == 'room02') active @endif "><a href="/commu/c_data_room/room02">세무업무</a></li>
                        <li class=" @if(request()->segment(3) == 'room03') active @endif "><a href="/commu/c_data_room/room03">컨설팅업무</a></li>
                        <li class=" @if(request()->segment(3) == 'room04') active @endif "><a href="/commu/c_data_room/room04">기타업무</a></li>
                    </ul>
                </li>
            </ul>
            @elseif(request()->segment(1) == 'support')
            <ul class="sub_menu_list">
                <li class="@if(request()->segment(2) == 'b_infro') on @endif "><a href="/support/b_infro">사업소개</a></li>
                <li class="@if(request()->segment(2) == 'q_support') on @endif ">
                    <a href="#" class="dep1_btn">품질관리지원<img src="/img/down_btn.png" alt="down_btn"></a>                   
                    <ul class="sub_sub_menu">
                        {{-- <li class=" @if(request()->segment(3) == 'sp01') active @endif "><a href="/support/q_support/sp01">품질관리실자문</a></li> --}}
                        <li class=" @if(request()->segment(3) == 'sp02') active @endif "><a href="/support/q_support/sp02">자문신청</a></li>
                        <li class=" @if(request()->segment(3) == 'sp03') active @endif "><a href="/support/q_support/sp03">자문내용게시판</a></li>
                        <li class=" @if(request()->segment(3) == 'sp04') active @endif "><a href="/support/q_support/sp04">자문보고</a></li>
                    </ul>
                </li>
                <li class="@if(request()->segment(2) == 'q_edu') on @endif ">
                    <a href="#" class="dep1_btn">품질관리교육<img src="/img/down_btn.png" alt="down_btn"></a>                    
                    <ul class="sub_sub_menu">
                        {{-- <li class=" @if(request()->segment(3) == 'ed01') active @endif "><a href="/support/q_edu/ed01">품질관리ERP지원</a></li> --}}
                        <li class=" @if(request()->segment(3) == 'ed02') active @endif "><a href="/support/q_edu/ed02">품질관리ERP지원신청</a></li>
                        <li class=" @if(request()->segment(3) == 'ed03') active @endif "><a href="/support/q_edu/ed03">품질관리ERP도입신청</a></li>
                        <li class=" @if(request()->segment(3) == 'ed04') active @endif "><a href="/support/q_edu/ed04">품질관리ERP교육신청</a></li>
                    </ul>
                </li>
                <li class="@if(request()->segment(2) == 'electron') on @endif "><a href="/support/electron">전자조서시스템개발</a></li>
                <li class="@if(request()->segment(2) == 'care_room') on @endif "><a href="/support/care_room">품질관리자료실</a></li>
            </ul>
            @else
            <ul class="sub_menu_list">
                <li class="@if(request()->segment(2) == 'regular') on @endif "><a href="/edu/regular">정기연수</a></li>
                <li class="@if(request()->segment(2) == 'web') on @endif "><a href="/edu/web">웹연수</a></li>
                <li class="@if(request()->segment(2) == 'edus') on @endif "><a href="/edu/edus">교육자료실</a></li>
            </ul>
            @endif
        </div>
        <div class="sub_contents_box">
            <div class="sub_nav_box flex_box_bet flex_box_bottom">
                <h3>
                    @if(request()->segment(2) == 'greeting')
                    회장인사말
                    @elseif(request()->segment(2) == 'chart')
                    조직도
                    @elseif(request()->segment(2) == 'm_accounting')
                    회원회계법인
                    @elseif(request()->segment(3) == 'account')
                    회원법인현황
                    @elseif(request()->segment(3) == 'fee')
                    회원납부현황
                    @elseif(request()->segment(2) == 'report')
                    총회보고
                    @elseif(request()->segment(2) == 'insurance')
                    전문인세무보험
                    @elseif(request()->segment(2) == 'buy')
                    공동구매
                    @elseif(request()->segment(2) == 'pa')
                    PA,회계CFO아웃소싱
                    @elseif(request()->segment(2) == 'advice')
                    자문요청
                    @elseif(request()->segment(2) == 'board')
                    게시판
                    @elseif(request()->segment(2) == 'data_room')
                    업무자료실
                    @elseif(request()->segment(2) == 'audit_system')
                    회계감사제도개선
                    @elseif(request()->segment(2) == 'operation')
                    환공회운영개선
                    @elseif(request()->segment(2) == 'c_board')
                    게시판
                    @elseif(request()->segment(2) == 'c_data_room')
                    자료실
                    @elseif(request()->segment(2) == 'b_infro')
                    사업소개
                    @elseif(request()->segment(2) == 'q_support')
                    품질관리지원
                    @elseif(request()->segment(2) == 'q_edu')
                    품질관리교육
                    @elseif(request()->segment(2) == 'electron')
                    전자조서시스템개발
                    @elseif(request()->segment(2) == 'care_room')
                    품질관리자료실
                    @elseif(request()->segment(2) == 'regular ')
                    정기연수
                    @elseif(request()->segment(2) == 'web')
                    웹연수
                    @else
                    교육자료실
                    @endif
                </h3>
                <ul class="flex_box_left">
                    <li>
                        Home
                        <img src="/img/next.png" alt="next_img">
                    </li>                    
                    <li>
                        @if(request()->segment(1) == 'info')
                        협의회소개
                        @elseif(request()->segment(1) == 'business')
                        공동사업
                        @elseif(request()->segment(1) == 'system')
                        제도개선
                        @elseif(request()->segment(1) == 'commu')
                        커뮤니티
                        @elseif(request()->segment(1) == 'support')
                        회계투명성지원센터
                        @else
                        교육
                        @endif
                        <img src="/img/next.png" alt="next_img">
                    </li>
                    <li>
                        @if(request()->segment(2) == 'greeting')
                        회장인사말
                        @elseif(request()->segment(2) == 'chart')
                        조직도
                        @elseif(request()->segment(2) == 'm_accounting')
                        회원회계법인
                        @elseif(request()->segment(2) == 'report')
                        총회보고
                        @elseif(request()->segment(2) == 'insurance')
                        전문인세무보험
                        @elseif(request()->segment(2) == 'buy')
                        공동구매
                        @elseif(request()->segment(2) == 'pa')
                        PA,회계CFO아웃소싱
                        @elseif(request()->segment(2) == 'advice')
                        자문요청
                        @elseif(request()->segment(2) == 'board')
                        게시판
                        @elseif(request()->segment(2) == 'data_room')
                        업무자료실
                        @elseif(request()->segment(2) == 'audit_system')
                        회계감사제도개선
                        @elseif(request()->segment(2) == 'operation')
                        환공회운영개선
                        @elseif(request()->segment(2) == 'c_board')
                        게시판
                        @elseif(request()->segment(2) == 'c_data_room')
                        자료실
                        @elseif(request()->segment(2) == 'b_infro')
                        사업소개
                        @elseif(request()->segment(2) == 'q_support')
                        품질관리지원
                        @elseif(request()->segment(2) == 'q_edu')
                        품질관리교육
                        @elseif(request()->segment(2) == 'electron')
                        전자조서시스템개발
                        @elseif(request()->segment(2) == 'care_room')
                        품질관리자료실
                        @elseif(request()->segment(2) == 'regular ')
                        정기연수
                        @elseif(request()->segment(2) == 'web')
                        웹연수 
                        @else
                        교육자료실
                        @endif
                        {{-- @if(request()->segment(3) == 'account')
                        <img src="/img/next.png" alt="next_img">
                        @else
                        @endif --}}
                    </li>
                    <li>
                        @if(request()->segment(3) == 'account')
                        <img src="/img/next.png" alt="next_img">
                        회계법인현황
                        @elseif(request()->segment(3) == 'fee')
                        <img src="/img/next.png" alt="next_img">
                        회비납부현황
                        @elseif(request()->segment(3) == 'report01')
                        <img src="/img/next.png" alt="next_img">
                        사업보고
                        @elseif(request()->segment(3) == 'report02')
                        <img src="/img/next.png" alt="next_img">
                        결산보고
                        @elseif(request()->segment(3) == 'report03')
                        <img src="/img/next.png" alt="next_img">
                        사업계획
                        @elseif(request()->segment(3) == 'report04')
                        <img src="/img/next.png" alt="next_img">
                        예산
                        @elseif(request()->segment(3) == 'report05')
                        <img src="/img/next.png" alt="next_img">
                        회칙
                        @elseif(request()->segment(3) == 'board01')
                        <img src="/img/next.png" alt="next_img">
                        자유게시판
                        @elseif(request()->segment(3) == 'board02')
                        <img src="/img/next.png" alt="next_img">
                        질문게시판
                        @elseif(request()->segment(3) == 'board03')
                        <img src="/img/next.png" alt="next_img">
                        업무협조게시판
                        @elseif(request()->segment(3) == 'room01')
                        <img src="/img/next.png" alt="next_img">
                        감사업무
                        @elseif(request()->segment(3) == 'room02')
                        <img src="/img/next.png" alt="next_img">
                        세무업무
                        @elseif(request()->segment(3) == 'room03')
                        <img src="/img/next.png" alt="next_img">
                        컨설팅업무
                        @elseif(request()->segment(3) == 'sp01')
                        <img src="/img/next.png" alt="next_img">
                        품질관리자문
                        @elseif(request()->segment(3) == 'sp02')
                        <img src="/img/next.png" alt="next_img">
                        자문신청
                        @elseif(request()->segment(3) == 'sp03')
                        <img src="/img/next.png" alt="next_img">
                        자문내용게시판
                        @elseif(request()->segment(3) == 'sp04')
                        <img src="/img/next.png" alt="next_img">
                        자문보고
                        @elseif(request()->segment(3) == 'ed01')
                        <img src="/img/next.png" alt="next_img">
                        품질관리ERP지원
                        @elseif(request()->segment(3) == 'ed02')
                        <img src="/img/next.png" alt="next_img">
                        품질관리ERP지원신청
                        @elseif(request()->segment(3) == 'ed03')
                        <img src="/img/next.png" alt="next_img">
                        품질관리ERP도입신청
                        @elseif(request()->segment(3) == 'ed04')
                        <img src="/img/next.png" alt="next_img">
                        품질관리ERP교육신청
                        @endif
                    </li>
                </ul>
            </div>