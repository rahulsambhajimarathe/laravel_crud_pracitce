
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/student_show/edit/{{$data['id']}}" method="post">
    @csrf
    <input value="{{$data['name']}}" name="name" placeholder="name" type="text"><br>
    <input value="{{$data['city']}}" name="city" placeholder="city" type="text"><br>
    <select name="active">
        <option value="0">0</option>
        <option value="1">1</option>
    </select>
    <input type="submit" value="update" name="submit">
</form>

</body>
</html>
