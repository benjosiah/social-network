<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class messageControllers extends Controller
{
    public function chat($user_id){

        $user= User::where('id',$user_id)->first();
        $auser_id=Auth::user()->id;
        $messages=Message::orderBy('created_at', 'asc')->get();
        
        return view('chat',['user'=>$user, 
        'messages'=>$messages]);

    }
    public function sendmessage(Request $request){
        $text= $request['message'];
        $user=Auth::user();
        $user_id= $request['user_id'];
        $message= new Message;
        $message->message=$text;
        $message->auth_user_id=$user->id;
        $message->user_id=$user_id;
        $message->save();
        return redirect()->back();
    }
    public function Getmessage(){
        
       
    }
    
}
