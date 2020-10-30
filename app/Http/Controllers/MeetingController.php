<?php

namespace App\Http\Controllers;

use App\Meeting;
use Auth;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $meetings = Meeting::where('user_id', Auth::id())->orderBy('meeting_date', 'asc')->paginate(7);
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
        $this->ValidateRequest();

        $meeting = new Meeting();
        $meeting->title = request('title');
        $meeting->meeting_date = request('meeting_date');
        $meeting->user_id = Auth::id();
        
        if($meeting->save()){
            return redirect('/meetings')->with('success', 'Meeting successfully saved');
        } else {
            return redirect('/meetings')->with('failure', 'Meeting not saved');
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
        $meeting = Meeting::where('user_id', Auth::id())->findOrFail($id);

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
        $this->ValidateRequest();

        $meeting = Meeting::where('user_id', Auth::id())->findOrFail($id);
        $meeting->title = request('title');
        $meeting->meeting_date = request('meeting_date');
        
        if($meeting->save()){
            return redirect('/meetings')->with('success', 'Meeting successfully updated');
        } else {
            return redirect('/meetings')->with('failure', 'Meeting not updated');
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
        $meeting = Meeting::where('user_id', Auth::id())->findOrFail($id);

        if($meeting->delete()){
            return redirect('/meetings')->with('success', 'Meeting successfully deleted');
        } else {
            return redirect('/meetings')->with('failure', 'Meeting not deleted');
        }
    }
    
    public function ValidateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'meeting_date' => 'required'
        ]);
    }
}
