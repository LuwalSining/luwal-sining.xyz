<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Show;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {

        //dd(authentication->get reference->model to reference);
        //dd(auth()->user()->shows);
        $getUser = User::where('name', '=', auth()->user()->name)->get();
        return view('dashboard.index', [
            'userData' => $getUser,
        ]);
    }

    public function edit(Request $request) {

        $user = auth()->user();

        $request->validate([
            'bio' => 'required',
            'role' => 'required',
            'pfp' => 'required',
        ]);

        $edit = DB::table('users')->where('id', $user->id)->update([
            'bio' => $request->bio,
            'department' => $request->role,
            'image' => $request->pfp,
        ]);

        return redirect()->back();
    }
}
