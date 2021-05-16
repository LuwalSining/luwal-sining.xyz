<?php


namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index() {

        $shows = Show::orderBy('date', 'desc')->orderBy('id', 'desc')->paginate(4);
        return view('home', [
            'shows' => $shows
        ]);

    }
}
