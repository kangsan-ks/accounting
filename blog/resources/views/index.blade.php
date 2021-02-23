@include('inc/head')
@include('inc/pop')
<div class="main">
    <div class="box">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($main_slider as $key => $value)
                <div class="swiper-slide" style="background: url('/storage/app/images/{{$value->real_file_name}}') no-repeat center/cover;">
                    <div class="slide_text_box inner">
                        {{-- <h2>중소회계법인협의회</h2> --}}
                        <h2 class="sub_text">{{$value->subject}}</h2>
                        {!!$value->contents!!}
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div> 
        <div class="main_content">
            <ul class="main_content_list inner flex_box_bet f_v_center">
                <li class="flex_box_cen"><a href="/info/m_accounting/account" class="flex_box_cen"> 
                    <img src="/img/main_pic01.png" alt="회원회계법인">
                    <div class="main_content_text">
                        <h4>회원회계법인</h4>
                        <p>회원회계법인 설명 텍스트</p>    
                    </div>                   
                </a></li>
                <li class="flex_box_cen"><a href="/info/report/report01/list?bcc=BC004" class="flex_box_cen">
                    <img src="/img/main_pic02.png" alt="총회보고">
                    <div class="main_content_text">
                        <h4>총회보고</h4>
                        <p>총회보고 설명 텍스트</p>   
                    </div>  
                </a></li>
                <li class="flex_box_cen"><a href="/support/q_support/sp02/list?bcc=BC022" class="flex_box_cen">
                    <img src="/img/main_pic03.png" alt="품질관리지원">
                    <div class="main_content_text">
                        <h4>품질관리지원</h4>
                        <p>품질관리지원 설명 텍스트</p>   
                    </div>
                </a></li>
                <li class="flex_box_cen"><a href="/support/q_edu/ed02/list?bcc=BC025" class="flex_box_cen">
                    <img src="/img/main_pic04.png" alt="품질관리교육">
                    <div class="main_content_text">
                        <h4>품질관리교육</h4>
                        <p>품질관리교육 설명 텍스트</p>   
                    </div>
                </a></li>
            </ul>
        </div>   
        <div class="info_content">
            <div class="info inner flex_box_bet f_v_center">
                <div class="main_item item1">
                    <h3>협의회 교육 안내</h3>
                    <p>협의회 교육 안내 설명 텍스트입니다.</p>
                    <a href="/edu/regular/list?bcc=BC029">더보기 +</a>
                </div>
                <div class="main_item item2">
                    <h3>공동사업 소개</h3>
                    <p>공동사업 소개 설명 텍스트입니다.</p>
                    <a href="/business/insurance?bcc=FAQ">더보기 +</a>
                </div>
                <div class="main_item item3">
                    <h3>제도개선</h3>
                    <p>제도개선 설명 텍스트입니다.</p>
                    <a href="/system/audit_system/list?bcc=BC013">더보기 +</a>
                </div>    
            </div>
            <div class="board inner flex_box_bet f_v_center">
                <div class="main_item">
                    <div class="board_title flex_box_bet f_v_center">
                        <h3>커뮤니티 게시판</h3>
                        <p><a href="/commu/c_board/board01/list?bcc=BC015">+</a></p>
                    </div>        
                    <ul class="board_content">
                        @foreach ($main_list_01 as $key => $value)
                        @php
                            if($value->bc_code == 'BC015'){
                                $url = '/commu/c_board/board01/view?b_idx=';
                            }elseif ($value->bc_code == 'BC016') {
                                $url = '/commu/c_board/board02/view?b_idx=';
                            }elseif ($value->bc_code == 'BC017') {
                                $url = '/commu/c_board/board03/view?b_idx=';
                            }
                        @endphp
                        <li class="flex_box_bet f_v_center">
                            <p><a href="{{$url.$value->idx}}&bcc={{$value->bc_code}}">{{$value->subject}}</a></p>
                            <p><a href="{{$url.$value->idx}}&bcc={{$value->bc_code}}">{{substr($value->reg_date, 0, 10)}}</a></p>
                        </li>
                        @endforeach
                        
                        {{-- <li class="flex_box_bet f_v_center">
                            <p><a href="">안녕하세요! 중소회계법인협의회 게시판을 오픈합니다.</a></p>
                            <p><a href="">2020.01.01</a></p>
                        </li>
                        <li class="flex_box_bet f_v_center">
                            <p><a href="">안녕하세요! 중소회계법인협의회 게시판을 오픈합니다.</a></p>
                            <p><a href="">2020.01.01</a></p>
                       </li>
                        <li class="flex_box_bet f_v_center">
                            <p><a href="">안녕하세요! 중소회계법인협의회 게시판을 오픈합니다.</a></p>
                                <p><a href="">2020.01.01</a></p>
                        </li> --}}
                    </ul>
                </div>
                <div class="main_item">
                    <div class="board_title flex_box_bet f_v_center">
                        <h3>자료실</h3>
                        <p><a href="/commu/c_data_room/room01/list?bcc=BC018">+</a></p>
                    </div>
                    <ul class="board_content">
                        @foreach ($main_list_02 as $key => $value)
                        @php
                            if($value->bc_code == 'BC018'){
                                $url = '/commu/c_data_room/room01/view?b_idx=';
                            }elseif ($value->bc_code == 'BC019') {
                                $url = '/commu/c_data_room/room02/view?b_idx=';
                            }elseif ($value->bc_code == 'BC020') {
                                $url = '/commu/c_data_room/room03/view?b_idx=';
                            }elseif ($value->bc_code == 'BC021') {
                                $url = '/commu/c_data_room/room04/view?b_idx=';
                            }
                        @endphp
                        <li class="flex_box_bet f_v_center">
                            <p><a href="{{$url.$value->idx}}&bcc={{$value->bc_code}}">
                                {{$value->subject}}
                                @if($value->attach_file != '' && $value->attach_file != NULL)
                                <img src="/img/main_down.png" alt="다운로드받기">
                                @endif
                            </a></p>
                            <p><a href="{{$url.$value->idx}}&bcc={{$value->bc_code}}">{{substr($value->reg_date, 0, 10)}}</a></p>
                        </li>
                        @endforeach
                        {{-- <li class="flex_box_bet f_v_center">
                            <p><a href="">안녕하세요! 중소회계법인협의회 게시판을 오픈합니다.</a></p> 
                            <p><a href="">2020.01.01</a></p>
                        </li>
                        <li class="flex_box_bet f_v_center">
                            <p><a href="">안녕하세요! 중소회계법인협의회 게시판을 오픈합니다.</a></p>
                            <p><a href="">2020.01.01</a></p>
                        </li>
                        <li class="flex_box_bet f_v_center">
                            <p><a href="">안녕하세요! 중소회계법인협의회 게시판을 오픈합니다.</a></p>
                            <p><a href="">2020.01.01</a></p>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
@include('inc/footer')