<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLogin()
    {
        return view('admin/login');
    }

    public function index()
    {
        $users = User::all();
        return view('admin/akun', compact('users'));
    }

    public function login(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate user
        if (Auth::attempt($request->only('email', 'password'))) {
            // Authentication successful
            return redirect()->route('dashboard');
        } else {
            // Authentication failed, redirect back with error message
            return redirect()->back()->with('error', 'Email atau password tidak valid.');
        }
    }

    public function showDaftar()
    {
        return view('admin/daftar');
    }

    public function daftar(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8'
            ],
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus 8 karakter.',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            // Ambil pesan kesalahan detail
            $errorMessages = $validator->errors()->all();

            // Gabungkan pesan kesalahan menjadi satu pesan
            $errorMessage = implode('', $errorMessages);

            // Set pesan kesalahan dalam session
            return redirect()->route('daftar')->with('error_message', $errorMessage);
        }

        // Jika validasi sukses, lanjutkan dengan membuat pengguna baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Proses logout
        $request->session()->invalidate(); // Invalidate session
        $request->session()->regenerateToken(); // Regenerate token

        return redirect()->route('beranda');
    }
}
