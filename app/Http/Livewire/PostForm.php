<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostForm extends Component
{

    public $step = 1;

    protected $listeners = [
        'goToStep'
    ];

    public function goToStep($step)
    {
        $this->step = $step;
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
