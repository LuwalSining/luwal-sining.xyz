<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index() {
        $users = User::orderBy('name', 'asc')->get();
        return view('directory', [
            'data' => $users
        ]);
    }

    public function indiv() {
        $id = request('id');
        $user = User::where('id', '=', $id)->get();
        return view('artist', [
            'data' => $user
        ]);
    }
}
