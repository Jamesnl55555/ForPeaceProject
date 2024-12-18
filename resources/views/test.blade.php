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
    <head>
        <li>Tests Taken</li>
        <li>
            <a href="/taketest">Take a test</a>
        </li>

    </header>
    <main>
        
        @foreach($test as $tests)
            <div>
                    Name: {{$tests->name}}
                    <br>
                    Type: {{$tests->type}}
                    <br>
                    Score: {{$tests->score}}
            </div>
        @endforeach
    
    </main>
    
</body>
</html>