@include('m/inc/head_m')
@include('m/inc/respon_menu')
@include('m/inc/sub_header_m')
    <div class="sub_content m_fee">    
        <div class="popup account_fee_popup">
                <h5>A회계법인 회비 납부현황</h5>
                <p>0000년 00월 현재</p>
                <table class="account_popup_table" >
                    <caption>회계법인 회비 납부현황</caption>
                    <colgroup>
                        <col style="width:20%">                      
                        <col style="width:20%">                      
                        <col style="width:20%">                      
                        <col style="width:20%">                      
                        <col style="width:20%">                      
                    </colgroup>
                    <thead>
                        <th>연도</th>
                        <th>구성<br>원수</th>
                        <th>회비<br>금액</th>
                        <th>납부<br>금액</th>
                        <th>미납(선납)<br>금액</th> 
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
        </div>
    </div>   
@include('m/inc/footer_m')