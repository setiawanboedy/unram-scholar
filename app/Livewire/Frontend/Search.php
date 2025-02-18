<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Search extends Component
{
    public $query = '';

    public function search()
    {
        redirect()->route('result.index',['query'=>$this->query]);
    }

    public function render()
    {
        return view('livewire.frontend.search');
    }
}
