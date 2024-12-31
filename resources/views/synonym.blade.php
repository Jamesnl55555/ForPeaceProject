<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/test.css')}}">
    <script src="{{asset('js/test.js')}}" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
    <a class="reset" href="#">Reset</a>
    </header>
    <form action="{{route('Add', $test->id)}}" method="POST">
        @csrf
        <input type="hidden" name="test_id" value="{{$test->id}}">
        <input type="number" id="int" name="score" value="0"> 
    <div class="fullback">
        @foreach ($test->questions as $question)
            <div class="questions" id="container-{{$question->id}}">
                <div>
                    <h1>{{ $question->text }}</h1>
                    @if ($question->type == 'Identifications')
                    <h1>{{ $question->correct_answer }}</h1>
                    <h1>Answer: </h1>
                        <input type="text" id="Answer-{{$question->id}}" class="identif" name="Answer-{{$question->id}}">
                        <button type="button" onclick="check({{$question->id}}, '{{$question->correct_answer}}')">Next</button>
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
        
        <br>
        <button type="submit" class="Hidden" id="submitbtn">Done</button>
        </div>
    </form>
</body>
</html>