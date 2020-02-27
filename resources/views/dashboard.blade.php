@extends('layout.master')
@section('title')
    DASHBOARD!!
@endsection

@section('content')
@include('includes.message-block')
<section class='row new-post'>
    <div class='col-md-6 col-md-offset-3'>
        <header><h3>POST HERE</h3></header>
        <form action="{{route('createpost')}}" method="post">
            <div class="from-group">
                <textarea class="form-control" name="post" id="post" cols="0" rows="5" placeholder="write your post here"></textarea>
            </div>
            <button type="submit"class="btn btn-primary">Create Post</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
    
        </form>
         
         
    </div>
</section>
<section class="row posts">
    <div class='col-md-6 col-md-offset-3'>
        <header><h3>Posts</h3></header>
        @foreach($posts as $post)
         
        <article class="post">
            <p> 
                {!! nl2br($post->post)!!}
            </p>
            <div class="info">
                posted by {{$post->user->name}} on {{$post->created_at}}
            </div>
            <div class="intraction">
                <a href="{{route('like',['post_id'=>$post->id])}}">Like({{$post->like->count()}})</a>|
                <a href="">Dislike</a>|
                @if(Auth::user()==$post->user)
                <a href="{{route('editpost',['post_id'=>$post->id])}}">Edit</a>|
                <a href="{{route('delete.post',['post_id'=>$post->id])}}">Delete</a>
                @endif
            </div>
        </article>
        
        @endforeach
    </div>
</section>
@endsection