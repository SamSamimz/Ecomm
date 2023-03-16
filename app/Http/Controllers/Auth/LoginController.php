<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //__index
    public function index() {
        return view('auth.login');
    }

    //__store
    public function store(Request $request) {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt($user)) {
            return redirect('/');
        }
        return redirect()->back()->with('invalid', 'Invalid login infirmation');
    //    dd($request->all());
    }
}
