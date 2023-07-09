<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers=DB::table('workers')
        ->orderBy('name')
        ->get();

        return view('workers.index',['workers'=>$workers]);
    }
}
