@include('inc/head')
@include('inc/sub_header')

            <div class="sub_content account">
                <img src="/img/dot.png" alt="dot_img">
                <h4>회계법인현황</h4>
                <p>회계법인 회원가입현황 <?=date('Y')?>년 <?=date('m')?>월 현재</p>
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
                        @foreach ($list as $key => $value)
                        <tr>
                            <th>{{$listCnt--}}</th>
                            <td>{{$value->subject}}</td>
                            <td>{{$value->writer2}}</td>
                            <td>{{$value->ect_num1}}명</td>
                            <td>
                                @if ($value->use_status == 'Y')
                                    유
                                @else
                                    무
                                @endif
                            </td>
                            <td>
                                <div class="account_fee">
                                    <a href="javascript:void(0);" class="account_btn @if ($value->sumData == 0) on @endif" data-poIdx="{{$key}}">
                                        @if ($value->sumData == 0)
                                            납부
                                        @else
                                            미납부
                                        @endif
                                    </a>
                                </div>
                            </td>
                            <td>
                                <a href="{{$value->link_value}}" target="_blank"><i class="fas fa-home"></i>{{$value->link_value}}</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>   
                <div class="popup account_fee_popup flex_box_cen">
                    @foreach ($list2 as $key => $value)
                    <div class="pop_inner" style="display:none;">
                        <h5>{{$value->subject}} 회비 납부현황 <span><?=date('Y')?>년 <?=date('m')?>월 현재</span></h5>
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
                                @php
                                    $pri01Sum = 0;
                                    $pri02Sum = 0;
                                    $pri03Sum = 0;
                                @endphp
                                @foreach ($list[$key]->listData as $key2 => $value2)
                                @php
                                    $pri01Sum = $pri01Sum + $value2->price01_data;
                                    $pri02Sum = $pri02Sum + $value2->price02_data;
                                    $pri03Sum = $pri03Sum + $value2->price03_data;
                                @endphp
                                <tr>
                                    <td>{{$value2->year_data}}</td>
                                    <td>{{number_format($value2->num_data)}}</td>
                                    <td>{{number_format($value2->price01_data)}}</td>
                                    <td>{{number_format($value2->price02_data)}}</td>
                                    <td>{{number_format($value2->price03_data)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="total">합계</td>
                                    <td>{{number_format($pri01Sum)}}</td>
                                    <td>{{number_format($pri02Sum)}}</td>
                                    <td>{{number_format($pri03Sum)}}</td>
                                </tr>             
                            </tfoot>
                        </table>  
                        <a href="" class="close">close</a>  
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> 
</div>
@include('inc/footer')
