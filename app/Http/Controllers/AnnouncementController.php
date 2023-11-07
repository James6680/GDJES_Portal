<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    //
    public function getAnnouncement(){
        $announcements = DB::table('announcements')
        ->select('*')
        ->orderBy('created_at', 'desc')
        ->get();
        return $announcements;
    }

    public function CRUDAnnouncement(Request $request){
        if($request->formAction === "AddData" || $request->formAction === "EditData"){
            $request->validate([
                'announcement_title' => 'required|max:200',
                'announcement_url' => 'required|max:300',
            ]);
        }   
        if($request->formAction === "AddData"){
            $announcement = [];
            $announcement['announcement_title'] = $request->announcement_title;
            $announcement['announcement_url'] = $request->announcement_url;
            Announcement::create($announcement);
        }else if($request->formAction === "EditData"){
            DB::table('announcements')
            ->where('id', $request->announcement_id)
            ->update(['announcement_title' => $request->announcement_title, 'announcement_url' => $request->announcement_url, 'updated_at' => DB::raw('NOW()')]);
        }else if($request->formAction === "DeleteData"){
            DB::table('announcements')->where('id', '=', $request->announcement_id)->delete();
        }
    }
}
