<?php

namespace App\Http\Controllers\Admin;

use App\Models\Technology;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all();
        return view("project.index", compact("project"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technologies = Technology::all();
        $categories = Category::all();
        return view("project.create", compact("categories", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();
        $newProject->title = $data['title'];
        $newProject->author = $data['author'];
        $newProject->content = $data['content'];
        $newProject->category_id = $data['category_id'];

        $newProject->save();

        if($request->has('technologies')) {
           $newProject->technologies()->attach($data['technologies']);
        }

        return redirect()->route("project.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
         
         return view("project.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        $technologies = Technology::all();
        return view("project.edit", compact('project','categories', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->title = $data['title'];
        $project->author = $data['author'];
        $project->content = $data['content'];

        $project->update();

        if($request->has('technologies')) {
           $project->technologies()->sync($data['technologies']);
        }else{
           $project->technologies()->detach();
        }

        return redirect()->route("project.index", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("project.index");
    }
}
