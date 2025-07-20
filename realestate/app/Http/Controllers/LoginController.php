<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // عرض صفحة تسجيل الدخول
    public function showLoginForm()
    {
        return view('login1');  // تأكد أن عندك ملف resources/views/login.blade.php
    }

    // تنفيذ عملية تسجيل الدخول
    public function login(Request $request)
    {
        $credentials = $request->validate([
             'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

       if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {   $request->session()->regenerate();

            $user = Auth::user();

            // توجيه المستخدم حسب صلاحياته
            if ($user->role == 'Admin') {
                return redirect('/index1');
            } elseif ($user->role == 'User') {
                return redirect('/AllTicket');
            } elseif ($user->role == 'Tick') {
                return redirect('/AssignTick');
            } else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'ليس لديك صلاحيات للدخول.',
                ]);
            }
        }

        return back()->withErrors([
            'email' => 'اسم المستخدم أو كلمة المرور غير صحيحة.',
        ]);
    }

    // تسجيل الخروج
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login1');
    }
}
