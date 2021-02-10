@include('m/inc/head_m')
@include('m/inc/respon_menu')
@include('m/inc/sub_header_m')
    @if(request()->segment(3) == 'm_report01')
        <div class="sub_content m_report01">    
            <div class="sub_sub_title inner">
                <div class="sub_title_box flex_box_left f_v_center">
                    <img src="/img/m_dot.png" alt="dot">
                    <h4>사업보고</h4>                
                </div>          
            </div>
            <div class="edu_board_list">
                <ul>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다</a></h4> 
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p></a>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다</a></h4> 
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                </ul>   
                <div class="pagination flex_box_bet f_v_center">
                    <img src="/img/m_prev.png" alt="next_button">
                    <ul class="flex_box_cen">
                        <li class="on"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>            
                    <img src="/img/m_next.png" alt="next_button">
                </div>   
                <div class="list_btn prev_list">
                    <a href="/m_info/m_report/m_report01/write" class="btn h_back">신청하기</a>
                </div>
            </div>        
        </div>
    @elseif(request()->segment(3) == 'm_report02')
        <div class="sub_content m_report01">    
            <div class="sub_sub_title inner">
                <div class="sub_title_box flex_box_left f_v_center">
                    <img src="/img/m_dot.png" alt="dot">
                    <h4>결산보고</h4>                
                </div>          
            </div>
            <div class="edu_board_list">
                <ul>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다</a></h4> 
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p></a>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다</a></h4> 
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                </ul>   
                <div class="pagination flex_box_bet f_v_center">
                    <img src="/img/m_prev.png" alt="next_button">
                    <ul class="flex_box_cen">
                        <li class="on"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>            
                    <img src="/img/m_next.png" alt="next_button">
                </div>   
                <div class="list_btn prev_list">
                    <a href="/m_info/m_report/m_report02/write" class="btn h_back">신청하기</a>
                </div>
            </div>        
        </div>
    @elseif(request()->segment(3) == 'm_report03')
        <div class="sub_content m_report01">    
            <div class="sub_sub_title inner">
                <div class="sub_title_box flex_box_left f_v_center">
                    <img src="/img/m_dot.png" alt="dot">
                    <h4>사업계획</h4>                
                </div>          
            </div>
            <div class="edu_board_list">
                <ul>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다</a></h4> 
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p></a>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다</a></h4> 
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                </ul>   
                <div class="pagination flex_box_bet f_v_center">
                    <img src="/img/m_prev.png" alt="next_button">
                    <ul class="flex_box_cen">
                        <li class="on"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>            
                    <img src="/img/m_next.png" alt="next_button">
                </div>   
                <div class="list_btn prev_list">
                    <a href="/m_info/m_report/m_report03/write" class="btn h_back">신청하기</a>
                </div>
            </div>        
        </div>
    @elseif(request()->segment(3) == 'm_report04')
        <div class="sub_content m_report01">    
            <div class="sub_sub_title inner">
                <div class="sub_title_box flex_box_left f_v_center">
                    <img src="/img/m_dot.png" alt="dot">
                    <h4>예산</h4>                
                </div>          
            </div>
            <div class="edu_board_list">
                <ul>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다</a></h4>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다</a></h4> 
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p></a>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다</a></h4> 
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                </ul>   
                <div class="pagination flex_box_bet f_v_center">
                    <img src="/img/m_prev.png" alt="next_button">
                    <ul class="flex_box_cen">
                        <li class="on"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>            
                    <img src="/img/m_next.png" alt="next_button">
                </div>   
                <div class="list_btn prev_list">
                    <a href="/m_info/m_report/m_report04/write" class="btn h_back">신청하기</a>
                </div>
            </div>        
        </div>
    @elseif(request()->segment(2) == 'm_buy')
        <div class="sub_content m_buy">    
            <div class="sub_sub_title inner">
                <div class="sub_title_box flex_box_left f_v_center">
                    <img src="/img/m_dot.png" alt="dot">
                    <h4>공동구매</h4>                
                </div>
                <p>공동구매 주문신청서를 다운받아서 작성시 파일첨부 부탁드립니다.</p>
                <a href="" class="erp_download">공동구매 주문신청서 다운로드<img src="/img/m_download.png" alt="download"></a>
            </div>
            <div class="edu_board_list">
                <ul>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                </ul>   
                <div class="pagination flex_box_bet f_v_center">
                    <a href=""><img src="/img/m_prev.png" alt="next_button"></a> 
                    <ul class="flex_box_cen">
                        <li class="on"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>            
                    <a href=""><img src="/img/m_next.png" alt="next_button"></a> 
                </div>   
                <div class="list_btn prev_list">
                    <a href="/m_business/m_buy/write" class="btn h_back">신청하기</a>
                </div>
            </div>
        </div>
    @elseif(request()->segment(2) == 'm_pa')
        <div class="sub_content m_pa">    
            <div class="sub_sub_title inner">
                <div class="sub_title_box flex_box_left f_v_center">
                    <img src="/img/m_dot.png" alt="dot">
                    <h4>PA,회계CFO아웃소싱</h4>                
                </div>          
            </div>
            <div class="edu_board_list">
                <ul>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무의 기본 개념</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무의 기본 개념</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무의 기본 개념</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무의 기본 개념</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p></a>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무의 기본 개념</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                </ul>   
                <div class="pagination flex_box_bet f_v_center">
                    <img src="/img/m_prev.png" alt="next_button">
                    <ul class="flex_box_cen">
                        <li class="on"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>            
                    <img src="/img/m_next.png" alt="next_button">
                </div>   
                <div class="list_btn prev_list">
                    <a href="/m_business/m_pa/write" class="btn h_back">신청하기</a>
                </div>
            </div>        
        </div>
    @elseif(request()->segment(2) == 'm_board')
        <div class="sub_content m_pa">    
            <div class="sub_sub_title inner">
                <div class="sub_title_box flex_box_left f_v_center">
                    <img src="/img/m_dot.png" alt="dot">
                    <h4>게시판</h4>                
                </div>          
            </div>
            <div class="edu_board_list">
                <ul>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p></a>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                </ul>   
                <div class="pagination flex_box_bet f_v_center">
                    <img src="/img/m_prev.png" alt="next_button">
                    <ul class="flex_box_cen">
                        <li class="on"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>            
                    <img src="/img/m_next.png" alt="next_button">
                </div>   
                <div class="list_btn prev_list">
                    <a href="/m_business/m_board/write" class="btn h_back">신청하기</a>
                </div>
            </div>        
        </div>
    @elseif(request()->segment(2) == 'm_data_room' )
        <div class="sub_content m_pa">    
            <div class="sub_sub_title inner">
                <div class="sub_title_box flex_box_left f_v_center">
                    <img src="/img/m_dot.png" alt="dot">
                    <h4>게시판</h4>                
                </div>          
            </div>
            <div class="edu_board_list">
                <ul>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p></a>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                    <li>
                        <div class="list_title flex_box_left f_v_center">
                            <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                            <a href=""><img src="/img/m_disk.png" alt=""></a>
                        </div>
                        <div class="list_box flex_box_left">
                            <p><span>작성자 : </span>관리자</p>
                            <p><span>등록일 : </span>2020-12-25</p>
                        </div>
                    </li>
                </ul>   
                <div class="pagination flex_box_bet f_v_center">
                    <img src="/img/m_prev.png" alt="next_button">
                    <ul class="flex_box_cen">
                        <li class="on"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href="">5</a></li>
                    </ul>            
                    <img src="/img/m_next.png" alt="next_button">
                </div>   
                <div class="list_btn prev_list">
                    <a href="/m_business/m_data_room/write" class="btn h_back">신청하기</a>
                </div>
            </div>        
        </div>
    @else
    <div class="sub_content m_pa">    
        <div class="sub_sub_title inner">
            <div class="sub_title_box flex_box_left f_v_center">
                <img src="/img/m_dot.png" alt="dot">
                <h4>게시판</h4>                
            </div>          
        </div>
        <div class="edu_board_list">
            <ul>
                <li>
                    <div class="list_title flex_box_left f_v_center">
                        <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                        <a href=""><img src="/img/m_disk.png" alt=""></a>
                    </div>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
                <li>
                    <div class="list_title flex_box_left f_v_center">
                        <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                        <a href=""><img src="/img/m_disk.png" alt=""></a>
                    </div>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
                <li>
                    <div class="list_title flex_box_left f_v_center">
                        <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                        <a href=""><img src="/img/m_disk.png" alt=""></a>
                    </div>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
                <li>
                    <div class="list_title flex_box_left f_v_center">
                        <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                        <a href=""><img src="/img/m_disk.png" alt=""></a>
                    </div>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p></a>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
                <li>
                    <div class="list_title flex_box_left f_v_center">
                        <h4><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></h4>
                        <a href=""><img src="/img/m_disk.png" alt=""></a>
                    </div>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
            </ul>   
            <div class="pagination flex_box_bet f_v_center">
                <img src="/img/m_prev.png" alt="next_button">
                <ul class="flex_box_cen">
                    <li class="on"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                </ul>            
                <img src="/img/m_next.png" alt="next_button">
            </div>   
            <div class="list_btn prev_list">
                <a href="/m_business/m_data_room/write" class="btn h_back">신청하기</a>
            </div>
        </div>        
    </div>
    @endif
@include('m/inc/footer_m')