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

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {

        $user = User::where('name', auth()->user()->name)->get();
        $link = Links::where('user_id', auth()->user()->id)->get();

        return view('dashboard.index', [
            'userData' => $user,
            'linkData' => $link,
        ]);

    }

}
