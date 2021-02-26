<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <a href="/" id="logo_block">
                        <img src="{{ asset('storage/images/logo/logo_white.png') }}" alt='logo' />
                    </a>
                </div>
                <div class="col-12 col-sm-4">
                    @if(isset($menu))
                        <ul id="f_part">
                            @foreach($menu as $item)
                                <li><a href="{{$item->url}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="col-12 col-sm-4">
                    @if($socials)
                        <ul id="socials">
                            @foreach($socials as $social)
                                <li><a href="{{ $social->url }}"> {!! $social->icon !!} </a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
        <div class='policy'> 
            <i class="far fa-copyright"></i> 
            <span class="date">{{strtoupper(env('APP_NAME'))}} {{ date('Y') }}  |</span> 
            <span class="rights">all rights reserved by {{ strtoupper(env('APP_NAME')) }}  </span> 
            <!-- <a href="#" target="_blank" >privacy policy</a> -->
        </div>
    </div>
</footer>