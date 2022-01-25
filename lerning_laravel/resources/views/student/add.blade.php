<!DOCTYPE html>
<html>
<head>
    <title>Add a student</title>
</head>
<body>
    <form method="POST" action="add">
        {{ csrf_field() }}
        Student Name:<input type="text" name="name" placeholder="Inter you name">
        <br/>
        Student details:<input type="text" name="details" placeholder="Inter you details">
        <br/>
        <input type="submit" value="Add">
    </form>
    <a href="student"  class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">To student List</a>
</body>
</html>