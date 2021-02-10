<div id="sub">
    <div class="sub_title">
        <h2>
            @if(request()->segment(1) == 'm_info')
            협의회소개
            @elseif(request()->segment(1) == 'm_business')
            공동사업
            @elseif(request()->segment(1) == 'board_write')
            공동사업
            @elseif(request()->segment(1) == 'm_system')
            제도개선
            @elseif(request()->segment(1) == 'm_commu')
            커뮤니티
            @elseif(request()->segment(1) == 'm_support')
            회계투명성 지원센터
            @elseif(request()->segment(2) == 'join')
            회원가입
            @elseif(request()->segment(1) == 'm_edu')
            교육
            @else
            검색
            @endif
        </h2>
        <p>서브텍스트</p>
    </div>
    @if(request()->segment(1) != 'm_join' && request()->segment(2) != 'join')
    <div class="m_sub_menu">
        <div class="flex_box_bet f_v_center">
            <h4>
                @if(request()->segment(2) == 'm_greeting')
                <span>회장인사말</span>
                @elseif(request()->segment(2) == 'm_chart')
                <span>조직도</span>
                @elseif(request()->segment(2) == 'm_account')
                <span>회계법인</span>
                @elseif(request()->segment(2) == 'm_fee')
                <span>회계법인</span>
                @elseif(request()->segment(1) == 'support')
                <span>회계투명성지원센터</span>
                @elseif(request()->segment(2) == 'm_report')
                <span>총회보고</span>
                <ul>
                    <li><a href="/m_info/m_report/m_report01/list">사업보고</a></li>
                    <li><a href="/m_info/m_report/m_report02/list">결산보고</a></li>
                    <li><a href="/m_info/m_report/m_report03/list">사업계획</a></li>
                    <li><a href="/m_info/m_report/m_report04/list">예산</a></li>
                    <li><a href="/m_info/m_report/m_report05">회칙</a></li>
                </ul>
                @elseif(request()->segment(2) == 'm_insurance')
                <span>전문인세무보험</span>
                @elseif(request()->segment(2) == 'm_buy')
                <span>공동구매</span>
                @elseif(request()->segment(2) == 'm_pa')
                <span>PA,회계CFO아웃소싱</span>
                @elseif(request()->segment(2) == 'm_advice')
                <span>회계법인 자문 요청</span>
                @elseif(request()->segment(2) == 'm_advice01')
                <span>회계법인 자문 요청</span>
                @elseif(request()->segment(2) == 'm_advice02')
                <span>회계법인 자문 요청</span>
                @elseif(request()->segment(2) == 'm_board')
                <span>게시판</span>
                @elseif(request()->segment(2) == 'c_board')
                <span>게시판</span>
                <ul>
                    <li><a href="/m_commu/c_board/m_board01/list">자유게시판</a></li>
                    <li><a href="/m_commu/c_board/m_board02/list">질문게시판</a></li>
                    <li><a href="/m_commu/c_board/m_board03/list">업무협조게시판</a></li>
                </ul>
                @elseif(request()->segment(2) == 'c_data_room')
                <span>자료실</span>
                <ul>
                    <li><a href="/m_commu/c_data_room/m_room01/list">감사업무</a></li>
                    <li><a href="/m_commu/c_data_room/m_room02/list">세무업무</a></li>
                    <li><a href="/m_commu/c_data_room/m_room03/list">컨설팅업무</a></li>
                    <li><a href="/m_commu/c_data_room/m_room04/list">기타업무</a></li>
                </ul>
                @elseif(request()->segment(2) == 'm_data_room')
                <span>업무자료실</span>
                @elseif(request()->segment(2) == 'm_audit_system')
                <span>회계감사제도개선</span>
                @elseif(request()->segment(2) == 'm_operation')
                <span>한공회운영개선</span>
                @elseif(request()->segment(2) == 'm_b_info')
                <span>사업소개</span>
                @elseif(request()->segment(2) == 'm_electron')
                <span>전자조서시스템개발</span>
                @elseif(request()->segment(2) == 'm_q_edu')
                <span>품질관리교육</span>
                <ul>
                    <li><a href="/m_support/m_q_edu/m_ed02/list">품질관리ERP지원신청</a></li>
                    <li><a href="/m_support/m_q_edu/m_ed03/list">품질관리ERP도입신청</a></li>
                    <li><a href="/m_support/m_q_edu/m_ed04/list">품질관리ERP교육신청</a></li>
                </ul>
                @elseif(request()->segment(2) == 'm_q_support')
                <span>품질관리지원</span>
                <ul>
                    <li><a href="/m_support/m_q_support/m_sp02/list">자문신청</a></li>
                    <li><a href="/m_support/m_q_support/m_sp03/list">자문내용게시판</a></li>
                    <li><a href="/m_support/m_q_support/m_sp04/list">자문보고</a></li>
                </ul>
                @elseif(request()->segment(2) == 'm_regular')
                <span>정기연수</span>
                @elseif(request()->segment(2) == 'm_web')
                <span>웹연수</span>
                @elseif(request()->segment(2) == 'm_edus')
                <span>교육자료실</span>
                @else
                <span>검색</span>
                @endif
            </h4>
            <img src="/img/m_down_btn.png" alt="">
        </div>
    </div>
    @endif
</div>