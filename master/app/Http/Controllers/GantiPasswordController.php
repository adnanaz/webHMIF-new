<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;

class GantiPasswordController extends Controller
{
    public function index()
    {
        return view('admin.gantipassword');
    }

    public function changePassword(Request $request)
    {
        if(!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return back()->with('error', 'Kata sandi anda saat ini tidak cocok');
        }
        
        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            return back()->with('error', 'Kata sandi anda tidak boleh sama dengan kata sandi baru');
        }

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed'
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('success', 'Password berhasil diganti');
    }
}
