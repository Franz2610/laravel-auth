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
        return view('admin.projects.index', compact('projects'));
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
        // $data = $request->validated();
        // $slug= Str::slug($data['name'], '-');
        // $data['slug'] = $slug;
        // if($request->hasFile('image')){
        //     $image_path = Storage::put('uploads', $request->image);
        //     $data['image'] = $image_path;

        // }

        // $project = new Project();
        // $project->fill($data);
        // $project->save();
        // return redirect()->route('admin.projects.index' , $project->slug);
        $form_data = $request->validated();
        // $slug= Str::slug($form_data['name'], '-');
        // $form_data['slug'] = $slug;
        $project = Project::create($form_data);
       if( $request->has('tags')){
        $project->attach($request->tags);
       };
        return redirect()->route('admin.projects.show', $project->id);



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
        // $data = $request->validated();
        // $slug= Str::slug($data->name, '-');
        // $data['slug'] = $slug;
        // $project->update($data);
        // return redirect()->route('admin.projects.index', $project->slug)->with('message', 'Il post è stato aggiornato.');

        $form_data = $request->validated();
        // $slug= Str::slug($form_data->name, '-');
        // $form_data['slug'] = $slug;
        $project->update($form_data);
        $characters = Project::all();
        return view('admin.projects.index', compact('projects'));

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
