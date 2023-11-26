<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\HighestPossibleScoreController;
use App\Models\HighestPossibleScore;

class FacultyContentSection extends Component
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
        if(request()->is('faculty.grades')){ // added
            $highestPossibleScore = HighestPossibleScore::all(); // fetch all highest possible scores
            return view('components.faculty-content-section', [ 'highestPossibleScore' => $highestPossibleScore]); // pass them to the view
        }
        else{
            return view('components.faculty-content-section');
        }
    }
}

