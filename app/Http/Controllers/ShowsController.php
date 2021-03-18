<?php


namespace App\Http\Controllers;

use App\Models\Performance;
use App\Models\Show;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class ShowsController extends Controller {

    public function index() {
        $shows = Show::orderBy('date', 'asc')->orderBy('id', 'asc')->get();
        return view('shows', [
            'shows' => $shows
        ]);
    }

    public function show($lang, $show) {
        $shows = Show::where('slug', $show)->get();
        foreach($shows as $data){
            $id = $data->id;
        }
        $media = Media::where('show_id', $id)->get();
        $performance = Performance::where('show_id', $id)->get();
        return view('show', [
            'sdata' => $shows,
            'mdata' => $media,
            'pdata' => $performance,
        ]);
    }

    // DASHBOARD SECTION ONLY

    public function performance() {

        $shows = Show::get();
        foreach($shows as $data){
            $id = $data->id;
        }
        $media = Media::get();
        $performance = Performance::get();
        return view('dashboard.edit_show', [
            'sdata' => $shows,
            'mdata' => $media,
            'pdata' => $performance,
        ]);
    }

    public function indivShow($show) {

        $shows = Show::where('slug', $show)->get();
        foreach($shows as $data){
            $id = $data->id;
        }

        //  ADD PERFORMANCE NULL IF NOTHING FOUND IN DATABASE
        $checkForLinks = Performance::where('show_id', $id)->get();
        $checkForLinks2 = Media::where('show_id', $id)->get();

        if(!$checkForLinks->count()) {
            Performance::create([
                'show_id' => $id,
                'link' => '',
            ]);
        }

        if(!$checkForLinks2->count()) {
            Media::create([
                'show_id' => $id,
                'file' => '',
                'type' => 'video',
            ]);
        }

        $media = Media::where('show_id', $id)->get();
        $performance = Performance::where('show_id', $id)->get();
        return view('dashboard.edit_show_edit', [
            'sdata' => $shows,
            'mdata' => $media,
            'pdata' => $performance,
        ]);
    }

    public function addShow(Request $request) {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'logline' => 'required',
            'credits' => 'required',
            'poster' => 'required',
            //'embed' => 'required',
            //'link' => 'required',
        ]);

        $str = $request->name.' '.$request->date;
        $slugRAW = str_replace(' ', '-', $str);
        $slug = strtolower($slugRAW);

        Show::create([
            'name' => $request->name,
            'date' => $request->date,
            'logline' => $request->logline,
            'credits' => $request->credits,
            'poster' => $request->poster,
            'slug' => $slug,
        ]);

        return redirect()->back();

    }

    public function editShow(Request $request) {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'logline' => 'required',
            'credits' => 'required',
            'poster' => 'required',
            //'embed' => 'required',
            //'link' => 'required',
        ]);

        Show::where('id', $request->show_id)->update([
            'name' => $request->name,
            'date' => $request->date,
            'logline' => $request->logline,
            'credits' => $request->credits,
            'poster' => $request->poster,
        ]);

        Media::where('show_id', $request->show_id)->update([
            'file' => $request->embed,
        ]);

        Performance::where('show_id', $request->show_id)->update([
            'link' => $request->link,
        ]);

        return redirect()->back();

    }
}
