<!DOCTYPE html>
<html>
<head>
    <title>Add a student</title>
</head>
<body>
    <form method="POST" action="/edit/{{ $student->id }}">
        {{ csrf_field() }}
        Student Name:<input type="text" name="name" value="{{ $student->name }}" placeholder="Inter you name">
        <br/>
        Student details:<input type="text" name="details" value="{{ $student->details }}" placeholder="Inter you details">
        <br/>
        <input type="submit" value="Save">
    </form>
    <a href="student"  class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">To student List</a>
</body>
</html>