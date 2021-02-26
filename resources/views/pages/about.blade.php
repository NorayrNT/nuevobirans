@extends('layouts.app')

@section('content')

    <div id="about_page">
        <div class='about_block' @if($page) style="background-image:url(storage/{{$page->img}})" @endif>
            <div class="container" >
                <div class="row">
                    <div class="inner_content">
                        <h6>About company_name</h6>
                        <h5>who we are</h5>
                        <p>Since 2019, we assist our customer to transform their products, processes, and people using the most advanced 
                            technology and design.
                            <br>
                            Our team is aimed at generating and developing new ideas in order to ease lives of others.
                            <br>
                            We are open to new ideas and business cooperations. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="our_work">
            <div class="container">
                <div class="row">
                    <div class="how_we_work">
                       @if($page)
                            {!! $page->content !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection