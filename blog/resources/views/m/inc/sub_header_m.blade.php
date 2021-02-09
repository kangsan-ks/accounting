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
            @else
            교육
            @endif
        </h2>
        <p>서브텍스트</p>
    </div>
    @if(request()->segment(1) != 'm_join' && request()->segment(2) != 'join')
    <div class="sub_menu">
        <div class="inner flex_box_bet f_v_center">
            <h4>
                @if(request()->segment(2) == 'm_greeting')
                회장인사말
                @elseif(request()->segment(2) == 'm_chart')
                조직도
                @elseif(request()->segment(2) == 'm_account')
                회계법인
                @elseif(request()->segment(2) == 'm_fee')
                회계법인
                @elseif(request()->segment(1) == 'support')
                회계투명성지원센터
                @elseif(request()->segment(2) == 'm_report')
                총회보고
                @elseif(request()->segment(2) == 'm_insurance')
                전문인세무보험
                @elseif(request()->segment(2) == 'm_buy')
                공동구매
                @elseif(request()->segment(2) == 'm_pa')
                PA,회계CFO아웃소싱
                @elseif(request()->segment(2) == 'm_advice')
                회계법인 자문 요청
                @elseif(request()->segment(2) == 'm_advice01')
                회계법인 자문 요청
                @elseif(request()->segment(2) == 'm_advice02')
                회계법인 자문 요청
                @elseif(request()->segment(2) == 'm_board')
                게시판
                @elseif(request()->segment(2) == 'm_data_room')
                업무자료실
                @elseif(request()->segment(2) == 'm_b_info')
                사업소개
                @elseif(request()->segment(2) == 'm_electron')
                전자조서시스템개발
                @elseif(request()->segment(2) == 'm_q_edu')
                품질관리교육
                @elseif(request()->segment(2) == 'm_q_support')
                품질관리지원
                @elseif(request()->segment(2) == 'edu')
                교육
                @else
                
                @endif
            </h4>
            <img src="/img/m_down_btn.png" alt="">
        </div>
    </div>
    @endif
</div>