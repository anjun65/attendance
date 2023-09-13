<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ()
    {
        $classrooms = Classroom::latest()->get();

        return view('pages.classroom.index', [
            'classrooms' => $classrooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.classroom.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Classroom::Create([
            'name' => $request->name,
        ]);

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $class = Classroom::findorFail($id);
        return view('pages.classroom.edit', [
            'class' => $class
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = Classroom::findorFail($id);

        $class->update([
            'name' => $request->name,
        ]);

        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = Classroom::findOrFail($id);
        $class->delete();

        return redirect()->route('classes.index');
    }
}
