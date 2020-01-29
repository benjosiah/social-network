<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests;


class UsersControllers extends Controller
{

    
    public function PostSignUp(Request $request)
    {
       $this->validate($request,[
            'email'=>'email|required|unique:users',
            'name'=> 'required',
            'password'=>'required|min:4'
        ]);
        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);

        $user= New User();
        $user->email=$email;
        $user->name=$name;
        $user->password=$password;

        $user->save();

        Auth::login($user);
        return redirect()-> route('dashboard');

    }
    public function PostSignIn(Request $request)
    {
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required'
        ]);

        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->route('dashboard');

        }
        return redirect()->back();
    }
    public function GetLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
    public function GetAccount(){
        return view('Account', ['user'=> Auth::user()]);

    }
    public function UpdateAccount(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required'
        ]);

        $user=Auth::user();
        $user->email=$request['email'];
        $user->name=$request['name'];
        $user->update();
        $file=$request->file('image');
        $path=$request->file('image');
        $filename=$request['name'] . '-' . $user->id . '.jpg';
        echo $path;
        if($file){
           Storage::disk('local')->put($filename, File::get($file)); 
           return redirect()->route('account'); 
        }
       
    }
    
    public function Getimage($filename){
       $file= Storage::disk('local')->get($filename);
       return new Response($file, 200);

    }
    public function Contact()
    {
        
        $user = User::orderBy('created_at', 'desc')->get();
        return view('contacts', ['user'=> $user, ]);
    }

}