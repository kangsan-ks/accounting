@include('inc/head')
@include('inc/sub_header')
@include('inc/erp_header')

            <div class="sub_content edu_board">
                        
                @include('/sub/board_list')
                @include('/sub/board_view')    
                @include('/sub/board_write')    
            </div>
        </div>
    </div>
@include('inc/footer')