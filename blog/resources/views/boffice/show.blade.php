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
                                @if(request()->bcc == 'POPUP')
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="feFirstName" class="input_title">제목</label>
                                        <input type="text" class="form-control" id="feFirstName" name="subject" value="{{$view_data->subject}}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="feFirstName" class="input_title">링크</label>
                                        <div class="custom-control custom-toggle custom-toggle-sm mb-1 col-md-10">
                                            <input type="checkbox" id="link_blank" name="link_blank" value="Y" class="custom-control-input" @if($view_data->link_blank == 'Y') checked @endif>
                                            <label class="custom-control-label" for="link_blank">새창</label>
                                        </div>
                                        <input type="text" class="form-control" id="feFirstName" name="link_value" value="{{$view_data->link_value}}" required />
                                    </div>
                                    <div class="form-group col-md-1">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="input_title">노출여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" @if($view_data->use_status == 'Y') checked @endif>
                                            <label class="custom-control-label" for="use_chk1">노출</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N" @if($view_data->use_status == 'N') checked @endif>
                                            <label class="custom-control-label" for="use_chk2">미노출</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="contents">팝업 이미지</label>
                                        <div class="custom-file">
                                            <input type="file" name="files" accept="image/*" onchange="setThumbnail(event);" class="custom-file-input" id="validatedCustomFile" {{$view_data->real_file_name}}>
                                            <label class="custom-file-label" id="files_name_text" for="validatedCustomFile">{{$view_data->attach_file}}</label>
                                            <div class="invalid-feedback">이미지를 선택해주세요.</div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">이미지</label>
                                        <div id="thumb_img">
                                            <img src="/storage/app/images/{{$view_data->real_file_name}}" alt="">
                                        </div>
                                        <span id="thumb_img_info"></span>
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-7">
                                        <label for="">노출기간 선택</label>
                                        <div class="custom-control custom-toggle custom-toggle-sm mb-1 col-md-10">
                                            <input type="checkbox" id="date_status" name="date_status" value="Y" class="custom-control-input" @if($view_data->date_status == 'Y') checked @endif>
                                            <label class="custom-control-label" for="date_status">사용여부</label>
                                        </div>
                                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm" style="max-width: 350px;">
                                            <input type="text" class="input-sm form-control" name="start_date" value="{{substr($view_data->start_date, 0, 10)}}" placeholder="시작일" id="blog-overview-date-range-1">
                                            <input type="text" class="input-sm form-control" name="end_date" value="{{substr($view_data->end_date, 0, 10)}}" placeholder="종료일" id="blog-overview-date-range-2">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                <i class="material-icons"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="" class="input_title">팝업 위치</label>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-white @if($view_data->position_status == 'LT') active @endif">
                                              <input type="radio" name="position_status" id="option1" value="LT" @if($view_data->position_status == 'LT') checked @endif> 좌측상단 </label>
                                            <label class="btn btn-white @if($view_data->position_status == 'RT') active @endif">
                                              <input type="radio" name="position_status" id="option2" value="RT" @if($view_data->position_status == 'RT') checked @endif> 우측상단 </label>
                                            <label class="btn btn-white @if($view_data->position_status == 'LB') active @endif">
                                              <input type="radio" name="position_status" id="option3" value="LB" @if($view_data->position_status == 'LB') checked @endif> 좌측하단 </label>
                                            <label class="btn btn-white @if($view_data->position_status == 'RB') active @endif">
                                              <input type="radio" name="position_status" id="option4" value="RB" @if($view_data->position_status == 'RB') checked @endif> 우측하단 </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="" class="input_title">팝업 여백</label>
                                        여백 (가로)
                                        <input type="number" class="form-control" id="feFirstName22" name="position_x" value="{{$view_data->position_x}}" required="">
                                        여백 (세로)
                                        <input type="number" class="form-control" id="feFirstName22" name="position_y" value="{{$view_data->position_y}}" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="feFirstName22" class="input_title">팝업 사이즈</label>
                                        가로<input type="number" class="form-control" id="feFirstName22" name="img_width" value="{{$view_data->img_width}}" required="">
                                        세로<input type="number" class="form-control" id="feFirstName23" name="img_height" value="{{$view_data->img_height}}" required="">
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
                                    <div class="form-group col-md-6 was-validated">
                                        <label for="in01" class="input_title">법인명</label>
                                        <input type="text" class="form-control" id="in01" name="subject" value="{{$view_data->subject}}" required />
                                    </div>
                                    <div class="form-group col-md-3 was-validated">
                                        <label for="in02" class="input_title">대표자</label>
                                        <input type="text" class="form-control" id="in02" name="writer2" value="{{$view_data->writer2}}" required />
                                    </div>
                                    <div class="form-group col-md-3 was-validated">
                                        <label for="in03" class="input_title">등록회계사수</label>
                                        <input type="number" class="form-control" id="in03" name="ect_num1" value="{{$view_data->ect_num1}}" required />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-7 was-validated">
                                        <label for="in04" class="input_title">홈페이지URL</label>
                                        <input type="text" class="form-control" id="in04" name="link_value" value="{{$view_data->link_value}}" required />
                                    </div>
                                    <div class="form-group col-md-1"></div>
                                    <div class="form-group col-md-4">
                                        <label class="input_title">회원가입여부</label>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk1" name="use_status" class="custom-control-input" value="Y" @if($view_data->use_status == 'Y') checked @endif>
                                            <label class="custom-control-label" for="use_chk1">유</label>
                                        </span>
                                        <span class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="use_chk2" name="use_status" class="custom-control-input" value="N" @if($view_data->use_status == 'N') checked @endif>
                                            <label class="custom-control-label" for="use_chk2">무</label>
                                        </span>
                                    </div>
                                    
                                </div>
                                <span id="append_item">
                                    @if (count($add_datas_arr) > 0)
                                    @foreach ($add_datas_arr as $key => $value)
                                    <div class="form-row year_list">
                                        <input type="hidden" name="idx_data[]" value="{{$value->idx}}">
                                        @if ($key == 0)
                                        <div class="form-group col-md-12 mt-5">
                                            <label for="add_year" class="add_year">납부현황 추가</label>
                                        </div>    
                                        @endif
                                        <div class="form-group col-md-2 was-validated">
                                            <label for="in05_0{{$key}}" class="input_title">연도</label>
                                            <input type="number" class="form-control" id="in05_0{{$key}}" name="year_data[]" value="{{$value->year_data}}" required />
                                        </div>
                                        <div class="form-group col-md-2 was-validated">
                                            <label for="in06_0{{$key}}" class="input_title">구성원</label>
                                            <input type="number" class="form-control" id="in06_0{{$key}}" name="num_data[]" value="{{$value->num_data}}" required />
                                        </div>
                                        <div class="form-group col-md-2 was-validated">
                                            <label for="in07_0{{$key}}" class="input_title">회비금액</label>
                                            <input type="number" class="form-control" id="in07_0{{$key}}" name="price01_data[]" value="{{$value->price01_data}}" required />
                                        </div>
                                        <div class="form-group col-md-2 was-validated">
                                            <label for="in08_0{{$key}}" class="input_title">납부금액</label>
                                            <input type="number" class="form-control" id="in08_0{{$key}}" name="price02_data[]" value="{{$value->price02_data}}" required />
                                        </div>
                                        <div class="form-group col-md-2 was-validated">
                                            <label for="in09_0{{$key}}" class="input_title">미납(선납)금액</label>
                                            <input type="number" class="form-control" id="in09_0{{$key}}" name="price03_data[]" value="{{$value->price03_data}}" required />
                                        </div>
                                        <div class="form-group col-md-2 was-validated">
                                            <label for="in10_0{{$key}}" class="input_title">기능</label>
                                            <button type="button" data-idx="{{$value->idx}}" class=" btn btn-danger" onclick="del_data(this);">삭제</button>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="form-row year_list">
                                        <div class="form-group col-md-12 mt-5">
                                            <label for="add_year" class="add_year">납부현황 추가</label>
                                        </div>
                                        <div class="form-group col-md-2 was-validated">
                                            <label for="in05_01" class="input_title">연도</label>
                                            <input type="number" class="form-control" id="in05_01" name="year_data_new[]" required />
                                        </div>
                                        <div class="form-group col-md-1 was-validated">
                                            <label for="in06_01" class="input_title">구성원</label>
                                            <input type="number" class="form-control" id="in06_01" name="num_data_new[]" required />
                                        </div>
                                        <div class="form-group col-md-3 was-validated">
                                            <label for="in07_01" class="input_title">회비금액</label>
                                            <input type="number" class="form-control" id="in07_01" name="price01_data_new[]" required />
                                        </div>
                                        <div class="form-group col-md-3 was-validated">
                                            <label for="in08_01" class="input_title">납부금액</label>
                                            <input type="number" class="form-control" id="in08_01" name="price02_data_new[]" required />
                                        </div>
                                        <div class="form-group col-md-3 was-validated">
                                            <label for="in09_01" class="input_title">미납(선납)금액</label>
                                            <input type="number" class="form-control" id="in09_01" name="price03_data_new[]" required />
                                        </div>
                                    </div>
                                    @endif
                                    
                                </span>
                                <script type="text/javascript">

                                    function del_data(del_idx){
                                        var idx = $(del_idx).data('idx');
                                        location.href="/boffice/deleteData?del_idx="+idx+"&b_idx={{request()->b_idx}}";
                                    }

                                    $('.add_year').click(function(){
                                        var listCnt = $('.year_list').length+1;
                                        $('input[name="idx_data[]"]').each(function(){

                                        });
                                        // var listMaxIdx = $('input[name="idx_data[]"]').last().val();
                                        // listMaxIdx = Number(listMaxIdx)+1;
                                        // console.log(listMaxIdx);
                                        var item = ' <div class="form-row year_list"> '+
                                            ' <div class="form-group col-md-2 was-validated"> '+
                                                ' <label for="in05_0'+listCnt+'" class="input_title">연도</label> '+
                                                ' <input type="number" class="form-control" id="in05_0'+listCnt+'" name="year_data_new[]" required /> '+
                                            ' </div> '+
                                            ' <div class="form-group col-md-1 was-validated"> '+
                                                ' <label for="in06_0'+listCnt+'" class="input_title">구성원</label> '+
                                                ' <input type="number" class="form-control" id="in06_0'+listCnt+'" name="num_data_new[]" required /> '+
                                            ' </div> '+
                                            ' <div class="form-group col-md-3 was-validated"> '+
                                                ' <label for="in07_0'+listCnt+'" class="input_title">회비금액</label> '+
                                                ' <input type="number" class="form-control" id="in07_0'+listCnt+'" name="price01_data_new[]" required /> '+
                                            ' </div> '+
                                            ' <div class="form-group col-md-3 was-validated"> '+
                                                ' <label for="in08_0'+listCnt+'" class="input_title">납부금액</label> '+
                                                ' <input type="number" class="form-control" id="in08_0'+listCnt+'" name="price02_data_new[]" required /> '+
                                            ' </div> '+
                                            ' <div class="form-group col-md-3 was-validated"> '+
                                                ' <label for="in09_0'+listCnt+'" class="input_title">미납(선납)금액</label> '+
                                                ' <input type="number" class="form-control" id="in09_0'+listCnt+'" name="price03_data_new[]" required /> '+
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
                                @if (request()->bcc != 'FAQ')
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="contents1">파일</label>
                                        <div class="custom-file">
                                            <input type="file" name="files" accept="image/*" onchange="setThumbnail(event);" class="custom-file-input" id="validatedCustomFile" value="{{$view_data->real_file_name}}">
                                            <label class="custom-file-label" id="files_name_text" for="validatedCustomFile">{{$view_data->attach_file}}</label>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="contents">내용</label>
                                        <textarea name="contents" id="editor">{!! $view_data->contents !!}</textarea>
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
                                    @if (request()->bcc != 'POPUP')
                                    <a href="/boffice/list?bcc={{$view_data->bc_code}}" class="btn btn-warning m-1">리스트로</a>
                                    @else
                                    <a href="/boffice/list?bcc={{request()->bcc}}" class="btn btn-warning m-1">리스트로</a>
                                    @endif
                                    
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

    function get_px(img){
        $('#thumb_img_info').text('(가로 - '+img.naturalWidth+'px 세로 - '+img.naturalHeight+'px)');
    }

    function setThumbnail(event) {
        for (var image of event.target.files) {
            var reader = new FileReader();
            reader.onload = function (event) {
                var img = document.createElement("img");
                img.setAttribute("src", event.target.result);
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

    $(function(){
        CKEDITOR.replace('editor',{
            filebrowserUploadUrl: '/editor_image_upload_action.php?type=Files&CKEditorFuncNum=2',
            extraPlugins: 'image'
        });
        CKEDITOR.config.allowedContent = true;
    });
</script>
@include("boffice/inc/footer")
