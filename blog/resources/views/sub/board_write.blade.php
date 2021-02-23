@include('inc/head')
@include('inc/sub_header')
@include('inc/erp_header')
        @if(request()->segment(3) != 'sp02')
        <div class="sub_content edu_board">
            <div class="edu_board_write">
                <form action="/FAction/write" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="bcc" value="BC024">
                    <input type="hidden" name="writer2" value="{{session('user_id')}}">
                    <ul>
                        <li>
                            <label for="e_name">작성자</label>
                            <div class="inp_box">
                                <input type="text" name="writer" class="writer" placeholder="홍길동" value="{{session('user_name')}}">
                            </div>                
                        </li>

                        <li>
                            <label for="b_number">제목</label>
                            <div class="inp_box">
                                <input type="text" name="subject" class="subject" placeholder="안녕하세요 총회보고 - 사업보고 게시판입니다.">
                            </div>
                        </li>

                        <li>
                            <label for="text" class="text_area">내용</label>
                            <div class="inp_box">
                                <textarea name="contents" id="" rows="11" placeholder="내용을 입력해주세요"></textarea>
                            </div>
                        </li>
                        
                        <li>
                            <label for="rank">파일첨부<span>*</span></label>
                            <div class="inp_box">
                                {{-- <a href="">파일추가</a>
                                <span>파일을 첨부해주세요.</span> --}}
                                <p class="url_box">        
                                    <span class="file-select"><input type="file" name="files" class="input-file"></span>
                                </p>            
                            </div>
                        </li>
                    </ul>
                    <div class="submit_box flex_box_cen">
                        <a href="#none">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                        <a href="javascript:history.go(-1);">
                            <input type="reset" class="reset" onclick="javascript:history.go(-1);" value="취소"/>
                        </a>
                    </div>            
                </form>
            </div>  
        </div>
        
        

        {{-- 자문신청 게시판 style --}}

        @elseif(request()->segment(3) == 'sp02')
        <div class="sub_content edu_board">
            <div class="edu_board_write">
                <form action="/FAction/write" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="pidx" value="{{request()->pidx}}">
                    <input type="hidden" name="bcc" value="{{request()->bcc}}">
                    <ul>
                        <li>
                            <label for="e_name">자문요청자</label>
                            <div class="inp_box">
                                <input type="text" name="writer" value="{{$m_data->m_name}}" readonly>
                            </div>                
                        </li>

                        <li>
                            <label for="b_number">소속</label>
                            <div class="inp_box">
                                <input type="text" name="etc1" value="{{$m_data->m_company_name}}" readonly>
                            </div>
                        </li>
                        <li>
                            <label for="b_number">전화번호</label>
                            <div class="inp_box">
                                <input type="text" name="contact_number" placeholder="(-제외하고 입력해주세요)" value="{{$m_data->m_contact_number}}">
                            </div>
                        </li>
                        <li>
                            <label for="b_number">팩스</label>
                            <div class="inp_box">
                                <input type="text" name="contact_number2" placeholder="(-제외하고 입력해주세요)">
                            </div>
                        </li>
                        <li>
                            <label for="b_number">이메일</label>
                            <div class="inp_box">
                                <input type="text" name="email" value="{{$m_data->m_email}}">
                            </div>
                        </li>
                        <li>
                            <label for="b_number">자문위원</label>
                            <div class="inp_box">
                                <input type="text" name="subject" value="{{$p_data->m_name}}" readonly>
                            </div>
                        </li>
                        <li>
                            <label for="b_number">자문요청분야</label>
                            <div class="inp_box">
                                <input type="text" name="category" value="{{$p_data->m_professional}}">
                            </div>
                        </li>

                        <li>
                            <label for="text" class="text_area">질문개요</label>
                            <div class="inp_box">
                                <textarea name="contents" rows="11"></textarea>
                            </div>
                        </li>
                        
                        <li>
                            <label for="rank">파일첨부<span>*</span></label>
                            <div class="inp_box">
                                {{-- <a href="">파일추가</a>
                                <span>파일을 첨부해주세요.</span> --}}
                                <p class="url_box">        
                                    <span class="file-select"><input type="file" name="files" class="input-file"></span>
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