@include('inc/head')
@include('inc/sub_header')
@include('inc/erp_header')
@php
    if(request()->segment(2) == 'list'){
        $view_url = '/'.request()->segment(1).'/view';
        $write_url = '/'.request()->segment(1).'/write';
    }elseif (request()->segment(3) == 'list') {
        $view_url = '/'.request()->segment(1).'/'.request()->segment(2).'/view';
        $write_url = '/'.request()->segment(1).'/'.request()->segment(2).'/write';
    }elseif (request()->segment(4) == 'list') {
        $view_url = '/'.request()->segment(1).'/'.request()->segment(2).'/'.request()->segment(3).'/view';
        $write_url = '/'.request()->segment(1).'/'.request()->segment(2).'/'.request()->segment(3).'/write';
    }
@endphp
        @if(request()->segment(3) != 'sp02')
            <div class="sub_content edu_board">
                <div class="edu_board_list">
                    <table class="edu_board_table">
                        <caption>게시판</caption>
                        <colgroup>
                            <col class="edu_board_col1">
                            <col class="edu_board_col2">
                            <col class="edu_board_col1">
                            <col class="edu_board_col1">
                            <col class="edu_board_col1">
                        </colgroup>
                        <thead>
                            <th scope="edu_board_col1">번호</th>
                            <th scope="edu_board_col2">제목</th>
                            <th scope="edu_board_col1">
                                @if (request()->bcc == 'BC015' || request()->bcc == 'BC016' || request()->bcc == 'BC017' || request()->bcc == 'BC022' || request()->bcc == 'BC023' || request()->bcc == 'BC024' || request()->bcc == 'BC025' || request()->bcc == 'BC026' || request()->bcc == 'BC027')
                                    신청자
                                @else
                                    작성자
                                @endif
                            </th>
                            <th scope="edu_board_col1">등록일</th>
                            <th scope="edu_board_col1">파일</th> 
                        </thead>
                        <tbody>
                            @foreach ($view_list as $key => $value)
                            <tr>
                                <td>{{$number--}}</td>
                                <td class="txt_left">
                                    @if(request()->bcc == 'BC023')
                                    <a href="{{$view_url}}?b_idx={{$value->idx}}&bcc={{$value->bc_code}}">{{$value->category}}에 대한 자문 신청입니다.</a>
                                    @else
                                    <a href="{{$view_url}}?b_idx={{$value->idx}}&bcc={{$value->bc_code}}">{{$value->subject}}</a>
                                    @endif
                                </td>
                                <td>{{$value->writer}}</td>
                                <td>{{substr($value->reg_date, 2, 8)}}</td>
                                <td><a href="#none">
                                    @if ($value->attach_file != '')
                                    <img src="/img/disk.png" alt="파일">    
                                    @endif
                                </a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                    <div class="pagination flex_box_cen">
                        {!! $paging_view !!}
                        {{-- @if (request()->bcc == 'BC015' || request()->bcc == 'BC016' || request()->bcc == 'BC017' || request()->bcc == 'BC022' || request()->bcc == 'BC023' || request()->bcc == 'BC024' || request()->bcc == 'BC025' || request()->bcc == 'BC026' || request()->bcc == 'BC027') --}}
                        @if ($write_btn_chk == true)
                        <div class="e_list submit_box">
                            <a href="{{$write_url}}?bcc={{request()->bcc}}">
                                <input type="submit" class="submit btn" value="글쓰기"/>
                            </a>
                        </div>    
                        @endif
                    </div> 
                </div>
            </div>
        @endif

        {{-- 자문신청 게시판 style --}}

        @if(request()->segment(3) == 'sp02')
        <div class="sub_content edu_board sp02">
               
            <div class="edu_board_list">
                <ul class="flex_box_bet">
                    @foreach ($view_list as $key => $value)
                    <li class="sp02_list" data-pidx="{{$value->idx}}">
                        <div class="photo flex_box_cen flex_box_bottom">
                            <img src="/storage/app/images/{{$value->real_file_name}}" alt="">
                        </div>
                        <ul>
                            <li class="flex_box_left">
                                <h6>자문위원</h6>
                                <span>{{$value->m_name}}</span>
                            </li>
                            <li class="flex_box_left">
                                <h6>소속</h6>
                                <span>{{$value->m_company_name}}</span>
                            </li>
                            <li class="flex_box_left">
                                <h6>직책</h6>
                                <span>{{$value->m_position}}</span>
                            </li>
                            <li class="flex_box_left">
                                <h6>전문분야</h6>
                                <span>{{$value->m_professional}}</span>
                            </li>
                        </ul>
                    </li>
                    @endforeach                    
                </ul>
                <div class="pagination flex_box_cen">
                    {!! $paging_view !!}
                    <a href="/support/q_support/sp02/write" class="btn" id="sp02_idx">자문신청</a>
                </div>   
            </div>
        </div>
        @endif
    </div>
</div>
<script type="text/javascript">
    
    var pidx = 0;

    $('#sp02_idx').click(function(e){
        if(pidx == 0){
            alert('자문위원을 먼저 선택해주세요.')
            e.preventDefault();
        }
    });

    $('.sp02_list').click(function(){
        $('.sp02_list').removeClass('on');
        $(this).addClass('on');
        pidx = $(this).attr('data-pidx');
        $('#sp02_idx').attr('href', '/support/q_support/sp02/write?bcc=BC023&pidx='+pidx)
    });
</script>
@include('inc/footer')       