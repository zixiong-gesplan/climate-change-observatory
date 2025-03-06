<?php

namespace App\View\Components\Governance;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HoverItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $subtitle
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('Front.Governance.components.HoverItem.index');
    }
}
