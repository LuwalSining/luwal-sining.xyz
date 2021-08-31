<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateBio(Request $request)
    {

        $user = auth()->user();

        $request->validate([
            'bio' => 'required',
        ]);

        User::where('id', $user->id)->update([
            'bio' => $request->bio,
        ]);

        // Store $imageName name in DATABASE from HERE
        return back()->with('success', 'Successfully updated profile');

    }

    public function updatePfp(Request $request)
    {

        $user = auth()->user();

        $request->validate([
            'pfp' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPEG,JPG,PNG,GIF,SVG|max:2048',
        ]);

        $imageName = $user->id . '-' . $user->department . '.' . $request->pfp->extension();

        $request->pfp->move(public_path('img/pfp'), $imageName);

        User::where('id', $user->id)->update([
            'image' => $imageName
        ]);

        // Store $imageName name in DATABASE from HERE
        return back()->with('success', 'Successfully updated profile');

    }

    public function updateRole(Request $request)
    {

        $user = auth()->user();

        $request->validate([
            'role' => 'required',
        ]);

        User::where('id', $user->id)->update([
            'department' => $request->role,
        ]);

        return redirect()->back();

    }

    public function updateLinks(Request $request)
    {

        $user = auth()->user();

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
