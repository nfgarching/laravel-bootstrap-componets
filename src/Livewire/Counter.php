<?php

namespace Nfgarching\Componets\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()
    {
        // dd($this->count);
        return view('bootstrap::counter');
    }

}
