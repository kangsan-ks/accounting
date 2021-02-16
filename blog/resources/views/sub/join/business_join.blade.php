@include('inc/head')
<div id="sub">
    <div class="sub_join sub_title {{request()->segment(1)}}">
        <h2 class="sub_join_title">회원가입</h2>
    </div>
    <div class="join business inner">
        <h1 class="logo"><a href="/"><img src="/img/logo.png" alt=""></a></h1>
        <h4 class="b_back">일반기업 회원 전용 회원가입</h4>       
        <form action="/FAction/join" method="post">
            @csrf
            <input type="hidden" name="join_type" value="normal" />
            <input type="hidden" name="m_level" value="0" />
            <ul>
                <li>
                    <label for="b_name">아이디</label>
                    <div class="inp_box">
                        <input type="text" name="m_id" class="b_name" required>
                    </div>                
                </li>
                <li>
                    <label for="b_name">비밀번호</label>
                    <div class="inp_box">
                        <input type="text" name="m_passwd" class="b_name" required>
                    </div>                
                </li>
                <li>
                    <label for="b_name">회사명</label>
                    <div class="inp_box">
                        <input type="text" name="m_company_name" class="b_name" required>
                    </div>                
                </li>

                <li>
                    <label for="b_number">회사 전화번호</label>
                    <div class="inp_box">
                        <input type="text" name="m_company_number" class="b_number" placeholder="(-제외하고 입력해주세요)" required>
                    </div>
                </li>
                <li class="line_2">
                    <label for="b_address">회사 주소</label>
                    <div class="inp_box">
                        <input type="text" name="m_company_addr1" class="b_address" id="sample6_address" onclick="sample6_execDaumPostcode();" required>
                        <input type="text" name="m_company_addr2" class="b_address" id="sample6_detailAddress" placeholder="(상세주소)" required>
                    </div>
                </li>

                <li>
                    <label for="name">이름</label>
                    <div class="inp_box">
                        <input type="text" name="m_name" class="name" required>
                    </div>
                </li>
                
                <li>
                    <label for="rank">현재 직급</label>
                    <div class="inp_box">
                        <input type="text" name="m_position" class="rank" required>
                    </div>
                </li>

                <li>
                    <label for="number">연락처</label>
                    <div class="inp_box">
                        <input type="text" name="m_contact_number" class="number" placeholder="(-제외하고 입력해주세요)" required>
                    </div>
                </li>

                <li>
                    <label for="email">이메일</label>
                    <div class="inp_box">
                        <input type="email" name="m_email" class="email" required>
                    </div>
                </li>
                <li class="line_2">
                    <label for="address">주소</label>
                    <div class="inp_box">
                        <input type="text" name="" class="address" id="sample6_address2" onclick="sample6_execDaumPostcode2();" required>
                        <input type="text" name="" class="address" id="sample6_detailAddress2" placeholder="(상세주소)" required>
                    </div>
                </li>      
            </ul>
            <div class="agr_box">
                <input type="checkbox" class="agreement" name="" required>
                <span>개인정보 활용에 동의합니다</span>
            </div>
            
            <div class="submit_box flex_box_cen">
                <a href="#none">
                    <input type="submit" class="submit b_back" value="회원가입"/>
                </a>
                <a href="#none">
                    <input type="submit" class="reset goBackPage" value="취소"/>
                </a>
            </div>            
        </form>
    </div>
</div>
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>

    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    // document.getElementById("sample6_extraAddress").value = extraAddr;
                
                } else {
                    // document.getElementById("sample6_extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                //document.getElementById('sample6_postcode').value = ;
                document.getElementById("sample6_address").value = '('+data.zonecode+') '+addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("sample6_detailAddress").focus();
            }
        }).open();
    }

        function sample6_execDaumPostcode2() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    // document.getElementById("sample6_extraAddress").value = extraAddr;
                
                } else {
                    // document.getElementById("sample6_extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                //document.getElementById('sample6_postcode').value = ;
                document.getElementById("sample6_address2").value = '('+data.zonecode+') '+addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("sample6_detailAddress2").focus();
            }
        }).open();
    }
</script>
@include('inc/footer')