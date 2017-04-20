<?php

namespace App\Http\Controllers;

use DB;
use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){
    	$events = Event::all();
    	return view('event.index', compact('events'));
    }

    public function show($id)
    {
    	$event = Event::find($id);
    }
}
