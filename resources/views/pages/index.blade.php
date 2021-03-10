@extends('layouts.app')

@section('content')
    <div id="main_wrapper"  @if($page)  style="background-image:url({{asset('storage/'.$page->img)}})" @endif > 
        
        <!-- Middle part  -->    
        <div id='m_part' class='animated wow fadeInUp'>
            <div class="container">
                <div class='row'>
                    <div class="col" id='m_text'>
                        @if($page) {!! $page->content !!}  @endif
                        <a href="#contact-us">Get started</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div id='opps_wrapper'>
        <div class='container'>
            <div class='row'>
                <div class="col preface">
                    <h2> We build and transform businesses by launching market-leading 
                        digital products, platforms, and experiences that fuel their growth. 
                    </h2>
                </div>
            </div>
        </div>
        @include('includes.opportunities')
    </div>
    
    <div id="services">
        @include('includes.services')
    </div>

    @include('includes.portfolio')
    
    <div id='contact_us'>
        @include('includes.contact-us')
    </div>
@endsection