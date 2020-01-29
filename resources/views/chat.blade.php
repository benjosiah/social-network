@extends('layout.master')
@section('title')
    Account!!
@endsection

@section('content')
@include('includes.message-block')
    <div class="pop">
        <center><div>
            <center><div>
                <h3>
                <img src="{{route('image', ['filename'=> $user->name. '-' . $user->id. '.jpg'])}}" class="profile"  >
                    {{$user->name}}
                </h3>
            </center></div>
            @foreach($sentmessage as $sentmessage)
            @if($user->id==$sentmessage->user_id)
            <center><div class='sent-view'>
               {{$sentmessage->message}}
            </center></div><br>
           @endif
           @endforeach  
           @foreach($receivemessage as $receivemessage)
            @if($user->id==Auth::user()->id)
            <center><div class='recieved-view'>
               {{'  '.$receivemessage->message.' '}}
            </center></div>
           @endif
           @endforeach
           <center><div class='send-message' >
                <form action="{{route('send')}}" method="post"> 
                    <div class='form group'>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </div>
                    <div class='form group'>
                        <input type="hidden" name='user_id' id='user_id' class='send-message' value='{{$user->id}}' >
                    </div> 
                    <center><div class='form group'>
                        <input type="text" name='message' id='message' class=''>
                        <button type='submit'>send</button>
                    </center></div>
                </form>
            </center> </div>
</center> </div>
    </div>


@endsection