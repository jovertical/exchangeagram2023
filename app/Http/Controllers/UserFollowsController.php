<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserFollowsController extends Controller
{
    public function store(User $user)
    {
        request()->user()->follow($user);

        return redirect()->back();
    }

    public function destroy(User $user)
    {
        request()->user()->unFollow($user);

        return redirect()->back();
    }
}
