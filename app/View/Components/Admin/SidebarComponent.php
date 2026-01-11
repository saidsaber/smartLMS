<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $style = ["bg-primary text-white px-4 py-3 rounded-lg cursor-pointer", "px-4 py-3 rounded-lg hover:bg-lightBg cursor-pointer"];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.sidebar-component');
    }
}
