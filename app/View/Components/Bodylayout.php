<?php

namespace App\View\Components;

use App\Models\Information;
use Illuminate\View\Component;

class Bodylayout extends Component
{
    // public $infos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bodylayout', [
            'infos'=>Information::all(),
        ]);
    }
}
