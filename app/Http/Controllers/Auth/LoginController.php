<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Tampilkan form login
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Proses login
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect('/admin/dashboard');
            }

            if ($user->role == 'petugas') {
                return redirect('/petugas/dashboard');
            }

            if ($user->role == 'masyarakat') {
                return redirect('/masyarakat/dashboard');
            }

            Auth::logout();

            return redirect('/login')
                ->with('error', 'Role tidak dikenali');
        }

        return back()
            ->withInput()
            ->with('error', 'Username atau Password salah');
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}