<?php

namespace App\View\Components;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

use App\Models\Teacher;
use App\Models\Student;


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
            $teacher = Teacher::orderBy('last_name')->paginate(10); //added
            return view('components.admin-content-section', [ 'teacher' => $teacher]);
        }
        elseif(request()->is('admin.student-management')){
            // $student = Student::orderBy('last_name')->paginate(10); //added
            $student = Student::join('relatives', 'relatives.id', '=', 'students.relatives_id')
            ->join('fathers', 'relatives.father_id', '=', 'fathers.id')
            ->join('mothers', 'relatives.mother_id', '=', 'mothers.id')
            ->join('guardians', 'relatives.guardian_id', '=', 'guardians.id')
            ->select(
                'students.*',
                'fathers.first_name as father_first_name',
                'fathers.last_name as father_last_name',
                'fathers.middle_name as father_middle_name',
                'fathers.extension_name as father_extension_name',
                'fathers.email_address as father_email_address',
                'fathers.phone_number as father_phone_number',                
                'mothers.first_name as mother_first_name',
                'mothers.last_name as mother_last_name',
                'mothers.middle_name as mother_middle_name',
                'mothers.extension_name as mother_extension_name',
                'mothers.email_address as mother_email_address',
                'mothers.phone_number as mother_phone_number',     
                'guardians.first_name as guardian_first_name',
                'guardians.last_name as guardian_last_name',
                'guardians.middle_name as guardian_middle_name',
                'guardians.extension_name as guardian_extension_name',
                'guardians.email_address as guardian_email_address',
                'guardians.phone_number as guardian_phone_number',     
            )
            ->where('students.status','=','2')
            ->orderBy('students.last_name')
            ->paginate(10);
            return view('components.admin-content-section', [ 'student' => $student]);
        }
        else if(request()->is('admin.announcements')){
            $announcements = new AnnouncementController;
            return view('components.admin-content-section', ['announcements' => $announcements->getAnnouncement()]);
        }
        else if(request()->is('admin.student-management')){
            return view('components.admin-content-section');
        }
        else{
            return view('components.admin-content-section');
        }
    }
}
