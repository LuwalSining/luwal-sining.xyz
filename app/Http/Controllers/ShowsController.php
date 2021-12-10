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

        $all = Show::orderBy('date', 'asc')->get();

        return view('main.shows', [
            'shows' => $all,
        ]);
    }

    public function index_single($lang, $show) {

        $shows = Show::where('slug', $show)->get();

        foreach($shows as $data) {
            $id = $data->id;
        }

        $media = Media::where('show_id', $id)->get();
        $performance = Performance::where('show_id', $id)->get();

        return view('main.show', [
            'sdata' => $shows,
            'mdata' => $media,
            'pdata' => $performance,
        ]);

    }

    //
    // DASHBOARD SECTION ONLY
    //

    public function indexInDashboard() {

        $shows = Show::get();
        foreach($shows as $data){
            $id = $data->id;
        }
        $media = Media::get();
        $performance = Performance::get();
        return view('dashboard.edit-shows', [
            'sdata' => $shows,
            'mdata' => $media,
            'pdata' => $performance,
        ]);
    }

    public function indexSingleInDashboard($show) {

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
        return view('dashboard.edit-show', [
            'sdata' => $shows,
            'mdata' => $media,
            'pdata' => $performance,
        ]);
    }

    public function createShow(Request $request) {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'logline' => 'required',
            'credits' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPEG,JPG,PNG,GIF,SVG|max:2048',
            'watchCode' => 'required'
        ]);

        $imageName = $request->name . '-' . $request->date . '.' . $request->poster->extension();
        $request->poster->move(public_path('img/shows'), $imageName);

        $str = $request->name.' '.$request->date;
        $slugRAW = str_replace(' ', '-', $str);
        $slug = strtolower($slugRAW);

        Show::create([
            'name' => $request->name,
            'date' => $request->date,
            'logline' => $request->logline,
            'credits' => $request->credits,
            'watch_code' => $request->watchCode,
            'poster' => $imageName,
            'slug' => $slug,
        ]);

        return redirect()->back()->with('success', 'Successfully updated profile');

    }

    public function updateShow(Show $show, Request $request) {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'logline' => 'required',
            'credits' => 'required',
            'embed' => 'required'
        ]);

        $str = str_replace(' ', '-',  $request->name).'-'.$request->date;
        $slug = strtolower($str);

        Show::where('id', $show->id)->update([
            'name' => $request->name,
            'date' => $request->date,
            'logline' => $request->logline,
            'credits' => $request->credits,
            'status' => $request->status,
            'slug' => $slug
        ]);

        Performance::where('show_id', $show->id)
            ->update(['link' => $request->perfLink,])
            ->save();

        return redirect()->back();

    }

    public function updateShowPoster(Show $show, Request $request)
    {
        $request->validate([
            'poster' => 'required'
        ]);

        $imageName = $request->name . '-' . $request->date . '.' . $request->poster->extension();
        $request->poster->move(public_path('img/shows'), $imageName);

        Show::where('id', $show->id)->update([
            'poster' => $imageName,
        ]);

        return redirect()->back();
    }
}
