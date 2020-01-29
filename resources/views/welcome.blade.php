@extends('layout.master')
@section('title')
    WELCOME!!
@endsection
@include('includes.message-block')
@section('content')
<div class='row'>
    <div class='col-md-6'>
    <h3>SIGN UP</h3>
        <form action='{{route("signup")}}'  method='post'>
            <div class="form group ">
                <label for="email">Your Email</label>
                <input class='form-control' type="text" id='email' name='email' value='{{Request::old("email")}}'>
            </div>
            <div class='form group'>
                <label for="name">Your Name</label>
                <input class='form-control' type="text" name='name'id='name' value='{{Request::old("name")}}'>
            </div>
            <div class='form group'>
                <label for="password">Your Password</label>
                <input class='form-control' type="password" id='password' name='password'  value='{{Request::old("password")}}'>
            </div>
            <div class='form group'>
                <button class='btn btn-primary' type='submit' name='submit'>Submit</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </div>  
        </form>
    </div>
    <div class='col-md-6'>
        <h3>SIGN IN</h3>
        <form action='{{route("signin")}}'  method='post'>
            <div class='form group'>
                <label for="email">Your Email</label>
                <input class='form-control' type="text" id='email' name='email' value='{{Request::old("email")}}'>
            </div>
            <div class='form group'>
                <label for="password">Your Password</label>
                <input class='form-control' type="password" id='password' name='password' value='{{Request::old("password")}}'>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </div><br/>        
            <div class='form group'>
                <button class='btn btn-primary' type='submit' name='submit'>Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection