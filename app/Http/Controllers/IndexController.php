<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Transactionsreceive;
use App\Banlist;

class IndexController extends Controller
{

public function index()
{
    $jsonurl=route('usersList');//get users list from API
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
    $userId= '';
    $userBanned = false;
        if(session()->get('role')=='admin')
        {
            return redirect('/adminPage');
        }
    if(session()->has("auth"))//check for authorization. If authorized - get session datas, if not - redirect to sign in/sign up page
    {
        
        $auth=session()->get('auth');
        $userName=session()->get('userName');
        $email=session()->get('email');
        $balance=session()->get('balance');
        $userId = session()->get('userId');
    }
     else
    {
    $auth = session()->put('auth','false');
    }
    if(session()->get('auth')=='false')
    {
        return redirect('/login');

    }
    $transaction = new Transaction;
    $transaction = \DB::table('transactions')->where('transactions.userid',$userId)
   
    ->join('users as u','u.id','=','transactions.towhom')
    ->get();
    $transactionreceived = \DB::table('transactionsreceives')->where('transactionsreceives.userid',$userId)
    ->join('users as u','u.id','=','transactionsreceives.fromwhom')
    ->get();
    $banusers=Banlist::all();
foreach($banusers as $banuser)
{
if($banuser->userid==$userId) {$userBanned=true;}
else {$userBanned=false;}
}

    return  view('index')->with(
        [
            'auth'=>$auth,
            'userName'=>$userName,
            'userId'=>$userId,
            'email'=>$email,
            'balance'=>$balance,
            'users'=>$users,
            'transaction'=>$transaction,
            'transactionreceived'=>$transactionreceived,
            'userBanned'=>$userBanned,

        ]
    );
}

}
