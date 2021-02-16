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
                        <div class="col">
                            <form action="/boffice/create" method="post" class="was-validated" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="bcc" value="{{request()->bcc}}">
                                @if(request()->bcc == 'SLIDER')
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="feFirstName" class="input_title">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" name="subject" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="input_title">사용여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" checked>
                                            <label class="custom-control-label" for="use_chk1">사용</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N">
                                            <label class="custom-control-label" for="use_chk2">미사용</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="contents">PC 이미지</label>
                                        <div class="custom-file">
                                            <input type="file" name="files" accept="image/*" onchange="setThumbnail(event);" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" id="files_name_text" for="validatedCustomFile">파일선택</label>
                                            <div class="invalid-feedback">이미지를 선택해주세요.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-2">
                                        <label for="">이미지</label>
                                        <div id="thumb_img"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="contents">내용</label>
                                        <textarea class="form-control" name="contents" id="editor"></textarea>
                                    </div>
                                </div>
                                @endif
                                @if(request()->bcc == 'BC001')
                                <div class="form-row">
                                    <div class="form-group col-md-5 was-validated">
                                        <label for="feFirstName" class="input_title">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" name="subject" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="input_title">사용여부</label>
                                        <span class="custom-control custom-control-inline custom-radio">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" checked>
                                            <label class="custom-control-label" for="use_chk1">사용</label>
                                        </span>
                                        <span class="custom-control custom-control-inline custom-radio">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N">
                                            <label class="custom-control-label" for="use_chk2">미사용</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="contents">내용</label>
                                        <textarea class="form-control" name="contents" id="editor"></textarea>
                                    </div>
                                </div>
                                @endif
                                @if(request()->bcc == 'BC003' || request()->bcc == 'BC004' || request()->bcc == 'BC005' || request()->bcc == 'BC006' || request()->bcc == 'BC007' || request()->bcc == 'BC008')
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="feFirstName" class="input_title">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" name="subject" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="input_title">사용여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" checked>
                                            <label class="custom-control-label" for="use_chk1">사용</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N">
                                            <label class="custom-control-label" for="use_chk2">미사용</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="contents">썸네일</label>
                                        <div class="custom-file">
                                            <input type="file" name="files" accept="image/*" onchange="setThumbnail(event);" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" id="files_name_text" for="validatedCustomFile">파일선택</label>
                                            <div class="invalid-feedback">이미지를 선택해주세요.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-2">
                                        <label for="">이미지</label>
                                        <div id="thumb_img"></div>
                                    </div>
                                </div>
                                @endif
                                <div class="form-row jus-cen">
                                    <button type="submit" class="btn btn-accent m-1">
                                        @if(request()->b_idx == '')
                                        등록
                                        @else
                                        수정
                                        @endif
                                    </button>
                                    <a href="/boffice/list?bcc=BC002" class="btn btn-warning m-1">리스트로</a>
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

    function setThumbnail2(event) {
        for (var image of event.target.files) {
            var reader = new FileReader();
            reader.onload = function (event) {
                var img = document.createElement("img");
                img.setAttribute("src", event.target.result);
                $('#thumb_img2').children('img').remove();
                document.querySelector("div#thumb_img2").appendChild(img);
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
