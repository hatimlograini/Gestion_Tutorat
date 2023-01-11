<h1>Propose a new course</h1>

<form action="{{ route('courses.store') }}" method="post">
    @csrf

    <label for="tutor_name">Tutor Name:</label>
    <input type="text" name="tutor_name" id="tutor_name">

    <label for="course_name">Course Name:</label>
    <input type="text" name="course_name" id="course_name">

    <label for="days_available">Days Available:</label>
    <input type="text" name="days_available" id="days_available">

    <label for="schedule">Schedule:</label>
    <input type="text" name="schedule" id="schedule">

    <button type="submit">Propose Course</button>
</form>
