<h1>Proposed Courses</h1>

<table>
    <thead>
        <tr>
            <th>Tutor Name</th>
            <th>Course Name</th>
            <th>Days Available</th>
            <th>Schedule</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->tutor_name }}</td>
            <td>{{ $course->course_name }}</td>
            <td>{{ $course->days_available }}</td>
            <td>{{ $course->schedule }}</td>
            <td>
                <a href="{{ route('courses.edit', $course->id) }}">Edit</a>
                <form action="{{ route('courses.destroy', $course->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>