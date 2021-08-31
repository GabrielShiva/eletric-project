<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('project.index')->with('projects', $projects);
    }

    public function show(int $project)
    {
        $project = Project::with('details')->find($project);

        if (! $project) {
            return "This project does not exists!";
        }

        return view('project.show')->with('project', $project);
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required | min:3 | max: 100'
        ];

        $request->validate($rules);

        $project = new Project();
        $project->title = $request->title;
        $project->save();

        return redirect()->route('project.details.create', ['project' => $project->id]);
    }
}
