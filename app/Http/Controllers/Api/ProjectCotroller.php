<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectCotroller extends Controller
{
    public function index()
    {
        $projects = Project::with('typemodel')->get();
        return response()->json([
            'success'=> true,
            'results'=> $projects
        ]);
    }
    // public function show($slug)
    // {
    //     $project = Project::with('typemo', 'tags')->where('slug', $slug)->first();

    //     if ($project) {
    //         return response()->json([
    //             'success' => true,
    //             'results' => $project
    //         ]);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'results' => 'Project not found !'
    //         ]);
    //     }


    // }
}
