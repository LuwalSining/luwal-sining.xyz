<?php

namespace App\Http\Controllers;

use App\Models\Links;
use App\Models\User;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index() {
        $users = User::orderBy('department', 'asc')->orderBy('name', 'asc')->get();
        return view('main.directory', [
            'data' => $users
        ]);
    }

    public function show($lang, $artist) {

        $changed = str_replace('+', ' ', $artist);
        $user = User::where('name', $changed)->get();
        foreach($user as $get){
            $id = $get->id;
        }
        $links = Links::where('user_id', $id)->get();
        return view('main.artist', [
            'data' => $user,
            'links' => $links
        ]);
    }
}
