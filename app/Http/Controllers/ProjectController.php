<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        return response()->json([
            ['id' => 1, 'name' => 'Website Redesign'],
            ['id' => 2, 'name' => 'Mobile App']
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Project creaed',
            'data' => $request->all()
        ], 201);
    }

    public function show(string $id)
    {
        return response()->json(['id' => $id, 'name' => 'Website Redesign']);
    }

    public function update(Request $request, string $id)
    {
        return response()->json(['message' => "Project {$id} updated"]);
    }

    public function destroy(string $id)
    {
        return response()->json(null, 204);
    }
}
