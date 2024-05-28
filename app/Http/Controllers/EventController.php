<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->name = $request->name;
        $event->location = $request->location;
        $event->date_time = $request->date_time;
        $event->save();

        return redirect()->route('events.index');
    }
}

