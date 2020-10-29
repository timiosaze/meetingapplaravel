<?php

namespace App\Http\Controllers;

use App\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $meetings = Meeting::orderBy('meeting_date', 'asc')->get();
        return view('meetings.index', compact("meetings"));
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
        request()->validate([
            'title' => 'required',
            'meeting_date' => 'required'
        ]);

        $meeting = new Meeting();
        $meeting->title = request('title');
        $meeting->meeting_date = request('meeting_date');
        
        if($meeting->save()){
            return redirect('/meetings');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $meeting = Meeting::findOrFail($id);

        return view('meetings.edit', compact("meeting"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'title' => 'required',
            'meeting_date' => 'required'
        ]);

        $meeting = Meeting::findOrFail($id);
        $meeting->title = request('title');
        $meeting->meeting_date = request('meeting_date');
        
        if($meeting->save()){
            return redirect('/meetings');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $meeting = Meeting::findOrFail($id);

        if($meeting->delete()){
            return redirect('/meetings');
        }
    }
}
