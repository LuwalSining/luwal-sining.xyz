<?php

namespace App\Http\Livewire;

use App\Models\Links;
use App\Models\User;
use Livewire\Component;

class EditProfile extends Component
{

    public function updatedBio() {
        $this->validate([
            'bio' => 'required',
        ]);
    }

    public function updatedPfp() {
        $this->validate([
            'pfp' => 'active_url|required',
        ]);
    }

    public function render()
    {
        $getUser = User::where('name', auth()->user()->name)->get();
        $getLinks = Links::where('user_id', auth()->user()->id)->get();

        return view('livewire.edit-profile', [
            'userData' => $getUser,
            'linkData' => $getLinks
        ]);
    }
}
