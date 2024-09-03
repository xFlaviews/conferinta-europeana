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
       $validatedData = request()->validate([
            'name' => ['required','string','max:255', 'unique:events'],
            'from_date' => ['required','date'],
            'to_date' => ['required','date']
        ]);
        //dd($validatedData);
        Event::create($validatedData);

        return redirect()->back();
    }

    public function update(Event $event) {

        request()->validate([
            'name' => ['required','string','max:255', Rule::unique('events','name')->ignore($event->id)],
            'from_date' => ['required','date'],
            'to_date' => ['required','date']
        ]);

        
        $event->update([
            'name' => request('name'),
            'from_date' => ['required','date'],
            'to_date' => ['required','date']
        ]);
        

        return redirect()->back();
    }

    public function delete(Event $event) {
        dd($event);
    }
}
