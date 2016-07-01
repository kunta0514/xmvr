<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Model\Project;
use App\Model\Consultant;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Projectcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {

        if(isset($id) == true){
            $project = Project::find($id);
        }else{
            $project = Project::find(2);
        }

//        echo 'oooooo';
        $consultants = Consultant::where('id','>',0)->get();
//        $consultants = null;
//        print_r($consultants);
        return view('project.project',['project'=> $project,'consultants'=>$consultants]);
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
    public function vrglasses($id)
    {
        return view("project.vrglasses", ['id' => 'dahudi']);
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
