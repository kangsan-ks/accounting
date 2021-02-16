@include('inc/head')
<div id="sub">
    <div class="sub_login sub_title {{request()->segment(1)}}">
        <h2 class="sub_login_title">로그인</h2>
    </div>
    <div class="login_box inner">
        <div class="login_content">
            <h3>login</h3>
            <form action="/FAction/loginAction" method="post" class="login_form">
                @csrf
                <p class="field">
                    <label for="login">id</label>
                    <img src="/img/login.png" alt="login">
                    <input type="text" class="login" name="m_id" placeholder="ID" required>
                </p>
    
                <p class="field">
                    <label for="password">password</label>
                    <img src="/img/password.png" alt="password">
                    <input type="password" class="login" name="m_passwd" placeholder="Password" required>
                </p>
                
                <label for="auto">자동로그인</label>
                <input type="checkbox" class="auto" name="auto_login" value="1">
                <span>자동로그인</span>
    
                <p class="field">
                    <input type="submit" class="submit" value="LOGIN"/>
                </p>
            </form>
        </div>
        <div class="login_another">
            <ul class="flex_box_bet">
                <li><a href="">아이디&middot;비밀번호찾기</a></li>
                <li><a href="/join/join">회원가입</a></li>
            </ul>
        </div>
    </div>
</div>
@include('inc/footer')