<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Model\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Projectcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        if(isset($id) == true){
            $project = Project::find(2);
        }else{
            $project = Project::find(2);
        }


        return view('Project.project',['project'=> $project]);
    }

    public function default_page() {


        $project = Project::find(2);


        return view('Project.project',['project'=> $project]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Display the VR view.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vrglasses()
    {
        return view("project.vrglasses", []);
    }
    
    /**
     * Display the VR view.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vr($id)
    {
        return view("project.vr", ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
