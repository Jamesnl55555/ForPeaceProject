<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
===========================================================
<h1>{{ $test->name }}</h1>
<p>{{ $test->description }}</p>
<p>Type: {{ $test->type }}</p>

Question:
@foreach ($test->questions as $question)
    <div>
        <h4>{{ $question->text }}</h4>
        <div>
        <p>Answer:</p>
        @foreach ($question->answers as $answer)
            <p>{{ $answer->answer_text }}</p>
        @endforeach
        </div>
    </div>
@endforeach


===========

</body>
</html>