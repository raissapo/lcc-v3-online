<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\ExaminerCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // ADMIN AUTH
    public function AdminLoginPage()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard.page');
        }

        return view('auth.admin.login');
    }

    public function AdminLoginRequest(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard.page');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function AdminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.page');
    }



    // USERS AUTH
    public function ExamineesLoginPage()
    {
        if (Auth::guard('users')->check()) {
            return redirect()->route('users.information.page');
        }

        return view('auth.users.login');
    }

    public function ExamineesLoginRequest(Request $request)
    {
        $credentials = $request->only('default_id', 'password');
        if (Auth::guard('users')->attempt($credentials)) {
            return redirect()->route('users.information.page');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function ExamineesRegisterPage()
    {
        return view('auth.users.register');
    }

    public function ExamineesRegisterRequest(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'gender' => 'required|string',
            'age' => 'required|integer|min:1',
            'birthday' => 'required|date',
            'strand' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);

        $baseId = date('Y');
        $last_id = User::where('default_id', 'like', $baseId . '%')
            ->orderBy('default_id', 'desc')
            ->pluck('default_id')
            ->first();

        if ($last_id) {
            $lastNumber = substr($last_id, -2);
            $newId = $baseId . str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        } else {
            $newId = $baseId . '01';
        }

        $password = 'lcc1234';

        $user = User::create([
            'default_id' => $newId,
            'password' => Hash::make($password),
            'fullname' => $request->input('fullname'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'birthday' => $request->input('birthday'),
            'strand' => $request->input('strand'),
            'email' => $request->input('email'),
        ]);

        Mail::to($user->email)->send(new ExaminerCreated($user, $password));

        return redirect()
            ->back()
            ->with('success', 'Registration successful! Check your email for your account credentials.');
    }
    
    // USERS LOGOUT

    public function ExamineesLogout()
    {
        Auth::guard('users')->logout();
        return redirect()->route('users.login.page');
    }
}
