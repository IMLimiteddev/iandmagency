<?php

namespace App\View\Components;

use App\Models\Company;
use App\Models\Information;
use App\Models\Testimony;
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

        $data['infos'] = Information::all();
        $data['testimonies'] = Testimony::all();
        $data['companies'] = Company::all();
        return view('components.bodylayout', $data);
    }
}
