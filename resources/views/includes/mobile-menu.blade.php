<div id="m_menu">
    <div class="container">
        <div class="row">
            <div class="m_logo_part">
                <a href="/"><img src="{{asset('storage/images/logo/logo.png')}}"  alt='mobile_menu_logo'/></a>
                <img class="m_open" src="{{asset('storage/images/noun_menu_3.png')}}" alt='mobile_menu_logo' />
            </div>
        </div>
    </div>
</div>
<div id="logo_s_part" class="animated wow bounceInRight">
    <img src="{{asset('storage/images/noun_close.png') }}" class="m_close"/>
    
    <div class="menu_items_wrapper">
        @if($menu)
            @foreach($menu as $item)
                <div class="menu_item"> 
                    <a href="{{$item->url}}">{{ $item->title }}</a> 
                    <div class='menu_item_divider'></div> 
                </div>    
            @endforeach
        @endif
    </div>
    
    <div class="menu_divider"></div>

    <div class="m_socials">
        @if($socials)
            @foreach($socials as $social)
                <a href="{{$social->url}}">{!! $social->icon !!}</a>
            @endforeach
        @endif
    </div>
</div>