<?php

namespace App\Domains\Event\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    public function index() {
        $events = Event::paginate();
        return view('backend.pages.event.index', [
            "events" => $events
        ]);
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

        request()->validate([
            'name' => ['required','string','max:255', Rule::unique('events','name')->ignore($event->id)]
        ]);

        
        $event->update([
            'name' => request('name')
        ]);
        

        return redirect()->back();
    }

    public function delete(Event $event) {
        dd($event);
    }
}
