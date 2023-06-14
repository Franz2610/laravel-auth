<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Typemodel;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Support\Str;
use illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $projects = Project::all();
        $tags = Tag::all();
        $typemodels = Typemodel::all();

        return view('admin.projects.index', compact('projects', 'tags', 'typemodels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $typemodels = Typemodel::all();
        $tags = Tag::all();
        return view('admin.projects.create', compact('typemodels' , 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     *
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $slug = Str::slug($data['title'], '-');
        $data['slug'] = $slug;
        $project = Project::create($data);
        return redirect()->route('admin.projects.show', $project->slug);


        // $data=$request->validate();
        // $project = Project::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     *
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     *
     */
    public function edit(Project $project)
    {
        $typemodels = Typemodel::all();
        return view('admin.projects.edit' , compact('project' ,'typemodels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     *
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $slug = Str::slug($request->title, '-');
        $data['slug'] = $slug;
        $project->update($data);
        return redirect()->route('admin.projects.show', $project->slug)->with('message', 'Il post è stato modificato con successo!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     *
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', "$project->name deleted.");
    }
}
