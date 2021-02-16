@include("boffice/inc/header")
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">금일 방문자</span>
                            <h6 class="stats-small__value count my-3">{{$sta_data_01->cnt}}</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage @if($sta_data_01_per >= 0) stats-small__percentage--increase @else stats-small__percentage--decrease @endif">{{$sta_data_01_per}}%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">전일 방문자</span>
                            <h6 class="stats-small__value count my-3">{{$sta_data_02->cnt}}</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage @if($sta_data_02_per >= 0) stats-small__percentage--increase @else stats-small__percentage--decrease @endif">{{$sta_data_02_per}}%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">일주일간 방문자</span>
                            <h6 class="stats-small__value count my-3">{{$sta_data_03->cnt}}</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage @if($sta_data_03_per >= 0) stats-small__percentage--increase @else stats-small__percentage--decrease @endif">{{$sta_data_03_per}}%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">한달간 방문자</span>
                            <h6 class="stats-small__value count my-3">{{$sta_data_04->cnt}}</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage @if($sta_data_04_per >= 0) stats-small__percentage--increase @else stats-small__percentage--decrease @endif">{{$sta_data_04_per}}%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-12 col-sm-12 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">총 방문자</span>
                            <h6 class="stats-small__value count my-3">{{$sta_data_05_all->cnt}}</h6>
                        </div>
                        <div class="stats-small__data">
                            <span class="stats-small__percentage @if($sta_data_05_per >= 0) stats-small__percentage--increase @else stats-small__percentage--decrease @endif">{{$sta_data_05_per}}%</span>
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-5"></canvas>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End Small Stats Blocks -->
    <div class="row">
        <!-- Users Stats -->
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">회계법인회원 자문요청</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <colgroup>
                            <col width="10%">
                            <col width="50%">
                            <col width="10%">
                            <col width="10%">
                        </colgroup>
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">자문요청자</th>
                                <th scope="col" class="border-0">자문요청 요지</th>
                                <th scope="col" class="border-0">등록일</th>
                                <th scope="col" class="border-0">기능</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($BC002_list) < 1)
                            <tr>
                                <td colspan="6">게시글이없습니다.</td>
                            </tr>
                            @else
                                @foreach ($BC002_list as $key => $value)
                                <tr>
                                    <td>{{$value->writer}}</td>
                                    <td><a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}">{{$value->subject}}</a></td>
                                    <td>{{substr($value->reg_date, 0, 10)}}</td>
                                    <td><a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}">수정</a></td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">기업회원 자문요청</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                        <colgroup>
                            <col width="10%">
                            <col width="50%">
                            <col width="10%">
                            <col width="10%">
                        </colgroup>
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">자문요청자</th>
                                <th scope="col" class="border-0">자문요청 요지</th>
                                <th scope="col" class="border-0">등록일</th>
                                <th scope="col" class="border-0">기능</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($BC002_list) < 1)
                            <tr>
                                <td colspan="6">게시글이없습니다.</td>
                            </tr>
                            @else
                                @foreach ($BC002_list as $key => $value)
                                <tr>
                                    <td>{{$value->writer}}</td>
                                    <td><a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}">{{$value->subject}}</a></td>
                                    <td>{{substr($value->reg_date, 0, 10)}}</td>
                                    <td><a href="/boffice/view?bcc={{$value->bc_code}}&b_idx={{$value->idx}}">수정</a></td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Discussions Component -->
    </div>
    <script type="text/javascript">

        var date01 = parseInt("{{$sta_data_01->cnt}}"),
            date01_01 = parseInt("{{$sta_data_01_01->cnt}}"),
            date01_02 = parseInt("{{$sta_data_01_02->cnt}}"),
            date01_03 = parseInt("{{$sta_data_01_03->cnt}}"),
            date01_04 = parseInt("{{$sta_data_01_04->cnt}}"),
            date01_05 = parseInt("{{$sta_data_01_05->cnt}}"),
            date01_06 = parseInt("{{$sta_data_01_06->cnt}}");

        var date02 = parseInt("{{$sta_data_02->cnt}}"),
            date02_01 = parseInt("{{$sta_data_02_01->cnt}}"),
            date02_02 = parseInt("{{$sta_data_02_02->cnt}}"),
            date02_03 = parseInt("{{$sta_data_02_03->cnt}}"),
            date02_04 = parseInt("{{$sta_data_02_04->cnt}}"),
            date02_05 = parseInt("{{$sta_data_02_05->cnt}}"),
            date02_06 = parseInt("{{$sta_data_02_06->cnt}}");

        var date03 = parseInt("{{$sta_data_03->cnt}}"),
            date03_01 = parseInt("{{$sta_data_03_01->cnt}}"),
            date03_02 = parseInt("{{$sta_data_03_02->cnt}}"),
            date03_03 = parseInt("{{$sta_data_03_03->cnt}}"),
            date03_04 = parseInt("{{$sta_data_03_04->cnt}}"),
            date03_05 = parseInt("{{$sta_data_03_05->cnt}}"),
            date03_06 = parseInt("{{$sta_data_03_06->cnt}}");

        var date04 = parseInt("{{$sta_data_04->cnt}}"),
            date04_01 = parseInt("{{$sta_data_04_01->cnt}}"),
            date04_02 = parseInt("{{$sta_data_04_02->cnt}}"),
            date04_03 = parseInt("{{$sta_data_04_03->cnt}}"),
            date04_04 = parseInt("{{$sta_data_04_04->cnt}}"),
            date04_05 = parseInt("{{$sta_data_04_05->cnt}}"),
            date04_06 = parseInt("{{$sta_data_04_06->cnt}}");

        var date05 = parseInt("{{$sta_data_05->cnt}}"),
            date05_01 = parseInt("{{$sta_data_05_01->cnt}}"),
            date05_02 = parseInt("{{$sta_data_05_02->cnt}}"),
            date05_03 = parseInt("{{$sta_data_05_03->cnt}}"),
            date05_04 = parseInt("{{$sta_data_05_04->cnt}}"),
            date05_05 = parseInt("{{$sta_data_05_05->cnt}}"),
            date05_06 = parseInt("{{$sta_data_05_06->cnt}}");

            console.log(date01,date01_01)
            console.log(date02,date02_01)
            console.log(date03,date03_01)
            console.log(date04,date04_01)
            console.log(date05,date05_01)

        var boSmallStatsDatasets = [
        {
            backgroundColor: 'rgba(0, 184, 216, 0.1)',
            borderColor: 'rgb(0, 184, 216)',
            data: [date01_06, date01_05, date01_04, date01_03, date01_02, date01_01, date01],
        },
        {
            backgroundColor: 'rgba(23,198,113,0.1)',
            borderColor: 'rgb(23,198,113)',
            data: [date02_06, date02_05, date02_04, date02_03, date02_02, date02_01, date02],
        },
        {
            backgroundColor: 'rgba(255,180,0,0.1)',
            borderColor: 'rgb(255,180,0)',
            data: [date03_06, date03_05, date03_04, date03_03, date03_02, date03_01, date03],
        },
        {
            backgroundColor: 'rgba(255,65,105,0.1)',
            borderColor: 'rgb(255,65,105)',
            data: [date04_06, date04_05, date04_04, date04_03, date04_02, date04_01, date04],
        },
        {
            backgroundColor: 'rgb(0,123,255,0.1)',
            borderColor: 'rgb(0,123,255)',
            data: [date05_06, date05_05, date05_04, date05_03, date05_02, date05_01, date05],
        }
        ];

        // Options
        function boSmallStatsOptions(max) {
            return {
                maintainAspectRatio: true,
                responsive: true,
                // Uncomment the following line in order to disable the animations.
                // animation: false,
                legend: {
                display: false
                },
                tooltips: {
                enabled: true,
                custom: false
                },
                elements: {
                point: {
                    radius: 0
                },
                line: {
                    tension: 0.3
                }
                },
                scales: {
                xAxes: [{
                    gridLines: false,
                    scaleLabel: false,
                    ticks: {
                    display: false
                    }
                }],
                yAxes: [{
                    gridLines: false,
                    scaleLabel: false,
                    ticks: {
                    display: false,
                    // Avoid getting the graph line cut of at the top of the canvas.
                    // Chart.js bug link: https://github.com/chartjs/Chart.js/issues/4790
                    suggestedMax: max
                    }
                }],
                },
            };
        }

        // Generate the small charts
        boSmallStatsDatasets.map(function (el, index) {
            var chartOptions = boSmallStatsOptions(Math.max.apply(Math, el.data) + 1);
            var ctx = document.getElementsByClassName('blog-overview-stats-small-' + (index + 1));
            //console.log(index);
            new Chart(ctx, {
                type: 'line',
                data: {
                labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5", "Label 6", "Label 7"],
                datasets: [{
                    label: 'Today',
                    fill: 'start',
                    data: el.data,
                    backgroundColor: el.backgroundColor,
                    borderColor: el.borderColor,
                    borderWidth: 1.5,
                }]
                },
                options: chartOptions
            });
        });
    </script>
    @include("boffice/inc/footer")