@include('inc/head')
<div id="sub">
    <div class="sub_join sub_title {{request()->segment(1)}}">
        <h2 class="sub_join_title">회원가입</h2>
    </div>
    <div class="join inner">
        <h1 class="logo"><a href="/"><img src="/img/logo.png" alt=""></a></h1>
        <ul class="flex_box_bet">
            <li>
                <h4 class="b_back">기업소속 회원</h4>       
                <img src="/img/join_b.png" alt="기업소속회원이모티콘">
                <p>기업소속 회원 전용 회원가입 입니다.</p>
                <a href="/join/business_join" class="b_back">회원가입</a>
            </li>
            <li>
                <h4 class="h_back">회계사 회원</h4>
                <img src="/img/join_h.png" alt="회계사회원이모티콘">
                <p>회계사 회원 전용 회원가입 입니다.</p>
                <a href="/join/human_join" class="h_back">회원가입</a>
            </li>
        </ul>
    </div>
</div>
@include('inc/footer')