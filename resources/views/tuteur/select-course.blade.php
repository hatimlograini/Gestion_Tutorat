<form method="POST" action="/tutor/save-selected-course">
    @csrf
    <label for="course_name">Select Course:</label>
    <select name="course_id" id="course_id" required>
        @foreach($proposedCourses as $course)
            <option value="{{$course->id}}">{{ $course->course_name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Submit">
</form>