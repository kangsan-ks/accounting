<div class="sub_content erp">
    <img src="/img/dot.png" alt="dot"> 
    <h4>
        @if(request()->segment(3) == 'ed02')
        품질관리 ERP 지원 신청
        @elseif(request()->segment(3) == 'ed03')
        품질관리 ERP 도입 신청
        @elseif(request()->segment(3) == 'ed04')
        품질관리 ERP 교육 신청
        @elseif(request()->segment(2) == 'buy')
        공동구매
        @elseif(request()->segment(2) == 'pa')
        PA,회계CFO 아웃소싱
        @elseif(request()->segment(2) == 'insurance')
        전문인세무보험
        @elseif(request()->segment(3) == 'report01')
        사업보고
        @elseif(request()->segment(3) == 'report02')
        결산보고
        @elseif(request()->segment(3) == 'report03')
        사업계획
        @elseif(request()->segment(3) == 'report04')
        예산
        @elseif(request()->segment(3) == 'sp04')
        자문보고
        @elseif(request()->segment(3) == 'sp02')
        자문신청
        @elseif(request()->segment(2) == 'advice')
        회계법인 자문 요청
        @endif
    </h4>  

    @if(request()->segment(3) == 'ed02')
    <p>품질관리ERP 지원신청서를 다운받아서 작성시 파일첨부 부탁드립니다.</p>
    <a href="" class="erp_download">지원신청서 다운로드<img src="/img/download.png" alt="download"></a>
    @elseif(request()->segment(3) == 'ed03')
    <p>품질관리ERP 도입신청서를 다운받아서 작성시 파일첨부 부탁드립니다.</p>
    <a href="" class="erp_download">도입신청서 다운로드<img src="/img/download.png" alt="download"></a>
    @elseif(request()->segment(3) == 'ed04')
    <p>품질관리ERP 교육신청서를 다운받아서 작성시 파일첨부 부탁드립니다.</p>
    <a href="" class="erp_download">교육신청서 다운로드<img src="/img/download.png" alt="download"></a>
    @elseif(request()->segment(2) == 'buy')
    <p>공동구매 주문신청서를 다운받아서 작성시 파일첨부 부탁드립니다.</p>
    <a href="" class="erp_download">공동구매 주문신청서 다운로드<img src="/img/download.png" alt="download"></a>
    @elseif(request()->segment(2) == 'insurance')
    <p>가입안내문 PDF를 꼭 다운받아서 작성시 파일첨부 부탁드립니다.</p>
    <a href="" class="erp_download">가입안내문 다운로드<img src="/img/download.png" alt="download"></a>
    @endif  
</div>