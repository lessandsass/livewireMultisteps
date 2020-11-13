<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostFormPublishing extends Component
{

    public $state = [];

    public function submit()
    {

        // merge state

        dd('store');
    }

    public function render()
    {
        return view('livewire.post-form-publishing');
    }
}
