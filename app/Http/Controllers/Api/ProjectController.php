<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request) {
       if ($request->has('type_id')) {
        $projects = Project::with(['technologies', 'type'])->where('type_id', $request->type_id)->paginate(10);
       } else {
        $projects = Project::with(['technologies', 'type'])->paginate(10);
       }

        return response()->json([
            'success'=>true,
            'result'=>$projects
        ]);
    }

    public function show($slug) {
        $project = Project::with(['technologies', 'type'])->where('slug', $slug)->first();

        if ($project) {
            return response()->json([
                'success'=>true,
                'result'=>$project
            ]); 
        } else {
            return response()->json([
                'success'=>false,
                'error'=>'Nessun progetto trovato'
            ])->setStatusCode(404);
        }
    }
}
