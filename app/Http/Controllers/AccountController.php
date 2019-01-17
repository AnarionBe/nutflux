<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAccount;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function login(Request $request) {
        $account = Account::where('email', 'LIKE', $request->email)->first();
        if($account == null) return response()->json(['error' => 'Email or password incorrect']);
        
        else {
            if(Hash::check($request->password, $account->password)) {
                $request->session()->put('account_id', $account->id);
                return response()->json(["account" => $request->session()->get('account_id')]);
            }
            else return response()->json(['error' => 'Email or password incorrect']);
        }
    }

    public function register(StoreAccount $request) {
        $request->validated();
        $account = new Account();
        $account->setAttribute('email', $request->email);
        $account->setAttribute('password', bcrypt($request->password));
        $account->save();
        $request->session()->put('account_id', $account->id);
        return response()->json(["account" => $request->session()->get('account_id')]);
    }
}
