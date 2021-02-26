<div class='opps'>
    <p>what are your opportunities ?</p>
    <div id="opps_mid">
        
        <div class="container">
            <div class="row">
                @if(isset($opps))
                    <div class="col-12 col-sm-6">
                        @foreach($opps as $op)
                            @if($loop->iteration == 1)
                                
                                <div class="single_op_wrapper d-flex" data-id="{{$op->id}}">
                                    <span class="single span_hover">0{{ $loop->iteration }}</span>
                                    <div class="single_op">
                                        <h5 class="single_h5 single_h5_hover">{{ $op->title }}</h5>
                                        <p class="animated wow single_p single_p_hover fadeInUp">{!! $op->content !!}</p>
                                    </div>
                                    <span class="round_arrow arrow_hover animated wow fadeInLeft">
                                        <img src="{{asset('storage/images/noun_arrow_right.png')}}" alt="arrow_right" />                                    
                                    </span>
                                </div>
                        
                            @else
                                
                                <div class="single_op_wrapper d-flex" data-id="{{$op->id}}">                            
                                    <span class="single">0{{ $loop->iteration }}</span>
                                    <div class="single_op">
                                        <h5 class="single_h5">{{ $op->title }}</h5>
                                        <p class="animated wow single_p fadeInUp">{!! $op->content !!}</p>
                                    </div>
                                    <span class="round_arrow animated wow fadeInLeft">
                                        <img src="{{asset('storage/images/noun_arrow_right.png')}}" alt="arrow_right" />
                                    </span>
                                </div>

                            @endif

                        @endforeach
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        @foreach($opps as $op)
                            @if($loop->iteration == 1)

                                <div class="opp_img single_op_img animated wow fadeInRight"  data-img-id="{{$op->id}}"
                                    @if($op->img)  style="background-image:url({{asset('storage/'.$op->img)}})" @endif
                                ></div>

                            @else
                                
                                <div class="opp_img animated wow fadeInRight" data-img-id="{{$op->id}}"
                                    @if($op->img)  style="background-image:url({{asset('storage/'.$op->img)}})" @endif
                                ></div>

                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    
    </div>

</div>