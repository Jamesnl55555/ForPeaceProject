<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Style/style.css')}}">
    <script src="{{asset('js/script.js')}}" defer></script>

    <title>Noli Mi Tangere</title>
</head>
<body>
    <div id="floatext"><p></p></div>
    <div class="leftsidebar">
        <div><a class="leftbar" href="/"><h1>Home</h1></a></div>
        
        <div class="bookmarks">
            <form id="bmForm">
            @csrf
            <input type="number" id="bm" name="page" value="1">
            <button type="submit">Bookmark</button>
            </form>
            <div id="bookmarkList">
                
                @foreach($bookmark as $bookmarks)
                    <div>
                        <a href="#" class="bmlink" data-page="{{$bookmarks->page}}">Page: {{$bookmarks->page}}<a>
                    </div>
                @endforeach
                
            </div>
            
        </div>
    </div>
    <div class="centercontent">
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
                                @foreach($option as $key => $questions)
                                    <div><a href="#" class="option" data-answer="{{htmlspecialchars($answer[$key], ENT_QUOTES)}}">{{$questions}}</a></div>
                                @endforeach
                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- p2 -->
            <div id="p2" class="paper">
                <div class="front">
                    <div id="f2" class="front-cont">
                        <div class="content">
                        <div id="response"></div>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f2" class="back-cont">
                        <div class="content">
                        <img src="{{asset('image/JoseRizal.jpg')}}" class="rizal">
                            <br>
                            <p><b>Name: </b>José Protacio Rizal Mercado y Alonso Realonda</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- p3 -->
            <div id="p3" class="paper">
                <div class="front">
                    <div id="f3" class="front-cont">
                        <div class="content">
                        <h1>KABANATA 1: Isang Handaan</h1>
                            <p id="ltr">
                            Isang marangyang salo-salo ang ipinag-anyaya ni Don Santiago de los Santos na higit na kilala sa taguring Kapitan Tiago. Ang handaan ay gagawin sa kaniyang bahay na nasa daang Anluwage na karatig ng Ilog-Binundok.

                            Ang paanyaya ay madaling kumalat sa lahat ng sulok ng Maynila. Bawat isa ay gustong dumalo sapagkat ang mayamang Kapitan ay kilala bilang isang mabuting tao, mapagbigay, at laging bukas ang palad sa mga nangangailangan. Dahil dito, ang iba ay  <a class="hoverables" data-note="Kahulugan: Naguguluhan o nababalisa ">nababalino</a> kung ano ang isusuot at sasabihin sa mismong araw ng handaan.

                            Nang gabing iyon, nagdagsaan ang mga panauhin gaya ng inaasahan. Puno ang bulwagan. Ang nag-iistima sa mga bisita ay si Tiya Isabel, ang pinsan ni Kapitan Tiyago. Kabilang sa mga bisita sina Tinyente ng guwardiya-sibil, si Padre Sibyla, ang kura paroko ng Binundok, si Padre Damaso na madaldal at mahahayap ang mga salita, at dalawang Paisano. Ang isa ay kararating lamang sa Pilipinas.

                            Ang kararating lamang na dayuhan ay nagtatanong tungkol sa mga asal ng mga katutubong Pilipino. Ipinaliwanag niya na ang pagpunta niya sa bansa ay sarili niyang gastos.</p>
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f3" class="back-cont">
                        <div class="content">
                        <p> Ang pakay ng kaniyang paglalakbay ay upang magkaroon ng <a class="hoverables" data-note="Kahulugan: Binibigyang turan o kaalaman ">kabatiran</a> tungkol sa lupain ng mga Indio.
                            Nagkaroon ng mainit na balitaktakan nang mabanggit ng dayuhan ang tungkol sa monopolyo ng tabako.  Nailabas ni Padre Damaso ang kaniyang mapanlait na ugali. Nilibak niya ang mga Indio. Ang tingin niya sa mga ito ay hamak at mababa. Lumitaw rin sa usapan ang panlalait ng mga Espanyol tungkol sa mga Pilipino noong mga nakalipas na araw. Mapanlibak si Padre Damaso, kung kaya’t iniba ni Padre Sibyla ang usapan.
                            Dumako ang usapan tungkol sa pagkakalipat sa iibang bayan ni Padre Damaso pagkatapos na makapagsilbi sa loob ng dalawampung taon bilang <a class="hoverables" data-note="Kahulugan: Paring tagapangasiwa ng parokya o simbahan ">kura paroko</a> ng San Diego. Sinabi niyang kahit na ang hari ay hindi dapat manghimasok sa pagpaparusa ng simbahan sa mga <a class="hoverables" data-note="Kahulugan: Taong salungat sa paniniwala o katuruan ng simbahan ">erehe</a>. Ngunit, ito ay tinutulan ng Tinyente ng guwardiya-sibil sa pagsasabing may karapatan ang Kapitan Heneral sapagkat ito ang kinatawan ng hari ng bansa.
                            Ipinaliwanag pa ng Tinyente ang dahilan ng pagkakalipat ni Padre Damaso. Siya umano ang nag-utos na hukayin at ilipat ang bangkay ng isang marangal na lalaking napagbintangang isang erehe ng pari dahil lamang sa hindi pangungumpisal. Ang ginawang ito ay tinuturing na isang <a class="hoverables" data-note="Kahulugan: Masama o kasuklamsuklam na katangian ng isang bagay ">kabuktutan</a> ng Kapitan Heneral. Kung kaya’t iniutos nito ang paglilipat ng paring Pransiskano sa ibang parokya bilang parusa.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="p4" class="paper">
                <div class="front">
                    <div id="f4" class="front-cont">
                        <div class="content">
                        Nagpupuyos sa galit ang pari tuwing naaalala niya ang mga kasulatang nawaglit.

                        Iniwanan ni Tinyente ang umpukan pagkatapos nitong makapagpaliwanag. Sinikap ni Padre Sibyla na pakalmahin ang loob ni Padre Damaso. Lumawig muli ang talakayan. Dumating ang ilan pang mga bagong panauhin na ang ilan sa mga ito ay ang mag-asawang sina Dr. de Espadaña at Doña Victorina.
    
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f4" class="back-cont">
                        <div class="content">
                        <h1>KABANATA 2: Si Crisostomo Ibarra</h1>
                            <p id="ltr">Dumating si Kapitan Tiyago at si Ibarra na luksang-luksa ang kasuotan. Ang lahat ng panauhin ay binati ni Kapitan Tiyago. Nabigla ang mga pari sa paghalik nito sa kanilang mga kamay kaya nakalimutan nilang siya ay bendisyunan. Samantala, si Padre Damaso ay namutla nang makilala si Ibarra.

                            Ipinakilala ni Kapitan Tiyago si Ibarra sa pagsasabing ito ay anak ng kaniyang namayapang kaibigan. at kararating lamang niya buhat sa pitong taong pag-aaral sa Europa. Malusog ang pangangatawan ni Ibarra, sa kaniyang masayang mukha ay mababakas ang kagandahan ng ugali. Bagamat siya ay kayumanggi, mahahalata rin sa pisikal na kaanyuan nito ang pagiging dugong Espanyol.

                            Tinangkang kamayan ni Ibarra si Padre Damaso sapagkat alam niyang ito ay kaibigang matalik ng kaniyang yumaong ama. Ngunit, ito ay hindi inamin ng Pari. Totoo, siya ang Kura sa bayan, ngunit ikinaila niyang kaibigan niya ang ama ni Ibarra.

                            Napahiya si Ibarra at iniatras ang kamay. Dagling tinalikuran niya ang pari at napaharap sa tinyenteng kanina pa nagmamasid sa kanila. Masayang nag-usap sina Tinyente at Ibarra.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="p5" class="paper">
                <div class="front">
                    <div id="f5" class="front-cont">
                        <div class="content">
                            <p> Nagpapasalamat ang Tinyente sapagkat dumating ang binata ng walang anumang masamang nangyari. Basag ang tinig ng Tinyente nang sabihin niya sa binata na ang nasa nito’y higit na maging mapalad sa kaniyang ama. Ayon sa kaniya, ang ama ni Ibarra ay isang taong mabait. Ang ganitong papuri ay pumawi sa masamang hinala ni Ibarra tungkol sa kahabag-habag na sinapit ng kaniyang ama.

                            Ang pasulyap ni Padre Damaso sa Tinyente ay sapat na upang layuan niya ang binata. Naiwang mag-isa si Ibarra sa bulwagan ng walang kakilala.

                            Tulad ng kaugaliang Aleman na natutuhan ni Ibarra buhat sa kaniyang pag-aaral sa Europa, ipinakilala niya ang kaniyang sarili sa iba pang mga panauhin. Ang mga babae ay hindi umimik sa kaniya; ang mga lalaki lamang ang nagpakilala rin sa kaniya. Nakilala niya ang isang binatang tumigil din sa pagsusulat.

                            Malapit ng tawagin ang mga panauhin upang makapaghapunan. Lumapit si Kapitan Tinong kay Ibarra upang kumbidahin sa isang pananghalian kinabukasan. Tumanggi sa anyaya ang binata sapagkat nakatakda siyang magtungo sa San Diego sa araw na naturan.
                            </p>    
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f5" class="back-cont">
                        <div class="content">

                        </div>
                    </div>
                </div>
            </div>
            <div id="p6" class="paper">
                <div class="front">
                    <div id="f6" class="front-cont">
                        <div class="content">
                            
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f6" class="back-cont">
                        <div class="content">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div id="p7" class="paper">
                <div class="front">
                    <div id="f7" class="front-cont">
                        <div class="content">
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f7" class="back-cont">
                        <div class="content">
                         </div>
                    </div>
                </div>
            </div>
            <div id="p8" class="paper">
                <div class="front">
                    <div id="f8" class="front-cont">
                        <div class="content">
                            </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f8" class="back-cont">
                        <div class="content">

                        </div>
                    </div>
                </div>
            </div>
            <div id="p9" class="paper">
                <div class="front">
                    <div id="f9" class="front-cont">
                        <div class="content">
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f9" class="back-cont">
                    <div class="content">
                     </div>
                    </div>
                </div>
            </div>
            <div id="p10" class="paper">
                <div class="front">
                    <div id="f10" class="front-cont">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f10" class="back-cont">
                    <div class="content">
                    </div>
                    </div>
                </div>
            </div>
            <div id="p11" class="paper">
                <div class="front">
                    <div id="f11" class="front-cont">
                        <div class="content">
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f11" class="back-cont">
                    <div class="content">
                    </div>
                    </div>
                </div>
            </div>
            <div id="p12" class="paper">
                <div class="front">
                    <div id="f12" class="front-cont">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f12" class="back-cont">
                    <div class="content">
                    </div>
                    </div>
                </div>
            </div>
            <div id="p13" class="paper">
                <div class="front">
                    <div id="f13" class="front-cont">
                        <div class="content">
                        
                    </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f13" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p14" class="paper">
                <div class="front">
                    <div id="f14" class="front-cont">
                        <div class="content">
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f14" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p15" class="paper">
                <div class="front">
                    <div id="f15" class="front-cont">
                        <div class="content">
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f15" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p16" class="paper">
                <div class="front">
                    <div id="f16" class="front-cont">
                        <div class="content">
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f16" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p17" class="paper">
                <div class="front">
                    <div id="f17" class="front-cont">
                        <div class="content">
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f17" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p18" class="paper">
                <div class="front">
                    <div id="f18" class="front-cont">
                        <div class="content">
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f18" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p19" class="paper">
                <div class="front">
                    <div id="f19" class="front-cont">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f19" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p20" class="paper">
                <div class="front">
                    <div id="f20" class="front-cont">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f20" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p21" class="paper">
                <div class="front">
                    <div id="f21" class="front-cont">
                        <div class="content">
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f21" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p22" class="paper">
                <div class="front">
                    <div id="f22" class="front-cont">
                        <div class="content">
                       
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f22" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p23" class="paper">
                <div class="front">
                    <div id="f23" class="front-cont">
                        <div class="content">
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f23" class="back-cont">
                    <div class="content">
                    </div>
                    </div>
                </div>
            </div>
            <div id="p24" class="paper">
                <div class="front">
                    <div id="f24" class="front-cont">
                        <div class="content">
                            </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f24" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
            <div id="p25" class="paper">
                <div class="front">
                    <div id="f25" class="front-cont">
                        <div class="content">
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f25" class="back-cont">
                    <div class="content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="next-btn">
            <h1>></h1>
        </button>
        
    </div>

    
    <div class="sidenotes" id="sidenotes"> 
        <p></p> 
    </div>

</body>
</html>