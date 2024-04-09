<?php

namespace App\Livewire;

use Livewire\Component;

class CreateArticle extends Component
{
    public $title;
    public $body;

    public function render()
    {
        return view('livewire.create-article');
    }
}
