@include("boffice/inc/header")

    <!-- Default Light Table -->
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                    <h6 class="m-0">계정 리스트</h6>
                </div>
                <div class="card-body p-0 pb-3 text-center">

                    <table class="table mb-0">
                        <colgroup>
                            <col width="5%">
                            <col width="35%">
                            <col width="10%">
                        </colgroup>
                        <thead class="bg-light">
                            <tr>
                                <th scope="col" class="border-0">#</th>
                                <th scope="col" class="border-0">아이디</th>
                                <th scope="col" class="border-0">기능</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($view_list) > 0)
                            @foreach ($view_list as $key => $value)
                            <tr>
                                <td>{{$number--}}</td>
                                <td><a href="/boffice/admView?b_idx={{$value->idx}}">{{$value->user_id}}</a></td>
                                <td>
                                    <a href="/boffice/admView?b_idx={{$value->idx}}" class=" btn btn-success mr-2">자세히</a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">계정이 없습니다.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 center-block">
        <ul class="pagination text-center center-block">
            {!! $paging_view !!}
        </ul>
        </div>
    </div>
@include("boffice/inc/footer")
