<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CheckSchoolYearStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isEnrollmentOpen = DB::table('school_years')->where('is_enrollment', 1)->first();

        if (!is_null($isEnrollmentOpen)) {
            return $next($request);
        }else{
            return redirect()->route('enrollment.StudentportalRegistrationClosedPage');
        }

    }
}
