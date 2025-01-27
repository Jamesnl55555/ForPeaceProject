<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/loginpage.css')}}">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="/login" method="POST">
            @csrf
            <h1>Login</h1>
            <input type="text" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Login</button>
        </form>

        <a href="/registerpage">Register</a>
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first('email') }}
            </div>
        @endif
    </main>
</body>
</html>