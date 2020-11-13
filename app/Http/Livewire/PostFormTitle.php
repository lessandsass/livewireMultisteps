<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostFormTitle extends Component
{

    public $state = [];

    protected $rules = [
        'state.title' => 'required'
    ];

    protected $messages = [
        'state.title.required' => 'The title is required.'
    ];

    public function submit()
    {
        $this->validate();

        // merge state

        $this->emit('goToStep', 2);
    }

    public function render()
    {
        return view('livewire.post-form-title');
    }
}
