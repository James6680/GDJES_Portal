<?php

namespace App\View\Components;

use App\Http\Controllers\AnnouncementController;
use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class AdminContentSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {   $announcements = new AnnouncementController;
        return view('components.admin-content-section', ['announcements' => $announcements->getAnnouncement()]);
    }
}
