<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
   public function index()
   {
      return view('Welcome');
   }
   public function register(Request $request)
   {
      // dd($request->all());
      $request->validate(
         [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:10'
         ]
      );
      $User = new User();
      $User->name = $request->name;
      $User->email = $request->email;
      $User->password = Hash::make($request->password);
      $request = $User->save();
      if ($request) {
         return back()->with('success', "user register successfully");
      } else {
         return back()->with('failure', "something is wrong");
      }
   }
   public function Login()
   {
      return view('Login_page');
   }

  public function Loginpage(Request $req){
   $req->validate([
      'email' => 'required|email',
            'password' => 'required|min:5|max:10'
   ]);
   $user=User::where('email','=',$req->email)->first();
   if($user){
      if(Hash::check($req->password,$user->password)){
         $req->session()->put('userId',$user->id);
         return redirect('Home');
      }
      else{
         return back()->with('failure',"password is not matched");
      }
   }
   else{
      return back()->with('failure',"email is not exited");
   }

  }

  public function Home(Request $req){
   $data=array();
  if(Session::has('userId')){
   $data=User::where('id','=',Session::get('userId'))->first();

  }
  return view('Home',compact('data'));
  }
  public function logout(){
   if(Session::has('userId')){
       Session::pull('userId');
        return redirect('Welcome');
     }
  }
}
