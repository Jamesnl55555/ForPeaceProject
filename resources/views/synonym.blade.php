<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <input type="hidden" id="int" name="score" value="0"> 
    <div class="fullback">
        @foreach ($test->questions as $question)
            <div class="questions">
                <div>
                    <h1>{{ $question->text }}</h1>
                </div>
                <br>
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
            </div>
        @endforeach
        
        <br>
        <button type="submit" class="Hidden" id="submitbtn">Done</button>
        </div>
    </form>
</body>
</html>