@extends('layout.master')
@section('title')
    Account!!
@endsection

@section('content')
@include('includes.message-block')

    <div>
        <div class="contact">
            <div class='name'>
                <h4>{{$user->name}}</h4>
                <img src="{{route('image', ['filename'=> $user->name . '-' . $user->id. '.jpg'])}}" class="profile"  >
            </div>
        
            <div class="lists">
                @foreach($messages as $message)
                    @if($message->auth_user_id==Auth::user()->id && $message->user_id==$user->id)
                    <div class='sent'>
                        <b>{{$message->user->name}}</b></br>
                        {{$message->message}}
                    </div><br>
                    <br>
                    <br>
                    @elseif($message->user_id==Auth::user()->id && $message->auth_user_id==$user->id)
                    <div class='recieve'>
                        <b>{{$message->user->name}}</b></br>
                        {{$message->message}}
                    </div></br>
                    <br>
                    
                    @endif

                @endforeach
               
            </div>
            <form action="{{route('send')}}" method="post">
                <center> 
                    <textarea name="message" id="" cols="30" rows="2" class='texe'></textarea>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                    <input type="hidden" name="user_id" id="" value="{{$user->id}}">
                    <button type="submit" name='send'>Send</button>
                </center>
            </form>
        </div>

    </div>



@endsection