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
                    <img src="{{asset('image/cover.jpg')}}" class="cover">
                </div>
            </div>
            <div class="back">
                <div id="f1" class="back-cont">
                    <div class="content">
                        <img src="{{asset('image/JoseRizal.jpg')}}" class="rizal">
                        <br>
                        <p><b>Name: </b>José Protacio Rizal Mercado y Alonso Realonda</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- p2 -->
        <div id="p2" class="paper">
            <div class="front">
                <div id="f2" class="front-cont">
                    <div class="content">
                        <h1>Buod ng unang kabanata</h1>
                        <p id="ltr">Isang malaking pagtitipon ang gaganapin sa bahay ni Don Santiago de los Santos o mas kilala sa tawag na Kapitan Tiago sa Kalye Anluwage upang salubungin ang isang binata na galing Europa.</p>
                        <p>Sikat at malaki ang kanyang impluwensya dahil siya ang dating <a class="hoverables" data-note="Kahulugan: halal na pinuno">alkalde</a> ng kanilang lugar. Kilala din ito dahil sa pagiging matulungin sa mga mahihirap.</p>
                        <p>Mabilis na kumalat ang balita ng pagtitipon sa maraming distrito ng Maynila hanggang sa loob ng Intramuros.</p>
                        <p>Pagpasok palang sa bahay ay may sasalubong nang malaking hagdanan na nababalutan ng karpeta. Sa ikalawang palapag ay may makikitang mga porselanang Intsik na may iba’t-ibang kulay at disenyo na mas nakatawag ng pansin sa mga bisitang dumalo.</p>
                        <p>Mapapakinggan ang magagandang tunog na gawa ng orkestra at mga kalansing ng mga pinggan at kubyertos. Sa gitna ng bulwagan ay may mahabang lamesa na kainan na puno ng adorno.</p>
                    </div>
                    
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
    <div class="sidenotes" id="sidenotes">    
        <p>Hover a word to see its meaning</p> 
    </div>
</body>
</html>