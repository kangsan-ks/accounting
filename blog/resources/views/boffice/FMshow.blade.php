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
                        <form action="/boffice/FMupdate" method="post" class="" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="b_idx" value="{{request()->b_idx}}">
                            <div class="col">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName" class="input_title">아이디</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_id" value="{{$view_data->m_id}}" readonly required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName" class="input_title">패스워드</label>
                                        <input type="password" class="form-control" id="feFirstName" name="m_passwd" value="" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName" class="input_title">성함</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_name" value="{{$view_data->m_name}}" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName" class="input_title">소속명(회사명)</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_company_name" value="{{$view_data->m_company_name}}" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName" class="input_title">이메일</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_email" value="{{$view_data->m_email}}" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName" class="input_title">직급</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_position" value="{{$view_data->m_position}}" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName" class="input_title">연락처</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_contact_number" value="{{$view_data->m_contact_number}}" required />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName" class="input_title">
                                            @if ($view_data->m_level == 0)
                                                회사 전화번호
                                            @else
                                                회계사등록번호
                                            @endif
                                        </label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_company_number" value="{{$view_data->m_company_number}}" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    @if ($view_data->m_level == 1)
                                    <div class="form-group col-md-6">
                                        <label for="feFirstName" class="input_title">주소</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_addr1" value="{{$view_data->m_addr1}}" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="feFirstName" class="input_title">상세주소</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_addr2" value="{{$view_data->m_addr2}}" required />
                                    </div>
                                    @else
                                    <div class="form-group col-md-6">
                                        <label for="feFirstName" class="input_title">회사주소</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_company_addr1" value="{{$view_data->m_company_addr1}}" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="feFirstName" class="input_title">상세주소</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_company_addr2" value="{{$view_data->m_company_addr2}}" required />
                                    </div>
                                    @endif
                                </div>
                                <div class="form-row">
                                    @if ($view_data->m_level == 0)
                                    <div class="form-group col-md-6">
                                        <label for="feFirstName" class="input_title">주소</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_addr1" value="{{$view_data->m_addr1}}" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="feFirstName" class="input_title">상세주소</label>
                                        <input type="text" class="form-control" id="feFirstName" name="m_addr2" value="{{$view_data->m_addr2}}" required />
                                    </div>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label class="input_title">승인여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="approval_status" class="custom-control-input" value="Y" @if($view_data->approval_status == 'Y') checked @endif>
                                            <label class="custom-control-label" for="use_chk1">승인</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="approval_status" class="custom-control-input" value="N" @if($view_data->approval_status == 'N') checked @endif>
                                            <label class="custom-control-label" for="use_chk2">미승인</label>
                                        </span>
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label class="input_title">회원등급</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk3" name="m_level" class="custom-control-input" value="0" @if($view_data->m_level == '0') checked @endif>
                                            <label class="custom-control-label" for="use_chk3">일반회원</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk4" name="m_level" class="custom-control-input" value="1" @if($view_data->m_level == '1') checked @endif>
                                            <label class="custom-control-label" for="use_chk4">법인정회원</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk5" name="m_level" class="custom-control-input" value="2" @if($view_data->m_level == '2') checked @endif>
                                            <label class="custom-control-label" for="use_chk5">준회원</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk6" name="m_level" class="custom-control-input" value="3" @if($view_data->m_level == '3') checked @endif>
                                            <label class="custom-control-label" for="use_chk6">예비회원</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk7" name="m_level" class="custom-control-input" value="9" @if($view_data->m_level == '9') checked @endif>
                                            <label class="custom-control-label" for="use_chk7">자문위원회원</label>
                                        </span>
                                    </div>
                                </div>
                                @if (request()->mem_cate == '9')
                                <div class="form-row">
                                    <div class="form-group col-md-7">
                                        <label for="m_professional" class="input_title">전문분야</label>
                                        <input type="text" class="form-control" id="m_professional" name="m_professional" value="{{$view_data->m_professional}}" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="contents">썸네일</label>
                                        <div class="custom-file">
                                            <input type="file" name="files" accept="image/*" onchange="setThumbnail(event);" class="custom-file-input" id="validatedCustomFile" value="{{$view_data->real_file_name}}">
                                            <label class="custom-file-label" id="files_name_text" for="validatedCustomFile">{{$view_data->attach_file}}</label>
                                            <div class="invalid-feedback">이미지를 선택해주세요.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-2">
                                        <label for="">이미지</label>
                                        <div id="thumb_img">
                                            <img src="/storage/app/images/{{$view_data->real_file_name}}" alt="">
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
                                    <a href="/boffice/FMlist?mem_cate={{$view_data->m_level}}" class="btn btn-warning m-1">리스트로</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">

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

    $(function(){
        CKEDITOR.replace('editor',{
            filebrowserUploadUrl: '/editor_image_upload_action.php?type=Files&CKEditorFuncNum=2',
            extraPlugins: 'image'
        });
        CKEDITOR.config.allowedContent = true;
    });
</script>
@include("boffice/inc/footer")
