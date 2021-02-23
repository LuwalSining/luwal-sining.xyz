<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {

        $info = User::paginate(1);

        return view('dashboard.profile', [
            'info' => $info
        ]);

    }

    public function update(Request $request) {

        /*$request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        // Store $imageName name in DATABASE from HERE

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);*/

    }

    public function edit(Request $request) {

    }
}
