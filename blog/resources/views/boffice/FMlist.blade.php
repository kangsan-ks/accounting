@include("boffice/inc/header")
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Default Light Table -->
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">{{request()->b_title02}} 리스트</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
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
                                <th scope="col" class="border-0">아이디</th>
                                <th scope="col" class="border-0">성함</th>
                                <th scope="col" class="border-0">가입일</th>
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
                                <td><a href="/boffice/FMview?mem_cate={{$value->m_level}}&b_idx={{$value->idx}}">{{$value->m_id}}</a></td>
                                <td>{{$value->m_name}}</td>
                                <td>{{substr($value->reg_date, 0, 10)}}</td>
                                <td>
                                    <a href="/boffice/FMview?mem_cate={{$value->m_level}}&b_idx={{$value->idx}}" class=" btn btn-success mr-2">수정</a>
                                    <button type="button" class=" btn btn-danger mr-2" onclick="del_list({{$value->idx}}, '{{$value->m_level}}')">삭제</button>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="8">등록된 회원이 없습니다</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="col-lg-12 text-right mt-3">
                        <button type="button" class=" btn btn-danger mr-2" onclick="del_list_array()">선택삭제</button>
                        <a href="/boffice/FMwrite?mem_cate={{request()->mem_cate}}" class="btn btn-accent">신규등록</a>
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

        function del_list(idx,bcc){
            //console.log(idx,bcc);
            location.href="/boffice/deleteMem?b_idx="+idx+"&mem_cate="+bcc;
        }

        function del_list_array(){

            var b_idx_arr = '';
            var bcc = '{{request()->mem_cate}}'
            $('input[name="list_idx_arr[]"]').each(function(){
                if($(this).is(':checked') === true){
                    var t_val = $(this).val();
                    b_idx_arr += t_val+','
                }
            });
            b_idx_arr = b_idx_arr.slice(0,-1);
            location.href="/boffice/deleteMem?b_idx="+b_idx_arr+"&mem_cate="+bcc;
            //console.log(b_idx_arr)
        }
        
    </script>
@include("boffice/inc/footer")
