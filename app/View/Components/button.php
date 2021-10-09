<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{

	public $url;
	public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $color="#3182ce")
    {
			$this->url = $url;
			$this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('emails.components.button');
    }
}
