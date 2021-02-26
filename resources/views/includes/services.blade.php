@if(isset($services))
    <div id="service_block">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-6 col-sm-6 col-md-3 service_item">
                        <div class="text-center ser_content">
                            <img src="{{ asset('storage/'.$service->icon) }}"  alt="service_icon"/>
                            <h5>{{ $service->title }}</h5>
                            <p>{!! $service->description !!}</p>
                        </div>
                    </div>
                @endforeach            
            </div>
        </div>
    </div>
@endif