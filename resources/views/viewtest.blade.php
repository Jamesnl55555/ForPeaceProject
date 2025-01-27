<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/viewtest.css')}}">
    
    <title>Synonyms</title>
</head>
<body>
    <header>
    <h1>{{$test->name}}</h1>

    </header>
    <div class="fullback">
        @foreach ($test->questions as $question)
            <div class="questions" id="container-{{$question->id}}">
                <div>
                    <h1>{{ $question->text }}</h1>
                    @if ($question->type == 'Identifications')
                    
                    <h1>Answer: </h1>
                        <input type="text" id="Answer-{{$question->id}}" class="identif" name="Answer-{{$question->id}}" placeholder="Correct Answer:{{ $question->correct_answer }}">
                        
                    @endif
                </div>
                <br>
                @if ($question->type != 'Identifications')
                <div>
                    @foreach ($question->options as $option)
                        @if ($option->status)
                            <a href="#" class="success" data-id="$test->id" >
                            {{ $option->option_text }}
                            </a>
                        @else
                            <a class="wrong" href="#">
                            {{ $option->option_text }}
                            </a>
                        @endif
                            <br>
                    @endforeach
                    <br>
                </div>
                @endif
            </div>
        @endforeach
        <form action="/showtest" method="GET">
        @csrf
        <button id="submitbtn" class="Hidden" >Done</button>
        <form>
        <br>
</body>
</html>