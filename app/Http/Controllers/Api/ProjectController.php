<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request) {

        //recupero i dati dal model Project
        // $projects = Project::all();

        //recupero i dati dal model Project con il type e le technologies
        // $projects = Project::with('type', 'technologies')->get();

        //aggiungo la gestione delle pagine
        $per_page = $request->perPage ?? 10;
        $projects = Project::with('type', 'technologies')->paginate($per_page);

        return response()->json([
            'projects' => $projects
        ]);
    }

    public function show(Project $project){
        $project->load('type', 'technologies');

        return response()->json([
            'project' => $project
        ]);
    }
}
