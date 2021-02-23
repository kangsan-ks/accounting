@include('inc/head')
@include('inc/sub_header')
@include('inc/erp_header')
            <div class="sub_content b_insurance">
                <ul>
                    @foreach ($view_list as $key => $value)
                    <li> 
                        <div class="b_insur_title flex_box_bet f_v_center">
                            <h5><span>문{{$number--}})</span> {{$value->subject}}</h5>
                            <img src="/img/down_btn.png" alt="downbutton">
                        </div>
                        {!! $value->contents !!}
                        {{-- <p>
                            피보험자인 회계사의 전문업무 수행상의 업무상 과실로 의뢰인 또는 제 3 자에게 직접적 손해를 입힌 경우 법률상 손해배상금
                            및 사고처리에 드는 제반 비용을 보상해 주는 상품입니다.<br>
                            ※ 피보험자 범위 : 기명 피보험자와 그 임직원(기타 약관에 따름)<br>
                            ※ 업무과실 따른 직접손해만 보상. 간접손해/결과적 손해 부보장(기타 약관에 따름)
                        </p>                     --}}
                    </li>
                    @endforeach
                    {{-- <li>
                        <div class="b_insur_title flex_box_bet f_v_center">
                            <h5><span>문3)</span> [사고공동부담비율 (Co-Insurance Clause)]이란 무엇입니까?</h5>
                            <img src="/img/down_btn.png" alt="downbutton">
                        </div> 
                        <p>
                            피보험자인 회계사의 전문업무 수행상의 업무상 과실로 의뢰인 또는 제 3 자에게 직접적 손해를 입힌 경우 법률상 손해배상금
                            및 사고처리에 드는 제반 비용을 보상해 주는 상품입니다.<br>
                            ※ 피보험자 범위 : 기명 피보험자와 그 임직원(기타 약관에 따름)<br>
                            ※ 업무과실 따른 직접손해만 보상. 간접손해/결과적 손해 부보장(기타 약관에 따름)
                        </p>
                    </li>
                    <li>
                        <div class="b_insur_title flex_box_bet f_v_center">
                            <h5><span>문2)</span> 보상하는 손해의 범위는 어디까지 입니까?</h5>
                            <img src="/img/down_btn.png" alt="downbutton">
                        </div>
                        <p>
                            피보험자인 회계사의 전문업무 수행상의 업무상 과실로 의뢰인 또는 제 3 자에게 직접적 손해를 입힌 경우 법률상 손해배상금
                            및 사고처리에 드는 제반 비용을 보상해 주는 상품입니다.<br>
                            ※ 피보험자 범위 : 기명 피보험자와 그 임직원(기타 약관에 따름)<br>
                            ※ 업무과실 따른 직접손해만 보상. 간접손해/결과적 손해 부보장(기타 약관에 따름)
                        </p>
                    </li>
                    <li>
                        <div class="b_insur_title flex_box_bet f_v_center">
                            <h5><span>문1)</span> [전문직업배상책임보험](배상청구기준)이란 무엇입니까?</h5>
                            <img src="/img/down_btn.png" alt="downbutton">
                        </div> 
                        <p>
                            피보험자인 회계사의 전문업무 수행상의 업무상 과실로 의뢰인 또는 제 3 자에게 직접적 손해를 입힌 경우 법률상 손해배상금
                            및 사고처리에 드는 제반 비용을 보상해 주는 상품입니다.<br>
                            ※ 피보험자 범위 : 기명 피보험자와 그 임직원(기타 약관에 따름)<br>
                            ※ 업무과실 따른 직접손해만 보상. 간접손해/결과적 손해 부보장(기타 약관에 따름)
                        </p>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div> 
</div>
@include('inc/footer')
