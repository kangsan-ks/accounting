@include('m/inc/head_m')
@include('m/inc/respon_menu')
@include('m/inc/sub_header_m')
    <div class="sub_content m_join inner">    
        <div class="join">
            <ul>
                <li>
                    <h4 class="b_back">기업소속 회원</h4>       
                    <img src="/img/join_b.png" alt="기업소속회원이모티콘">
                    <p>기업소속 회원 전용 회원가입 입니다.</p>
                    <a href="/m_join/m_business_join" class="b_back">회원가입</a>
                </li>
                <li>
                    <h4 class="h_back">회계사 회원</h4>
                    <img src="/img/join_h.png" alt="회계사회원이모티콘">
                    <p>회계사 회원 전용 회원가입 입니다.</p>
                    <a href="/m_join/m_human_join" class="h_back">회원가입</a>
                </li>
            </ul>
        </div>
    </div>   
@include('m/inc/footer_m')