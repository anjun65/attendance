<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        $users = User::all();

        return view('pages.user.index', [
            'users' => $users
        ]);
    }


    public function edit($id)
    {
        $user = User::findorFail($id);
        $classes = Classroom::latest()->get();

        return view('pages.user.edit', [
            'user' => $user,
            'classes' => $classes
        ]);
    }

    public function update(Request $request, string $id)
    {
        $user = User::findorFail($id);

        $user->update([
            'name' => $request->name,
            'roles' => $request->roles,
            'classrooms_id' => $request->classrooms_id,
        ]);

        return redirect(route('users.index'));
        
    }
}
