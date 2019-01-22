<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TransController extends Controller
{
public function maketrans(Request $request)
{
    $user=new User;
    $user = User::all()->where("userName",$request->name)->first();
$newBalance = $user->balance + $request->amount;
 $user->balance=$newBalance;
$user->save();
    $user = User::all()->where("userName",$request->userName)->first();
    $newBalance = $user->balance - $request->amount;
    $user->balance=$newBalance;
   $user->save();
   $request->session()->put('balance',$newBalance);

   return back();
}
}
