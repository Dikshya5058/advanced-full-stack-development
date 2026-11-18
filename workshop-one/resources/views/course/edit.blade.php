<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

<h1>Edit Course</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/courses/{{ $course->id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Course Name:</label>
    <input type="text" id="name" name="name"
           value="{{ old('name', $course->name) }}">
    <br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description">{{ old('description', $course->description) }}</textarea>
    <br><br>

    <label for="duration">Duration (weeks):</label>
    <input type="number" id="duration" name="duration" min="1"
           value="{{ old('duration', $course->duration) }}">
    <br><br>

    <label for="fee">Fee:</label>
    <input type="number" id="fee" name="fee" min="0" step="0.01"
           value="{{ old('fee', $course->fee) }}">
    <br><br>

    <label for="difficulty">Difficulty:</label>
    <select id="difficulty" name="difficulty">
        <option value="Easy"
            @selected(old('difficulty', $course->difficulty) === 'Easy')>
            Easy
        </option>
        <option value="Medium"
            @selected(old('difficulty', $course->difficulty) === 'Medium')>
            Medium
        </option>
        <option value="Hard"
            @selected(old('difficulty', $course->difficulty) === 'Hard')>
            Hard
        </option>
    </select>
    <br><br>

    <input type="hidden" name="is_active" value="0">

    <label for="is_active">
        <input type="checkbox" id="is_active" name="is_active" value="1"
               @checked(old('is_active', $course->is_active))>
        Currently offered
    </label>
    <br><br>

    <button type="submit">Update Course</button>
</form>

<br>

<a href="/courses">Back to Courses</a>

</body>
</html>