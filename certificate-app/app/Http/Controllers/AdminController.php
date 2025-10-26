<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showLogin() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $admin = Admin::where('username', $request->username)->first();
        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_id', $admin->id);
            return redirect('/admin/dashboard');
        }
        return back()->with('error', 'اسم المستخدم أو كلمة المرور غير صحيحة');
    }
    public function dashboard()
{
    if (!Session::has('admin_id')) {
        return redirect('/admin/login');
    }

    return view('admin.dashboard');
}

    public function logout() {
        Session::forget('admin_id');
        return redirect()->route('admin.dashboard');

    }
}

