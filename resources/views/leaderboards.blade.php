<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/leaderboards.css')}}">
    <title>Leaderboards</title>
</head>
<body>
<form action="logout" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                    </form>
                    <a href="/">Back</a>
                    
    @foreach($users as $user)

        <div>
            Name: {{$user->name}}
            <br>
            Score: {{$user->rank}}
        </div>
    @endforeach

</body>
</html>