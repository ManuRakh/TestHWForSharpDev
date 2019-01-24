<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use App\Transactionsreceive;
class TransController extends Controller
{
public function maketrans(Request $request)
{
        $user=new User;
        $user = User::all()->where("userName",$request->name)->first();
        $userIdToWhom = $user->id;
        $newBalance = $user->balance + $request->amount;
        $user->balance=$newBalance;
        $user->save();
        $user = User::all()->where("userName",$request->userName)->first();
        if(session()->get('userName')==$request->name)
        {       
                return $request->userName;
        }
                //add transaction to receiver's history

        $transaction = new Transactionsreceive;
        $transaction->userid = $userIdToWhom;
        $transaction->fromwhom = $user->id;
        $transaction->amount = $request->amount;
        $transaction->current_balance = $newBalance;
        $transaction->save();
        $newBalance = $user->balance - $request->amount;
        $user->balance=$newBalance;
        $user->save();
        $request->session()->put('balance',$newBalance);
        //$request->session()->put('userIdToWhom',$userIdToWhom);

        //add transaction to sender's history
        $transaction = new Transaction;
        $transaction->userid = $user->id;
        $transaction->towhom = $userIdToWhom;
        $transaction->amount = $request->amount;
        $transaction->leftamount = $newBalance;
        $transaction->save();
       
        return back();
}   
}
