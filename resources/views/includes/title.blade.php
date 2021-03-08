@if($page)
    <title>
    	 {{ env('APP_NAME') . ' -' }} @if($page->seo_title) {!! $page->seo_title !!} @else Transform your ideas into digital business @endif
    </title>
    <meta name='description' 
          content =  
            "@if($page->seo_description) 
                {!! $page->seo_description !!}
            @else
                We build and transform your business into successful digital business                 
            @endif" />
@endif