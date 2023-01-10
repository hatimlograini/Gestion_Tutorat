<h1>Edit Course Proposal</h1>

<form action="{{ route('courses.update', $course->id) }}" method="post">
    @csrf
    @method('patch')
    <label for="tutor_name">Tutor Name:</label>
    <input type="text" name="tutor_name" id="tutor_name" value="{{$course->tutor_name}}">

    <label for="course_name">Course Name:</label>
    <input type="text" name="course_name" id="course_name" value="{{$course->course_name}}">

    <label for="days_available">Days Available:</label>
    <input type="text" name="days_available" id="days_available" value="{{$course->days_available}}">

    <label for="schedule">Schedule:</label>
    <input type="text" name="schedule" id="schedule" value="{{$course->schedule}}">
    
    <button type="submit">Update Course Proposal</button>
</form>