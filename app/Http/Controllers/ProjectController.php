<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $projects = Project::latest()->paginate();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project; //Creamos una instancia de Project vacia, esto envia null para unificar metodos create, edit
        return view('projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveProjectRequest $request)
    {        
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //$project = Project::findOrFail($project);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update( $request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito.');
    }
}
