@if($page)
    <meta name='description' 
          content =  
            "@if($page->seo_description) 
                {!! $page->seo_description !!}
            @else 
                website, websites, web site, design, web-design, web development, app development, development, ai , AI, 
                augmented reality, ar , AR, xr , extended reality, mr, mixed reality, seo, site engine optimization, wordpress, 
                laravel, java, oop, javascript, js, html, mysql, database, css, mongo, mongodb, mongoose, node js,node, express, express js 
            @endif" />
    <title> {{ env('APP_NAME') . ' -' }} @if($page->seo_title) {!! $page->seo_title !!} @else Transform your ideas into digital business @endif </title>
@endif