<header>
    <!-- Mobile menu header -->
    @include('includes.mobile-menu')
    
    <!-- Desktop header -->
    <nav>
        <div id="top_nav" > 
            <div class="container">
                <div class='row'>
                    <div class="col-4 ">
                        <a href="/" id="logo_block">
                        <img src="{{ asset('storage/images/logo/logo.png') }}" alt='logo' />
                        </a>
                    </div>
                    <div class="col-8" >
                        @if(count($menu))
                            <ul id="s_part" class="d-flex">
                                @foreach($menu as $item)                                
                                    <li><a href="{{$item->url}}">{{$item->title}}</a></li>                                
                                @endforeach
                                @if(request()->path() !== 'contact')
                                    <li>  
                                        <span class='git'>
                                            <a href="/contact#contact-us">get in touch</a>
                                        </span>
                                    </li>                            
                                @endif
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>    