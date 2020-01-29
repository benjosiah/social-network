@extends('layout.master')
@section('title')
    DASHBOARD!!
@endsection
@section('content')
@include('includes.message-block')
<section class='row new-post'>
    <div class='col-md-6 col-md-offset-3'>
        <header><h3>POST HERE</h3></header>
        <form action="{{route('edit.post',['post_id'=>$post->id])}}" method="post">
            <div class="from-group">
                <textarea class="form-control" name="post" id="post" cols="0" rows="5"> {{$post->post}}</textarea>
            </div>
            <button type="submit"class="btn btn-primary">Create Post</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </div>
</section>
@endsection