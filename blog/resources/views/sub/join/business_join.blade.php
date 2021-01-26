@include('inc/head')
<div id="sub">
    <div class="sub_join sub_title {{request()->segment(1)}}">
        <h2 class="sub_join_title">회원가입</h2>
    </div>
    <div class="join business inner">
        <h1 class="logo"><a href="/"><img src="/img/logo.png" alt=""></a></h1>
        <h4 class="b_back">일반기업 회원 전용 회원가입</h4>       
        <form action="" method="get">
            <ul>
                <li>
                    <label for="b_name">회사명</label>
                    <div class="inp_box">
                        <input type="text" class="b_name">
                    </div>                
                </li>

                <li>
                    <label for="b_number">회사 전화번호</label>
                    <div class="inp_box">
                        <input type="text" class="b_number" placeholder="(-제외하고 입력해주세요)">
                    </div>
                </li>
                <li class="line_2">
                    <label for="b_address">회사 주소</label>
                    <div class="inp_box">
                        <input type="text" class="b_address" >
                        <input type="text" class="b_address" placeholder="(상세주소)">
                    </div>
                </li>

                <li>
                    <label for="name">이름</label>
                    <div class="inp_box">
                        <input type="text" class="name">
                    </div>
                </li>
                
                <li>
                    <label for="rank">현재 직급</label>
                    <div class="inp_box">
                        <input type="text" class="rank">
                    </div>
                </li>

                <li>
                    <label for="number">연락처</label>
                    <div class="inp_box">
                        <input type="text" class="number" placeholder="(-제외하고 입력해주세요)">
                    </div>
                </li>

                <li>
                    <label for="email">이메일</label>
                    <div class="inp_box">
                        <input type="text" class="email">
                    </div>
                </li>
                <li class="line_2">
                    <label for="address">주소</label>
                    <div class="inp_box">
                        <input type="text" class="address" >
                        <input type="text" class="address" placeholder="(상세주소)">
                    </div>
                </li>      
            </ul>
            <div class="agr_box">
                <input type="checkbox" class="agreement" name="">
                <span>개인정보 활용에 동의합니다</span>
            </div>
            
            <div class="submit_box flex_box_cen">
                <a href=""><input type="submit" class="submit b_back" value="회원가입"/></a>
                <a href=""><input type="submit" class="reset" value="취소"/></a>
            </div>            
        </form>
    </div>
</div>
@include('inc/footer')