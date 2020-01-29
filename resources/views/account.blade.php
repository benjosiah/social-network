@extends('layout.master')
@section('title')
    Account!!
@endsection

@section('content')
@include('includes.message-block')
<section class='row new-post'>
    <div class='col-md-6 col-md-offset-3'>
        <header>Your Account</header>
        <form action='{{route("account.save")}}'  method='post' enctype='multipart/form-data'>
            <div class="form group ">
                <label for="email">Your Email</label>
                <input class='form-control' type="text" id='email' name='email' value='{{$user->email}}'>
            </div>
            <div class='form group'>
                <label for="name">Your Name</label>
                <input class='form-control' type="text" name='name' id='name' value='{{$user->name}}'>
            </div>
            <div class='form group'>
                <label for="image">Your Image(JPG only)</label>
                <input class='form-control' type="file" id='image' name='image'>
            </div>
            <div class='form group'>
                <button class='btn btn-primary' type='submit' name='submit'>Save Change</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </div>  
        </form>
    </div>
</section>
 @if(Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg'))
    <section class='row new-post ''>
        <div class='col-md-6 col-md-offset-3'>
            <img src="{{route('image', ['filename'=> $user->name . '-' . $user->id. '.jpg'])}}" class="img"  >
        </div>
    </section>

@endif
@endsection