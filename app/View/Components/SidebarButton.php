<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class SidebarButton extends Component
{
    public $href;
    public $svg;
    public $badge;
    public $notification;
    public $isActive;
    
    public function __construct($href, $svg, $badge = null, $notification = null, $isActive = false)
    {
        $this->href = $href;
        $this->svg = $svg;
        $this->badge = $badge;
        $this->notification = $notification;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-button');
    }
}