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
                        <form action="/boffice/admUpdate" method="post" class="" enctype="multipart/form-data" onsubmit="return passwdChk();">
                            @csrf
                            <input type="hidden" name="b_idx" value="{{request()->b_idx}}">
                            <div class="col">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="feFirstName" class="input_title">아이디</label>
                                        <input type="text" class="form-control" id="feFirstName" name="" value="{{$view_data->user_id}}" readonly required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="feFirstName2" class="input_title">새 비밀번호</label>
                                        <input type="password" class="form-control" id="feFirstName2" name="passwd" required />
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="feFirstName3" class="input_title">새 비밀번호 확인</label>
                                        <input type="password" class="form-control" id="feFirstName3" name="" required />
                                    </div>
                                </div>
                                <div class="form-row jus-cen">
                                    <a href="/boffice" class="btn btn-warning m-1">리스트로</a>
                                    <button type="submit" class="btn btn-accent m-1">수정</button>
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

    function passwdChk(){
        if($('#feFirstName2').val() != $('#feFirstName3').val()){
            alert('비밀번호가 일치하지 않습니다.')
            return false;
        }
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

    $(function(){
        CKEDITOR.replace('editor',{
            filebrowserUploadUrl: '/editor_image_upload_action.php?type=Files&CKEditorFuncNum=2',
            extraPlugins: 'image'
        });
        CKEDITOR.config.allowedContent = true;
    });
</script>
@include("boffice/inc/footer")
