@include("boffice/inc/header")

<script src="/main/resources/js/ckeditor4/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0"></h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item p-3">
                    <div class="row">
                        <form action="/boffice/FMcreate" method="post" class="" name="joinF" enctype="multipart/form-data" onsubmit="return frm_chk();">
                            @csrf
                            <input type="hidden" name="mem_cate" value="{{request()->mem_cate}}">
                            <div class="col">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName1" class="input_title">아이디</label>
                                        <input type="text" class="form-control" id="feFirstName1" name="m_id"  onkeyup="id_chk(this)" required />
                                        <span id="id_c_txt"></span>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName2" class="input_title">패스워드</label>
                                        <input type="password" class="form-control" id="feFirstName2" name="m_passwd" onkeyup="pw_chk(this)" required />
                                        <span id="pw_c_txt"></span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName3" class="input_title">성함</label>
                                        <input type="text" class="form-control" id="feFirstName3" name="m_name"  required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName4" class="input_title">소속명(회사명)</label>
                                        <input type="text" class="form-control" id="feFirstName4" name="m_company_name"  required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName5" class="input_title">이메일</label>
                                        <input type="text" class="form-control" id="feFirstName5" name="m_email"  required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName6" class="input_title">직급</label>
                                        <input type="text" class="form-control" id="feFirstName6" name="m_position"  required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName7" class="input_title">연락처</label>
                                        <input type="text" class="form-control" id="feFirstName7" name="m_contact_number"  required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName8" class="input_title">
                                            @if (request()->mem_cate == 0)
                                                회사 전화번호
                                            @else
                                                회계사등록번호
                                            @endif
                                        </label>
                                        <input type="text" class="form-control" id="feFirstName8" name="m_company_number"  required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    @if (request()->mem_cate == 1)
                                    <div class="form-group col-md-6">
                                        <label for="sample6_address2" class="input_title">주소</label>
                                        <input type="text" class="form-control" id="sample6_address2" name="m_addr1"  required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="sample6_detailAddress2" class="input_title">상세주소</label>
                                        <input type="text" class="form-control" id="sample6_detailAddress2" name="m_addr2"  required />
                                    </div>
                                    @else
                                    <div class="form-group col-md-6">
                                        <label for="sample6_address" class="input_title">회사주소</label>
                                        <input type="text" class="form-control" id="sample6_address" name="m_company_addr1"  onclick="sample6_execDaumPostcode();" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="sample6_detailAddress" class="input_title">상세주소</label>
                                        <input type="text" class="form-control" id="sample6_detailAddress" name="m_company_addr2"  required />
                                    </div>
                                    @endif
                                </div>
                                <div class="form-row">
                                    @if (request()->mem_cate == 0)
                                    <div class="form-group col-md-6">
                                        <label for="sample6_address2" class="input_title">주소</label>
                                        <input type="text" class="form-control" id="sample6_address2" name="m_addr1"  onclick="sample6_execDaumPostcode2();" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="sample6_detailAddress2" class="input_title">상세주소</label>
                                        <input type="text" class="form-control" id="sample6_detailAddress2" name="m_addr2"  required />
                                    </div>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label class="input_title">승인여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="approval_status" class="custom-control-input" value="Y" checked>
                                            <label class="custom-control-label" for="use_chk1">승인</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="approval_status" class="custom-control-input" value="N">
                                            <label class="custom-control-label" for="use_chk2">미승인</label>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label class="input_title">회원등급</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk3" name="m_level" class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="use_chk3">일반회원</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk4" name="m_level" class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="use_chk4">법인정회원</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk5" name="m_level" class="custom-control-input" value="2">
                                            <label class="custom-control-label" for="use_chk5">준회원</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk6" name="m_level" class="custom-control-input" value="3">
                                            <label class="custom-control-label" for="use_chk6">예비회원</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk7" name="m_level" class="custom-control-input" value="9">
                                            <label class="custom-control-label" for="use_chk7">자문위원회원</label>
                                        </span>
                                    </div>
                                </div>
                                @if (request()->mem_cate == '9')
                                <div class="form-row">
                                    <div class="form-group col-md-7">
                                        <label for="m_professional" class="input_title">전문분야</label>
                                        <input type="text" class="form-control" id="m_professional" name="m_professional"  required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="validatedCustomFile">썸네일</label>
                                        <div class="custom-file">
                                            <input type="file" name="files" accept="image/*" onchange="setThumbnail(event);" class="custom-file-input" id="validatedCustomFile" >
                                            <label class="custom-file-label" id="files_name_text" for="validatedCustomFile"></label>
                                            <div class="invalid-feedback">이미지를 선택해주세요.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-2">
                                        <label for="">이미지</label>
                                        <div id="thumb_img">
                                            
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="form-row jus-cen">
                                    {{-- @if(request()->bcc != 'BC002') --}}
                                    <button type="submit" class="btn btn-accent m-1">
                                        @if(request()->b_idx == '')
                                        등록
                                        @else
                                        수정
                                        @endif
                                    </button>
                                    {{-- @endif --}}
                                    <a href="/boffice/FMlist?mem_cate={{request()->mem_cate}}" class="btn btn-warning m-1">리스트로</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script type="text/javascript">

    var id_flag = false;
    var pw_flag = false;

    function id_chk(idChk){
        var idRegExp = /^[a-z]+[a-z0-9]{5,14}$/g; //아이디 유효성 검사
        if (!idRegExp.test( $('input[name=m_id]').val() )) {
            $('#id_c_txt').text('아이디는 영문자로 시작하는 6~15자 영문자 또는 숫자이어야 합니다.').css({color: '#ff0000'});
            id_flag = false;
        }else{

            $.ajax({
                url: "/FAction/mIdCheck",
                type: "post",
                data: $('form[name=joinF]').serialize(),
                success: function(result) {
                    if(result == 0){
                        $('#id_c_txt').text('사용가능한 ID입니다.').css({color: '#4270b3'});
                        id_flag = true;
                    }else{
                        $('#id_c_txt').text('이미 사용중인 아이디입니다.').css({color: '#ff0000'});
                        id_flag = false;
                    }
                },
                error:function(request, status, error){
                    console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                }
            });

        }
        
    }

    function pw_chk(pwChk){
        
        var idRegExp = /^[a-zA-Z0-9]{6,15}$/g; //패스워드 유효성 검사
        
        if (!idRegExp.test( $('input[name=m_passwd]').val() )) {
            pw_flag = false;
            $('#pw_c_txt').text('비밀번호는 6~20자 영문자 또는 숫자이어야 합니다.').css({color: '#ff0000'});

        }else{
            $('#pw_c_txt').text('');
            pw_flag = true;
        }
    }

    function frm_chk(){
        var joinF = document.joinF;

        if(id_flag === false){
            alert('아이디를 확인해주세요.');
            $('input[name=m_id]').focus();
            return false;
        }
        if(pw_flag === false){
            alert('비밀번호를 확인해주세요.');
            $('input[name=m_passwd]').focus();
            return false;
        }
    }

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

    function setThumbnail(event) {
        for (var image of event.target.files) {
            var reader = new FileReader();
            reader.onload = function (event) {
                var img = document.createElement("img");
                img.setAttribute("src", event.target.result);
                $('#thumb_img').children('img').remove();
                document.querySelector("div#thumb_img").appendChild(img);
            };
            //console.log(image);
            reader.readAsDataURL(image);
        }

        var fileValue = $("input[name=files]").val().split("\\");
        var fileName = fileValue[fileValue.length-1]; // 파일명
        $('#files_name_text').text(fileName);
    }
</script>

@include("boffice/inc/footer")
