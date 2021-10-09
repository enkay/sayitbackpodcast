<?php

namespace App\View\Components;

use Illuminate\View\Component;

class A extends Component
{
	public $href;
	public $color;

	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct($href, $color='#3182ce')
	{
		$this->href = $href;
		$this->color = $color;
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\Contracts\View\View|\Closure|string
	 */
	public function render()
	{
		return view('emails.components.a');
	}
}
