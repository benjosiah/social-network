<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="{{route('dashboard')}}">Brand</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
    @if(Auth::user())
      <div class="collapse navbar-collapse user-view" id="navbarTogglerDemo01"> 
        <ul class="nav navbar-nav navbar-right user-view ">
          <li>
            <a href="{{route('account')}}">
              @if(Storage::disk('local')->has(Auth::user()->name . '-' . Auth::user()->id. '.jpg'))
              <img src="{{route('image', ['filename'=> Auth::user()->name . '-' . Auth::user()->id. '.jpg'])}}" class="profile"  >
              @endif
              {{Auth::user()->name}}
           </a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse user-view" id="navbarTogglerDemo01">
      <ul class="nav navbar-nav navbar-right user-view">
        <li>
          <a href="{{route('contacts')}}">
            <img src="{{URL::to('src/icons/chat-circle-blue-512.png')}}" class="profile">
            Chats 
          </a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse user-view" id="navbarTogglerDemo01">
      <ul class="nav navbar-nav navbar-right user-view ">
        <li>
          <a href="{{route('logout.user')}}">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  @endif
  
</header>