<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/submit')}}" method="POST">
        @csrf
        <label for="">Email:</label><br>
        <input type="email" name="email" required>
        <br><br>
        <label for="">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>