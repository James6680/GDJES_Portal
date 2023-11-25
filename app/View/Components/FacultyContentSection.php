<?php

namespace App\View\Components;

use Closure;
<<<<<<< HEAD
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

=======
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Http\Controllers\HighestPossibleScoreController;
use App\Models\HighestPossibleScore;

>>>>>>> f90cbac08cc44e867461c2fe17baa87fb9ec988e
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
<<<<<<< HEAD
        return view('components.faculty-content-section');
    }
}
=======
        if(request()->is('faculty.grades')){ // added
            $highestPossibleScore = HighestPossibleScore::all(); // fetch all highest possible scores
            return view('components.faculty-content-section', [ 'highestPossibleScore' => $highestPossibleScore]); // pass them to the view
        }
        else{
            return view('components.faculty-content-section');
        }
    }
}

>>>>>>> f90cbac08cc44e867461c2fe17baa87fb9ec988e
