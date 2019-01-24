<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Banlist;

class AuthController extends Controller
{

public function registration(Request $request)
{

    $user = new User;
    $this->validate($request,
    [
        'email'=>'required|max:50',
        'password'=>'required|min:6',
    ]
    );
    $input = (object) $request->all();
    $input->password = md5($input->password);
   // $input->confirmPassword = md5($input->confirmPassword);
    $data =(array) $input;
    $user->fill($data);
   // $user->fill($data);
    $user->save();
        $request->session()->put('userId',$user->id);
        $request->session()->put('auth','true');
        $request->session()->put('userName',$input->userName);
        $request->session()->put('email',$input->email);
        $request->session()->put('balance',$input->balance);
        $request->session()->put('role','user');
    echo $request->session()->get('auth');
   return redirect('/');
}
public function index()
{
    return view('authorization');
}
public function login(Request $request)
{
    $user = new User;
    $this->validate($request,
    [
        'email'=>'required|max:50',
        'password'=>'required|min:6',
    ]
    );
    $user = User::select('email','userName', 'password','balance','id')->where('email',$request->input('email'))->first();
    if($user==null)
    {
        return back();
    }
    $user1=(object)$user;
    $hisPass = md5($request->input('password'));
      $password = ($user1->password);
      if($hisPass==$password)
      {
        $request->session()->put('userId',$user1->id);
        $request->session()->put('auth','true');
        $request->session()->put('userName',$user1->userName);
        $request->session()->put('email',$user1->email);
        $request->session()->put('balance',$user1->balance);
        $request->session()->put('role','user');

        return redirect('/');
      }
      else
      {
          return back();
      }
}
function logout()
{
    session()->flush();
    return redirect('/');
}
function banuser(Request $request)
{
    $banUsers = Banlist::all();
    foreach($banUsers as $banuser)//protection against multiple bans

        {
            if($banuser->userid==$request->userid)
            {
                return back();

            }
        }    
$banlist = new Banlist;
    $ban = (object) $request->all();
    $data =(array) $ban;
    $banlist->fill($data);
    $banlist->save();
    return back();

}
function unbanuser(Request $request)
{   
    $bannedUser = Banlist::all()->where('userid',$request->userid)->first();
    if($bannedUser==null)//if user are not banned, just return to admin page
    {
        return back();
    }
   $bannedUser->delete();
    return back();
}
}
