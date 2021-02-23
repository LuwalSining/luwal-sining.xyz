<?php


namespace App\Http\Controllers;

use App\Models\Show;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class ShowsController extends Controller {

    public function index() {
        $shows = Show::orderBy('date', 'asc')->get();
        return view('shows', [
            'shows' => $shows
        ]);
    }

    public function store(Request $request) {

    }

    public function indiv() {
        $id = request('id');
        $show = DB::table('shows')->where('id', '=', $id)->get();
        $media = DB::table('media')->where('show_id', '=', $id)->get();
        return view('show', [
            'sdata' => $show,
            'mdata' => $media,
        ]);
    }
}
