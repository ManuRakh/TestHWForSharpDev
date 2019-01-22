<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

public function index()
{
    $jsonurl=route('ololo');
    $json = file_get_contents($jsonurl);
    $users = json_decode($json, true); 
    // foreach($data['data'] as $i => $v)
    // {
    //     echo $v['email'].'<br/>';
    // }


    $auth='';
    $userName = '';
    $email = '';
    $balance = '';
    if(session()->has("auth"))
    {
        $auth=session()->get('auth');
        $userName=session()->get('userName');
        $email=session()->get('email');
        $balance=session()->get('balance');

    }
     else
    {
    $auth = session()->put('auth','false');
    }
    
    
    return  view('index')->with(
        [
            'auth'=>$auth,
            'userName'=>$userName,
            'email'=>$email,
            'balance'=>$balance,
            'users'=>$users,
        ]
    );
}

}
