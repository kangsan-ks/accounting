@include('inc/head')
@include('inc/sub_header')
@include('inc/erp_header')
        @if(request()->segment(3) == 'report01')
            <div class="sub_content edu_board">
                <div class="edu_board_list">
                    <table class="edu_board_table">
                        <caption>사업보고 게시판</caption>
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
                            <th scope="edu_board_col1">신청자</th>
                            <th scope="edu_board_col1">등록일</th>
                            <th scope="edu_board_col1">파일</th> 
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                        </tbody>
                    </table>    
                    <div class="pagination flex_box_cen">
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
                        <div class="e_list submit_box">
                            <a href="/info/report/report01/write">
                                <input type="submit" class="submit btn" value="글쓰기"/>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        @elseif(request()->segment(3) == 'report02')
            <div class="sub_content edu_board">
                <div class="edu_board_list">
                    <table class="edu_board_table">
                        <caption>결산보고 게시판</caption>
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
                            <th scope="edu_board_col1">신청자</th>
                            <th scope="edu_board_col1">등록일</th>
                            <th scope="edu_board_col1">파일</th> 
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 결산보고 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                        </tbody>
                    </table>    
                    <div class="pagination flex_box_cen">
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
                        <div class="e_list submit_box">
                            <a href="/info/report/report02/write">
                                <input type="submit" class="submit btn" value="글쓰기"/>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        @elseif(request()->segment(3) == 'report03')
            <div class="sub_content edu_board">
                <div class="edu_board_list">
                    <table class="edu_board_table">
                        <caption>사업계획 게시판</caption>
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
                            <th scope="edu_board_col1">신청자</th>
                            <th scope="edu_board_col1">등록일</th>
                            <th scope="edu_board_col1">파일</th> 
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 사업계획 게시판입니다.</a></td>
                                <td>홍길동</td>
                                <td>20-12-25</td>
                                <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                            </tr>
                        </tbody>
                    </table>    
                    <div class="pagination flex_box_cen">
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
                        <div class="e_list submit_box">
                            <a href="/info/report/report03/write">
                                <input type="submit" class="submit btn" value="글쓰기"/>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        @elseif(request()->segment(3) == 'report04')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>예산 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">안녕하세요 총회보고 - 예산 게시판입니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/info/report/report04/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'buy')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>공동구매 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">삼성전자 공동구매 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/business/buy/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>       
        @elseif(request()->segment(2) == 'pa')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>공동구매 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무의 기본 개념</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">PA업무의 유형 및 사례</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계아웃소싱 업무 유형 및 사례</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">CFO 아웃소싱 업무 유형 및 사례</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무의 기본 개념</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">PA업무의 유형 및 사례</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계아웃소싱 업무 유형 및 사례</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">CFO 아웃소싱 업무 유형 및 사례</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무의 기본 개념</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">PA업무의 유형 및 사례</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/business/pa/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'board')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>공동사업 일반 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">공동사업 일반 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/business/board/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'data_room')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>업무자료실 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">업무자료실 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/business/data_room/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'audit_system')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>회계감사제도개선 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">회계감사제도개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/system/audit_system/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'operation')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>한공회운영개선 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">한공회운영개선 게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/system/operation/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'board01')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>자유 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자유게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/commu/c_board/board01/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'board02')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>질문 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">질문게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/commu/c_board/board02/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'board03')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>업무협조게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">업무협조게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/commu/c_board/board03/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'room01')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>감사업무게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">감사업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/commu/c_data_room/room01/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'room02')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>세무업무게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">세무업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/commu/c_data_room/room02/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'room03')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>컨설팅업무게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">컨설팅업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/commu/c_data_room/room03/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'room04')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>기타업무게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">기타업무게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/commu/c_data_room/room04/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'sp03')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>자문내용게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문내용게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/support/q_support/sp03/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'sp04')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>자문보고게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">자문보고게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/support/q_support/sp04/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'ed02')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>품질관리지원게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 지원 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/support/q_edu/ed02/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'ed03')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>품질관리도입게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 도입 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/support/q_edu/ed03/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(3) == 'ed04')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>품질관리교육게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/{{request()->segment(3)}}/view">품질관리ERP 교육 신청합니다.</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/support/q_edu/ed04/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'care_room')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>품질관리자료실게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">품질관리자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/support/care_room/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'regular')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>정기연수 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">정기연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/edu/regular/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'web')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>웹연수 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">웹연수게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/edu/web/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        @elseif(request()->segment(2) == 'edus')
        <div class="sub_content edu_board">
            <div class="edu_board_list">
                <table class="edu_board_table">
                    <caption>교육자료실 게시판</caption>
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
                        <th scope="edu_board_col1">신청자</th>
                        <th scope="edu_board_col1">등록일</th>
                        <th scope="edu_board_col1">파일</th> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="txt_left"><a href="/{{request()->segment(1)}}/{{request()->segment(2)}}/view">교육자료실게시판</a></td>
                            <td>홍길동</td>
                            <td>20-12-25</td>
                            <td><a href=""><img src="/img/disk.png" alt="파일"></a></td>
                        </tr>
                    </tbody>
                </table>    
                <div class="pagination flex_box_cen">
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
                    <div class="e_list submit_box">
                        <a href="/edu/edus/write">
                            <input type="submit" class="submit btn" value="글쓰기"/>
                        </a>
                    </div>
                </div> 
            </div>
        </div>
        


        {{-- 자문신청 게시판 style --}}

        @elseif(request()->segment(3) == 'sp02')
        <div class="sub_content edu_board sp02">
               
            <div class="edu_board_list">
                <ul class="flex_box_bet">
                    <li class="sp02_list">
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
                    </li>
                    <li class="sp02_list">
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
                    </li>
                    <li class="sp02_list">
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
                    </li>
                    <li class="sp02_list">
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
                    </li>
                    <li class="sp02_list">
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
                    </li>
                    <li class="sp02_list">
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
                    </li>
                    <li class="sp02_list">
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
                    </li>
                    <li class="sp02_list">
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
                    </li>
                    <li class="sp02_list">
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
                    </li>
                    
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
                    <a href="/support/q_support/sp02/write" class="btn">자문신청</a>
                </div>   
            </div>
               
             
        </div>
        @endif
    </div>
</div>
@include('inc/footer')       