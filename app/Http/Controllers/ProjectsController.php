<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
    	$projects = Project::all();
    	// return $projects;
    	return view('projects.index', compact('projects'));
    }

    public function create() {
    	return view('projects.create');
    }

    public function show(Project $project) {
    	return view('projects.show', compact('project'));
    }

    public function store() {
    	Project::create(request()->validate([
            'title'       => 'required|min:3',
            'description' => 'required'
        ]));
    	
    	return redirect('/projects');
    }

    public function edit(Project $project) {
    	return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {		
		$project->update(request(['title', 'description']));

		return redirect('/projects/' . $project->id);
    }

    public function destroy(Project $project) {
    	$project->delete();

    	return redirect('/projects');
    }
}
