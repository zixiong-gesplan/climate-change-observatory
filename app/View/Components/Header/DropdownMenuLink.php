<?php

namespace App\View\Components\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownMenuLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href,
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
        return view('components.Header.dropdown-menu-link');
    }
}
