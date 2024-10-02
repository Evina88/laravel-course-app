<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // list all
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        // Routing to page/view which will hold the create form
        return view('course.create');
    }

    public function store(Request $request)
    {
        // this would create the entry for the course
        // skipping validation
        Course::create($request->all());
        return redirect()->route('course.index');
    }

    public function show($id)
    {
        // fetching from db
    }

    public function edit($id)
    {
        // edit data
    }

    public function update(Request $request, $id)
    {
        // logic to update the record in db and post that
    }
    public function destroy($id)
    {
        // delete entry from db
    }
}
