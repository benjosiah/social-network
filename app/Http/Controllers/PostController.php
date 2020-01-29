<?php

namespace App\Http\Controllers;
use App\Like;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{

    public function Getdashboard()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        //$likepost= Auth::user()->id;
        //$likecnt= Like::where(['user_id' =>$likepost])->count();
        // $post= Post::where('id','1');
        // $poste= $post->post;
        // return $post;
        // exit ();
        return view('dashboard', ['posts'=> $posts, ]);
    }

    public function postCreatePoste(Request $request){
        $this->validate($request,[
            'post'=>'required']);
       // $body=$request['post'];
       
        $post = new Post();
        $post->post=$request['post'];
        if($request->user()->post()->save($post)){
            $message= 'post successfuly created!!!';
        }
        return redirect()->route('dashboard')->with(['message'=> $message]);;

    }
    public function GetPostDelete($post_id){
        $post= Post::where('id',$post_id)->first();
        if(Auth::user() != $post->user){
            return redirect()->back();
        }
        $post->delete();
        return redirect()->route('dashboard')->with(['message'=> 'successfuly deleted']);
    }
    public function GetPostEdit($post_id){
        $post= Post::where('id',$post_id)->first();
        if(Auth::user() != $post->user){
            return redirect()->back();
        }
        return view('edit-post',['post'=>$post]);
    }
    public function postEditPost(Request $request,$post_id){
        $this->validate($request,[
            'post'=>'required']);
       
        $post= Post::where('id',$post_id)->first();
        $post->post=$request['post'];
        $post->update();
        
        return redirect()->route('dashboard',['post'=>$post])->with(['message'=> 'Successfuly Edited']);
    
    }
    public function PostLikePost($post_id){
        $user= Auth::user()->id;
        $like_user= Like::where(['user_id'=> $user, 'post_id'=> $post_id ])->first();
        if(empty($like_user->user_id)){
            $user= Auth::user()->id;
            $post_id = $post_id;
            $like= new Like;
            $like->user_id=$user;
            $like->post_id= $post_id;
            $like->save();
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('dashboard');
        }
    }
}
