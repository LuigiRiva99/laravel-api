<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {

        //recupero i dati dal model Project
        // $projects = Project::all();

        //recupero i dati dal model Project con il type e le technologies
        $projects = Project::with('type', 'technologies')->get();

        return response()->json([
            'projects' => $projects
        ]);
    }
}
