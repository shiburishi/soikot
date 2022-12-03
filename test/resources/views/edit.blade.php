<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/edit{{$data->id}}" method="post">
        @csrf
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value="{{$data->name}}"></td>
        </tr>
        <tr>
            <td>name</td>
            <td><input type="text" value="{{$data->roll}}" name="roll"></td>
        </tr>
        <tr>
            <td>name</td>
            <td><input type="text" value="{{$data->reg}}" name="reg"></td>
        </tr>
        <tr>
            <td><button type="submit">update</button></td>
        </tr>
    </table>
    </form>

</body>
</html>