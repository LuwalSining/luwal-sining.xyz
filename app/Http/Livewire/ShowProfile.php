<?php

namespace App\Http\Livewire;

use App\Models\Links;
use App\Models\User;
use Livewire\Component;

class ShowProfile extends Component
{

    protected $listeners = ['edit-form' => '$refresh'];

    public function render()
    {

        $user = auth()->user();
        $checkForLinks = Links::where('user_id', $user->id)->get();

        if(!$checkForLinks->count()) {
            Links::create([
                'user_id' => $user->id,
                'facebook' => '',
                'twitter' => '',
                'instagram' => '',
                'youtube' => '',
                'linkedin' => '',
                'website' => ''
            ]);
        }

        $getUser = User::where('name', auth()->user()->name)->get();
        $getLinks = Links::where('user_id', auth()->user()->id)->get();

        return view('livewire.show-profile', [
            'userData' => $getUser,
            'linkData' => $getLinks
        ]);
    }
}
