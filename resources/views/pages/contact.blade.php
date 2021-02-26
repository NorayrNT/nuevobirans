@extends('layouts.app')

@section('content')
    <div id="contact_page">
        <div class="c_first_block" style="@if($page) background-image:url({{asset('storage/'.$page->img)}}) @endif">
            <div class='contacts_door'>
                @if($contacts)
                    <h3>Email Us</h3>
                    @if($contacts)
                        <p class="c_mail_header">business</p>
                        <p class='c_mail'>{{ $contacts[0]->getJson('email','0') }}</p>
                    @endif

                    <h3 class='s_h2'>call us</h3>
                    @foreach($contacts as $contact)
                        <div class='phone_line'>
                            <span class='c_country'>{{ $contact->country }}</span>
                            <span class="first_phone">{{ $contact->getJson('phone','0') }}</span>
                        </div>
                    @endforeach
                @endif

                @if($socials)
                    <div id='c_socials'>
                        @foreach($socials as $social)
                            <a href="{{$social->url}}">{!! $social->icon !!}</a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div id="map">
            @if($map) {!! $map !!} @endif
        </div>
        <div class="lets_discuss">
            <h2>let's turn your idea into reality </h2>
            <p>drop us a line and we'll get back to you asap ! </p>
        </div>
    </div>
    
    @include('includes.contact-us')

@endsection