<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/style.css')}}">
    <script src="{{asset('js/script.js')}}" defer></script>

    <title>Noli Mi Tangere</title>
</head>
<body>
    
    <button id="prev-btn">
        <h1><</h1>
    </button>
    <div id="book" class="book">
        <!-- p1 -->
        <div id="p1" class="paper">
            <div class="front">
                <div id="f1" class="front-cont">
                    <h1>Front 1</h1>
                </div>
            </div>
            <div class="back">
                <div id="f1" class="back-cont">
                    <h1>Back 1</h1>
                </div>
            </div>
        </div>
        <!-- p2 -->
        <div id="p2" class="paper">
            <div class="front">
                <div id="f2" class="front-cont">
                    <h1>Front 2</h1>
                </div>
            </div>
            <div class="back">
                <div id="f2" class="back-cont">
                    <h1>Back 2</h1>
                </div>
            </div>
        </div>
        <!-- p3 -->
        <div id="p3" class="paper">
            <div class="front">
                <div id="f3" class="front-cont">
                    <h1>Front 3</h1>
                </div>
            </div>
            <div class="back">
                <div id="f3" class="back-cont">
                    <h1>Back 3</h1>
                </div>
            </div>
        </div>
    </div>
    <button id="next-btn">
        <h1>></h1>
    </button>
</body>
</html>