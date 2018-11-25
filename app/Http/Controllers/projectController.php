<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class projectController extends Controller
{
    
    public function add(Request $request)
    {
    	$project = new Project();
    	$project->project_name = $request->projectName;
    	$project->date = $request->date;
    	$project->time = $request->time;
    	$project->venue = $request->venue;
    	$project->save();
    	return redirect()->back();
    	//return $project; 
    }
}
