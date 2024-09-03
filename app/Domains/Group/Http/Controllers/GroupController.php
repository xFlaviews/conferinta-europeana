<?php

namespace App\Domains\Group\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Group;
use App\Models\GroupEvents;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GroupController extends Controller
{

    public function dashboard()
    {
        if (group()) {
            $groupEvents = group()->events()->get();
            $groupEventsIds = $groupEvents->pluck('id')->toArray();
            $events = Event::whereNotIn('id', $groupEventsIds)->get();
            return view('backend.pages.group.dashboard', [
                'groupEvents' => $groupEvents,
                'events' => $events
            ]);
        }

        return redirect()->route('backend.group.index');
    }

    public function select(Group $group)
    {
        if (set_group($group)) {
            return redirect()->route('backend.group.dashboard');
        }
        return redirect()->back();
    }

    //
    public function index()
    {
        $groups = Group::paginate();
        return view('backend.pages.group.index', [
            "groups" => $groups
        ]);
    }

    public function save()
    {
        //dd('sad');
        request()->validate([
            'name' => ['required', 'string', 'max:255', 'unique:groups']
        ]);
        Group::create([
            'name' => request('name')
        ]);

        return redirect()->back(); //->with('successMessage', __('Group :group successfully created', [request('name')]));
    }

    public function update(Group $group)
    {

        request()->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('groups', 'name')->ignore($group->id)]
        ]);

        $group->update([
            'name' => request('name')
        ]);

        return redirect()->back(); //->with('successMessage', __('Group successfully updated'));
    }

    public function delete(Group $group)
    {
        dd($group);
    }

    public function associateEvent(Group $group)
    {

        request()->validate([
            'event' => ['required', 'integer']
        ]);

        $event = Event::find(request('event'));

        if ($event) {

            GroupEvents::firstOrCreate([
                'group_id' => $group->id,
                'event_id' => $event->id
            ]);

        }


        return redirect()->back();
    }
}
