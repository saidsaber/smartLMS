<?php

namespace App\View\Components\Teacher;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $style = [
        'flex items-center gap-3 px-4 py-3 rounded-[10px]
                bg-[#EAF1FF] text-[#2F6FED] font-medium',
        'flex items-center gap-3 px-4 py-3 rounded-[10px]
                text-[#6B7280] hover:bg-[#F5F7FB]'
    ];
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.teacher.sidebar-component');
    }
}
