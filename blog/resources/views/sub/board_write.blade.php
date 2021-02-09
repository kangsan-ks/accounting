@include('inc/head')
@include('inc/sub_header')
@include('inc/erp_header')
        @if(request()->segment(3) == 'report01')
        <div class="sub_content edu_board">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'report02')
        <div class="sub_content edu_board">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'report03')
        <div class="sub_content edu_board">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>        
        @elseif(request()->segment(3) == 'report04')
        <div class="sub_content edu_board">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'buy')
        <div class="sub_content edu_board">
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
                                {{-- <a href="">파일추가</a>
                                <span>파일을 첨부해주세요.</span> --}}
                                <p class="url_box">        
                                    <span class="file-select"><input type="file" class="input-file"></span>
                                </p>            
                            </div>
                        </li>
                    </ul>
                    <div class="submit_box flex_box_cen">
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'pa')
        <div class="sub_content edu_board">
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
                                {{-- <a href="">파일추가</a>
                                <span>파일을 첨부해주세요.</span> --}}
                                <p class="url_box">        
                                    <span class="file-select"><input type="file" class="input-file"></span>
                                </p>            
                            </div>
                        </li>
                    </ul>
                    <div class="submit_box flex_box_cen">
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'board')
        <div class="sub_content edu_board">
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
                                {{-- <a href="">파일추가</a>
                                <span>파일을 첨부해주세요.</span> --}}
                                <p class="url_box">        
                                    <span class="file-select"><input type="file" class="input-file"></span>
                                </p>            
                            </div>
                        </li>
                    </ul>
                    <div class="submit_box flex_box_cen">
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'data_room')
        <div class="sub_content edu_board">
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
                                {{-- <a href="">파일추가</a>
                                <span>파일을 첨부해주세요.</span> --}}
                                <p class="url_box">        
                                    <span class="file-select"><input type="file" class="input-file"></span>
                                </p>            
                            </div>
                        </li>
                    </ul>
                    <div class="submit_box flex_box_cen">
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'audit_system')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="회계감사제도 게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'operation')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="한공회운영개선 게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'board01')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="자유게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'board02')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="질문게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'board03')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="업무협조게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'room01')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="감사업무게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'room02')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="세무업무게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'room03')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="컨설팅업무게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'room04')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="기타업무게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'sp03')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="자문내용게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'sp04')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="자문보고게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'ed02')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="품질관리ERP 지원 신청합니다.">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'ed03')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="품질관리ERP 도입 신청합니다.">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(3) == 'ed04')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="품질관리ERP 교육 신청합니다.">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'care_room')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="품질관리자료실게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'regular')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="정기연수게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'web')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="웹연수게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @elseif(request()->segment(2) == 'edus')
        <div class="sub_content edu_board">
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
                                <input type="text" class="b_number" placeholder="교육자료실게시판">
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
                        <a href="">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        

        {{-- 자문신청 게시판 style --}}

        @elseif(request()->segment(3) == 'sp02')
        <div class="sub_content edu_board">
            <div class="edu_board_write">
                <form action="" method="get">
                    <ul>
                        <li>
                            <label for="e_name">자문요청자</label>
                            <div class="inp_box">
                                <input type="text">
                            </div>                
                        </li>

                        <li>
                            <label for="b_number">소속</label>
                            <div class="inp_box">
                                <input type="text">
                            </div>
                        </li>
                        <li>
                            <label for="b_number">전화번호</label>
                            <div class="inp_box">
                                <input type="text" placeholder="(-제외하고 입력해주세요)">
                            </div>
                        </li>
                        <li>
                            <label for="b_number">팩스</label>
                            <div class="inp_box">
                                <input type="text" placeholder="(-제외하고 입력해주세요)">
                            </div>
                        </li>
                        <li>
                            <label for="b_number">이메일</label>
                            <div class="inp_box">
                                <input type="text">
                            </div>
                        </li>
                        <li>
                            <label for="b_number">자문위원</label>
                            <div class="inp_box">
                                <input type="text">
                            </div>
                        </li>
                        <li>
                            <label for="b_number">자문요청분야</label>
                            <div class="inp_box">
                                <input type="text">
                            </div>
                        </li>

                        <li>
                            <label for="text" class="text_area">질문개요</label>
                            <div class="inp_box">
                                <textarea name="" id="" rows="11"></textarea>
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
                        <a href="">
                            <input type="submit" class="submit btn" value="신청완료"/>
                        </a>
                        <a href="">
                            <input type="submit" class="reset" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        @endif
    </div>
</div>
@include('inc/footer')       