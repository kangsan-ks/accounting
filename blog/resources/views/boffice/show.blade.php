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
                        <form action="/boffice/update" method="post" class="" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="bcc" value="{{request()->bcc}}">
                            <input type="hidden" name="b_idx" value="{{request()->b_idx}}">
                            <div class="col">
                                @if(request()->bcc == 'SLIDER')
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="feFirstName" class="input_title">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" name="subject" value="{{$view_data->subject}}" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="input_title">사용여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" @if($view_data->use_status == 'Y') checked @endif>
                                            <label class="custom-control-label" for="use_chk1">사용</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N" @if($view_data->use_status == 'N') checked @endif>
                                            <label class="custom-control-label" for="use_chk2">미사용</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row">
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
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="contents">내용</label>
                                        <textarea class="form-control" name="contents" id="editor">{!!$view_data->contents!!}</textarea>
                                    </div>
                                </div>
                                @endif
                                @if(request()->bcc == 'BC001')
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="feFirstName" class="input_title">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" name="subject" value="{{$view_data->subject}}" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="input_title">사용여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" @if($view_data->use_status == 'Y') checked @endif>
                                            <label class="custom-control-label" for="use_chk1">사용</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N" @if($view_data->use_status == 'N') checked @endif>
                                            <label class="custom-control-label" for="use_chk2">미사용</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="contents">내용</label>
                                        <textarea class="form-control" name="contents" id="editor">{!!$view_data->contents!!}</textarea>
                                    </div>
                                </div>
                                @endif
                                @if(request()->bcc == 'BC002')
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" placeholder="" value="{{$view_data->subject}}" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feLastName">성함</label>
                                        <input type="text" class="form-control" id="feLastName" placeholder="" value="{{$view_data->writer}}" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feLastName">연락처</label>
                                        <input type="text" class="form-control" id="feLastName" placeholder="" value="{{$view_data->contact_number}}" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName">이메일</label>
                                        <input type="text" class="form-control" id="feFirstName" placeholder="" value="{{$view_data->email}}" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feLastName">End user</label>
                                        <input type="text" class="form-control" id="feLastName" placeholder="" value="{{$view_data->writer2}}" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feLastName">회사명</label>
                                        <input type="text" class="form-control" id="feLastName" placeholder="" value="{{$view_data->company}}" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="feFirstName">옵션1</label>
                                        <input type="text" class="form-control" id="feFirstName" placeholder="" value="{{$view_data->etc1}}" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feLastName">옵션2</label>
                                        <input type="text" class="form-control" id="feLastName" placeholder="" value="{{$view_data->etc2}}" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feLastName">등록일</label>
                                        <input type="text" class="form-control" id="feLastName" placeholder="" value="{{substr($view_data->reg_date, 0, 10)}}" />
                                    </div>
                                </div>
                                @endif
                                @if(request()->bcc == 'BC003' || request()->bcc == 'BC004' || request()->bcc == 'BC005' || request()->bcc == 'BC006' || request()->bcc == 'BC007' || request()->bcc == 'BC008')
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="feFirstName" class="input_title">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" name="subject" value="{{$view_data->subject}}" required />
                                    </div>
                                    <div class="form-group col-md-2">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="input_title">사용여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" @if($view_data->use_status == 'Y') checked @endif>
                                            <label class="custom-control-label" for="use_chk1">사용</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N" @if($view_data->use_status == 'N') checked @endif>
                                            <label class="custom-control-label" for="use_chk2">미사용</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row">
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
                                    @if(request()->bcc != 'BC002')
                                    <button type="submit" class="btn btn-accent m-1">
                                        @if(request()->b_idx == '')
                                        등록
                                        @else
                                        수정
                                        @endif
                                    </button>
                                    @endif
                                    <a href="/boffice/list?bcc={{$view_data->bc_code}}" class="btn btn-warning m-1">리스트로</a>
                                </div>
                            </form>
                            {{-- <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="feFirstName">성함</label>
                                        <input type="text" class="form-control" id="feFirstName" placeholder="" value="" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="feLastName">제목</label>
                                        <input type="text" class="form-control" id="feLastName" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="feEmailAddress">연락처</label>
                                        <input type="text" class="form-control" id="feEmailAddress" placeholder="" value="" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fePassword">이메일</label>
                                        <input type="text" class="form-control" id="fePassword" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="feInputAddress">End user</label>
                                    <input type="text" class="form-control" id="feInputAddress" placeholder="" />
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="feInputCity">제목6</label>
                                        <input type="text" class="form-control" id="feInputCity" />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="feInputState">셀렉</label>
                                        <select id="feInputState" class="form-control">
                                            <option selected="">옵션1</option>
                                            <option>옵션2</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">제목7</label>
                                        <input type="text" class="form-control" id="inputZip" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="feDescription">내용</label>
                                        <textarea class="form-control" name="feDescription" id="editor"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-accent">수정</button>
                            </form> --}}
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
