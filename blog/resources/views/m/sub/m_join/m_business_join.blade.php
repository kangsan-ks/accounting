@include('m/inc/head_m')
@include('m/inc/respon_menu')
<div class="m_b_join business">
    <h4 class="b_back">일반기업 회원 전용 회원가입</h4>       
    <form action="" method="get">
        <ul>
            <li>
                <div class="inp_box inner">
                    <label for="b_name">회사명</label>
                    <input type="text" class="b_name">
                </div>                
            </li>

            <li>
                <div class="inp_box inner">
                    <label for="b_number">회사 전화번호</label>
                    <input type="text" class="b_number" placeholder="(-제외하고 입력해주세요)">
                </div>
            </li>
            <li> 
                <div class="inp_box inner">
                    <label for="b_address">회사 주소</label>
                    <input type="text" class="b_address" >
                    <input type="text" class="b_address line_2" placeholder="(상세주소)">
                </div>
            </li>

            <li>
                <div class="inp_box inner">
                <label for="name">이름</label>
                
                    <input type="text" class="name">
                </div>
            </li>
            
            <li>
                <div class="inp_box inner">
                    <label for="rank">현재 직급</label>                
                    <input type="text" class="rank">
                </div>
            </li>

            <li>
                <div class="inp_box inner">
                    <label for="number">연락처</label>                
                    <input type="text" class="number" placeholder="(-제외하고 입력해주세요)">
                </div>
            </li>

            <li>
                <div class="inp_box inner">
                    <label for="email">이메일</label>                
                    <input type="text" class="email">
                </div>
            </li>
            <li>
                <div class="inp_box inner">
                    <label for="address">주소</label>                
                    <input type="text" class="address" >
                    <input type="text" class="address line_2" placeholder="(상세주소)">
                </div>
            </li>      
            
        </ul>
        <div class="agr_box inner">
            <input type="checkbox" class="agreement" name="">
            <span>개인정보 활용에 동의합니다</span>
        </div>
        
        <div class="submit_box flex_box_bet">
            <a href=""><input type="submit" class="submit b_back" value="회원가입"/></a>
            <a href=""><input type="submit" class="reset" value="취소"/></a>
        </div>            
    </form>
</div> 
@include('m/inc/footer_m')