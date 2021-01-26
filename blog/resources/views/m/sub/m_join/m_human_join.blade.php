@include('m/inc/head_m')
@include('m/inc/respon_menu')
<div class="m_b_join human">
    <h4 class="h_back">회계법인 회원 전용 회원가입</h4>       
    <form action="" method="get">
        <ul>
            <li>
                <div class="inp_box inner">
                    <label for="b_name">소속회계법인</label>
                    <input type="text" class="b_name">
                </div>                
            </li>

            <li>
                <div class="inp_box inner">
                    <label for="b_number">회계사등록번호</label>
                    <input type="text" class="b_number">
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
            <li>
                <div class="inp_box inner">
                    <label for="email">회원등급</label>
                    {{-- <input type="text" class="email"> --}}
                    <select name="" id="">
                        <option value="" disabled selected >회계사 회원 등급</option>
                        <option value="">법인정회원</option>
                        <option value="">준회원</option>
                        <option value="">예비회원</option>
                    </select>
                </div>
            </li>          
        </ul>
        <div class="agr_box inner">
            <input type="checkbox" class="agreement" name="">
            <span>개인정보 활용에 동의합니다</span>
        </div>
        
        <div class="submit_box flex_box_bet">
            <a href=""><input type="submit" class="submit h_back" value="회원가입"/></a>
            <a href=""><input type="submit" class="reset" value="취소"/></a>
        </div>            
    </form>
</div> 
@include('m/inc/footer_m')