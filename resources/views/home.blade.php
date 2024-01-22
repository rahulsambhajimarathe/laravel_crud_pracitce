<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="design">
    <a href="/home">Add Student</a> | <a href="/student_show">Student Record</a>
</div>

<form action="/home" method="post">
    @csrf
    <input value="" name="name" placeholder="name" type="text"><br>
    <input value="" name="city" placeholder="city" type="text"><br>
    <select name="active">
        <option value="0">0</option>
        <option value="1">1</option>
    </select>
    <input type="submit" value="submit" name="submit">
</form>

</body>
</html>
