@extends('layouts.app')

@section('content')
    <div id="edu_page">
        @if($page)
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        {!! $page->content !!}
                    </div>
                    <div  class="col-12 col-sm-12 col-md-6 e_img" @if($page)  style="background-image:url({{asset('storage/'.$page->img)}})" @endif>
                        <!-- <img src="{{asset('storage/'.$page->img)}}" alt="education_img" /> -->
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection