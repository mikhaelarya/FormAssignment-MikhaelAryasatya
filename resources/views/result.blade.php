<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <title>Result</title>
</head>
<body>
    <img src="{{ asset('storage/' . str_replace('public/', '', $picture)) }}" alt="none" srcset="">
    <p>The Picture</p><br>
    <p>Name : {{$fullname}}</p>
    <p>Email : {{$email}}</p>
    <p>Message : {{$message}}</p>
    <p>Number : {{$float}}</p>
</body>
</html>