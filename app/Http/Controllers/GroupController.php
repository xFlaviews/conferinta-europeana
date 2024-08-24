<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GroupController extends Controller
{
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

        return redirect()->back();//->with('successMessage', __('Group :group successfully created', [request('name')]));
    }

    public function update(Group $group)
    {

        request()->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('groups', 'name')->ignore($group->id)]
        ]);

        $group->update([
            'name' => request('name')
        ]);

        return redirect()->back();//->with('successMessage', __('Group successfully updated'));
    }

    public function delete(Group $group)
    {
        dd($group);
    }
}
