<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Session;

class AuthenticationController extends Controller
{
    public function loginUsers()
    {
        return view('login');
    }

    public function postLoginUsers(Request $req)
    {
        $dataUserLogin = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        $remember = $req->has('remember');

        Session::where('user_id', Auth::id())->delete();
        session()->put('user_id', Auth::id());

        if (Auth::attempt($dataUserLogin, $remember)) {
            if (Auth::user()->role == 1) {
                return redirect()->route('admin.products.listProducts')->with([
                    'message' => 'Đăng nhập thành công!'
                ]);
            } else {
                return redirect()->route('client.viewClient')->with([
                    'message' => 'Đăng nhập thành công User!'
                ]);
            }
        } else {
            return redirect()->back()->with([
                'message' => 'Đăng nhập thất bại?'
            ]);
        }

    }

    public function logoutUsers()
    {
        Auth::logout();
        return redirect()->route('client.loginUsers')->with([
            'message' => 'Đăng xuất thành công!'
        ]);
    }

    public function registerUsers()
    {
        return view('register');
    }

    public function postRegisterUsers(Request $req)
    {
        $check = User::where('email', $req->email)->exists();
        if ($check) {
            return redirect()->back()->with([
                'message' => 'Email đã tồn tại?'
            ]);
        } else {
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
            ];

            $newUser = User::create($data);

            return redirect()->route('client.loginUsers')->with([
                'message' => 'Đăng ký thành công!'
            ]);
        }
    }

    public function resetpasswordUsers()
    {
        return view('resetpassword');
    }
}
