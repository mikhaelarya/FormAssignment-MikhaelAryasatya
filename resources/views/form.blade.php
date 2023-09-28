<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>

    <form action="{{route('submit')}}" method="post" enctype="multipart/form-data">
        @csrf

        <h1>Form</h1>
        <label for="fullname">Name</label>
        <input type="text" name="fullname" id="fullname" placeholder="Full name">
        @error('fullname')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="user">Username</label>
        <input type="text" name="username" id="username" placeholder="Username">
        @error('username')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="message">Message</label>
        <input type="text" name="message" id="message" placeholder="Message">
        @error('message')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="float">Favorite Floating Number (2.5 - 99.99)</label>
        <input type="text" name="float" id="float" placeholder="Favorite Float">
        @error('float')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="picture">Your Picture</label>
        <input type="file" name="picture" id="picture" accept="image/*">
        @error('picture')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" name="submit">Submit</button>
        
        
    </form>
</body>
</html>