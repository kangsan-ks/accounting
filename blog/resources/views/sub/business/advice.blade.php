@include('inc/head')
@include('inc/sub_header')
@include('inc/erp_header')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
    $(function() {
        $.datepicker.setDefaults({
            dateFormat: 'yymmdd',
            prevText: '이전 달',
            nextText: '다음 달',
            monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
            dayNames: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
            dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
            showMonthAfterYear: true,
            yearSuffix: '년'
        });
        $( "#datepicker1, #datepicker2" ).datepicker({
            dateFormat: 'yy-mm-dd'
        });
        var m_level = ("{{session('user_level')}}" == 0) ? true : false;
        
        $('.advice_list_01').click(function(e){
		    e.preventDefault();
            if(m_level === true){
                alert('회계법인회원 전용입니다.');
                return false;
            }
		    $('.advice01_popup').addClass('active');
		});
		$('.advice_list_01 form .close').click(function(){
			$('.advice01_popup').removeClass('on');
		});
		$('.advice_list_02').click(function(e){
			e.preventDefault();
            if(m_level === false){
                alert('기업회원 전용입니다.');
                return false;
            }
			$('.advice02_popup').addClass('active');
		});
		$('.advice_list_02 form .close').click(function(){
			$('.advice02_popup').removeClass('on');
		});

    });
</script>
            <div class="sub_content advice">
                <ul class="advice_list flex_box_bet f_v_center">
                    <li class="advice_list_01"><a href="">
                        <img src="/img/join_h_w.png" alt="">
                        <h6>회계법인회원<br>자문요청</h6>
                        <p>click</p>
                    </a></li>
                    <li class="advice_list_02"><a href="">
                        <img src="/img/join_b_w.png" alt="">
                        <h6>기업회원<br>자문요청</h6>
                        <p>click</p>
                    </a></li>
                </ul>
                <div class="popup advice01_popup flex_box_cen">
                    <form action="/FAction/advice" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="cate_type" value="0">
                        <h4>회계법인회원 자문요청</h4>
                        <ul>
                            <li class="flex_box_left">
                                <label for="">일자</label>
                                <input type="text" name="start_period" id="datepicker1" placeholder="0000-00-00" required>
                            </li>
                            <li class="flex_box_left">
                                <label for="">자문요청자</label>
                                <input type="text" name="writer2" value="{{session('user_name')}}" placeholder="홍길동" readonly required>
                            </li>
                            <li class="popup_text">
                                <label for="">자문요청 요지</label>
                                <textarea name="contents" id="" cols="30" rows="7" placeholder="내용을 입력해주세요" required></textarea>
                            </li>
                            <li class="flex_box_bet">
                                <div class="flex_box_left">
                                    <label for="">첨부파일</label>
                                    <input type="file" name="files">
                                </div>                                
                                <span>삭제</span>
                            </li>
                        </ul>
                        <div class="check_or_cancel flex_box_bet f_v_center">
                            <button type="submit" class="on">확인</button>    
                            <a href="">취소</a>    
                        </div>  
                        <a href="" class="close">close</a>  
                    </form>
                </div>
                <div class="popup advice02_popup flex_box_cen">
                    <form action="/FAction/advice" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="cate_type" value="1">
                        <h4>기업회원 자문요청</h4>
                        <ul>
                            <li class="flex_box_left">
                                <label for="">일자</label>
                                <input type="text" name="start_period" id="datepicker2" placeholder="0000-00-00" required>
                            </li>
                            <li class="flex_box_left">
                                <label for="">자문요청자</label>
                                <input type="text" name="writer2" value="{{session('user_name')}}" placeholder="홍길동" readonly required>
                            </li>
                            <li class="popup_text">
                                <label for="">자문요청 요지</label>
                                <textarea name="contents" id="" cols="30" rows="7" placeholder="내용을 입력해주세요" required></textarea>
                            </li>
                            <li class="flex_box_bet">
                                <div class="flex_box_left">
                                    <label for="">첨부파일</label>
                                    <input type="file" name="files">
                                </div>                                
                                <span>삭제</span>
                            </li>
                        </ul>
                        <div class="check_or_cancel flex_box_bet f_v_center">
                            <button type="submit" class="on">확인</button>    
                            <a href="">취소</a>    
                        </div>  
                        <a href="" class="close">close</a>  
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@include('inc/footer')