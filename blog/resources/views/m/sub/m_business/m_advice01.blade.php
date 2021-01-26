@include('m/inc/head_m')
@include('m/inc/respon_menu')
@include('m/inc/sub_header_m')
    <div class="sub_content m_advice_01">    
        <div class="popup advice01_popup flex_box_cen">
            <form action="">
                <h4>회계법인회원 자문요청</h4>
                <ul>
                    <li class="flex_box_left">
                        <label for="">일자</label>
                        <input type="text" placeholder="0000-00-00">
                    </li>
                    <li class="flex_box_left">
                        <label for="">자문요청자</label>
                        <input type="text" placeholder="홍길동">
                    </li>
                    <li class="popup_text">
                        <label for="">자문요청 요지</label>
                        <textarea name="" id="" cols="30" rows="7" placeholder="내용을 입력해주세요"></textarea>
                    </li>
                    <li class="flex_box_bet">
                        <div class="flex_box_left">
                            <label for="">첨부파일</label>
                            <input type="text" placeholder="123.jpg">
                        </div>                                
                        <span>삭제</span>
                    </li>
                </ul>
                <div class="check_or_cancel flex_box_bet f_v_center">
                    <a href="" class="on">확인</a>    
                    <a href="">취소</a>    
                </div>
            </form>
        </div>
    </div>
@include('m/inc/footer_m')