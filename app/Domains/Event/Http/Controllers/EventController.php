<?php

namespace App\Domains\Event\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::paginate();
        return view('backend.pages.event.index', [
            "events" => $events
        ]);
    }

    public function create() {
        
    }

    public function save() {
       //dd('sad');
        request()->validate([
            'name' => ['required','string','max:255', 'unique:events']
        ]);
        Event::create([
            'name' => request('name')
        ]);

        return redirect()->back();
    }

    public function update(Event $event) {
        dd($event);
    }

    public function delete(Event $event) {
        dd($event);
    }
}
