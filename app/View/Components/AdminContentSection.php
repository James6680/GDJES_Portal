<?php

namespace App\View\Components;

use App\Http\Controllers\AnnouncementController;
use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

use App\Models\Teacher;


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
    {   
        if(request()->is('admin.teacher-management')){
            $teacher = Teacher::latest()->paginate(10); //added
            return view('components.admin-content-section', [ 'teacher' => $teacher]);
        }
        else if(request()->is('admin.announcements')){
            $announcements = new AnnouncementController;
            return view('components.admin-content-section', ['announcements' => $announcements->getAnnouncement()]);
        }else{
            return view('components.admin-content-section');
        }
    }
}
