@include("boffice/inc/header")
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Default Light Table -->
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">{{request()->b_title02}} 리스트</h6>
                </div>
                @if(request()->bcc == 'SLIDER')
                <div class="col-lg-12 text-right m-3">
                    <button type="button" class=" btn btn-info mr-2" onclick="list_pri()">순서적용</button>
                </div>
                @endif
                <div class="card-body p-0 pb-3 text-center">
                    @if(request()->bcc == 'SLIDER')
                    <table class="table mb-0">
                        <colgroup>
                            <col width="5%">
                            <col width="5%">
                            <col width="10%">
                            <col width="35%">
                            <col width="10%">
                            <col width="15%">
                        </colgroup>
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="all_check" id="all_check" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="all_check"></label>
                                    </span>
                                </th>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">이미지</th>
                                <th scope="col" class="border-0">제목</th>
                                <th scope="col" class="border-0">노출여부</th>
                                <th scope="col" class="border-0">기능</th>
                            </tr>
                        </thead>
                        <tbody id="sortable">
                            @if(count($view_list) > 0)
                            @foreach ($view_list as $key => $value)
                            <tr>
                                <td>
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="list_idx_arr[]" id="list_idx_arr{{$key}}" value="{{$value->idx}}" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="list_idx_arr{{$key}}"></label>
                                    </span>
                                </td>
                                <td>{{$number--}}</td>
                                <td>
                                    <img src="/storage/app/images/{{$value->real_file_name}}" alt="">
                                </td>
                                <td>
                                    <a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}">{{$value->subject}}</a>
                                </td>
                                <td>{{$value->use_status}}</td>
                                <td>
                                    <a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}" class=" btn btn-success mr-2">수정</a>
                                    <button type="button" class=" btn btn-danger mr-2" onclick="del_list({{$value->idx}}, {{$value->bc_code}})">삭제</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8">게시글이 없습니다</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    @endif
                    @if(request()->bcc == 'POPUP')
                    <table class="table mb-0">
                        <colgroup>
                            <col width="5%">
                            <col width="5%">
                            <col width="10%">
                            <col width="15%">
                            <col width="25%">
                            <col width="5%">
                            <col width="15%">
                        </colgroup>
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="all_check" id="all_check" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="all_check"></label>
                                    </span>
                                </th>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">이미지</th>
                                <th scope="col" class="border-0">제목</th>
                                <th scope="col" class="border-0">기간</th>
                                <th scope="col" class="border-0">노출여부</th>
                                <th scope="col" class="border-0">기능</th>
                            </tr>
                        </thead>
                        <tbody id="">
                            @if(count($view_list) > 0)
                            @foreach ($view_list as $key => $value)
                            <tr>
                                <td>
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="list_idx_arr[]" id="list_idx_arr{{$key}}" value="{{$value->idx}}" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="list_idx_arr{{$key}}"></label>
                                    </span>
                                </td>
                                <td>{{$number--}}</td>
                                <td>
                                    <img src="/storage/app/images/{{$value->real_file_name}}" alt="">
                                </td>
                                <td><a href="/boffice/view?bcc={{request()->bcc}}&b_idx={{$value->idx}}">{{$value->subject}}</a></td>
                                <td>{{substr($value->start_date, 0, 10)}} ~ {{substr($value->end_date, 0, 10)}}</td>
                                <td>{{$value->use_status}}</td>
                                <td>
                                    <a href="/boffice/view?bcc={{request()->bcc}}&b_idx={{$value->idx}}" class=" btn btn-success mr-2">수정</a>
                                    <button type="button" class=" btn btn-danger mr-2" onclick="del_list2({{$value->idx}}, 'POPUP')">삭제</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8">게시글이 없습니다</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    @endif
                    @if(request()->bcc == 'BC001')
                    <table class="table mb-0">
                        <colgroup>
                            <col width="5%">
                            <col width="5%">
                            <col width="35%">
                            <col width="10%">
                            <col width="10%">
                            <col width="15%">
                        </colgroup>
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="all_check" id="all_check" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="all_check"></label>
                                    </span>
                                </th>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">제목</th>
                                <th scope="col" class="border-0">사용여부</th>
                                <th scope="col" class="border-0">등록일</th>
                                <th scope="col" class="border-0">기능</th>
                            </tr>
                        </thead>
                        <tbody id="">
                            @if(count($view_list) > 0)
                            @foreach ($view_list as $key => $value)
                            <tr>
                                <td>
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="list_idx_arr[]" id="list_idx_arr{{$key}}" value="{{$value->idx}}" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="list_idx_arr{{$key}}"></label>
                                    </span>
                                </td>
                                <td>{{$number--}}</td>
                                <td><a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}">{{$value->subject}}</a></td>
                                <td>@if($value->use_status == 'Y') 사용 @else 미사용 @endif</td>
                                <td>{{substr($value->reg_date, 0, 10)}}</td>
                                <td>
                                    <a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}" class=" btn btn-success mr-2">수정</a>
                                    <button type="button" class=" btn btn-danger mr-2" onclick="del_list({{$value->idx}}, '{{$value->bc_code}}')">삭제</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">게시글이 없습니다</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    @endif
                    @if(request()->bcc == 'BC002')
                    <table class="table mb-0">
                        <colgroup>
                            <col width="5%">
                            <col width="5%">
                            <col width="10%">
                            <col width="35%">
                            <col width="10%">
                            <col width="10%">
                            <col width="10%">
                            <col width="15%">
                        </colgroup>
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="all_check" id="all_check" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="all_check"></label>
                                    </span>
                                </th>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">회원가입여부</th>
                                <th scope="col" class="border-0">법인명</th>
                                <th scope="col" class="border-0">대표자</th>
                                <th scope="col" class="border-0">등록회계사수</th>
                                <th scope="col" class="border-0">회비납부현황</th>
                                <th scope="col" class="border-0">기능</th>
                            </tr>
                        </thead>
                        <tbody id="">
                            @if(count($view_list) > 0)
                            @foreach ($view_list as $key => $value)
                            <tr>
                                <td>
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="list_idx_arr[]" id="list_idx_arr{{$key}}" value="{{$value->idx}}" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="list_idx_arr{{$key}}"></label>
                                    </span>
                                </td>
                                <td>{{$number--}}</td>
                                <td>{{$value->company}}</td>
                                <td><a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}">{{$value->subject}}</a></td>
                                <td>{{$value->writer}}</td>
                                <td>{{$value->contact_number}}</td>
                                <td>{{substr($value->reg_date, 0, 10)}}</td>
                                <td>
                                    <a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}" class=" btn btn-success mr-2">수정</a>
                                    <button type="button" class=" btn btn-danger mr-2" onclick="del_list({{$value->idx}}, {{$value->bc_code}})">삭제</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8">게시글이 없습니다</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    @endif
                    @if(request()->bcc != 'SLIDER' && request()->bcc != 'BC002' && request()->bcc != 'POPUP')
                    <table class="table mb-0">
                        <colgroup>
                            <col width="5%">
                            <col width="5%">
                            <col width="45%">
                            <col width="10%">
                            <col width="10%">
                            <col width="15%">
                        </colgroup>
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="all_check" id="all_check" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="all_check"></label>
                                    </span>
                                </th>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">제목</th>
                                <th scope="col" class="border-0">사용여부</th>
                                <th scope="col" class="border-0">등록일</th>
                                <th scope="col" class="border-0">기능</th>
                            </tr>
                        </thead>
                        <tbody id="">
                            @if(count($view_list) > 0)
                            @foreach ($view_list as $key => $value)
                            <tr>
                                <td>
                                    <span class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" name="list_idx_arr[]" id="list_idx_arr{{$key}}" value="{{$value->idx}}" class="custom-control-input">
                                        <label class="custom-control-label center-label" for="list_idx_arr{{$key}}"></label>
                                    </span>
                                </td>
                                <td>{{$number--}}</td>
                                <td><a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}">{{$value->subject}}</a></td>
                                <td>@if($value->use_status == 'Y') 사용 @else 미사용 @endif</td>
                                <td>{{substr($value->reg_date, 0, 10)}}</td>
                                <td>
                                    <a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}" class=" btn btn-success mr-2">수정</a>
                                    <button type="button" class=" btn btn-danger mr-2" onclick="del_list({{$value->idx}}, '{{$value->bc_code}}')">삭제</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8">게시글이 없습니다</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    @endif
                    <div class="col-lg-12 text-right mt-3">
                        @if (request()->bcc == 'POPUP')
                        <button type="button" class=" btn btn-danger mr-2" onclick="del_list_array2()">선택삭제</button>
                        @else
                        <button type="button" class=" btn btn-danger mr-2" onclick="del_list_array()">선택삭제</button>
                        @endif
                        <a href="/boffice/write?bcc={{request()->bcc}}" class="btn btn-accent">신규등록</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 center-block">
        <ul class="pagination text-center center-block">
            {!! $paging_view !!}
        </ul>
        </div>
    </div>
    <script type="text/javascript">

        function list_pri(){
            var b_idx_arr = '';
            var bcc = '{{request()->bcc}}';
            var page = '{{request()->page}}';

            $('input[name="list_idx_arr[]"]').each(function(){

                var t_val = $(this).val();
                b_idx_arr += t_val+','
            });
            b_idx_arr = b_idx_arr.slice(0,-1);
            location.href="/boffice/priList?b_idx="+b_idx_arr+"&bcc="+bcc+"&page="+page;
        }

        function del_list(idx,bcc){
            //console.log(idx,bcc);
            location.href="/boffice/delete?b_idx="+idx+"&bcc="+bcc;
        }

        function del_list_array(){

            var b_idx_arr = '';
            var bcc = '{{request()->bcc}}'
            $('input[name="list_idx_arr[]"]').each(function(){
                if($(this).is(':checked') === true){
                    var t_val = $(this).val();
                    b_idx_arr += t_val+','
                }
            });
            b_idx_arr = b_idx_arr.slice(0,-1);
            location.href="/boffice/delete?b_idx="+b_idx_arr+"&bcc="+bcc;
            //console.log(b_idx_arr)
        }

        function del_list2(idx,bcc){
            //console.log(idx,bcc);
            location.href="/boffice/deletePop?b_idx="+idx+"&bcc="+bcc;
        }

        function del_list_array2(){

            var b_idx_arr = '';
            var bcc = '{{request()->bcc}}'
            $('input[name="list_idx_arr[]"]').each(function(){
                if($(this).is(':checked') === true){
                    var t_val = $(this).val();
                    b_idx_arr += t_val+','
                }
            });
            b_idx_arr = b_idx_arr.slice(0,-1);
            location.href="/boffice/deletePop?b_idx="+b_idx_arr+"&bcc="+bcc;
            //console.log(b_idx_arr)
        }

        $(function(){
            $("#sortable").sortable();
            $("#sortable").disableSelection();
        })
    </script>
@include("boffice/inc/footer")
