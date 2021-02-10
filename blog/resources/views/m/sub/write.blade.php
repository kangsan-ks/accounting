@include('m/inc/head_m')
@include('m/inc/respon_menu')
@include('m/inc/sub_header_m')
    @if(request()->segment(3) == 'm_report01')
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="안녕하세요 총회보고 - 사업보고 게시판입니다.">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            {{-- <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span> --}}
                            <p class="url_box">        
                                <span class="file-select"><input type="file" class="input-file"></span>
                            </p>            
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @elseif(request()->segment(3) == 'm_report02')
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="안녕하세요 총회보고 - 결산보고 게시판입니다.">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            {{-- <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span> --}}
                            <p class="url_box">        
                                <span class="file-select"><input type="file" class="input-file"></span>
                            </p>            
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @elseif(request()->segment(3) == 'm_report03')
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="안녕하세요 총회보고 - 사업계획 게시판입니다.">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            {{-- <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span> --}}
                            <p class="url_box">        
                                <span class="file-select"><input type="file" class="input-file"></span>
                            </p>            
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @elseif(request()->segment(3) == 'm_report04')
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="안녕하세요 총회보고 - 예산 게시판입니다.">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            {{-- <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span> --}}
                            <p class="url_box">        
                                <span class="file-select"><input type="file" class="input-file"></span>
                            </p>            
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @elseif(request()->segment(2) == 'm_buy')
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="삼성전자 공동구매 신청합니다.">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span>
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @elseif(request()->segment(2) == 'm_pa')
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="CFO 아웃소싱 업무 유형 및 사례">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span>
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @elseif(request()->segment(2) == 'm_board')
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="공동사업 일반 게시판">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span>
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @elseif(request()->segment(2) == 'm_data_room')
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="업무자료실 게시판">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span>
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @else
    <div class="sub_content m_buy"> 
        <div class="edu_board_write">
            <form action="" method="get">
                <ul>
                    <li>
                        <label for="e_name">작성자</label>
                        <div class="inp_box">
                            <input type="text" class="e_name" placeholder="홍길동">
                        </div>                
                    </li>

                    <li>
                        <label for="b_number">제목</label>
                        <div class="inp_box">
                            <input type="text" class="b_number" placeholder="업무자료실 게시판">
                        </div>
                    </li>

                    <li>
                        <label for="text" class="text_area">내용</label>
                        <div class="inp_box">
                            <textarea name="" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                        </div>
                    </li>
                    
                    <li>
                        <label for="rank">파일첨부<span>*</span></label>
                        <div class="inp_box">
                            <a href="">파일추가</a>
                            <span>파일을 첨부해주세요.</span>
                        </div>
                    </li>
                </ul>
                <div class="submit_box flex_box_cen">
                    <input type="submit" class="submit btn h_back" value="글쓰기"/>
                    <input type="submit" class="reset btn" value="취소"/>
                </div>            
            </form>
        </div> 
    </div>
    @endif
@include('m/inc/footer_m')