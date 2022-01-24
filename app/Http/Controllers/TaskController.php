<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        return 'index TaskController';
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return 'create TaskController';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        return 'store TaskController';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        return 'show TaskController'.$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit($id)
    {
        return 'edit TaskController'.$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, $id)
    {
        return 'update TaskController';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy($id)
    {
        return 'destroy TaskController'.$id;
    }
}
