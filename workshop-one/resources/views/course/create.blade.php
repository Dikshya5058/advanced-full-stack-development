<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>

<h1>Create Course</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="/courses" method="POST">
    @csrf

    <label for="name">Course Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
    <br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description">{{ old('description') }}</textarea>
    <br><br>

    <label for="duration">Duration (weeks):</label>
    <input type="number" id="duration" name="duration"
           min="1" value="{{ old('duration') }}">
    <br><br>

    <label for="fee">Fee:</label>
    <input type="number" id="fee" name="fee"
           min="0" step="0.01" value="{{ old('fee') }}">
    <br><br>

    <label for="difficulty">Difficulty:</label>
    <select id="difficulty" name="difficulty">
        <option value="Easy" @selected(old('difficulty') === 'Easy')>Easy</option>
        <option value="Medium" @selected(old('difficulty') === 'Medium')>Medium</option>
        <option value="Hard" @selected(old('difficulty') === 'Hard')>Hard</option>
    </select>
    <br><br>

    <label for="is_active">
        <input type="checkbox" id="is_active" name="is_active"
               value="1" @checked(old('is_active', '1'))>
        Currently offered
    </label>
    <br><br>

    <button type="submit">Save Course</button>
</form>

</body>
</html>