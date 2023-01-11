<?php


namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;



class CourseController extends Controller
{
    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $course = new Course();
        $course->tutor_name = $request->input('tutor_name');
        $course->course_name = $request->input('course_name');
        $course->days_available = $request->input('days_available');
        $course->schedule = $request->input('schedule');
        $course->save();

        return redirect()->route('courses.index');
    }

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit',compact('course'));
    }
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->tutor_name = $request->input('tutor_name');
        $course->course_name = $request->input('course_name');
        $course->days_available = $request->input('days_available');
        $course->schedule = $request->input('schedule');
        $course->save();
        return redirect()->route('courses.index');
    }
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses.index');
    }
}