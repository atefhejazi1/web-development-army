<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses =  Course::all();
        return view('courses.allCourses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.addCourses');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:courses|max:50',
            'description' => 'required',
            'course_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'course_link' => 'required',
        ]);


        $course = new Course();

        $course_image = $request->file('course_image');
        $imageName = time() . '.' . $course_image->getClientOriginalExtension();

        $course_image->move(public_path('images/courses'), $imageName);


        $course->name = $request->name;
        $course->description = $request->description;
        $course->course_image = $imageName;
        $course->author = $request->author;
        $course->course_link = $request->course_link;

        $course->save();

        return redirect('/courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::find($id);

        return view('courses/editCourses', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('course_image')) {

            $validated = $request->validate([
                'name' => 'required|max:50',
                'description' => 'required',
                'course_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
                'course_link' => 'required',
            ]);


            $course_image = $request->file('course_image');
            $imageName = time() . '.' . $course_image->getClientOriginalExtension();

            $course_image->move(public_path('images/courses'), $imageName);

            Course::where('id', $id)
                ->update([
                    "name" => $request->name,
                    "description" => $request->description,
                    "course_image" => $imageName,
                    "course_link" => $request->course_link,
                ]);
        } else {
            Course::where('id', $id)
                ->update([
                    "name" => $request->name,
                    "description" => $request->description,
                    "course_link" => $request->course_link,
                ]);
        }

        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        $course->delete();

        return redirect('/courses');
    }
}
