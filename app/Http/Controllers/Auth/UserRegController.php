<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Links;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Inline\Element\Link;

class UserRegController extends Controller
{
    public function __construct() {
        $this->middleware(['guest']);
    }

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {

            $this->validate($request, [
                'username' => 'required|max:255',
                'email' => 'required|email|max:255',
                'role' => 'required',
                'password' => 'required|confirmed'
            ]);

            User::create([
                //column name => $request->input name
                'name' => $request->username,
                'email' => $request->email,
                'department' => $request->role,
                'password' => Hash::make($request->password)
            ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}
