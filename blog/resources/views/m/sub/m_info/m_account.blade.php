@include('m/inc/head_m')
@include('m/inc/respon_menu')
@include('m/inc/sub_header_m')
    <div class="sub_content m_account">    
        <div class="sub_sub_title inner">
            <div class="sub_title_box flex_box_left f_v_center">
                <img src="/img/m_dot.png" alt="">
                <h4>회계법인현황</h4>
            </div>            
            <p>회계법인 회원가입현황 2021년 00월 현재</p>
        </div>
        <div class="table_container">
            <table class="account_table">
                <caption>회계법인현황</caption>
                <colgroup>
                    <col style="width: 47px">
                    <col style="width: auto">
                </colgroup>
                <thead>
                    <th scope="account_table_col1" class="number">번호</th>
                    <th scope="account_table_col2">회계<br>법인명</th>
                    <th scope="account_table_col3">대표자</th>
                    <th scope="account_table_col4">등록<br>회계사수</th>
                    <th scope="account_table_col4">회원가입<br>여부</th> 
                    <th scope="account_table_col4">회비납부<br>현황</th> 
                    <th scope="account_table_col5">홈페이지<br>url</th> 
                </thead>
                <tbody>
                    <tr>
                        <th>4</th>
                        <td>D회계법인</td>
                        <td>홍길동</td>
                        <td>5명</td>
                        <td>유/무</td>
                        <td>
                            <a href="" class="account_btn">납부</a>
                        </td>
                        <td>
                            <a href=""><i class="fas fa-home"></i>abc.co.kr</a>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>C회계법인</td>
                        <td>홍길동</td>
                        <td>5명</td>
                        <td>유/무</td>
                        <td>
                            <a href="" class="account_btn">납부</a>
                        </td>
                        <td>
                            <a href=""><i class="fas fa-home"></i>abc.co.kr</a>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>B회계법인</td>
                        <td>홍길동</td>
                        <td>5명</td>
                        <td>유/무</td>
                        <td>
                            <a href="" class="account_btn">납부</a>
                        </td>
                        <td>
                            <a href=""><i class="fas fa-home"></i>abc.co.kr</a>
                        </td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>A회계법인</td>
                        <td>홍길동</td>
                        <td>5명</td>
                        <td>유/무</td>
                        <td>
                            <div>
                                <a href="/m_info/m_fee" class="account_btn on">납부</a>
                            </div>                                
                        </td>
                        <td>
                            <a href=""><i class="fas fa-home"></i>abc.co.kr</a>
                        </td>
                    </tr>
                </tbody>
            </table>   
        </div>
        
        
    </div>   
@include('m/inc/footer_m')