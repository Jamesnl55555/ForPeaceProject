<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/showtest.css')}}">
    <title>Document</title>
</head>
<body>
    <header>Tests Taken</header>
    <main>
        <div>
            @foreach($test as $tests)
                <a href="/syn/{{$tests->id}}">
                    Name: {{$tests->name}}
                    <br>
                    Type: {{$tests->type}}
                </a>
            @endforeach
        </div>
    </main>
    
</body>
</html>