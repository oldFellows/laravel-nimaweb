<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function login(){
        return view('admin.login');
    }


    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            //agar passwordi ke midi bcrypt nabashe amaliate ehraze hoviat ro barat anjam nemide. bayad hata bara tet ham password ro bcrypt koni
            // Authentication passed...
            return redirect()->intended('welcome');
            //میبره جایی که کاربر یه پیج رو باز کرده بود و ما پاسش داده بودیم به ص لاگین...یه پیشفرض هم داره که اگه تو خود لاگین اومده بود یه سر کجا بره
        }

        return view('admin.login');
    }


}