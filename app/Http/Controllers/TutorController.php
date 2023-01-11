<?php

namespace App\Http\Controllers;

use App\Models\inscription;
use App\Models\Module;
use App\Models\Seance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TutorController extends Controller
{
    public function saveSelectedCourse(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'course_id' => 'required|integer',
        ]);
        // Create a new course selected
        $selectedCourse = new SelectedCourse;
        $selectedCourse->course_id = $validatedData['course_id'];
        $selectedCourse->save();
        // Redirect the user to view their selected courses
        return redirect('/tutor/view-selected-courses');
    
}