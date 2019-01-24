<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Transaction;

class AdminController extends Controller
{
public function index()
{
    return view('admin');
}
public function admin(Request $request)
{

$admins = new Admin;
$admins = Admin::all();
foreach($admins as $admin)
{
    if($request->adminName == $admin->adminName)
    {
        if($request->password == $admin->password)
        {
            $request->session()->put('auth','true');
            $request->session()->put('email','');
            $request->session()->put('userName',$admin->adminName);
            $request->session()->put('role','admin');
            return redirect('adminPage');
        }
    }
}

}
public function adminPage()
{   
    $user = User::all();
    $transaction = Transaction::all();
    if(session()->get('role')!='admin')
    {
        return redirect('admin');
    }
    return view('adminPage')->with(
        [
            'users'=>$user,
            'transactions'=>$transaction,
        ]
    );
}
}
