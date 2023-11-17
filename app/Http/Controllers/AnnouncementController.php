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
        ->limit(5)
        ->get();
        return $announcements;
    }

    public function editAnnouncement(Request $request){
        DB::table('announcements')
        ->where('id', $request->id)
        ->update(['announcement_title' => $request->announcement_title, 'announcement_url' => $request->announcement_url, 'updated_at' => DB::raw('NOW()')]);
        return $request;
    }

    public function addAnnouncement(Request $request){
        $announcement = [];
        $announcement['announcement_title'] = $request->announcement_title;
        $announcement['announcement_url'] = $request->announcement_url;
        Announcement::create($announcement);
    }

    public function deleteAnnouncement(Request $request){
        DB::table('announcements')->where('id', '=', $request->id)->delete();
    }
}
