@include('m/inc/head_m')
@include('m/inc/respon_menu')
@include('m/inc/sub_header_m')
    <div class="sub_content m_report01">    
        <div class="sub_sub_title inner">
            <div class="sub_title_box flex_box_left f_v_center">
                <img src="/img/m_dot.png" alt="">
                <h4>사업보고</h4>
            </div> 
        </div>
        <div class="edu_board_list">
            <ul>
                <li>
                    <h4>안녕하세요 총회보고 - 사업보고 게시판입니다.<br>
                        안녕하세요 총회보고 - 사업보고…</h4>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
                <li>
                    <h4>안녕하세요 총회보고 - 사업보고 게시판입니다.<br>
                        안녕하세요 총회보고 - 사업보고…</h4>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
                <li>
                    <h4>안녕하세요 총회보고 - 사업보고 게시판입니다.<br>
                        안녕하세요 총회보고 - 사업보고…</h4>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
                <li>
                    <h4>안녕하세요 총회보고 - 사업보고 게시판입니다.<br>
                        안녕하세요 총회보고 - 사업보고…</h4>
                    <div class="list_box flex_box_left">
                        <p><span>작성자 : </span>관리자</p>
                        <p><span>등록일 : </span>2020-12-25</p>
                    </div>
                </li>
                <li>
                    <h4>안녕하세요 총회보고 - 사업보고 게시판입니다.<br>
                        안녕하세요 총회보고 - 사업보고…</h4>
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
        </div>
        <div class="edu_board_view">                    
            <ul>
                <li>
                    <h3 class="inner">안녕하세요 총회보고 - 사업보고 게시판입니다.</h3>
                    
                </li>
                <li>
                    <div class="inner">
                        <span><strong>작성자 : </strong>관리자</span>
                        <span><strong>등록일 : </strong>2020.12.25</span>
                    </div>  
                </li>
                <li>
                    <div class="file inner">
                        <img src="/img/m_download.png" alt="download">첨부파일
                    </div>   
                </li>
                <li class="inner">
                    안녕하세요 총회보고 - 사업보고 게시판입니다.  안녕하세요 총회보고 - 사업보고 게시판입니다.  안녕하세요 총회보고 - 사업보고 게시판입니다.
                    안녕하세요 총회보고 - 사업보고 게시판입니다.  안녕하세요 총회보고 - 사업보고 게시판입니다.  안녕하세요 총회보고 - 사업보고 게시판입니다.
                    <div class="report_img flex_box_cen"><p>이미지</p></div>
                </li>
            </ul>
            <div class="prev_list flex_box_cen">
                <a href="" class="btn h_back">목록</a>
            </div>
            
        </div>   
        <div class="edu_board_write">
            <div class="table_container">
                <form action="" method="get">
                    <ul>
                        <li class="flex_box_left f_v_center">
                            <label for="e_name">제목</label>
                            <div class="inp_box">
                                <input type="text" class="e_name" placeholder="안녕하세요 총회보고 - 사업보고 게시판입니다.">
                            </div>                
                        </li>
                        <li class="flex_box_left flex_box_top">
                            
                            <label for="text" class="text_area">내용</label>
                            <div class="inp_box">
                                {{-- <img src="/img/m_editor.jpg" alt=""> --}}
                                <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                            </div>
                        </li>                            
                        <li class="flex_box_left f_v_center">
                            <label for="rank">파일첨부</label>
                            <div class="inp_box">
                                <a href="">파일추가</a>
                                <span>파일을 첨부해주세요.</span>
                            </div>
                        </li>
                    </ul>
                    <div class="submit_box flex_box_bet">
                        <input type="submit" class="submit btn h_back" value="글쓰기"/>
                        <input type="submit" class="reset btn" value="취소"/>
                    </div>            
                </form>
            </div>
            
        </div>  
        
    </div>   
@include('m/inc/footer_m')