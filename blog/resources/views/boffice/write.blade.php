@include("boffice/inc/header")

<script src="/main/resources/js/ckeditor4/ckeditor.js"></script>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">신규등록</h6>
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
                                @if(request()->bcc == 'POPUP')
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="feFirstName" class="input_title">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" name="subject" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="feFirstName" class="input_title">링크</label>
                                        <div class="custom-control custom-toggle custom-toggle-sm mb-1 col-md-10">
                                            <input type="checkbox" id="customToggle1" name="link_blank" value="Y" class="custom-control-input">
                                            <label class="custom-control-label" for="customToggle1">사용여부</label>
                                        </div>
                                        <input type="text" class="form-control" id="feFirstName" name="link_value" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="input_title">노출여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" checked>
                                            <label class="custom-control-label" for="use_chk1">노출</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N">
                                            <label class="custom-control-label" for="use_chk2">미노출</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="contents">팝업 이미지</label>
                                        <div class="custom-file">
                                            <input type="file" name="files" accept="image/*" onchange="setThumbnail(event);" class="custom-file-input" id="validatedCustomFile" required>
                                            <label class="custom-file-label" id="files_name_text" for="validatedCustomFile">파일선택</label>
                                            <div class="invalid-feedback">이미지를 선택해주세요.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">이미지</label>
                                        <div id="thumb_img"></div>
                                        <span id="thumb_img_info"></span>
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-7">
                                        <label for="">노출기간 선택</label>
                                        <div class="custom-control custom-toggle custom-toggle-sm mb-1 col-md-10">
                                            <input type="checkbox" id="customToggle1" name="date_status" value="Y" class="custom-control-input">
                                            <label class="custom-control-label" for="customToggle1">사용여부</label>
                                        </div>
                                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm" style="max-width: 350px;">
                                            <input type="text" class="input-sm form-control" name="start_date" placeholder="시작일" id="blog-overview-date-range-1">
                                            <input type="text" class="input-sm form-control" name="end_date" placeholder="종료일" id="blog-overview-date-range-2">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="material-icons"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="" class="input_title">팝업 위치</label>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-white active">
                                              <input type="radio" name="position_status" id="option1" autocomplete="off" value="LT" checked=""> 좌측상단 </label>
                                            <label class="btn btn-white">
                                              <input type="radio" name="position_status" id="option2" autocomplete="off" value="RT"> 우측상단 </label>
                                            <label class="btn btn-white">
                                              <input type="radio" name="position_status" id="option3" autocomplete="off" value="LB"> 좌측하단 </label>
                                            <label class="btn btn-white">
                                              <input type="radio" name="position_status" id="option4" autocomplete="off" value="RB"> 우측하단 </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-3">
                                        <label for="" class="input_title">팝업 여백</label>
                                        여백 (가로)
                                        <input type="number" class="form-control" id="feFirstName22" name="position_x" required="">
                                        여백 (세로)
                                        <input type="number" class="form-control" id="feFirstName22" name="position_y" required="">
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-3">
                                        <label for="feFirstName22" class="input_title">팝업 사이즈</label>
                                        가로<input type="number" class="form-control" id="feFirstName22" name="img_width" required="">
                                        세로<input type="number" class="form-control" id="feFirstName23" name="img_height" required="">
                                    </div>
                                </div>
                                @endif
                                @if(request()->bcc == 'BC002')
                                <div class="form-row">
                                    <div class="form-group col-md-6 was-validated">
                                        <label for="in01" class="input_title">법인명</label>
                                        <input type="text" class="form-control" id="in01" name="subject" required />
                                    </div>
                                    <div class="form-group col-md-3 was-validated">
                                        <label for="in02" class="input_title">대표자</label>
                                        <input type="text" class="form-control" id="in02" name="writer2" required />
                                    </div>
                                    <div class="form-group col-md-3 was-validated">
                                        <label for="in03" class="input_title">등록회계사수</label>
                                        <input type="number" class="form-control" id="in03" name="ect_num1" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-7 was-validated">
                                        <label for="in04" class="input_title">홈페이지URL</label>
                                        <input type="text" class="form-control" id="in04" name="link_value" required />
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-4">
                                        <label class="input_title">회원가입여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" checked>
                                            <label class="custom-control-label" for="use_chk1">유</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N">
                                            <label class="custom-control-label" for="use_chk2">무</label>
                                        </span>
                                    </div>
                                    
                                </div>
                                <span id="append_item">
                                    <div class="form-row year_list">
                                        <div class="form-group col-md-12 mt-5">
                                            <label for="add_year" class="add_year">납부현황 추가</label>
                                        </div>
                                        <div class="form-group col-md-2 was-validated">
                                            <label for="in05_01" class="input_title">연도</label>
                                            <input type="number" class="form-control" id="in05_01" name="year_data[]" required />
                                        </div>
                                        <div class="form-group col-md-1 was-validated">
                                            <label for="in06_01" class="input_title">구성원</label>
                                            <input type="number" class="form-control" id="in06_01" name="num_data[]" required />
                                        </div>
                                        <div class="form-group col-md-3 was-validated">
                                            <label for="in07_01" class="input_title">회비금액</label>
                                            <input type="number" class="form-control" id="in07_01" name="price01_data[]" required />
                                        </div>
                                        <div class="form-group col-md-3 was-validated">
                                            <label for="in08_01" class="input_title">납부금액</label>
                                            <input type="number" class="form-control" id="in08_01" name="price02_data[]" required />
                                        </div>
                                        <div class="form-group col-md-3 was-validated">
                                            <label for="in09_01" class="input_title">미납(선납)금액</label>
                                            <input type="number" class="form-control" id="in09_01" name="price03_data[]" required />
                                        </div>
                                    </div>
                                </span>
                                <script type="text/javascript">
                                    $('.add_year').click(function(){
                                        var listCnt = $('.year_list').length+1;
                                        console.log(listCnt);
                                        var item = ' <div class="form-row year_list"> '+
                                            ' <div class="form-group col-md-2 was-validated"> '+
                                                ' <label for="in05_0'+listCnt+'" class="input_title">연도</label> '+
                                                ' <input type="number" class="form-control" id="in05_0'+listCnt+'" name="year_data[]" required /> '+
                                            ' </div> '+
                                            ' <div class="form-group col-md-1 was-validated"> '+
                                                ' <label for="in06_0'+listCnt+'" class="input_title">구성원</label> '+
                                                ' <input type="number" class="form-control" id="in06_0'+listCnt+'" name="num_data[]" required /> '+
                                            ' </div> '+
                                            ' <div class="form-group col-md-3 was-validated"> '+
                                                ' <label for="in07_0'+listCnt+'" class="input_title">회비금액</label> '+
                                                ' <input type="number" class="form-control" id="in07_0'+listCnt+'" name="price01_data[]" required /> '+
                                            ' </div> '+
                                            ' <div class="form-group col-md-3 was-validated"> '+
                                                ' <label for="in08_0'+listCnt+'" class="input_title">납부금액</label> '+
                                                ' <input type="number" class="form-control" id="in08_0'+listCnt+'" name="price02_data[]" required /> '+
                                            ' </div> '+
                                            ' <div class="form-group col-md-3 was-validated"> '+
                                                ' <label for="in09_0'+listCnt+'" class="input_title">미납(선납)금액</label> '+
                                                ' <input type="number" class="form-control" id="in09_0'+listCnt+'" name="price03_data[]" required /> '+
                                            ' </div> '+
                                        ' </div>';
                                        $('#append_item').append(item);
                                    });
                                </script>
                                @endif
                                @if(request()->bcc != 'SLIDER' && request()->bcc != 'BC002' && request()->bcc != 'POPUP')
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
                                @if (request()->bcc != 'FAQ')
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">파일선택</label>
                                        <div class="custom-file">
                                            <input type="file" name="files" onchange="setThumbnail(event);" class="custom-file-input" id="validatedCustomFile">
                                            <label class="custom-file-label" id="files_name_text" for="validatedCustomFile">파일선택</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                </div>
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="contents">내용</label>
                                        <textarea name="contents" id="editor"></textarea>
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

    function get_px(img){
        $('#thumb_img_info').text('(가로 - '+img.naturalWidth+'px 세로 - '+img.naturalHeight+'px)');
    }

    function setThumbnail(event) {
        for (var image of event.target.files) {
            var reader = new FileReader();
            reader.onload = function (event) {
                var img = document.createElement("img");
                img.setAttribute("src", event.target.result);
                img.setAttribute("id", 'thumb_img_');
                $('#thumb_img').children('img').remove();
                document.querySelector("div#thumb_img").appendChild(img);
                setTimeout(function(){ get_px(img) },100)
                
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
