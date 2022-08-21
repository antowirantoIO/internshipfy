<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link' => "/dashboard", 'name' => "Home"],
            ['link' => "javascript:void(0)", 'name' => "Akademik"],
            ['name' => "IDT"]
        ];

        return view('activity.index',compact('breadcrumbs'));
    }

    public function getdata()
    {
        $data = Activity::all();
        foreach($data as $key => $value){
            $data[$key]['date'] = date('D - d M Y', strtotime($value['created_at']));
        }
        return response()->json([
            'data' => $data
        ]);
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
     * @param  \App\Http\Requests\StoreActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $Activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $Activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityRequest  $request
     * @param  \App\Models\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityRequest $request, Activity $Activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $Activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $Activity)
    {
        //
    }
}
