<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Links;
use App\Models\Performance;
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

        return view('dashboard.index');
    }

    public function editProfile(Request $request) {

        $user = auth()->user();

        $request->validate([
            'bio' => 'required',
            'pfp' => 'required',
        ]);

        User::where('id', $user->id)->update([
            'bio' => $request->bio,
            'image' => $request->pfp
        ]);

        return redirect()->back();
    }

    public function editRole(Request $request) {

        $user = auth()->user();

        $request->validate([
            'role' => 'required',
        ]);

        User::where('id', $user->id)->update([
            'department' => $request->role,
        ]);

        return redirect()->back();

    }

    public function editLinks(Request $request) {

        $user = auth()->user();

        /*request()->validate([
            'fb' => 'required',
            'twt' => 'required',
            'ig' => 'required',
            'yt' => 'required',
            'linkedin' => 'required',
            'website' => 'required',
        ]);*/

        Links::where('user_id', $user->id)->update([
            'facebook' => $request->fb,
            'twitter' => $request->twt,
            'instagram' => $request->ig,
            'youtube' => $request->yt,
            'linkedin' => $request->linkedin,
            'website' => $request->website
        ]);

        return redirect()->back();
    }
}
