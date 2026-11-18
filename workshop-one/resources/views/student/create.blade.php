<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    @if($errors->any())
<div>
<h3>Please fix the following errors:</h3>
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

    <form action="/students" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone">
        <br><br>

        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea>
        <br><br>

        <label for="date_of_birth">Date of birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth">
        <br><br>

        <button type="submit">Save Student</button>
    </form>
</body>
</html>