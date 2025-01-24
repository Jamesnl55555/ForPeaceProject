<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/home.css')}}">
    <script src="{{asset('js/home.js')}}" defer></script>
    <title>Aklatan</title>
</head>
<body>
    <header>
        <div>
            <h1>Aklatan</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#books">Dashboard</a></li>
                <li><a href="#about">Name: {{Auth::user()->name}}</a></li>
                <li>   
                    <form action="logout" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="title">
        <h7><a href="#" class="ftext" data-answer="{{htmlspecialchars($text, ENT_QUOTES)}}">{{$textval}}</a></h7>
            <h1 class="Text">Noli Me Tangere</h1>
        </div>
    <section id="books">
        <a href="/nolimetangere"><h1>Pumunta sa aklat</h1></a>
    </section>
    <section id="test">
        <a href="showtest"><h1>Mga hamon</h1></a>
    </section>
    </main>
    <footer><h1>Ang Aming Grupo</h1></footer>
    <div class="tfloat"><p></p></div>
</body>
</html>
