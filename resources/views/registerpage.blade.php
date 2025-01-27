<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/loginpage.css')}}">
    <title>Register</title>
</head>
<body>
    <header>
    </header>
    <main>
        <form action="/register" method="POST">
            @csrf
            <h1>Register</h1>
            <input type="text" placeholder="Username" name="name" required>
            <input type="email" placeholder="Email" name="email" id="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="password" placeholder="Confirm Password" name="confirm" required>
            <button type="submit">Register</button>
        </form>
        <a href="/loginpage">Already had an account? Login</a>
        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first('email') }}
            </div>
        @endif
    </main>
</body>
</html>