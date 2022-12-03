<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form" method="post">
        @csrf
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>name</td>
            <td><input type="text" name="roll"></td>
        </tr>
        <tr>
            <td>name</td>
            <td><input type="text" name="reg"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
    </form>

</body>
</html>