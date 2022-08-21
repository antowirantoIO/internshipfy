<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
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
        $data = Activity::orderBy('created_at', 'desc')->get();
        foreach($data as $key => $value){
            $data[$key]['date'] = date('D - d M Y', strtotime($value['created_at']));
            $data[$key]['idencrypt'] = encrypt($value['id']);
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
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"],
            ['link' => "javascript:void(0)", 'name' => "Akademik"],
            ['link' => "javascript:void(0)", 'name' => "IDT"],
            ['name' => "Insert IDT"]
        ];
        return view('activity.create', compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActivityRequest $request)
    {

        Auth::user()->activities()->create([
            'activity' => $request->activity_title,
            'division' => $request->divisi,
            'description' => $request->description,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'status' => Activity::PENDING,
            'is_review' => Activity::NOT_REVIEWING,
            'date' => $request->date,
        ]);

        return redirect()->route('activity')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Send the specified resource activity to pembimbing.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function send(Activity $activity)
    {
        $activity->update([
            'status' => Activity::PENDING,
            'is_review' => Activity::REVIEWING,
        ]);

        return redirect()->route('activity')->with('success', 'Data berhasil dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActivityRequest  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
