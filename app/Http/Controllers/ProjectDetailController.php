<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectDetail;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    public function createDetails(int $project)
    {
        $project = Project::find($project);

        if (! $project) {
            return "This project does not exists!";
        }

        return view('project.details.create')->with('project', $project);
    }

    public function storeDetails(Request $request, int $project)
    {
        $project = Project::find($project);

        if (! $project) {
            return "This project does not exists!";
        }

        $details = new ProjectDetail();
        $details->project_id = $project->id;
        $details->room = $request->room;
        $details->width = $request->width;
        $details->length = $request->length;
        $details->area = ($request->width * $request->length);
        $details->perimeter = (($request->width * 2) + ($request->length * 2));
        $details->save();

        return redirect()->route('project.show')->with('project', $project->id);
    }
}
