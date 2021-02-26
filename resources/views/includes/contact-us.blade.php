<div id='contact-us'>
    <div class="container">
        <div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        </div>
        
        <h2> @if(request()->path() === 'contact') contact us ! @else say hello to us !  @endif </h2>

        <div> @if(session('msg_status')) {{ session('msg_status') }} @endif </div>
        
        <form action="/mail/contact-us" method="POST" enctype='multipart/form-data' id="contact_us_form">
            @csrf
            <div class="row">
                <div class="form-group col-12 col-sm-4">
                    <input type="name" name="name" class="form-control" placeholder="name *" value="{{old('name')}}" required/>
                </div>
                <div class="form-group col-12 col-sm-4">
                    <input type="email" name="email" class="form-control" placeholder="email *" value="{{old('email')}}" required/>
                </div>
                <div class="form-group col-12 col-sm-4">
                    <input type="tel" name="phone" class="form-control" placeholder="phone" value="{{old('phone')}}" />
                </div>
                <div class="form-group col-12">
                    <textarea name="description" class="form-control" placeholder="tell about your project *" required>{{old('description')}}</textarea>
                </div>
            </div>
            <button>get started</button>
        </form>    
    </div>
</div>