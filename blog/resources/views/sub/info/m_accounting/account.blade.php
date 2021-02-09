@include('inc/head')
@include('inc/sub_header')

            <div class="sub_content account">
                <img src="/img/dot.png" alt="dot_img">
                <h4>회계법인현황</h4>
                <p>회계법인 회원가입현황 2021년 00월 현재</p>
                <table class="account_table">
                    <caption>회계법인현황</caption>
                    <colgroup>
                        <col class="account_table_col1">
                        <col class="account_table_col2">
                        <col class="account_table_col3">
                        <col class="account_table_col4">
                        <col class="account_table_col4">
                        <col class="account_table_col4">
                        <col class="account_table_col5">
                    </colgroup>
                    <thead>
                        <th scope="account_table_col1" class="number">번호</th>
                        <th scope="account_table_col2">회계법인명</th>
                        <th scope="account_table_col3">대표자</th>
                        <th scope="account_table_col4">등록회계사수</th>
                        <th scope="account_table_col4">회원가입여부</th> 
                        <th scope="account_table_col4">회비납부현황</th> 
                        <th scope="account_table_col5">홈페이지url</th> 
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
                                <div class="account_fee">
                                    <a href="" class="account_btn on">납부</a>
                                </div>                                
                            </td>
                            <td>
                                <a href=""><i class="fas fa-home"></i>abc.co.kr</a>
                            </td>
                        </tr>
                    </tbody>
                </table>   
                <div class="popup account_fee_popup flex_box_cen">
                    <div class="pop_inner">
                        <h5>A회계법인 회비 납부현황 <span>0000년 00월 현재</span></h5>
                        <table class="account_popup_table">
                            <caption>회계법인 회비 납부현황</caption>
                            <colgroup>
                                <col style="width:25%;">                      
                            </colgroup>
                            <thead>
                                <th>연도</th>
                                <th>구성원수</th>
                                <th>회비금액</th>
                                <th>납부금액</th>
                                <th>미납(선납)금액</th> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2020</td>
                                    <td>5명</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                </tr>
                                <tr>
                                    <td>2020</td>
                                    <td>5명</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                </tr>
                                <tr>
                                    <td>2020</td>
                                    <td>5명</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                </tr>
                                <tr>
                                    <td>2020</td>
                                    <td>5명</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                </tr>                            
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="total">합계</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                    <td>00,000</td>
                                </tr>             
                            </tfoot>
                        </table>  
                        <a href="" class="close">close</a>  
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
@include('inc/footer')
