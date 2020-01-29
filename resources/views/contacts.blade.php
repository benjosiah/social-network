@extends('layout.master')
@section('title')
    Account!!
@endsection

@section('content')
@include('includes.message-block')
<section class='row new-post'>
    <div class='col-md-6 col-md-offset-3'>
        <header><h3>Your Contacts</h3></header>
            @foreach($user as $user)
            <a href="{{route('chat',['user_id'=>$user->id])}}"> 
                <div class='list' >
                    @if($user!=Auth::user())
                           <img src="{{route('image', ['filename'=> $user->name. '-' . $user->id. '.jpg'])}}" class="profile"  >
                            {{$user->name}}
                            <div>
                                no maybe not today
                            </div>
                       
                    @endif
                </div>
            </a>
            @endforeach
       
        </div>
    </section>
@endsection