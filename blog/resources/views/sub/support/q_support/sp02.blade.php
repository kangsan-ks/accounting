@include('inc/head')
@include('inc/sub_header')
@include('inc/erp_header')

            <div class="sub_content edu_board sp02">
               
                <div class="edu_board_list">
                    <ul class="flex_box_bet">
                        @foreach ($view_list as $key => $value)
                        <li class="sp02_list">
                            <div class="photo flex_box_cen flex_box_bottom">
                                <img src="/storage/app/images/{{$value->}}" alt="">
                            </div>
                            <ul>
                                <li class="flex_box_left">
                                    <h6>자문위원</h6>
                                    <span>*****</span>
                                </li>
                                <li class="flex_box_left">
                                    <h6>소속</h6>
                                    <span>*****</span>
                                </li>
                                <li class="flex_box_left">
                                    <h6>직책</h6>
                                    <span>*****</span>
                                </li>
                                <li class="flex_box_left">
                                    <h6>전문분야</h6>
                                    <span>*****</span>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                        {{-- <li class="sp02_list">
                            <div class="photo flex_box_cen flex_box_bottom">
                                <img src="/img/human_list.png" alt="">
                            </div>
                            <ul>
                                <li class="flex_box_left">
                                    <h6>자문위원</h6>
                                    <span>*****</span>
                                </li>
                                <li class="flex_box_left">
                                    <h6>소속</h6>
                                    <span>*****</span>
                                </li>
                                <li class="flex_box_left">
                                    <h6>직책</h6>
                                    <span>*****</span>
                                </li>
                                <li class="flex_box_left">
                                    <h6>전문분야</h6>
                                    <span>*****</span>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                    <div class="pagination flex_box_right ">
                        <div class="flex_box_bet flex_box_cen">
                            <ul class="flex_box_bet flex_box_bottom">
                                <li class="on"><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href="">5</a></li>
                                <li><a href="">6</a></li>
                            </ul>
                            <div class="pagination_next_btn">
                                <img src="/img/next.png" alt="next_button">
                            </div>
                        </div>
                        <a href="" class="btn">자문신청</a>
                    </div>   
                </div>
                   
                 
            </div>
        </div>
    </div> 
</div>
@include('inc/footer')