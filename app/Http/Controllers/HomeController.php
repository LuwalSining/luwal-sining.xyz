<?php


namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index($lang) {
        App::setLocale($lang);
        $shows = Show::orderBy('date', 'desc')->paginate(3);
        return view('home', [
            'shows' => $shows
        ]);
    }
}
