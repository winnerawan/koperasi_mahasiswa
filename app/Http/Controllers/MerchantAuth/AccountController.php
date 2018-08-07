<?php

namespace App\Http\Controllers\MerchantAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        return view('merchant.change_password')->with(['user' => $user]);
    }


    public function update(Request $request)
    {
        $user = Auth::user();
        $currentPassword = $user->password;
        if (Hash::check($request->input('current_password'), $currentPassword)) {
//            dd("A");
            $pass = $request->input('password');
            $pass_confirm = $request->input('password_confirmation');
            if ($pass!=$pass_confirm) {
                //konfirmasi password tidak sama
                //todo
                dd("Error Konfirmasi Password Harus Sama");
            } else {
                //konfirmasi password sama
                //save
                $user->password = bcrypt($pass);
                $user->save();
                return redirect('merchant/home');
            }
        } else {
            dd("Password Lama Salah");
        }

    }


}
