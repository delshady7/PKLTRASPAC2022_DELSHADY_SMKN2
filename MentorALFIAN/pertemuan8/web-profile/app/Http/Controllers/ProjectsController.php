<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = projects::get();
        return view('adminProject', [
            "projects" => $projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload-projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projects = projects::create([
            "title" => $request->title,
            "photo" => $request->photo
        ]);
        if($request->hasFile('photo')){
           $request->file('photo')->move('uploadImage/', $request->file('photo')->getClientOriginalName());
           $projects->photo = $request->file('photo')->getClientOriginalName();
           $projects->save();
        }
        return redirect('/home/admin/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = projects::find($id);
        return view('upload-projects.edit', [
            "projects" => $projects,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        projects::where('id', $id)->update([
            "title" => $request->title,
            "photo" => $request->photo,        
        ]);
        return redirect('/home/admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        projects::where('id', $id)->delete();
        return redirect('/home/admin/projects');
    }
}
