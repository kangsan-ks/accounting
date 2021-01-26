@include('m/inc/head_m')
<div class="login_box">
    <div class="login_content">
        <h3>login</h3>
        <form action="" method="post" class="login_form">
            <p class="field on">
                <label for="login">id</label>
                <img src="/img/m_login_on.png" alt="login">
                <input type="text" class="login" name="" placeholder="ID">
            </p>

            <p class="field">
                <label for="password">password</label>
                <img src="/img/m_password.png" alt="password">
                <input type="text" class="login" name="" placeholder="Password">
            </p>
            
            <label for="auto">자동로그인</label>
            <input type="checkbox" class="auto" name="">
            <span>자동로그인</span>

            <p class="field">
                <input type="submit" class="submit" value="LOGIN"/>
            </p>
        </form>
        <div class="login_another">
            <ul class="flex_box_bet">
                <li><a href="">아이디&middot;비밀번호찾기</a></li>
                <li><a href="/join/join">회원가입</a></li>
            </ul>
        </div>
    </div>
    
</div>