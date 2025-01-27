<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/showtest.css')}}">
    <title>Mga Hamon</title>
</head>
<body>
    <header>
        <h1>Mga Hamon sa Pagbasa</h1>
        <ul class="nav">
           
            <li><a href="/taketest">Kumuha ng Pagsusulit</a></li>
            <li><a href="/">Bumalik</a></li>
        </ul>
    </header>

    <main>
        <section class="intro">
            <h2>Welcome to Your Test History</h2>
            <p>Dito maaari mong tingnan ang lahat ng iyong nakumpletong mga pagsusulit, mga marka, at marami pa. Subaybayan ang iyong paglalakbay at muling bisitahin ang mga nakaraang pagtatasa.</p>
        </section>

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first('message') }}
            </div>
        @endif

        @if($test->isEmpty())
            <section class="no-tests">
                <h3>No Tests Taken</h3>
                <p>Mukhang wala ka pang tests. Pindutin na ang button para makapagsimula!</p>
            </section>
        @else
            <section class="test-history">
                <h3>Your Test Results</h3>
                @foreach($test as $tests)
                <a class="link" href="/viewtest/{{$tests->id}}">
                    <div class="test-card">
                    {{$tests->id}}
                        <h4>{{$tests->name}}</h4>
                        <p><strong>Type:</strong> {{$tests->type}}</p>
                        <p><strong>Score:</strong> {{$tests->score}} / {{$tests->question_quantity}}</p>
                    </div>  
                </a>
                
                @endforeach
            </section>
        @endif
    </main>
</body>
</html>
