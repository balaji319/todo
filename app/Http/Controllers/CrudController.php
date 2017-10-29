<?php

namespace App\Http\Controllers;

use App\crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obj_data= crud::get();
        return view('crud.index',compact('obj_data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $this->validate($request, [
                'name' => 'required',
            ]);
                  

        $todo = new crud;
        $todo->song_name = $request->name;
        $todo->song_info = $request->info;
        $todo->save();
        session()->flash('meassage','New Data Added sucessfully');
        return redirect ('crud');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud)
    {
        return view('crud.edit',compact('crud'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $crud = crud::find($id);
        $crud->song_name = $request->name;
        $crud->song_info = $request->info;
        $crud->save();
        session()->flash('meassage','Existing Data updated sucessfully');
        return redirect ('crud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud)
    {
        $crud->delete();
        session()->flash('meassage','Deleted Data sucessfully');
        return redirect ('crud');
    }
}
