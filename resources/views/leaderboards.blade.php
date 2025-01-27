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
<header><a href="/">Leader Board</a></header>
    
                    
    @foreach($users as $i => $user)
        @if($i == 0)
            <div class="test-card" id="first">
            
            Name: {{$user->name}}
            <br>
            Score: {{$user->rank}}
            </div>
        @elseif($i == 1)
            <div class="test-card" id="second">
            Name: {{$user->name}}
            <br>
            Score: {{$user->rank}}
            </div>
        @elseif($i == 2)
            <div class="test-card" id="third">
            
            Name: {{$user->name}}
            <br>
            Score: {{$user->rank}}
            </div>
        @else
            <div class="test-card" >
            Name: {{$user->name}}
            <br>
            Score: {{$user->rank}}
            </div>
        @endif
        
    @endforeach

</body>
</html>