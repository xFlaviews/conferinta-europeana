<?php

use App\Models\Group;
use App\Models\GroupUser;

if (! function_exists('leave_group')) {
    function leave_group() {
        session()->forget('group');
    }
}

if (! function_exists('group')) {
    function group() {
        return session('group');
    }
}

if (! function_exists('set_group')) {

    function set_group(Group $group)
    {
        leave_group();
        $user = auth()->user();
        if($user) {
            if ($user->hasRole(['super_admin','admin'])) {
                session()->put('group', $group);
                return true;
            }
            $groupUser = GroupUser::where('user_id', $user->id)->first();
            if ($groupUser) {
                session()->put('group', $group);
                return true;
            }
        }
        return false;
    }
}

