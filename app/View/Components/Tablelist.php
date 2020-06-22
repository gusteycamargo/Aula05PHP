<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tablelist extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $header;
    public $data;

    public function __construct($header, $data)
    {
        $this->header = $header;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tablelist');
    }
}
