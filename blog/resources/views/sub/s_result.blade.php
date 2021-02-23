@include('inc/head')
<div id="sub">
    <div class="inner s_result_box">
        <h3>
            <span>‘{{request()->search_name}}’</span>에 대한 통합검색 결과입니다.
        </h3>  
        <div class="result_box">
            <h4>게시판</h4>
            <ul>
                @foreach ($s_list_01 as $key => $value)
                @php
                    if($value->bc_code == 'BC015'){
                        $url = '/commu/c_board/board01/view?b_idx='.$value->idx.'&bcc='.$value->bc_code;
                    }elseif($value->bc_code == 'BC016'){
                        $url = '/commu/c_board/board02/view?b_idx='.$value->idx.'&bcc='.$value->bc_code;
                    }elseif($value->bc_code == 'BC017'){
                        $url = '/commu/c_board/board03/view?b_idx='.$value->idx.'&bcc='.$value->bc_code;
                    }
                @endphp
                <li>
                    <h5>
                        <a href="{{$url}}">
                            {{$value->subject}}
                        </a>
                    </h5>
                    <div class="text_box">
                        {!!$value->contents!!}
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="result_box">
            <h4>업무자료실</h4>
            <ul>
                @foreach ($s_list_02 as $key => $value)
                @php
                    if($value->bc_code == 'BC018'){
                        $url = '/commu/c_data_room/room01/view?b_idx='.$value->idx.'&bcc='.$value->bc_code;
                    }elseif($value->bc_code == 'BC019'){
                        $url = '/commu/c_data_room/room02/view?b_idx='.$value->idx.'&bcc='.$value->bc_code;
                    }elseif($value->bc_code == 'BC020'){
                        $url = '/commu/c_data_room/room03/view?b_idx='.$value->idx.'&bcc='.$value->bc_code;
                    }elseif($value->bc_code == 'BC021'){
                        $url = '/commu/c_data_room/room04/view?b_idx='.$value->idx.'&bcc='.$value->bc_code;
                    }
                @endphp
                <li>
                    <h5>
                        <a href="{{$url}}">
                            {{$value->subject}}
                        </a>
                    </h5>
                    <div class="text_box">
                        {!!$value->contents!!}
                    </div>
                </li>
                @endforeach
            </ul>            
        </div>
        {{-- <div class="pagination flex_box_cen">
            <ul class="flex_box_cen">
                <li class="on"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
            </ul>
            <div class="pagination_next_btn flex_box_cen">
                <img src="/img/next.png" alt="next_button">
            </div>
        </div> --}}
    </div>    
</div>
<script type="text/javascript">

    $(function(){

        $('.text_box').each(function(idx, el){
            var text = $(el).html();
            text = text.replace(/(<([^>]+)>)/ig,"").replace(/&nbsp;/ig,"");
            $(this).html('<p>'+text+'</p>');
        });
        

        var search_name = "{{request()->search_name}}";
        $('.result_box').each(function(idx, el){
            var search_result_html = $(this).html();
            search_result_html = search_result_html.replaceAll(search_name, '<span>'+search_name+'</span>');
            //console.log(search_result_html)
            $(this).html(search_result_html);
        });
        
        
    });
</script>
@include('inc/footer')