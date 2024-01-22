<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .success{
        color:green;
    }
    .danger{
        color:red;
    }
</style>
<body>
<div class="design">
    <a href="/home">Add Student</a> | <a href="/student_show">Student Record</a>
</div>
<table border=1 width="100%">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>City</th>
    <th>aCTIVE</th>
    <th>delete</th>
    <th>edit</th>
  </tr>
    @foreach ($data as $item)

    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['city']}}</td>
        <td>
            @if ($item['is_active'] == 1)
                <span class="success">{{$item['is_active']}}</span>
            @else
                <span class="danger">{{$item['is_active']}}</span>
            @endif
        </td>
        <td>
            <a href="student_show/delete/{{$item['id']}}" class="danger">delete</a>
        </td>
        <td>
            <a href="student_show/edit/{{$item['id']}}" class="success">edit</a>
        </td>
    </tr>
    @endforeach

</table>
</body>
</html>
