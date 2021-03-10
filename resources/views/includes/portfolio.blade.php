<div id="portfolio" style="background-image:url({{asset('storage/images/portfolio_back.png')}})">
    <div class="container">
        <div class="row">
            @if($works)
                @foreach($works as $work)
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="work_item">
                            <div class="work_img">
                                <a href="{{$work->url}}" target="_blank"><img class="img-fluid animated wow fadeIn" src="{{ asset('storage/'.$work->img[0]) }}" /></a>
                            </div>
                            <div class="work_name animated wow fadeIn">
                                <a href="{{$work->url}}" target="_blank"><p>{{$work->title}}</p></a>
                            </div>
                        </div>
                    </div>               
                @endforeach
            @endif
        </div>
    </div>
    <div class="work_paginate">
        <div class="container">{{ $works->links() }}</div>
    </div>
</div>