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
                <div class="bmcontainer">
                @foreach($bookmark as $bookmarks)
                    <div >
                        <a href="#" class="bmlink" data-page="{{$bookmarks->page}}">Page: {{$bookmarks->page}}<a>
                    </div>
                @endforeach
                </div>
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
                        <div id="response">
                        </div>
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
                            Nagkaroon ng mainit na balitaktakan nang mabanggit ng dayuhan ang tungkol sa monopolyo ng tabako.  Nailabas ni Padre Damaso ang kaniyang mapanlait na ugali. Nilibak niya ang mga Indio. Ang tingin niya sa mga ito ay hamak at mababa. Lumitaw rin sa usapan ang panlalait ng mga Espanyol tungkol sa mga Pilipino noong mga nakalipas na araw. Mapanlibak si Padre Damaso, kung kayat iniba ni Padre Sibyla ang usapan.
                            Dumako ang usapan tungkol sa pagkakalipat sa iibang bayan ni Padre Damaso pagkatapos na makapagsilbi sa loob ng dalawampung taon bilang <a class="hoverables" data-note="Kahulugan: Paring tagapangasiwa ng parokya o simbahan ">kura paroko</a> ng San Diego. Sinabi niyang kahit na ang hari ay hindi dapat manghimasok sa pagpaparusa ng simbahan sa mga <a class="hoverables" data-note="Kahulugan: Taong salungat sa paniniwala o katuruan ng simbahan ">erehe</a>. Ngunit, ito ay tinutulan ng Tinyente ng guwardiya-sibil sa pagsasabing may karapatan ang Kapitan Heneral sapagkat ito ang kinatawan ng hari ng bansa.
                            Ipinaliwanag pa ng Tinyente ang dahilan ng pagkakalipat ni Padre Damaso. Siya umano ang nag-utos na hukayin at ilipat ang bangkay ng isang marangal na lalaking napagbintangang isang <a class="hoverables" data-note="Kahulugan: Taong salungat sa paniniwala o katuruan ng simbahan">erehe</a> ng pari dahil lamang sa hindi pangungumpisal. Ang ginawang ito ay tinuturing na isang <a class="hoverables" data-note="Kahulugan: Masama o kasuklamsuklam na katangian ng isang bagay ">kabuktutan</a> ng Kapitan Heneral. Kung kayat iniutos nito ang paglilipat ng paring Pransiskano sa ibang parokya bilang parusa.</p>
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

                            Ipinakilala ni Kapitan Tiyago si Ibarra sa pagsasabing ito ay anak ng kaniyang namayapang kaibigan. at kararating lamang niya buhat sa pitong taong pag-aaral sa Europa. Malusog ang pangangatawan ni Ibarra, sa kaniyang masayang mukha ay mababakas ang kagandahan ng ugali. Bagamat siya ay <a class="hoverables" data-note="Kahulugan: kulay na hindi masyadong maputi o itim ; Sa ingles ay brown  ">kayumanggi</a>, mahahalata rin sa pisikal na kaanyuan nito ang pagiging dugong Espanyol.

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
                            <p> Nagpapasalamat ang Tinyente sapagkat dumating ang binata ng walang anumang masamang nangyari. Basag ang tinig ng Tinyente nang sabihin niya sa binata na ang nasa nito ay higit na maging mapalad sa kaniyang ama. Ayon sa kaniya, ang ama ni Ibarra ay isang taong mabait. Ang ganitong papuri ay pumawi sa masamang hinala ni Ibarra tungkol sa <a class="hoverables" data-note="Kahulugan: kaawa-awa">kahabag-habag</a> na sinapit ng kaniyang ama.

                            Ang pasulyap ni Padre Damaso sa Tinyente ay sapat na upang layuan niya ang binata. Naiwang mag-isa si Ibarra sa  <a class="hoverables" data-note="Kahulugan: Malaking silid o espasyo ng isang gusali ">bulwagan</a> ng walang kakilala.

                            Tulad ng kaugaliang Aleman na natutuhan ni Ibarra buhat sa kaniyang pag-aaral sa Europa, ipinakilala niya ang kaniyang sarili sa iba pang mga panauhin. Ang mga babae ay hindi umimik sa kaniya; ang mga lalaki lamang ang nagpakilala rin sa kaniya. Nakilala niya ang isang binatang tumigil din sa pagsusulat.

                            Malapit ng tawagin ang mga panauhin upang makapaghapunan. Lumapit si Kapitan Tinong kay Ibarra upang <a class="hoverables" data-note="Kahulugan: Mag-anyaya para sa isang pagtitipon o okasyon">kumbidahin</a> sa isang pananghalian kinabukasan. Tumanggi sa anyaya ang binata sapagkat nakatakda siyang magtungo sa San Diego sa araw na naturan.
                            </p>  
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f5" class="back-cont">
                        <div class="content">
                            <h1>KABANATA 3: Ang Hapunan</h1>
                            <p>Isa-isang nagtungo ang mga panauhin sa harap ng hapagkainan. Sa anyo ng kanilang mga mukha ay mahahalata ang kanilang mga pakiramdam. Siyang-siya si Padre Sibyla samantalang banas na banas naman si Padre Damaso. <a class="hoverables" data-note="Kahulugan: Pagsipa">Sinisikaran</a> niya ang lahat ng madaanan hanggang sa masiko niya ang isang kadete. Hindi naman umiimik ang Tinyente. Ang ibang bisita naman ay magiliw na nag-uusap at pinupuri ang masasarap na handa ni Kapitan Tiyago. Nainis naman si Doña Victorina sa Tinyente sapagkat natapakan ang kola ng kaniyang saya habang tinitignan nito ang pagkakulot ng kaniyang buhok.

                                Sa may <a class="hoverables" data-note="Kahulugan:  Isang upuan o pwesto na itinuturing na pinakamahalaga o pinakamataas sa isang mesa.">kabisera</a> umupo si Ibarra. Ang magkabilang dulo naman ay pinagtatalunan ng dalawang pari kung sino sa kanila ang dapat na lumikmo roon.

                                Sa tingin ni Padre Sibyla, si Padre Damaso ang dapat umupo roon dahil siya ang Padre Kumpesor ng pamilya ni Kapitan Tiyago. Ngunit, si Padre Sibyla naman ang iginigiit ng Paring Pransiskano. Katuwiran nito ay si Sibyla ang kura sa lugar na iyon, kung kayt siya ang karapat-dapat na maupo roon.

                                Akmang uupo na si Sibyla nang mapansin niya ang Tinyente at nagkunwaring i-aalok ang upuan. Pero tumanggi ang Tinyente sapagkat umiiwas siyang mapagitnaan ng dalawang pari.

                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="p6" class="paper">
                <div class="front">
                    <div id="f6" class="front-cont">
                        <div class="content">
                        Sa mga panauhin, tanging si Ibarra lamang ang nakaisip na anyayahan si Kapitan Tiyago. Ngunit tulad ng may karaniwang handaan, magalang na tumanggi ang Kapitan sabay sabing, “Huwag mo akong alalahanin.”
                        Sinimulan ng idulot ang pagkain. Naragdagan ang <a class="hoverables" data-note="Kahulugan: Pagsiklab ng damdamin">pagpupuyos ng damdamin</a> ni Padre Damaso nang ihain ang tinola. Paano ay puro upo, leeg, at pakpak ng manok ang napunta sa kaniya, samantalang ang kay Ibarra ay puro masasarap na bahagi ng tinola. Hindi alam ng pari kung sadyang ipinaluto ng Kapitan ang manok para lamang kay Ibarra.
                        Habang kumakain, nakipag-usap si Ibarra sa ibang mga panauhin na malapit sa kinaroroonan niya. Batay sa sagot ng binata sa tanong ni Laruja, siya ay mayroon ding pitong taong nawala sa Pilipinas. Bagamat wala siya sa bansa, hindi niya nakakalimutan ang kaniyang bayan. Sa halip ay siya ang nakalimutan ng bayan sapagkat ni wala man lang isang taong nakapagbalita sa kaniya tungkol sa masaklap na dinanas ng kaniyang ama. Dahil sa pahayag na ito ni Ibarra, nagtumibay ang paniniwala ng Tinyente na talagang walang alam ang binata sa tunay na dahilan ng pagkamatay ng kaniyang amang si Don Rafael.
                        Tinanong ni Doña Victorina si Ibarra kung bakit hindi man lamang ito nagpadala ng <a class="hoverables" data-note="Kahulugan: Telegrama">hatid-kawad</a>, na kagaya ng ginawa ni Don Tiburcio nang sila ay magtaling-puso.
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f6" class="back-cont">
                        <div class="content">
                        “Nasa ibang bayan ako nitong mga huling dalawang taon,” ang tugon naman ni Ibarra.
                        Nalaman ng mga kausap ni Ibarra na marami ng bansa ang napuntahan nito at maraming wika ang kaniyang alam. Ang katutubong wikang natutuhan niya sa mga bansang pinupuntahan niya ang ginagamit niya sa pakikipagtalastasan. Bukod sa wika, pinag-aaralan din niya ang kasaysayan ng bansang kaniyang pinupuntahan partikular na ang tungkol sa Exodo o hinay-hinay na pagbabago sa kaunlaran.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p7" class="paper">
                <div class="front">
                    <div id="f7" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 4: Erehe at Pilibustero</h1>
                            
                            Naglakad na si Ibarra na hindi <a class="hoverables" data-note="Kahulugan: Alam o may kaalaman sa isang bagay">batid</a> ang kaniyang destinasyon. Nakarating siya hanggang sa may <a class="hoverables" data-note="Kahulugan: malawak na pampublikong lugar kung saan kadalasang naglilibang ang mga tao">Liwasan</a> ng Binundok. Sa maraming taong pagkawala niya sa bayan ay wala pa ring pagbabago sa kaniyang dinatnan, Sa paggala ng kaniyang paningin, naramdaman niyang may dumantay na kamay sa kaniyang balikat, si Tinyente Guevarra. Sumunod ito sa kaniya upang paalalahanan na mag-ingat din sapagkat nangangamba ang Tinyente na baka si Ibarra ay matulad sa sinapit ng kaniyang ama.
                            Nakiusap si Ibarra na isalaysay ng Tinyente ang tungkol sa buhay ng kaniyang ama sapagkat tunay na wala siyang nalalaman dito. Sinabi ni Ibarra na sumulat ang kaniyang ama sa kaniya may isang taon na ang nakakalipas. Nagbilin si Don Rafael, ama ni Ibarra, na huwag nitong ikagugulat kung sakaling hindi man siya makasulat pa sapagkat lubha siyan abala sa kaniyang mga gawain.
                            Ganito ang salaysay ng Tinyente: Si Don Rafael ay siyang pinakamayan sa buong lalawigan. Bagamat siya ay iginagalang, may ilan din namang naiinggit sa kaniya. Ang mga nuno nila ay mga Kastila, na ang mga ito, dahil sa kasawian, ay gumagawa ng mga hindi nararapat.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f7" class="back-cont">
                        <div class="content">
                        Ang masasama sa Espanya ay nakakarating sa Pilipinas. Si Don Rafael ay maraming mga kagalit na mga Kastila at pari. Ilang buwan pa lamang nakakaalis sa Pilipinas si Ibarra ay nagkasira na si Don Rafael at Padre Damaso. Diumano ay hindi nangungumpisal si Don Rafael.
                        Nabilanggo si Don Rafael dahil sa pagkakaroon ng mga lihim na kaaway. Pinagbintangan pa siya na siya raw ay pumaslang sa isang mangmang at malupit na artilyerong maniningil ng buwis ng mga sasakyan. Pero hindi naman ito totoo.
                        
                        Ang totoo ay may isang grupo ng mga bata na sinigawan ang <a class="hoverables" data-note="Kahulugan:  isang sundalo o eksperto na namamahala sa paggamit ng mga malalakas na armas pandigma">artilyero</a> ng “ba be bi bo bu” na labis na ikinagalit nito. Pinukol ng <a class="hoverables" data-note="Kahulugan:  isang sundalo o eksperto na namamahala sa paggamit ng mga malalakas na armas pandigma">artilyero</a> ang kaniyang tungkod sa mga bata. Isa ang sinampalad na tinamaan at <a class="hoverables" data-note="Kahulugan: natumba">nabuwal</a>. Pinagsisipa ng <a class="hoverables" data-note="Kahulugan:  isang sundalo o eksperto na namamahala sa paggamit ng mga malalakas na armas pandigma">artilyero</a> ito. Napatiyempo namang dumaan si Don Rafael at kinagalitan niya ang <a class="hoverables" data-note="Kahulugan:  isang sundalo o eksperto na namamahala sa paggamit ng mga malalakas na armas pandigma">artilyero</a>. Ngunit ang <a class="hoverables" data-note="Kahulugan:  isang sundalo o eksperto na namamahala sa paggamit ng mga malalakas na armas pandigma">artilyero</a> ay lalong nagpuyos ng galit at si Don Rafael naman ang kaniyang hinarap. Wala nang nagawa si Don Rafael kung hindi ay ipagtanggol ang kaniyang sarili.
                        Sa hindi malamang dahilan, bigla na lamang sumuray-suray ang <a class="hoverables" data-note="Kahulugan:  isang sundalo o eksperto na namamahala sa paggamit ng mga malalakas na armas pandigma">artilyero</a> at dahan-dahang <a class="hoverables" data-note="Kahulugan: natumba">nabuwal</a>. Kakila-kilabot ang kaniyang pagkakabuwal sapagkat ang kaniyang ulo ay tumama sa isang tipak na bato. Nagduduwal ito at hindi nagkamalay hanggang sa tuluyang mapugto ang hininga. Dahil dito, nabilanggo si Don Rafael.
                         </div>
                    </div>
                </div>
            </div>
            <div id="p8" class="paper">
                <div class="front">
                    <div id="f8" class="front-cont">
                        <div class="content">
                        Pinagbintangan siyang <a class="hoverables" data-note="Kahulugan: Taong salungat sa paniniwala o katuruan ng simbahan">erehe</a> at <a class="hoverables" data-note="Kahulugan: taong kalaban ng simbahan at pamahalaan">pilibustero</a>. Masakit sa kaniya ang ganito sapagkat iyon ang itinuturing na pinakamabigat na parusa. Ngunit mas lalong nadagdagan ang bigat sa kaniyang dibdib. Pinaratangan din siyang nagbabasa ng mga ipinagbabawal na aklat, tulad ng El Correo de Ultramar, at diyaryo, nagtatago ng larawan ng paring binitay, isinakdal sa saalang pangangamkan ng lupain, at nagbibigay raw ng tulong sa mga tulisan.
                        
Gumawa ang Tinyente ng paraan para tulungan si Don Rafael at sumumpang ito ay marangal na tao. Sa katunayan, siya ay kumuha ng isang abogadong Pilipino. Ito ay pagkaraang lumitaw sa pagsusuri na ang ikinamatay ng <a class="hoverables" data-note="Kahulugan:  isang sundalo o eksperto na namamahala sa paggamit ng mga malalakas na armas pandigma">artilyero</a> ay ang pamumuo ng dugo sa ulo nito.
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f8" class="back-cont">
                        <div class="content">
                        <h1>KABANATA 5: Pangarap sa Gabing Madilim</h1>

                        Sakay ng kalesa, dumating si Ibarra sa Fonda de Lala, isang uri ng panuluyan na tinutuluyan niya kapag siya ay nasa Maynila. Kaagad na nagtuloy si Ibarra sa kaniyang silid at naupo sa isang <a class="hoverables" data-note="Kahulugan: Uri ng komportableng upuan">silyon</a>. Sa sinapit ng ama, gulong-gulo ang isip nito. Maya-maya ay iginala niya ang paningin sa kalawakan ng himpapawid.

                        Mula sa binata, natanaw niya ang isang maliwanag na bahay sa kabila ng ilog. Naririnig niya ang kalansing ng mga kubyertos at pinggan. Dinig din niya ang tugtugin ng orkestra.

                        Kung nagmasid lamang nang husto sa bahay na iyon si Ibarra, makikita niya kung sino-sino ang naroroon. May isang magandang binibini na nababalot ng <a class="hoverables" data-note="Kahulugan: Manipis na tela">manipis na habi</a>, may suot na diyamante at ginto. Sa likuran naman ay may mga anghel, pastol, at dalagang nag-aalay ng bulaklak. Ang mga <a class="hoverables" data-note="Kahulugan: Maliit na grupo ng tao ">umpukan</a> ng mga Kastila, Pilipino, pari, Intsik, at militar ay nakatuon lahat sa kagandahan ni Maria Clara. Giliw na giliw silang nakatingin sa dalaga, maliban sa isang batang Pransiskano na payat at putlain. Iba ang kaniyang nadarama. Si Padre Sibyla ay siyang-siya sa pakikipag-usap sa mga dilag samantalang si Doña Victorina ay matiyagang inaayos ang buhok ng dalagang hinahangaan ng lahat.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p9" class="paper">
                <div class="front">
                    <div id="f9" class="front-cont">
                        <div class="content">
                        Dahil sa pagal ang isip at katawan ni Ibarra sa paglalim ng gabi, madali siyang nakatulog at nagising kinabukasan na. Ang tanging inabot ng antok ay ang batang Pransiskano.
                        
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f9" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 6: Si Kapitan Tiyago</h1>
                        Ang katangian ni Kapitan Tiyago ay itinuturing na hulog ng langit. Siya ay pandak, hindi kaputian, at may bilugang mukha. Siya ay tinatayang nasa pagitan ng tatlongput limang taong gulang. Maitim ang buhok, at kung hindi lamang <a class="hoverables" data-note="Kahulugan: naninigarilyo">nananabako</a> at <a class="hoverables" data-note="Kahulugan: Laging may pagkain sa bibig o laging ngumunguya">ngumanganga</a>, maituturing siyang magandang lalaki.

Siya ang pinakamayaman sa Binundok dahil marami siyang negosyo at iba pang klase ng mga ari-arian. <a class="hoverables" data-note="Kahulugan: Pagiging kilala  o sikat">Tanyag</a> din siya sa Pampanga at Laguna bilang asendero, kung kayat hindi kataka-taka na parang lobong hinihipan sa <a class="hoverables" data-note="Kahulugan: Paglaki o paglago">pagpintog</a> ang kaniyang yaman.

Dahil sa siya ay mayaman, siya rin ay isang impluwensiyadong tao. Siya ay malakas sa mga taong nasa gobyerno at kaibigan niya ang halos lahat ng mga prayle. Ang turing niya sa sarili ay isang tunay na Kastila at hindi Pilipino. Kasundo niya ang Diyos dahil nagagawa niyang bilhin ang kabanalan.
Katunayan, siya ay nagpapamisa at nagpapadasal tungkol sa kaniyang sarili. Ipinalalagay ng balana na siya ay nakapagtatamo ng kalangitan. Iisipin na lamang na nasa kaniyang silid ang lahat ng mga santong sinasamba tulad nina Sta. Lucia, San Pascual Bailon, San Antonio de Padua, San Francisco de Asis, San Antonio Abad, San Miguel, Sto. Domingo, Hesukristo, at marami pa.

                     </div>
                    </div>
                </div>
            </div>
            <div id="p10" class="paper">
                <div class="front">
                    <div id="f10" class="front-cont">
                        <div class="content">
                            
Para kay Kapitan Tiyago, kahit na ano ang itakda ng mga Kastila, yaon ay karapat-dapat at kapuri-puri. Dahil sa kaniyang pagpupula sa mga Pilipino, siya ay naglilingkod ngayon bilang <a class="hoverables" data-note="Kahulugan: Namumuno sa isang bayan; lokal na pinuno">gobernadorcillo</a>. Basta opisyal, sinusunod niya. Anomang <a class="hoverables" data-note="Kahulugan: Alintuntunin / Kautusan">reglamento</a> o patakaran ay kaniyang sinusunod. Sipsip din siya sa mga taong nasa poder. Basta may okasyon na katulad ng kapanganakan at kapistahan, lagi siyang mayroong handog na regalo.

Noon, si Kapitan Tiyago ay tanging isang kuripot na mangangalakal ng asukal sa Malabon. Dahil sa kakuriputan ng kaniyang ama ay hindi siya pinag-aral nito. Naging katulong lamang siya at tinuruan ng isang paring Dominiko. Nang mamatay ang pari at ama nito, mag-isa siyang nangalakal. Nakilala niya si Pia Alba na isang magandang dalagang taga-Sta. Cruz. Nagtulong sila sa paghahanap-buhay hanggang sa yumaman nang husto at nakilala sa alta sosyedad.

Ang pagbili nila ng lupain sa San Diego ang naging daan upang maging kaututang-dila roon ang kura na si Padre Damaso. Naging kaibigan din nila ang pinakamayaman sa buong San Diego — si Don Rafael Ibarra, na ama ni Crisostomo Ibarra. Sa anim na taong pagsasama nina Tiyago at Pia, hindi sila nagkaroon ng anak kahit na kung saan-saan sila <a class="hoverables" data-note="Kahulugan: Nagsagawa ng isang panata o pangako sas Dios">namanata</a>. Dahil dito, ipinayo ni Padre Damaso na sa Obando sila pumunta, kina San Pascual Bailon, Sta. Clara, at sa Nuestra Sra. de Salambaw.
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f10" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 7: Suyuan sa Asotea</h1>
                        Kinabukasan, maagang-maaga pa ay nagsimba na sina Maria Clara at Tiya Isabel. Pagkatapos ng misa, nagyayang umuwi na si Maria.

Pagkaagahan ay nanahi si Maria upang hindi mainip sa paghihintay. Si Tiya Isabel ay nagwalis ng mga kalat mula nung sinundang gabi. Si Kapitan Tiyago naman ay nagbuklat ng mga itinatagong kasulatan. <a class="hoverables" data-note="Kahulugan: Bumibilis ">Sumasasal</a> sa kaba ang dibdib ni Maria tuwing may nagdaraang mga sasakyan. Dahil medyo namumutla na siya, ipinayo ni Kapitan Tiyago na magbakasyon siya sa Malabon o sa San Diego.

<a class="hoverables" data-note="Kahulugan: Nagbigay ng payo o rekomendasyon">Iminungkahi</a> ni Tiya Isabel na sa San Diego na gawin ang bakasyon sapagkat bukod sa malaki ang bahay roon ay malapit na ring ganapin ang pista roon. Itinagubilin ni Kapitan Tiyago si Maria na sa pagkukuha ng kaniyang mga damit ay magpaalam na siya sa mga kaibigan sapagkat hindi na siya babalik sa <a class="hoverables" data-note="Kahulugan: Bahay na tinitirahan ng mga madre">beateryo</a>.
Nanlamig at biglang nabitawan ni Maria ang tinatahi nang may biglang tumigil na sasakyan sa kanilang tapat. Nang <a class="hoverables" data-note="Kahulugan: Marinig">maulinigan</a> niya ang boses ni Ibarra, kara-karakang pumasok sa silid si Maria. Tinulungan siya ni Tiya Isabel na mag-ayos ng sarili bago harapin si Ibarra.

Pumasok na sa bulwagan ang dalawa, at nagtama ang kanilang mga paningin na siyang nagdulot ng kaligayahan sa kanilang puso.
                    </div>
                    </div>
                </div>
            </div>
            <div id="p11" class="paper">
                <div class="front">
                    <div id="f11" class="front-cont">
                        <div class="content">
                        Maya-maya, lumapit sila sa asotea upang iwasan ang alikabok na nililikha ni Tiya Isabel. Tinanong ni Maria si Ibarra kung hindi siya nalimutan nito sa pangingibang bansa dahil sa maraming magagandang dalaga roon. Sinabi ni Ibarra na siya ay hindi nakakalimot. Katunayan, aniya, ay si Maria lamang ang laging nasa kaniyang alaala.

Binigyang diin pa ni Ibarra ang isinumpa niya sa harap ng bangkay ng kaniyang ina na wala siyang ibang iibigin at paliligayahin kundi si Maria lamang. Si Maria man, aniya, ay hindi nakakalimot kahit na pinayuhan siya ng kaniyang padre kompesor na limutin niya na si Ibarra.

Binalikan pa ni Maria ang kanilang <a class="hoverables" data-note="Kahulugan: Pagkabata">kamusmusan</a>, ang kanilang paglalaro, pagtatampuhan at muling pagbabati, at pagtawa ni Maria nang tawaging mangmang ng kaniyang ina si Ibarra. Dahil dito, si Ibarra ay nagtampo kay Maria. Nawala lamang ang kaniyang tampo nang lagyan ni Maria ng <a class="hoverables" data-note="Kahulugan: Maliit na halaman">sambong</a> ang loob ng kaniyang sumbrero upang hindi ito maitiman.

Ang bagay na iyon ay ikinagalak ni Ibarra. Kinuha niya sa kaniyang <a class="hoverables" data-note="Kahulugan: Sisidlan ng mga papeles">kalupi</a> ang isang papel at ipinakita ang ilang tuyong dahon ng <a class="hoverables" data-note="Kahulugan: Maliit na halaman">sambong</a> na nangingitim na ngunit mabango pa rin. Inilabas naman ni Maria ang isang liham na ibinigay sa kaniya ni Ibarra bago ito umalis patungo sa ibang bansa. Binasa ito ni Maria nang nakayuko upang hindi makita ang kaniyang mukha.

                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f11" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 8: Mga Alaala</h1>
                        Ang kalesang sinasakyan ni Ibarra ay masayang <a class="hoverables" data-note="Kahulugan: Dumadaan o naglalakbay">bumabagtas</a> sa isang masayang pook ng Maynila. Ang kagandahan ng sinag ng araw ay nakakapagpapawi sa kaniyang <a class="hoverables" data-note="Kahulugan: Lungkot, pighati, pagdadalamhati">kahapisang</a> nadarama. Sa pagmamasid niya sa kapaligiran, biglang bumangon sa kaniyang nahihimlay na diwa ang isang alaala. Kabilang dito ay ang mga kalesa at karumatang hindi tumitigil sa pagbibiyahe, mga taong may ibat ibang uri ng kasuotan na katulad ng mga sa Europeo, Intsik, at Pilipino, mga babaing naglalako ng mga bungang-kahoy, mga lalaking hubad na nagpapasan, mga ponda at kainan, at pati ang mga karitong hila-hila ng mga makupad na kalabaw. Pati ang mga bilanggong patay sa ilalim ng kariton na malapit sa dalawang bilanggo rin ay kaniyang naaalala.

Sa patuloy na <a class="hoverables" data-note="Kahulugan:  masusing pagtingin o pagtutok ng mata sa isang lugar, bagay, o tao">pagsusuyod</a> ng kaniyang tingin, napansin niya na walang ipinagbago ang punong Talisay sa San Gabriel. Ang Escolta naman sa tingin niya ay lalong pumangit. Nakita rin niya ang mga magagandang karwahe na ang mga sakay ay mga kawaning inaantok pa sa kanilang mga pagpasok sa mga tanggapan at pagawaan, mga Tsino at paring walang kibo. Sa mga paring nakasakay sa mga karwahe, namataan niya si Padre Damaso na nakakunot ang noo. Si Kapitan Tinong naman na kasama ang kaniyang asawa at dalawang anak na babae na nakasakay sa ibang karwahe ay binati si Ibarra.


                    </div>
                    </div>
                </div>
            </div>
            <div id="p12" class="paper">
                <div class="front">
                    <div id="f12" class="front-cont">
                        <div class="content">
                            
Napadaan din si Ibarra sa Arroceros, sa bahaging kinalalagyan ng pagawaan ng tabako. Naaalala niiya na minsan na siyang nahilo dahil sa masamang amoy ng tabako.

Nang madaan siya sa Hardin Butaniko, saglit na napawi ang kaniyang magagandang <a class="hoverables" data-note="Kahulugan: alaala ">gunita</a>. Pumasok sa kaniyang isipan ang hardin sa Europa na nakakaakit at nakakapang-anyaya sa mga tao. Itinuon niya ang tingin sa malayo at nakita niya ang matandang Maynila na naliligid ng makakapal at nilumot na mga pader.

Ang pagkakatingin niya sa Bagumbayan ay nagpabangon sa bilin ng kaniyang naging gurong pari bago siya pumunta sa ibang bansa. Ang bilin ng pari ay ang mga sumusunod: ang karunungan ay para sa tao, ngunit ito ay natatamo lamang ng mga may puso lamang; kailangang pagyamanin ang karunungan upang maisalin ito sa mga susunod na <a class="hoverables" data-note="Kahulugan: mga susunod na henerasyon ng mga tao">salinlahi</a>; at, ang mga dayuhan ay nagpunta sa Pilipinas upang humanap ng ginto. Kung kayat nararapat lamang na puntahan ang lugar ng mga dayuhan upang kunin din naman ni Ibarra ang kanilang ginto.


                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f12" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 9: Mga Suliranin Tungkol sa Bayan</h1>
                        May isang karwaheng nakatigil sa tapat ng bahay ni Kapitan Tiyago. Ang nakasakay sa loob nito ay si Tiya Isabel at hinihintay na lamang na sumakay si Maria. Tiyempong dumating si Padre Damaso at nagtanong sa dalawa. Sinabi nilang kukunin ni Maria ang mga kagamitan nito sa <a class="hoverables" data-note="Kahulugan: Bahay na tinitirahan ng mga madre">beateryo</a>. Ang ganito ay hindi minabuti ng pari, bubulong-bulong na nagtuloy siya sa bahay ni Tiyago. Ang pagbubulong-bulong ng pari ay inakala ni Tiya Isabel na mayroong minimemoryang sermon ang prayle.

Nahalata kaagad ni Kapitan Tiyago ang pagbabagong anyo ng pari nang hindi nito iabot ang kamay nang magtangka siyang magmano rito. Sinabi ng pari na kailangang mag-usap silang sarilinan ni Kapitan tiyago. Pumasok sila sa isang silid at isinarang mabuti ang pinto.

Sa kabilang dako, pagkaraang makapagmisa si Padre Sibyla, kaagad na nagtuloy siya sa kumbento ng mga Dominiko sa Puerta de Isabel II. Dumiretso siya sa isang silid at <a class="hoverables" data-note="Kahulugan: Bumungad ">tumambad</a> sa kaniyang paningin ang anyo ng isang matandang paring may sakit. Nakaramdam siya ng matinding pagkaawa rito. Ikinuwento ni Padre Sibyla sa paring may sakit ang tungkol sa naganap na pagkakaalitan nina Padre Damaso at Ibarra. Ipinaliwanag ni Padre Sibyla na si Ibarra ay taong mabait at mabuti. 
                    </div>
                    </div>
                </div>
            </div>
            <div id="p13" class="paper">
                <div class="front">
                    <div id="f13" class="front-cont">
                        <div class="content">
                        Ang dalawang pari ay nagpalitan ng kanilang mga kuro-kuro sa mayamang binata, kay Maria Clara, at kay Kapitan Tiyago. Sa kanilang pagsusuri, ang mga ito ay lubhang napakalaki ng maitutulong sa ikasusulong ng kanilang korporasyon at kapatiran sa panahong iyon.
                        
Sa paniniwala ng may sakit na pari, dahan-dahan nang nawawala ang kanilang mga kayamanan lalo na sa Europa dahil sa pagtaas ng buwis na nagiging dahilan ng pagkawala ng kanilang mga ari-arian. Hindi na nararapat, aniya, ang pagtaas ng buwis sa kanilang mga lupain sapagkat ang Pilipino ay natututong mamili ng lupa sa ibat ibang lugar at lumilitaw na kasingbuti rin ng sa kanila o higit pa.

Bago umalis si Padre Sibyla, naibalita rin niya na ang Tinyente ay hindi rin nagsumbong sa Kapitan-Heneral at diumano ay nakikiisa pa kay Padre Damaso. Ngunit, nalaman din ng kapitan ang buong pangyayari, na ito ay naibalita ni Laruja sa isang pahayagan. Si Padre Damaso ay napalipat pa sa higit na mabuting bayan.

Sa kabilang bansa naman, natapos na rin ang masinsinang pag-uusap nina Kapitan Tiyago at Padre Damaso. Sinisisi pa rin ni Padre Damaso si Kapitan Tiyago dahil sa hindi nito pagtatapat. Binalaan niya pa ang kapitan na kailanman ay huwag itong magsinungaling sa kaniya sapagkat siya ang ama ni Maria Clara. Pagkaalis ng pari, kaagad na pinatay niya ang mga ipinatulos na dalawang kandila kay Maria na patungkol sa <a class="hoverables" data-note="Kahulugan: Masaya at matagumpay; Naglalarawan sa isang bagay bilang lubhang kahanga-hanga">maluwalhating</a> paglalakbay ni Ibarra patungong San Diego.

                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f13" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 10: Ang San Diego</h1>
                        Ang San Diego ay isang karaniwang bayan sa Pilipinas na nasa isang baybayin ng isang lawa at malalapad na bukirin at palayan. Karamihan sa nakatira rito ay mga magsasaka. Dahil sa kanilang kamangmangan, ang mga inaaning produkto ng agrikultura ay naipagbibili nila nang murang-mura sa mga Tsino.

Mula sa pinakamataas na bahagi ng simboryo ng simbahan, halos natatanaw ang kabuuan ng bayan. Sa may itaas na bahagi, may kubo na sadyang itinayo. Gayunman, mapapansin sa pagtanaw sa kabuuan nito ang isang tila pulong gubat na nasa gitna mismo ng kabukiran.

Kagaya pa ng ibang bayan sa Pilipinas, ang San Diego ay mayroong itinatagong alamat. May isa umanong matandang Kastila na dumating sa bayan. Ito ay <a class="hoverables" data-note="Kahulugan:  mahusay at malinaw magsalita o magpahayag ">matatas</a> magsalita ng Tagalog at nanlalalim ang mga mata. Binili niya ang buong gubat. Ang mga ipinambayad niya ay mga damit, alahas, at salapi. Hindi nagtagal, ang matanda ay nawala.

Isang araw, ang mga <a class="hoverables" data-note="Kahulugan: nag-aalaga o nag-iingat ng mga hayop">nagpapastol</a> ng kalabaw ay nakaamoy ng <a class="hoverables" data-note="Kahulugan: Mabaho/ amoy na hindi kaaya-aya">masangsang</a> na amoy. Hinanap nlla ang pinanggalingan ng amoy at nakita nila ang nabubulok na bangkay ng matanda na nakabitin sa isang puno ng Baliti.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p14" class="paper">
                <div class="front">
                    <div id="f14" class="front-cont">
                        <div class="content">
                            
Dahil sa pagkamatay ng matanda, lalo siyang kinatakutan sapagkat nung nabubuhay pa siya, takot na takot na sa kaniya ang mga babae dahil <a class="hoverables" data-note="Kahulugan: Paos o malat">bahaw</a> ang tinig nito, paimpit kung tumawa, at malalalim ang mga mata. Sinunog ng ilan ang damit na galing sa matanda at ang mga hiyas naman ay tinapon sa ilog.

Hindi nagtagal, isang batang mistisong kastila ang dumating at sinabing siya ang anak ng namatay. Ito ay pangalang Saturnino. Siya ay masipag at mapusok; sininop niya ang gubat. Sa kalaunan, nakapag-asawa siya ng isang babaeng taga-Maynila at nagkaroon ng anak na tinatawag niyang Rafael, o si Don Rafael, na siyang ama ni Crisostomo Ibarra.

Si Don Rafael ay hindi malupit; bagkus, siya ay mabait. Ito ang dahilan kung bakit kinagiliwan siya ng mga magsasaka. Napaunlad niya ang lugar: mula sa pagiging nayon, ito ay naging bayan. Nagkaroon ito ng isang kurang Indio. Nang mamatay ito, si Padre Damaso ang pumalit at naging <a class="hoverables" data-note="Kahulugan: Pari ">kura</a> siya ng bayan.

                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f14" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 11: Ang mga Makapangyarihan</h1>
                        Bagamat Don Rafael ang tawag sa ama ni Ibarra, hindi siya ang kinikilalang makapangyarihan kahit na siya ang pinakamayaman. Pero, siya ay iginagalang at halos lahat ng mga tao ay mayroong pagkakautang sa kaniya. Sa kabila ng <a class="hoverables" data-note="Kahulugan: Kalinisan o kagandahan">kabusilakan</a> ng kaniyang puso, siya ay naging paksa ng mga usapin at ni wala pa ngang kumampi sa kaniya.

Si Kapitan Tiyago man, kahit na masalapi, sinasalubong ng banda ng musiko, at hinahainan ng masasarap na pagkain kapag nagpupunta sa bayan, tuwing siya ay nakatalikod, siya ay tinatawag na Sakristan Tiyago.

Ang kapitan sa bayan ay hindi rin kabilang sa mga tinatawag na casique o makapangyarihan. Ang kaniyang puwesto ay nabili niya sa halagang limang libo. Madalas siyang sabunin at kagalitan ng Alkalde Mayor.

Ang San Diego ay maihahalintulad sa Roma at Italya sa mahigpit na pag-aagawan sa kapangyarihan ng mga pamunuan ng bayan. Kabilang dito ay si Padre Bernardo Salvi, isang payat at batang Pransiskano na siyang pumalit kay Padre Damaso. Payat siya sapagkat mahilig siyang mag-ayuno. Kung ihahambing siya kay Padre Damaso, siya ay mabait at maingat sa tungkulin.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p15" class="paper">
                <div class="front">
                    <div id="f15" class="front-cont">
                        <div class="content">
                        Ang <a class="hoverables" data-note="Kahulugan: Ranggo sa militar;  pinuno ng mga guwardiya-sibil">Alperes</a> naman ang puno ng mga guwardiya-sibil at may asawa na si Doña Consolacion, isang Pilipina na mahilig maglagay ng mga <a class="hoverables" data-note="Kahulugan: Pampaganda na ginagamit sa mukha ">kolorete</a> sa mukha. Ang pagkakapangasawa niya ay binubunton niya sa pamamagitan ng paglalasing, pag-uutos sa mga sundalo na magsanay sa init ng araw o dili kaya ay sinasaktan ang kaniyang <a class="hoverables" data-note="Kahulugan: Asawang babae (female spouse)">eposa</a>.

Bagamat may <a class="hoverables" data-note="Kahulugan: Hindi pagkakaunawaan">hidwaan</a> ang <a class="hoverables" data-note="Kahulugan: Ranggo sa militar;  pinuno ng mga guwardiya-sibil">Alperes</a> at Padre Salvi, kapag sila ay nagkikita ay pareho silang nagpaplastikan. Sila ay nagbabatian sa harap ng maraming tao at parang walang anumang namamagitang hindi pagkakaunawaan. Pero, kapag hindi na magkaharap ay gumagawa sila ng kani-kanilang mga paraan upang makapaghiganti sa isat isa.

Ang <a class="hoverables" data-note="Kahulugan: Ranggo sa militar;  pinuno ng mga guwardiya-sibil">Alperes</a> at Padre Salvi ang tunay na makapangyarihan sa San Diego. Ang tawag sa kanila ay mga casique.

                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f15" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 12: Araw ng mga Patay</h1>
                        
Ang sementeryo ng San Diego ay nasa kalagitnaan ng isang malawak na palayan at may bakod na lumang pader at kawayan. Lubhang napakakipot ng daang patungo rito. Ito ay maalikabok kung tag-araw at nagpuputik naman kung tag-ulan.

Mayroong isang malaking krus na nasa gitna ng libingan. Ito ay mayroong nakatungtong na bato at nakatitik ang INRI sa isang kuping lata na niluma na ng panahon. Masukal ang kabuuan ng libingan.

Sa ibang bahagi ng libingan, may dalawang tao ang humuhukay ng paglilibingan na malapit sa pader na parang babagsak na. Ang isa ay dating sepulturero at ang isa naman ay parang bago sapagkat hindi siya mapakali, dura nang dura sa lupa at panay ang hithit ng sigarilyo.

Sinabi ng naninigarilyong lalaki sa sepulturero na lumipat na sila ng ibang lugar sapagkat sariwa at dumudugo pa ang bangkay na kaniyang hinuhukay. Hindi niya matatagalan ang gayong tanawin. Sumagot ang kausap na siya raw ay napakaselan at marahil kung siya ang nasa kaniyang kalagayan na ipinahukay ang isang bangkay na may dalawampung araw pa lang nalilibing sa gitna ng kadiliman ng gabi, at kasalukuyang bumubuhos ang malakas na ulan at namatay ang kaniyang ilaw ay lalo siyang mandidiri at kikilabutan ang buong katawan niya. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p16" class="paper">
                <div class="front">
                    <div id="f16" class="front-cont">
                        <div class="content">
                        Ang bangkay, aniya, ay kailangang pasanin at ilibing sa libingan ng mga Intsik.

Gayunman, dahil nga sa malakas ang buhos ng ulan at kabigatan ng bangkay, minarapat na lamang niyang itapon ito sa lawa. Ito ay dahil sa utos ng malaking kura na si Padre Garrote.

                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f16" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 13: Ang Babala ng Sigwa</h1>
                        Sakay sa kanyang kalesa, nagtungo si Ibarra sa sementeryo kasama ang kanyang katiwala upang hanapin ang nitso ng amang si Don Rafael.


Ayon sa katiwala, matagal siyang hindi nakabalik sa puntod ni Don Rafael dahil siya ay nagkasakit. Si Kapitan Tiago na daw ang bahalang magpaayos ng nitso.


Nagtanim ang katiwala ng mga bulaklak at nagtayo ng isang krus upang maging palatandaan. Agad na nagtungo si Ibarra ng matanaw niya ang krus na tinutukoy ng katiwala.


Nang makarating sa likod ng krus ay bigong nakita ang libing. Napahiya ang utusan kay Ibarra at hindi makapaniwala. Pinuntahan nila ang sepulturero na malapit lang sa kinaroroonan nila.


Nagtanong ang katiwala sa sepulturero kung mayroon ba itong nakitang puntod na may krus at mga bulaklak. Ayon sa sepulturero, sinunog na niya ang krus na tinutukoy nito dahil ito ang utos ni Padre Garote.
Ang bangkay naman ni Don Rafael ay wala na sa nasabing libingan. Pinalipat ni Padre Damaso ang bangkay ni Don Rafael sa libingan ng mga Intsik ngunit dahil sa may kabigatan ang bangkay nito at dahil na rin malakas na ulan ay tinapon nalang nila ang bangkay sa lawa.



                        </div>
                    </div>
                </div>
            </div>
            <div id="p17" class="paper">
                <div class="front">
                    <div id="f17" class="front-cont">
                        <div class="content">
                        Awa ang naramdaman ng katiwala habang galit naman ang naramdaman ni Ibarra sa kanyang narinig. Tulalang lumabas si Ibarra ng sementeryo. Napabilis ang lakad nito ng matanaw niya Si Padre Salvi.


Huminto si Ibarra sa harap ni Padre Salvi habang nanlilisik ang mga mata sa galit. Sinugod ni Ibarra ang pari at diniinan ang hawak sa balikat nito.


Pinagbintangan ni Ibarra si Padre Salvi ngunit agad namang itinanggi ng pari ang paratang. Sa huli ay nalaman rin ni Ibarra na si Padre Damaso ang Padre Garoteng tinutukoy ng sepulturero.

                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f17" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 14: Si Pilosopo Tasyo</h1>
                        Si Pilosopo Tasyo ay dating Don Anastacio. Siya ay laging laman ng lansangan, walang tiyak na direksyon ang kaniyang paglalakad. Nang araw na iyon ay dumalaw rin siya sa libingan upang hanapin ang puntod ng yumaong asawa. Ang pagkakilala kay Tasyo ng mga mangmang ay isang taong may toyo sa ulo o baliw.

Anak siya ng mayaman, ngunit dahil sa katalinuhan niya ay pinahinto ito sa pag-aaral mula sa dalubhasaan ng San Jose. Natatakot kasi ang kaniyang ina na dahil sa pagtatamo niya ng higit na mataas na kaalaman ay baka makalimutan niya na ang Diyos. Isa pa, gusto ng kaniyang ina na siya ay magpari. Pero, hindi niya ito sinunod at sa halip ay nag-asawa na lamang siya. Sa kasamaang palad, pagkaraan ng isang taon, namatay ang kaniyang asawa. Iniukol na lamang ni Tasyo ang sarili sa pagbabasa ng mga aklat hanggang sa mapabayaan niya ang kaniyang mga minanang kayamanan.

Bagamat ng hapong iyon ay mayroong babala ukol sa darating na unos sapagkat matatalim na kidlat na ang gumuguhit sa nagdidilim na langit, masaya pa rin ang hitsura ni Pilosopo Tasyo. Ito ang ipinagtaka ng mga taong nakakausap niya.
                    </div>
                    </div>
                </div>
            </div>
            <div id="p18" class="paper">
                <div class="front">
                    <div id="f18" class="front-cont">
                        <div class="content">
                        Nang tanungin kung bakit, diretso siyang sumagot ng, “Ang pagdating ng bagyo ang tangi kong pag-asa sapagkat ito ang magdadala ng mga lintik na siyang papatay sa mga tao at susunog sa mga kabahayan. Sana magkaroon din ng delubyo sapagkat may sampung taon na ngayon, isinuwestiyon ko sa bawat kapitan ang pagbili nila ng tagahuli ng kidlat o pararayos ngunit ako ay pinagtawanan lamang ng lahat.”
                        
Ayon pa sa kaniya, hindi binili ng mga kapitan ang kaniyang ipinabibili at sa halip ay mga paputok at kuwitis ang kanilang binili. Kanila ring binayaran ang bawat dupikal ng kampana, gayong sa agham ay mapanganib ang tugtog ng mga batingaw kapag kumukulog. Iniwanan ni Tasyo ang kausap at nagtuloy ito sa simbahan. Inabutan niya ang dalawang bata sa pagsasabing ipinaghanda sila ng kanilang ina ng hapunang pangkura. Tumango ang mga bata.

Lumabas ng simbahan si Tasyo at nagtuloy sa may kabayanan. Nagtuloy siya sa bahay ng mag-asawang Don Filipo at Aling Doray. Masayang sinalubong siya ng mag-asawa at itinanong kung nakita niya si Ibarra na nagtungo sa libingan. Sumagot siya ng “oo” sa pagsasabing nakita niya itong bumaba sa karwahe. Naramdaman niya, aniya, ang naramdaman ni Ibarra nang hindi makita ang libingan ng ama. Ayon kay Tasyo, isa siya sa anim na kataong nakapaglibing kay Don Rafael.

Sa pag-uusap pa rin nila, nabanggit ni Aling Doray ang tungkol sa purgatoryo sapagkat noon ay undas.
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f18" class="back-cont">
                    <div class="content">
                    Sinabi ni Tasyo na hindi siya naniniwala sa purgatoryo. Ngunit, sinabi niyang iyon ay mabuti, banal, at maraming kabutihan ang nagagawa nito sa tao upang mabuhay nang malinis at dalisay. Binigyang diin pa niya na ang purgatoryo ay siyang tagapag-ugnay ng namatay sa nabubuhay.
                    Pagkuwa ay nagpaalam na siya. Palakas nang palakas ang buhos ng ulan. Ito ay sinasalitan ng matatalim na kidlat at kulog. Siyang-siya si Pilosopo Tasyo sa gayong pangyayari sapagkat nakataas pa ang kaniyang dalawang kamay at nagsisigaw habang naglalakad papalayo sa mag-asawa.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p19" class="paper">
                <div class="front">
                    <div id="f19" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 15: Ang mga Sakristan</h1>
                            Parang plegarya ang tunog ng kampanang binabatak ng magkapatid na sakristan na sina Crispin at Basilio. Sila ang kausap kanina ni Pilosopo Tasyo at sinabhan na sila ay hinihintay ng kanilang inang si Sisa para sa isang hapunang pangkura. Sa anyo ng hitsura ng magkapatid, mapagsisino na sila ay hilahod sa hirap.

Sinabi ni Crispin kay Basilio na kung kasama sila ni Sisa, disinsana ay hindi siya mapagbibintangang isang magnanakaw. At kung malalaman ni Sisa na siya ay pinapalo, tiyak hindi papayag ang kanilang ina. Ang anyo ng pangamba sa mukha ni Crispin ay nababakas. Idinadalangin na sana huwag magkasakit silang lahat. Ang suweldo lang kasi nila ay dalawang piso sa isang buwan. Minultahan pa siya nang tatlong beses. Pero, hindi pumayag si Basilio sapagkat walang kakainin ang kanilang ina. Isa pa, ang katumbas ng dalawang onsa ay tatlongpu at dalawang halaga ng pera na lubhang mabigat para kay Basilio.

Ipinakiusap ni Crispin na bayaran na lamang ni Basilio ang ibinibintang sa kaniya, ngunit kulang pa ang sasahurin ni Basilio kahit magbayad sila. Dahil dito, nasabi ni Crispin na mabuti pa ngang magnanakaw na siya sapagkat maililitaw niya ito. 
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f19" class="back-cont">
                    <div class="content">
                    At kung papatayin man siya sa palo ng kura at siya ay tuluyang mamatay, magkakaroon naman ng mga damit si Sisa at ang kapatid na si Basilio. Nasindak ang kaniyang kapatid sa nabanggit nito.
                    Nag-aalala pa si Basilio na kapag nalaman ng kanilang ina na napagbintangang magnanakaw si Crispin ay tiyak na magagalit ito. Pero, sinabi ni Crispin na hindi maniniwala ang kanilang ina sapagkat ipakikita niya ang maraming latay na likha ng pagpalo ng kura at ang bulsa niyang butas-butas na walang laman kundi kuwalta na aginaldo pa niya noong Pasko, kinuha pa sa kaniya ng hidhid na kura.

Gumulo ang isipan ni Crispin dahil mahirap ang gusot na napasukan nilang magkapatid. Gusto niyang makauwi silang magkapatid upang makakain ng masarap na hapunan. Magmula nang mapagbintangan siyang magnanakaw, hindi na siya pinapakain hanggat hindi niya naisauli ang dalawang onsa. Maliwanag sa mga pahayag ni Crispin na kaya siya napagbintangang magnanakaw sapagkat ang kanilang ama ay mabisyo, lasinggero, at sabongero.

Habang nag-uusap ang magkapatid, ang sakristan mayor ay walang kilatis na nakapanhik sa palapag na kinaroroonan nila. Antimano, puyos ito sa galit. Sinabi niya kay Basilio na ito ay kaniyang minumultahan dahil sa hindi tamang pagtugtog ng kampana. Kapagdaka, si Crispin naman ang hinarap at sinabing hindi ito makakauwi hanggang hindi niya nailalabas ang dalawang onsa na ibinibintang sa kaniya. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p20" class="paper">
                <div class="front">
                    <div id="f20" class="front-cont">
                        <div class="content">
                        Tinangkang mangatuwiran ni Basilio, ngunit sinansala siya ng sakristan mayor sa pagsasabing kahit na siya ay hindi makakauwi hanggat hindi sumasapit ang eksaktong ika-10 ng gabi.
                        Gimbal si Basilio sapagkat ika-9 pa lamang ng gabi ay wala nang puwedeng maglakad sa lansangan. Makikiusap pa sana si Basilio pero biglang sinambilat ng sakristan mayor si Crispin sa bisig at kinaladkad na papanaog sa hagdanan hanggang sa sila ay lamunin ng dilim. Dinig ni Basilio ang pagpapalahaw ng kapatid, ngunit wala siyang magawa. Naiwan itong parang tulala. Ang bawat pagsampal ng sakristan kay Crispin ay sinusundan ng masakit na pagdaing. Nanlaki ang mata at nakuyom ni Basilio ang kaniyang palad sa sinapit ng kapatid. Pumasok sa kaniyang isipan kung kailan siya maaaring mag-araro sa bukid habang naririnig niya ang paghingi ng saklolo ni Crispin. Mabilis na pumanhik si Basilio sa ikalawang palapag ng kampanaryo. Mabilis na kinalag niya ang lubid na nakatali sa kampana at nagpatihulog na padausdos sa bintana ng kampanaryo. Noon, ang langit ay unti-unting nagliliwanag sapagkat humihinto na ang ulan.

                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f20" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 16: Si Sisa</h1>
                        Ang kadiliman ay nakalatag na sa buong santinakpan. Mahimbing na natutulog ang mga taga-San Diego pagkatapos na makapag-ukol ng dalangin sa kanilang mga yumaong mga kamag-anak. Ngunit si Sisa ay gising pa rin. Siya ay nakatira sa isang maliit na dampa na sa labas ng bayan. May isang oras din bago narating ang kaniyang tirahan mula sa kabayanan.

Kapuspalad si Sisa sapagkat nakapag-asawa siya ng lalaking iresponsable, walang pakialam sa buhay, sugarol, at palaboy sa lansangan. Hindi niya inasikaso ang kanilang mga anak; tanging si Sisa lamang ang kumakalinga kay Basilio at Crispin. Dahil sa kapabayaan ng kaniyang asawa, naipagbili ni Sisa ang ilan sa mga natipong hiyas o alahas nito noong siya ay dalaga pa. Sobra ang kaniyang pagkamartir at kahinaan ng loob. Sa madalang na pag-uwi ng kaniyang asawa, nakakatikim pa siya ng sakit ng katawan dahil nananakit ang lalaki. Gayunman, para kay Sisa, ang lalaki ay ang kaniyang bathala at ang kaniyang mga anak ay anghel.

Nang gabing iyon ay abala siya sa pagdating nina Basilio at Crispin. Mayroon siyang nakuhang tuyong tawilis at namitas siya ng kamatis sa kanilang bakuran na siyang ihahain niya kay Crispin. Tapang baboy-damo at isang hita ng patong bundok o dumara na hiningi niya kay Pilosopo Tasyo ang inihain niya kay Basilio. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p21" class="paper">
                <div class="front">
                    <div id="f21" class="front-cont">
                        <div class="content">
                        Higit sa lahat, nagsaing siya ng puting bigas na sadyang inani niya sa bukid. Ang ganitong hapunan ay tunay na pangkura, na gaya ng sinabi ni Pilosopo Tasyo kina Basilio at Crispin nang puntahan niya ang mga ito sa simbahan.

                        Sa kasamaang palad, hindi natikman ng magkapatid ang inihanda ng ina sapagkat dumating ang kanilang ama. Kaniyang nilantakang lahat ang mga pagkaing nakasadya para sa kanila. Itinanong pa niya kung nasaan ang dalawa niyang anak. Nang mabundat ang asawa ni Sisa, ito ay muling umalis dala ang sasabunging manok at nagbilin pa siya na tirhan siya ng perang sasahudin ng anak.

Windang ang puso ni Sisa. Hindi nito mapigilan na hindi umiyak. Paano na ang kaniyang dalawang anghel? Ngayon lamang siya nagluto, tapos ay uubusin lamang ng kaniyang walang pusong asawa.

Luhaang nagsaing siyang muli at inihaw ang nalalabing daing na tuyo sapagkat naalala niyang darating na gutom ang kaniyang mga anak. Hindi na siya mapakali sa paghihintay. Upang maaliw ang sarili, ilang beses siyang umawit nang mahina. Saglit na tinigil niya ang pag-aawit ng kundiman at pinukulan niya ng tingin ang kadilimang bumabalot sa kapaligiran. Nagkaroon siya ng malungkot na pangitain. Kasalukuyan siyang dumadalangin sa Mahal na Birhen nang gulantangin siya ng malakas na tawag ni Basilio mula sa labas ng bahay.


                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f21" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 17: Si Basilio</h1>
                        
Napatigagal si Sisa nang dumating si Basiliong sugatan ang ulo. Dumadaloy ang masaganang dugo rito. Ipinagtapat ni Basilio ang dahilan ng kaniyang pagkakasugat; siya raw ay hinabol ng mga guwardiya-sibil at pinahihinto sa paglalakad, ngunit siya ay kumaripas ng takbo sapagkat nangangamba siyang kapag siya ay nahuli ay parurusahan siya at paglilinisin sa kuwartel. Dahil sa hindi niya paghinto, siya ay binaril. Dinaplisan siya ng punglo sa ulo. Sinabi rin niya sa ina na naiwan niya sa kumbento si Crispin. Nakahinga nang maluwag si Sisa. Ipinakiusap ni Basilio sa ina na huwag sabihin kanino man ang dahilan ng kaniyang pagkakasugat sa ulo, at sa halip ay sabihing nahulog lamang siya sa puno.

Tinanong ni Sisa kung bakit naiwan si Crispin. Sinabi ni Basilio na napagbintangang nagnakaw ng dalawang onsa si Crispin. Hindi niya sinabi ang parusang natikman ng kapatid sa kamay ng sakristan mayor. Napaluha si Sisa dahil sa awa sa anak. Ang naibulalas nito ay ang mga dukha raw na katulad lamang nila ang nagpapasan ng maraming hirap sa buhay. Hindi nakatikim ng pagkain si Basilio. Kaagad niyang siniyasat ang kaniyang ina nang malaman na dumating ang ama. Alam niyang tuwing dumarating ang ama, nakakatikim ang kaniyang ina ng mga bugbog nito. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p22" class="paper">
                <div class="front">
                    <div id="f22" class="front-cont">
                        <div class="content">
                        Nabanggit ni Basilio na higit na magiging mabuti ang kanilang kalagayan kung silang tatlo na lamang, at hitsa puwera na ang ama. Ito ay pinagdamdam ni Sisa.
                        Sa pagtulog ni Basilio, siya ay binangungot. Sa panaginip niya, nakita niya ang kapatid na si Crispin ay pinalo ng yantok ng kura at sakristan mayor hanggang sa ito ay panawan ng malay. Dahil sa malakas niyang pag-ungol, siya ay ginising ni Sisa. Tinanong ni Sisa kung ano ang napanaginipan nito. Hindi sinabi ni Basilio ang dahilan, at sa halip ay kaniyang sinabi kung ano ang balak nito sa kanilang pamumuhay. Ang kaniyang mga binabalak ay: ihihinto na silang magkakapatid sa pagsasakristan at ipapakaon niya si Crispin kinabukasan din, hihilingin niya kay Ibarra na kunin siyang pastol ng kaniyang baka at kalabaw, at kung malaki-laki na siya, hihilingin niya kay Ibarra na bigyan siya ng kapirasong lupa na masasaka.

Sa pagsusuri ni Basilio, sila ay uunlad sa kanilang pamumuhay dahil siya ay magsisipag sa pagpapayaman at paglilinang sa bukid na kaniyang sasakahin kung saka-sakali.

Si Crispin ay mag-aaral kay Pilosopo Tasyo at si Sisa ay titigil na sa paglalamay ng mga tinatahing mga damit. Sa lahat ng sinasabi ni Basilio, si Sisa ay nasisiyahan. Ngunit lihim na napaluha ito sapagkat hindi isinama ng anak sa kaniyang mga balak ang kanilang ama.
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f22" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 18: Mga Kaluluwang Naghihirap</h1>
                        Napuna ng mga manang na matamlay at tila may sakit si Padre Salvi nang magmisa ito kinabukasan. Naroon sa kumbento ang mga manang at manong upang isangguni sa kura kung sino ang pipiliin niyang magsermon sa kapistahan ng bayan. Kung si Padre Damaso, Padre Martin, o ang tagapamahala ba? Sa kanilang paghihintay, naging paksa sa kanilang usapan ang tungkol sa pagkakaroon ng indulhensiya plenarya, na siyang tanging kailangan ng mga kaluluwang nagdurusa sa purgatoryo upang mahango roon. Ang isang karaniwang indulhensiya sa kanilang pagkakaalam ay katumbas na ng mahigit na isang libong taong pagdurusa sa purgatoryo. Ang mga manang na nag-uusap ay pinangunguhanan ng isang batang-batang balo, Manang Rufa, at Manang Juana. Dahil sa kanilang kaabalahan sa pag-uusap, hindi nila napansin ang pagdating ni Sisa.

Siya ay mayroong sunong na bakol na puno ng sariwang gulay na pinitas niya sa kaniyang halamanan. Mayroon din siyang halamang-dagat na katulad ng pako, na paboritong gawing salad ng kura. Suot niya ang kaniyang pinakamagandang damit. Tulog pa si Basilio nang umalis siya sa kanilang dampa.
                        </div>

                    </div>
                </div>
            </div>
            <div id="p23" class="paper">
                <div class="front">
                    <div id="f23" class="front-cont">
                        <div class="content">
                        Dumiretso si Sisa sa kusina ng kumbento. Inaasahan niyang marinig ang tinig ni Crispin, ngunit hindi niya ito marinig. Binati niya ang mga sakristan at kawasi sa kumbento. Hindi siya pinansin ng mga ito, kung kaya siya na mismo ang nag-ayos sa mga dala niyang gulat sa isang hapag.

Nakiusap si Sisa sa tagapagluto kung maaari niya bang makausap ang pari, ngunit ang sagot sa kaniya ay hindi sapagkat may sakit ito. Tinanong niya muli ang tagapagluto kung nasaan si Crispin. Ang sagot sa kaniyang tanong ay parang bombang sumabog sa kaniyang pandinig. Si Crispin daw ay nagtanan din pagkatapos na makapagnakaw ng dalawang onsa at mawala ang kaniyang kapatid. Naipagbigay alam na ng alila sa utos ng kura ang pangyayari sa kwartel. Ang mga guwardiya-sibil ay maaaring nasa dampa na nina Sisa upang hulihin ang magkapatid, pagdiin pa ng alila.

Nangatal si Sisa; naumid ang kaniyang labi. Mabilis na tinakpan ang kaniyang dalawang tainga nang paratangan siya ng alila na isang inang walang tinurong mabuti sa mga anak dahil nagmana ang mga ito sa kanilang ama. Tuliro siyang nagtatakbong nilisan ang kumbento, gulong-gulo ang kaniyang isipan.

                        </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f23" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 19: Mga Suliranin ng Isang Guro</h1>
                        Kahit na dumaan ang malakas na bagyo, ang lawa ay hindi gaanong nabagabag. Palibhasa, ito ay napapaligiran ng mga bundok. Sa tabi ng lawa, nag-uusap sina Ibarra at ang binatang guro. Itinuro ng guro kay Ibarra kung saang panig ng lawa itinapon ang labi ni Don Rafael. Ayon sa kaniya, kasama si Tinyente Guevarra noong itinapon ang bangkay. Wala siyang magawa noon kundi makipaglibing.

Malaki ang utang na loob ng guro kay Don Rafael. Noong bagong salta ito sa San Diego, ang Don ang tumustos sa kaniyang mga pangangailangan sa pagtuturo. Sinabi ng guro kay Ibarra na ang malaking suliranin niya at ng mga mag-aaral ay ang kakulangan ng magagastos.

Malaki ring problema, aniya, ang kawalan ng pagtutulungan ng mga magulang at mga taong nasa pamahalaan. Lumilitaw na hindi ang lahat ng mga pangangailangan ng mga batang nag-aaral na katulad ng mga libro na karaniwang nasusulat sa wikang Kastila at ang pagmememorya ng mga bata sa mga nilalaman nito ay naibibigay. Dahil din sa kakulangan ng mga bahay-paaralan, ang klase ay ginaganap sa silong ng kumbento sa tabi ng karwahe ng kura. Nasanay ang mga bata na bumasa nang malakas. Ito ay nakakabulabog sa kura, kaya nakakatikim ng sigaw at mura ang mga bata at guro.

                    </div>
                    </div>
                </div>
            </div>
            <div id="p24" class="paper">
                <div class="front">
                    <div id="f24" class="front-cont">
                        <div class="content">
                        Nabanggit din ng guro kay Ibarra na dahil sa pagbabagong kaniyang ginawa, madaling natutuhan ng mga mag-aaral ang wikang Kastila, ngunit nilait siya ni Padre Damaso sa pagsasabing ang wikang Kastila ay hindi nababagay sa katulad niyang mangmang. Ang kailangan lamang niyang matutuhan daw ay ang Tagalog.

Ipinaris pa siya ni Padre Damaso kay Maestro Circuela, isang guro na hindi marunong bumasa ngunit nagtayo ng eskuwela at nagturo ng pagbabasa sa kaniyang mga estudyante. Labag man sa kaniyang kalooban, wala siyang magawa kundi sumunod kay Padre Damaso. Pero, nag-aral din ang guro ng wikang Kastila para sa kaniyang pansariling interes.

Sobra ang pangingialam ni Padre Damaso sa guro. Nang huminto ang guro sa paggamit ng pamalo sa pagtuturo, siya ay ipinatawag ng kura upang ipabalik sa kaniya ang paggamit ng pamalo sapagkat mabisa ito sa pagtuturo. Tumututol man sa kaniyang kalooban, sumunod din siya sapagkat mismong mga magulang ay napahinuhod ni Padre Damaso na ibalik ang pamalo sa pagtuturo. Dahil sa naging sukal sa kalooban ang pagtuturo, nagkasakit ang guro. Nang ito ay gumaling at bumalik sa serbisyo, kakarampot na lamang ang kaniyang tinuturuan. Sa kaniyang pagbabalik, nagkaroon ng bagong kura. Hindi na si Padre Damaso. Dahil dito, nabuhayan siya ng pag-asa. Sinikap niyang isalin sa wikang Tagalog ang mga aklat na nasusulat sa wikang Kastila.

                            </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f24" class="back-cont">
                    <div class="content">
                    Bukod dito, dinagdagan niya ang mga aralin sa katesismo, pagsasaka, kagandahang asal na hango sa Urbanidad ni Hustensio at Felisa, at Kasaysayan ng Pilipinas. Pero, sa lahat ng mga araling ito ay dapat unahin ang pagtuturo ng relihiyon, ayon sa bagong kura nang ipatawag niya ang guro. Nangako si Ibarra na tutulungan niya ang guro sa pamamagitan ng pulong sa tribunal na kaniyang dadaluhan sa paanyaya ng Tinyente Guevarra.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p25" class="paper">
                <div class="front">
                    <div id="f25" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 20: Ang Pulong sa Tribunal</h1>
                            Ang tribunal ay isang malaking bulwagan na siyang pinagtitipunan at lugar na pulungan ng mga may kapangyarihang tao sa bayan. Nang dumating sina Ibarra at ang guro, nagsisimula na ang pagpupulong. May dalawang pangkat na nakapaligid sa mesa. Ito ay binuo ng dalawang lapian sa bayan. Ang konserbador ay pangkat ng mga matatanda, at ang isa naman ay pangkat ng mga liberal na binubuo ng mga kabataan na siyang pinamumunuan ni Don Felipo. Pinagtatalunan nila ang tungkol sa pagdaraos ng pista ng San Diego. May labing-isang araw na lamang ang nalalabi at pista na. Tinuligsa ni Don Felipo ang tinyente mayor at kapitan dahil malabo pa ang mga paghahanda sa piyesta.

Kung saan-saan napunta ang kanilang pulong. Nagsalita pa si Kapitan Basilyo, isang mayaman na nakalaban ni Don Rafael. Walang binesa at walang kawawaan ang talumpati niya. Dahil dito, isinahapag ni Don Felipo ang isang mungkahi at talaan ng mga gastos. Ang mungkahi niya ay magtayo ng isang malaking tanghalan sa liwasang bayan at magtanghal ng komedya sa loob ng isang linggong singkad.
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f25" class="back-cont">
                    <div class="content">
                    Ang dulaan ay nagkakahalaga ng isang daan at anim na pung piso samantalang ang komedya ay isang libo at apat na raang piso, na tig-dalawang daang piso bawat gabi. Kailangan din ang mga paputok na paglalaanan ng isang libong piso. Binatikos si Don Felipo sa kaniyang mga mungkahi, kung kaya iniatras niya ang mga ito.
                    Sumunod na nagpanukala ang kabesa na siyang puno ng mga matatanda. Ang kaniyang mungkahi ay tipirin ang pagdiriwang, walang paputok, ang magpapalabas ng komedya ay taga-San Diego, at ang paksa ay sariling ugali upang maalis ang mga masasamang ugali at kapintasan.

Nawalang saysay rin ang panukala ng kabesa sapagkat ipinahayag ng kapitan na tapos na ang pasya ng kura tungkol sa pista. Ang pasya ng kura ay ang pagdaraos ng anim na prusisyon, tatlong sermon, tatlong misa mayor, at komedya sa Tondo. Ito ang gusto ng kura, kaya sumang-ayon na lamang ang dalawang pangkat.

Nagpaalam si Ibarra sa guro at ipinaalam na siya ay pupunta sa ulumbayan ng lalawigan upang lakarin ang isang mahalagang bagay.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p26" class="paper">
                <div class="front">
                    <div id="f26" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 21: Mga Pagdurusa ni Sisa</h1>
                            Lito ang isip habang tumatakbo pauwi si Sisa. Matindi ang bumabagabag sa kaniyang isipan, ang katotohanang sinabi sa kaniya ng kawaksi ng kura. Para siyang tatakasan ng sariling bait sa pag-iisip kung paano maililigtas sina Basilio at Crispin sa kamay ng mga sibil. Tumindi ang sikdo ng kaniyang dibdib nang papalapit na siya sa kaniyang bahay at natanaw ang dalawang sibil na papaalis na. Saglit na nawala ang kaba sa kaniyang dibdib. Hindi kasama ng mga sibil ang isa man sa kaniyang anak.

Gayunman, sa sumunod na sandali, muling sinakmal ng matinding pangamba si Sisa. Nang makasalubong niya ang dalawang sibil, pilit na tinatanong siya kung saan diumano itinago ang dalawang onsang ninakaw ng kaniyang anak. Pilit na pinapaamin din siya tungkol sa paratang ng kura. Kahit na nagmamakaawa na si Sisa, hindi rin pinapakinggan ang kaniyang pangangatuwiran. Hindi siya pinaniniwalaan ng mga sibil. Sa halip ay pakaladkad siyang isinama sa kwartel.
Muling nagsumamo si Sisa, pero mistulang bingi ang kaniyang mga kausap. Ipinakiusap ni Sisa na payagan siyang mauna nang ilang hakbang sa mga sibil habang sila ay naglalakad patungong kwartel kapag sila ay nasa kabayanan na.


                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f26" class="back-cont">
                    <div class="content">
                    Pagdating nila sa bayan, tiyempong katatapos pa lamang ng misa. Halos malusaw sa kahihiyan si Sisa. Kaagad na ipinasok siya sa kwartel. Nagsumiksik siyang parang daga sa isang sulok. Nanlilimahid ang kaniyang damit. Ang buhok naman ay daig pa ang sinabungkay na dayami; gulo-gulo ito. Ang kaniyang isipan ay parang ibig nang takasan ng katinuan.

Sa bawat paglipas ng sandali, nadagdagan ang kasiphayuan ni Sisa. Magtatanghali na at nabagbag ang damdamin ng alperes. Iniutos niya na palayain na si Sisa, ngunit hinang-hina na siya. May dalawang oras din siyang nakabalandara sa isang sulok.

Painot-inot na naglakad si Sisa hanggang sa muli siyang makarating sa kaniyang bahay. Dagling umakyat siya sa kabahayan at tinawag ang pangalan ng mga anak. Paulit-ulit, na parang sirang plaka. Ngunit hindi niya ito makita, kahit na panhik panaog ang ginawa niya. Tinungo niya ang gulod, at sa may gilid ng bangin. Wala ang kaniyang hinahanap. Patakbo siyang bumalik sa bahay.

Natapunan niya ng pansin ang isang pilas ng damit ni Basilio na may bahid ng dugo. Hawak ang damit, pumanaog siya ng bahay at tiningnan sa sikat ng araw ang pilas ng damit na nababahiran ng dugo. Nilulukob ng matinding nerbiyos ang kaniyang buong katawan. Ano na ang nangyari sa kaniyang mga anak? Hindi madulumat ang nararamdaman niyang kasiphayuan.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p27" class="paper">
                <div class="front">
                    <div id="f27" class="front-cont">
                        <div class="content">
                            
Naglakad-lakad siya kasabay ng pasaglit-saglit na pasigaw ng malakas. Ang banta ng pagkabaliw ay unti-unting lumalamon sa kaniyang buong pagkatao.

Kinabukasan, nagpalaboy-laboy sa lansangan si Sisa. Ang malakas na pag-iyak, hagulgol, at pagsigaw ay nagsasalit at kung minsan ay magkasabay na ipinakita ang kaniyang kaanyuan. Lahat ng mga taong nakakasalubong niya ay nahihintakutan sa kaniya.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f27" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 22: Liwanag at Dilim</h1>
                        Magkasamang dumating si Maria Clara at ang kaniyang Tiya Isabel sa San Diego para sa pistang paparating. Naging bukambibig ang pagdating ni Maria sapagkat matagal na siyang hindi nakakauwi sa bayang sinilangan. Isa pa, minamahal siya ng mga kababayan dahil sa kagandahang ugali, kayumian, at kagandahan. Labis na kinagigiliwan siya. Sa mga taga-San Diego, ang isa sa kinapapansinan ng malaking pagbabago sa kaniyang ikinikilos ay si Padre Salvi.

Lalong pinag-usapan si Maria nang dumating si Ibarra at madalas na dalawin ito. Sinabi ni Ibarra kay Maria na handa na ang lahat para sa gagawin nilang piknik kinabukasan. Ikinatuwa ito ni Maria sapagkat makakasama na naman niya sa pamamasyal ang kaniyang dating kababata sa bayan.

Ipinakiusap ni Maria sa kasintahan na huwag nang isama ang kura sa lakad nila sapagkat magmula nang dumating siya sa bayan ay nilulukob siya ng pagkatakot sa tuwing makakaharap niya ang kura. Malagkit kung tumingin ang kura kay Maria at mayroong ibig ipahiwatig ang mga titig nito. Kung kaya, tuwirang hiniling ni Maria kay Ibarra na huwag nang isama sa pangingisda si Padre Salvi. Ngunit, sinabi ni Ibarra na hindi niya mapagbibigyan ang kahilingan ni Maria sapagkat yaon ay lihis sa kagandahang-asal at kaugalian ng mga taga-San Diego.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p28" class="paper">
                <div class="front">
                    <div id="f28" class="front-cont">
                        <div class="content">
                        Naputol ang kanilang pag-uusap nang biglang dumating si Padre Salvi. Humingi ng paumanhin si Maria sa dalawa at iniwanan ang mga ito sa pagsasabing masakit ang kaniyang ulo. Inanyayahan ni Ibarra si Padre Salvi na sumama sa kanilang piknik. Inaasahan iyon ng kura, kaya kaagad niyang tinanggap ang paanyaya.

Laganap na ang dilim nang magpaalam si Ibarra na uuwi na. Sa daan, nakasalubong niya ang isang lalaki na dalawang araw nang naghahanap sa kaniya. Hiningi ng lalaking nakasalubong ni Ibarra ang tulong nito tungkol sa kaniyang problema sa asawa at mga anak. At sabay na nawala sa pusikit na dilim sina Ibarra at ang lalaki.
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f28" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 23: Ang Piknik</h1>
                        Madilim-dilim pa ay nagsigayak na ang mga kabataan, kadalagahan, at ilang matatandang babae na patungo sa dalawang bangkay na nakahinto sa pasigan. Ang mga kawaksing babae ay mayroong sunong-sunong na mga bakol na kinalalagyan ng mga pagkain at pinggan. Ang mga bangka ay nagagayakan ng mga bulaklak, mga iba ibang kulay na kagaya ng gitara, alpa, akordiyon, at tambuli.

Si Maria Clara ay kaagapay ang mga matatalik nitong kaibigan na sina Iday, Victoria, Sinang, at Neneng. Habang naglalakad ay masaya silang nagkukuwentuhan at nagbibiruan. Paminsan-minsan ay binabawalan sila ng mga matatandang babae sa pangunguna ni Tiya Isabel. Pero, sige pa rin ang kanilang kuwentuhan.

Nagtig-isang bangka ang mga dalaga sapagkat lulubog daw ang kanilang sinasakyan. Dahil dito, mabilis na lumipat ang ilang kabinataan sa bangkang sinasakyan ng mga dalagang kanilang pinipintuho. Si Ibarra ay napatabi kay Maria. Si Albino ay kay Victoria. Natameme sa pagkakagulo ang mga dalaga.
Ang piloto o ang sumasagwan sa dalawang bangka upang ito ay umusad sa tubig ay isang binatang may matikas na anyo, matipuno ang pangangatawan, maitim, mahaba ang buhok, at siksik sa laman. Ito ay si Elias.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p29" class="paper">
                <div class="front">
                    <div id="f29" class="front-cont">
                    <div class="content">
                        Habang hinhintay na maluto ang agahan, si Maria ay umawit ng kundiman. balana ay hindi nakaimik. Sinabi ni Andeng na nakahanda na ang sabaw para sa isisigang na isda.
                        Ang mga nagpipiknik ay nasa may baklad na ni Kapitan Tiyago. Ang magbibinatang anak ng isang mangingisda ay namandaw sa baklad. Ngunit, kaliskis man ng isda ay walang nasalok.
                        Si Leon na katipan ni Iday ang kumuha ng panalok. Isinalok niya ito, ngunit wala ring nahuling isda. Sinabi na ang kawalan ng isda sa lawa ay dahil sa buwaya. Agad na lumundag si Elias. Nagsigawan ang mga babae na baka mapahamak ito. Pero, pinayapa sila ng ilang mga kalalakihan sa pagsasabing sanay si Elias na humuli ng buwaga.
                        Ilang saglit lang, nahuli na ni Elias ang buwaya. Pero higit na malakas ang buwaya, at nagagapi si Elias. Dahil dito, kumuha ng isang punyal si Ibarra at lumundag din sa lawa. Hindi hinimatay si Maria Clara sapagkat ang mga dalaga noon ay hindi marunong mahimatay.
                        Biglang umalimbukay ang pulang tubig. Lumundag pa ang isang anak ng mangingisda na may tangang gulok. Pamaya-maya ay lumitaw rin sina Ibarra at ang piloto na si Elias dahil iniligtas siya ni Ibarra sa tiyak na kapahamakan. Utang niya ang kaniyang buhay rito.
                        Natauhan mula sa pagkapatda si Maria nang lumapit sa kaniya si Ibarra. Nagpatuloy ang mga magkakaibigan sa pangingisda at nakahuli naman ng marami. Nagpatuloy sila sa gubat na pag-aari ni Ibarra. Nananghalian sila sa lilim ng mayayabong na punongkahoy na tumutunghay sa batisan.
                    </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f29" class="back-cont">
                    <div class="content">
                    <h1>KABANATA 24: Sa Kagubatan</h1>
                    Pagkatapos na makapagmisa nang maaga si Padre Salvi, nagtuloy ito sa kumbento upang kumain ng almusal. May inabot na sulat ang kaniyang kawaksi. Binasa niya ito. Kapagdaka ay nilamutak ang liham at hindi na nakapag-almusal. Ipinahanda niya ang kaniyang karwahe at nagpahatid sa piknikan.

Sa may di-kalayuan, pinahinto niya ang karwahe. Pinabalik niya sa kumbento ito. Namaybay siya sa mga latian hanggang sa maulinigan niya si Maria na naghahanap ng pugad ng gansa. Naniniwala ang mga dalaga na sinuman ang makakita ng pugad ay susundan siya nito, at makikita ni Maria palagi si Ibarra kahit hindi siya nakikita nito.

Tuwang-tuwa si Padre Salvi sa panonood sa papalayong mga dalaga. Nais niyang sundan ang mga ito, ngunit ipinasya niyang hanapin na lamang ang kasama nito. Nang punahin ng mga kasama nito ang tungkol sa kaniyang galos, sinabi niyang siya ay naligaw.

Pagkaraang makapananghali, napag-usapan nina Padre Salvi ang mga taong tumatampalasan kay Padre Damaso na naging dahilan ng pagkakasakit nito. Kamala-mala, dumating si Sisa. Nakita siya ni Ibarra kaya kaagad na iniutos na pakainin ito. Ngunit mabilis na tumalilis si Sisa.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p30" class="paper">
                <div class="front">
                    <div id="f30" class="front-cont">
                        <div class="content">
                        Napunta ang usapan sa pagkawala nina Crispin at Basilio, mga sakristan ni Padre Salvi. Naging maigting ang pagtatalo nina Padre Salvi at Don Felipo sapagkat sinabi ng Don na higit pang mahalaga sa kura ang paghahanap sa nawawalang onsa kaysa sa kaniyang dalawang sakristan.
Namagitan na si Ibarra sapagkat magpapangana na ang dalawa. Sinabi niya sa mga kaharap na siya ang kukupkop kay Sisa. Kapagdaka ay nakiumpok na si Ibarra sa mga nagsisipaglarong binata at dalaga na naglalaro ng Gulong ng Kapalaran. Nagtanong si Ibarra kung magtatagumpay siya sa kaniyang balak. Inihagis niya ang dais at binasa niya ang sagot na tumama sa: “Ang pangarap ay nananatiling pangarap lamang.” Ipinahayag niyang nagsisinungaling ang aklat ng Gulong ng Kapalaran.
Mula sa kaniyang bulsa, inilabas niya ang isang kapirasong sulat na nagsasaad na pinatibay na ang kaniyang balak na magtayo ng bahay-paarana. Hinati ni Ibarra ang sulat; ang kalahati ay ibinigay kay Maria at ang natitirang kalahati ay kay Sinang na nagtamo ng pinakamasamang sagot sa kanilang paglalaro. At iniwanan na ni Ibarra sa paglalaro ang mga kaibigan.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f30" class="back-cont">
                    <div class="content">
                    Dumating si Padre Salvi. Walang sabi-sabing hinablot nito ang aklat at pinagpunit-punit ito. Malaking kasalanan, aniya, ang maniwala sa aklat sapagkat ang mga nilalaman nito ay pawang kasinungalingan. Nabanas si Albino at sinabihan ang kura na higit na malaking kasalanan ang pangahasan ang hindi kaniya at walang pahintulot sa nagmamay-ari nito. Hindi na tumugon ang kura at sa halip ay biglang tinalikuran ang magkakaibigan at nagbalik na ito sa kumbento.
            Dumating naman ang apat na sibil at ang sarhento. Hinahanap nila si Elias sapagkat siya raw umanong tumampalasan kay Padre Damaso. Inusig nila si Ibarra dahil sa pag-aanyaya at pagkupkop sa masamang tao. Ngunit tinugon sila ni Ibarra sa pagsasabing walang sinuman ang maaaring makialam sa mga taong kaniyang inaanyayahan sa piging kahit na sinuman ang mga taong ito. Ginagulad ng mga sibill at sarhento ang gubat upang hanapin si Elias na umano ay nagtapon din sa labak sa alperes. Ni bakas ni Elias ay wala silang nakita.
            Nagpasyang umalis na sa gubat ang mga dalaga at binata nang unti-unting lumalaganap ang dilim sa paligid. Magtatakipsilim na.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p31" class="paper">
                <div class="front">
                    <div id="f31" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 25: Sa Tahanan ng Pilosopo</h1>
                            Pagkaraang libutin ni Ibarra, nagsadya ito sa bahay ni Mang Tasyo. Inabutan niya ito na nagsusulat ng heroglipiko sa wikang Pilipino. Abala ito, kung kaya ninais niyang huwag nang gambalain ang matanda. Pero napuna nito nang siya ay papanaog na. Pinigilan niya si Ibarra at sinabi na ang sinusulat niya ay hindi mauunawaan ngayon. Ngunit ang mga susunod na salinlahi ay maiintindihan ito sapagkat ang mga ito ay higit na matalino at malamang ay hindi maihahambing sa panahon ng kanilang mga ninuno.

Ipinalagay ni Ibarra na siya ay dayuhan sa sariling bayan at higit namang kilala si Mang Tasyo ng mga tao. Kung kaya’t isinangguni niya ang kaniyang balak tungkol sa pagpapatayo ng paaralan. Pero sinabi ng matanda na huwag siyang sangguniin sapagkat itinuturing siyang baliw ni Ibarra, at sa halip ay kaniyang itinuro sa binata ang kura, ang kapitan ng bayan, at ang lahat ng mayayaman sa bayan. Ayon din sa kaniya, ang mga taong kaniyang tinutukoy ay magbibigay ng masasamang payo subalit ang pagsangguni ay hindi nangangahulugan ng pagsunod. Sundin lamang kunwari ang payo at ipakita ni Ibarra ang kaniyang ginagawa ay ayon sa mga pinagsanggunian.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f31" class="back-cont">
                    <div class="content">
                    Tinugon ni Ibarra si Mang Tasyo na maganda ang kaniyang payo pero mahirap gawin sapagkat kinakailangan pang bihisan ng kasinungalingan ang isang katotohanan. Maagap na tumugon din ang matanda na higit pa sa pamahalaan ang kapangyarihan ng isang uldog.
                    Magtatagumpay lamang ang binata kung ito ay tutulungan, at kung hindi naman, ang lahat ng kaniyang mga pangarap ay madudurog lamang sa matitigas na pader ng simbahan. Matindi ang paniniwala ni Ibarra na siya ay tutulungan kapwa ng bayan at pamahalaan.

Nagpatuloy na magkaroon ng tunggalian ng paniniwala sina Mang Tasyo at Ibarra. Ayon pa rin kay Mang Tasyo, ang gobyerno ay kasangkapan lamang ng simbahan, at ito ay matatag sapagkat nakasandig sa pader ng kumbento at ito ay kusang babagsak sa sandaling iwan ng simbahan.

Sinabi ng binata na kasiyahan na niyang masasabi ang hindi pagdaing ng bayan. Ito ay hindi naghihirap tulad ng sa isang bansa sapagkat dati-rati ay tinatangkilik tayo ng relihiyon at ng pamahalaan. Pero, sinabi naman ni Mang Tasyo na pipi ang bayan kaya hindi dumaraing. Katunayan, aniya, darating ang panahong magliliwanag ang kadiliman at ang mga tinimping buntong-hininga ay magsisiklab. Ang bayan ay maniningil ng pautang at sa gayo’y isusulat sa dugo ang kaniyang kasaysayan.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p32" class="paper">
                <div class="front">
                    <div id="f32" class="front-cont">
                        <div class="content">
                            
Ipinaliwanag ng binata na ang Pilipinas ay umiibig sa Espanya at alam ng bayan na siya ay tinatangkilik. Kaya ang Diyos, ang gobyerno, at ang relihiyon ay hindi papayag na sapitin ang araw na sinabi ni Mang Tasyo. Ikinatuwiran naman ng matanda na tunay na mainam ang mga balak sa itaas ngunit hindi natutupad sa ibaba dahil sa kasakiman sa yaman at sa kamangmangan ng bayan. Sa palagay niya, ang dahilan ay sapat, ang utos ng Hari ay nawawalang silbi sapagkat walang nagpapatupad. Dahil dito, ang aatupagin ng pamahalaan dito ay ang magpayaman sa loob lamang ng tatlong taong panunungkulan. Sa puntong ito, napuna ni Mang Tasyo na lumalayo na sila ni Ibarra sa usapan. Iminungkahi muli ni Ibarra ang paghingi niya ng payo. Ang payo ng matanda ay kailangang magyuko muna si Ibarra ng ulo sa mga naghahari-harian.


                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f32" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 26: Ang Bisperas ng Pista</h1>
                            
Ika-10 ng Nobyembre ang bisperas ng pista sa bayan ng San Diego. Naging masigla sa paghahanda ang kilusan sa lahat ng dako. Ang mga bintana ng bahay ay nagpapalamutian ng iba’t ibang dekorasyon. May nagpapaputok ng kuwitis at may nagtutugtugan ng mga banda ng musiko.

Sa bahay ng mga nakakariwasa, nakaayos ang minatamis na bungang kahoy, may nakahandang pagkain, alka na binili pa sa Maynila na katulad ng hamon at ng relyenong pabo, serbesa, tsanpan, at iba pang klase ng alak na inangkat pa mula sa Europa. Ang mga pagkaing ganito ay iniuukol sa mga banyaga, kaibigan o kaaway, at sa mga Pilipino, mahirap man o mayaman upang masiyahan sila sa pista.

Ang mga ilawang globong kristal na minana pa sa kanilang mga kanunununuan ay inilalabas din kabilang na ang kanyong binurdahan ng mga dalaga, belong ginansilyo, alpombra, bulaklak na gawang kamay, banehang pilak na lalagyan ng tabako, sigarilyo, hitso, at nganga. Dahil sa sobrang kintab ng sahig ay puwede nang makapanalamin. Puno ng kurtinang sutla ang mga pinto at pati ang mga santo at imahen ay nagagayakan din.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p33" class="paper">
                <div class="front">
                    <div id="f33" class="front-cont">
                        <div class="content">
                            Ang mga masasayang lugar ng San Diego ay tinayuan ng arkong kawayan. Naglagay naman ng malaking tolda at mayroong tukod sa may paligid ng patyo ng simbahan. Ang tolda ay mayroong tukod na kawayan upang makadaan ang prusisyon. Sa liwasang bayan naman ay itinayo ang magandang tanghalan na siyang pagdarausan ng komedya ng mga taga-Tondo. Madalas na tinutugtog ang kampana kasunod ang mga putok ng mga kuwitis at bomba.

Lahat-lahat ay mayroong limang banda ng musiko at tatlong orkestra ang inihanda para sa pagdiriwang ng pista. Sina Kapitan Tiyago at Kapitan Joaquin na may dalang labingwalong libo, ang intsik na si Carlos na siyang naglalagay sa sugal na liam-po at mga mamamayan buhat pa sa Lipa, Tanauan, Batangas, at Sta. Cruz ang inaasahan na darating. Batay sa mga balita, si Padre Damaso ang magsesermon sa umaga at magiging bangkero naman pagdating ng gabi. Ang mga magbubukid at taga-bundok ay naghahanda ng manok, baboy, bungangkahoy, at mga gulay na dadalhin sa mayayamang may-ari ng kanilang sinasaka.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f33" class="back-cont">
                    <div class="content">
                    Sa isang lugar naman na malapit sa bahay ni Ibarra, tinatapos ng mga trabahador ang katangang semento na siyang pagtatayuan ng bahay-paaralan. Si Nol Juan ang nangangasiwa sa mga manggagawa. Habang abala ang mga manggagawa, ipinaliliwanag ni Juan na ang kanilang itatayo ay isang malaking paaralan. Ang isang panig ay para sa mga lalaki at ang ikalawa naman ay para sa mga babae. Ang paaralan ay magiging kauri ng mga modernong paaralan sa Alemanya. Batay sa planong ginawa ng isang ginoo, na siyang arkitekto, ang tagiliran ng eskuwela ay tatamnan ng maraming puno at gulay, magkakaroon ng bodega at piitan para sa mga batang tamad na mag-aral.

Sa proyekto ni Ibarra ay naghandog ng tulong ang mga mayayaman samantalang ang kura ay humiling na siya ang gawing padrino at magbabasbas sa paglalagay ng unang bato sa huling araw ng pista. Sa mga pag-alok ng pagtulong ay tumanggi si Ibarra sapagkat hindi naman simbahan ang kaniyang ipinagagawa. Sasagutin niya ang lahat ng gastos.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p34" class="paper">
                <div class="front">
                    <div id="f34" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 27: Sa Pagtakip-SIlim</h1>
                            Sa lahat ng may handaan sa pista ng San Diego, isa kay Kapitan Tiyago ang pinakamalaki. Sinadya niyang higitan sa dami ng handa ang taga-lalawigan dahil kay Maria at Ibarra na kaniyang mamanugangin. Dahil si Ibarra ay pinuri pa ng isang tanyag na diyaryo sa Maynila sa pagsasabing siya ay bihasa at mayamang kapitalista, Kastilang-Pilipino, at iba pa.

Bago pa man dumating ang talagang pista, ilang araw nang dumarating ang sari-saring inumin at pagkaing galing sa Europa sa tahanan ni Kapitan Tiyago. Sa pagdating ng Kapitan sa bisperas ay may pasalubong ito kay Maria na isang agnos na may brilyante at esmeralda at kapirasong kahoy na mula sa bangka ni San Pedro.

Kalugod-lugod ang pagkikita nina Kapitan Tiyago at Ibarra. May mga ilang kaibigang dalaga si Maria na kinumbidang mamasyal si Ibarra. Humingi ng pahintulot si Maria sa ama nito at siya ay pinahintulutan naman. Gayunman, nagbilin ang ama na kailangang umuwi bago maghapunan si Maria sapagkat darating si Padre Damaso. Mahigpit na inanyayahan naman ni Kapitan Tiyago si Ibarra na sa kanilang tahanan na siya maghapunan. Ngunit, nagdahilan si Ibarra na mayroon siyang hinihintay na bisita.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f34" class="back-cont">
                    <div class="content">
                    Pumanaog na ng bahay si Ibarra kasunod ang mga dalaga. Si Maria ay napagitna kina Iday at Victoria at naglalakad siyang kasunod si Tiya Isabel. Siyang-siya si Maria sapagkat nakadama siya ng kalayaan sa labas ng kumbento. Ang mga naglalakad ay napatapat sa bahay ni Sinang. Nanaog kaagad ito at sila ay inimbitang pumanhik muna. May bumati kay Ibarra at pinuri naman si Maria. Nakita ni Ibarra si Kapitan Basilio, na naging kaibigan at tagapagtanggol niya na sumama ito sa kaniya kinagabihan. Sinabi niyang maglalagay ng isang munting bangka sa monte ni Padre Damaso. Napangiti lamang si Ibarra. Hindi masigurado kung ano ang ipinahihiwatig ng ngiting yaon — kung oo ba o hindi.

Nakarating sila sa liwasang bayan. Nakita nila ang isang ketongin na nakasalakot at umaawit sa saliw ng kaniyang gitara. Pinandidirihan at nilalayuan siya ng mga tao sapagkat natatakot silang mahawa ng sakit nito. Ang ketongin ay pinarusahan ng maraming palo dahil lamang sa pagliligtas niya sa isang nahulog sa mababaw na kanal.

Pagkakita ni Maria sa ketongin, siniglahan siya ng pagkahabag. Kinuha ni Maria ang suot na agnos at nilagay sa bakol ng ketongin. Nagtaka ang kaniyang mga kasama. Kinuha ng ketongin ang agnos sa bakol at ito ay kaniyang hinagkan. Sumunod ay lumuhod ito sa may harap ni Maria at isinubsob ang ulo at hinagkan ang mga bakas ng yapak ni Maria. Nagtakip ng mukha si Maria at pinahid ng panyo ang lubhang namamalisbis sa mukha.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p35" class="paper">
                <div class="front">
                    <div id="f35" class="front-cont">
                        <div class="content">
                        Kamukat-mukat ay biglang lumapit ang baliw na si Sisa at hinawakan sa bisig ang ketongin. Ipinatanaw ni Sisa sa ketongin ang ilaw sa kampanaryo at sinabing naroroon ang anak niyang si Basilio na bumababa sa lubid. Itinuro rin niya ang ilaw sa kumbento at sinabing naroroon naman ang anak niyang si Crispin. Binitawan ni Sisa ang ketongin at umalis na kumakanta. Umalis na rin ang ketongin na dala ang kaniyang bakol.

Sa gayong pangyayari, naibulong na lamang ni Maria na mayroong palang mga taong kulang-palad.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f35" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 28: Sulatan</h1>
                        Nilathala sa isang malaganap na pahayagan sa Maynila ang tungkol sa pista. Ginawa ito upang malaman ng banyaga na interesadong mabatid ang mga pamamaraan ng pagdaraos ng pista ng mga Pilipino. Nakasaad sa dyaryo na walang makakatulad sa karangyaan ng pista na pinangangasiwaan ng mga paring Pransiskano, pagdalo ni Padre Hermando Sybila, mga kakilala at mamamayang Kastila, at ginoo ng gabinete, Batangas at Maynila.

Kabilang din sa balita ang pagkakaroon ng dalawang banda ng musiko noong bisperas ng pista. Ang pagsundo ng maraming tao ay mga makapangyarihan sa kura sa kumbento, ang paghahanda ng hapunan ng hermana mayor, at ang pagtungo sa tahanan ng madasaling si Don Santiago de los Santos upang kaunin si Padre Salvi at Padre Damaso Verdolagas.
Nasabi rin sa diyaryo ang pagganap sa dula ng mga balitang artistang sina Ratia Carvajal at Fernandez na kapwa hinahangaan ng lahat pero dahil sa Kastila ang kanilang usapan, ang marurunong lamang ng Espanyol ang mga nakakaintindi sa palabas. Higit na nasiyahan ang mga Pilipino sa komedyang Tagalog. Ang hindi pagdalo naman ni Ibarra ay ipinagtaka ng lahat.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p36" class="paper">
                <div class="front">
                    <div id="f36" class="front-cont">
                        <div class="content">
                        Alas-onse ng umaga, kinabukasan, idinaos ang prusisyon ng birhen de la Paz. Dumaan ito sa paligid ng simbahan, na kasama ang karong pilak nina Sto. Domingo at San Diego. Isinunod naman kaagad ang misa kantada sa saliw ng orkestra at awit ng mga artista pagkatapos. Siyang-siya ang lahat sa sermon ni Padre Manuel Martin. Nagkaroon din ng sayawan at ang pinakamaringal ay ang pagsayaw ni Kapitan Tiyago. Ang nakita kay Maria na nakasuot mestisa at nagniningning sa brilyante ay humanga sa kaniyang taglay na kagandahan.

Isang liham naman ni Kapitan Aristorenas kay Luis Chiquito ang nag-anyaya na ito ay dumalo sa pista upang makipasya at makipaglaro ng monte sa mga batikan tahur na sina Kapitan Tiyago, Padre Damaso, Kapitan Juaquin, Kabesang Manuel, at ang konsul.
Samantala, tumanggap din ng liham si Ibarra na dinala ni Andeng. Ayon sa liham:
<br>
<br>
<hr>
<i>
Crisostomo<br>
<br>Ilang araw na nang hindi tayo nagkita. Ikaw raw ay may sakit, kaya’t ipinagdasal kita at ipinagtulos ng kandila kahit sinabi ni Itay na hindi naman malubha. Kagabi, pinilit nila akong tumugtog at sumayaw kaya nayamot ako. May ganiyan palang mga tao. Kung hindi lang talaga ako kinuwentuhan ni Padre Damaso ay talagang iiwan ko sila.

Ipaabot mo sa akin ang iyong kalagayan at ipapadalaw kita kay Itay. Ipaubaya mo na kay Andeng ang paglalagay ng iyong tsa, mahusay siya kaysa sa iyong katulong.
</i>
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f36" class="back-cont">
                    <div class="content">
                    <i>Maria Clara
                        <br><br>
                        Habol:
                        Ako’y dalawin mo bukas, upang dumalo ako sa paglalagay ng unang bato sa paaralan. Paalam.
                    </i>
                    <br><br>
                    <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div id="p37" class="paper">
                <div class="front">
                    <div id="f37" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 29: Ang Umaga</h1>
                            Maagang pumasiyo sa lansangan ang mga banda ng musiko. Nagising ang mga natutulog. Muling narinig ang tunog ng kampana at mga paputok.

Ang mga tao ay nagbihis na ng mga magara at ginamit ang mga hiyas na itinatago nila. Tanging si Pilosopo Tasyo lamang ang hindi nagpalit ng bihisan. Binati siya ng Tinyente Mayor. Sumagot ang Pilosopo na, “Ang magsaya ay di nangangahulugan ng paggawa ng mga kabaliwan.” Ang pagsasaya, aniya, ay pagtatapon ng pera at tumatakip sa karaingan ng lahat. Si Don Felipo ay sumang-ayon sa pananaw na ito ni Tasyo subalit wala siyang magawa sa kagustuhan ng kapitan at ng kura.

Punong-puno ng tao ang patyo. Ang mga musiko ay walang tigil sa kalilibot. Binabatak naman ng mga hermana mayor ang mga tao upang tumikim ng kanilang inihandang pagkain.

Dahil sa mga tanyag na tao, mga Kastila, at alkalde ang magsisimba ng araw na iyon, si Padre Damaso ay nagpahiwatig na hindi siya makakapagbigay ng sermon kinabukasan. Ngunit hindi siya nakatanggi sapagkat sinabi ng mga kasama niyang pari na walang ibang nakakaalam at nakapag-aral sa buhay ni San Diego kundi tanging siya lamang. Dahil dito, siya ay ginagamot ng babaeng nangangasiwa sa kumbento.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f37" class="back-cont">
                    <div class="content">
                    Siya ay pinahiram ng langis sa leeg at dibdib, binalot ng pranela, at hinilot. Pagkaraan ay nag-almusal si Padre Damaso ng ilang itlog na binati sa alak.

Eksaktong alas-otso ng umaga nang simulan ang prusisyon. Ito ay dinaan sa ilalim ng tolda at inilawan ng matatandang dalaga na kausap sa kapatiran ni San Francisco.

Naiiba ang prusisyon kaysa sa nagdaang araw sapagkat ang mga nagsisilaw ay nakaabitong ginggon. Sa suot na abito ay kaagad na makikilala ang mayayaman at mahihirap.

Natatangi ang karo ni San Diego na sinusundan ng kay Francisco at ang Birheng de la Paz. Maayos ang prusisyon, ang tanging nagbago lamang ay si Padre Salvi na nasa ilalim ng palyo sa halip na si Padre Sibyla. Ang prusisyon ay sinasabayan ng mga paputok ng kuwitis, awitin, at tugtuging pangsimbahan.

Huminto ang karong sinusundan ng palyo sa tapat ng bahay nina Kapitan Tiyago. Nakadungaw sa bintana ang alkalde, si Kapitan Tiyago, si Maria, si Ibarra, at ilan pang Kastila. Si Padre Salvi ay hindi bumati sa mga kakilala. Ito ay nagtaas lamang ng ulo mula sa kaniyang matuwid na pagkakatayo.


                        </div>
                    </div>
                </div>
            </div>
            <div id="p38" class="paper">
                <div class="front">
                    <div id="f38" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 30: Sa Simbahan</h1>
                            Punong-puno ng tao ang simbahan. Bawat isa ay gustong makasawsaw sa agua bendita. Halos hindi na humihinga ang mga tao sa loob ng simbahan. Ang sermon ay binayaran ng dalawang daan at limampung piso, ikatlong bahagi ng ibinayad sa komedya na magtatanghal sa loob ng tatlong gabi. Naniniwala ang mga tao na kahit na mahal ang bayad sa komedya, ang manonood dito ay mahuhulog sa impierno ang kaluluwa. Ang mga nakikinig naman sa sermon ay tuloy-tuloy sa langit.

Habang hinihintay ang alkalde, walang tigil na nagpapaypay ng abaniko, sumbrero, at panyo ang mga tao. Nagsisigawan at nag-iiyakan naman ang mga bata. Ang iba ay inaantok sa may tabi ng kumpisalan.

Ilang saglit lang dumating ang alkalde kasama ang kaniyang mga tauhan. Ang suot niya ay nagpapalamutian ng banda ni Carlos III at ng limang medalya sa dibdib. Inakala ng ilang tao na ang alkalde ay isang sibil na nagsuot-komedyante.

Sinimulan na ni Padre Damaso ang pagmimisa. Humandang makinig ang lahat. Ang pari ay pinangungunahan ng dalawang sakristan na sinusundan ng prayleng may hawak na kuwaderno. Pumanhik sa pulpito si Padre Damaso at Padre Sibyla. 

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f38" class="back-cont">
                    <div class="content">
                    Pero, tanging palibak ang iniukol niya kay Padre Martin, na ang ibig sabihin ay higit na magaling ang isesermon niya kaysa kahapon.

Binalingan ni Padre Damaso ang kasamang prayle at pinabuksan ang kuwaderno upang kumuha ng tala.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p39" class="paper">
                <div class="front">
                    <div id="f39" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 31: Ang Sermon</h1>
                            
Pinatunayan ni Padre Damaso na kaya niyang magsermon sa wikang Kastiila at Tagalog. Ang pambungad na sermon ay hinalaw sa Aklat II, Kabanata IX, Salaysay 20, na mga salitang winika ng Diyos sa pamamagitan ni Estres na nagsasaad ng: “Ibinigay mo sa kanila ang iyong mabuting espiritu upang sila’y turuan, hindi mo inaalis sa kanilang bibig ang iyong tinig at binigyan mo sila ng tubig mapawi ang kanilang pagkauhaw.”

Humanga si Padre Sibyla sa pagbigkas ni Padre Damaso at si Padre Martin ay napalunok ng laway dahil sa alam niyang higit na magaling ang pambungad na iyon sa kaniyang sariling sermon.

Nagpugay ang pari sa mga nagsimba. Lumingon siya sa likod at itinuro ang pintong malaki. Inakala ng sakristang yaon ay isang pagturo sa kaniya upang isara ang lahat ng mga pintuan. Nag-alinlangan ang alperes, iniisip niyang tatayo at aalis na. Ngunit hindi niya magawa sapagkat nagsisimula nang magsalita ang ang predikador.

Sinabi ni Padre Damaso na kaniyang binitiwan ang mga pananalita ng Diyos upang maging kapaki-pakinabang na tulad ng isang binhing umuusbong at lumalaki sa lupain ng banal na si Francisco. 
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f39" class="back-cont">
                    <div class="content">
                    Hinikayat niya ang mga makasalanan na tularan ang mapagwaging si Gideon, ang matapang na si David, ang mapagtagumpay na si Roldan ng ka-kristiyanuhan, at ang guwardiya-sibil ng langit.
                    Nakita ni Padre Damaso na napakunot-noo ang alperes sa kaniyang tinuran. Kung kaya’t sa malakas na tinig, sinabi ni Damaso na, “Opo, Ginoong Alperes. Higit na matapang at makapangyarihan bagamat walang armas kundi isang krus na kahoy lamang. Natatalo nila ang mga tulisan ng kadiliman at lahat ng kampon ni Lucifer. Ang mga himalang likhang ito ay tulad ng paglikha kay Diego de Alcala.”

Ang mga bahaging ito ng sermon ay ipinahayag ni Padre Damaso sa wikang Kastila, kaya hindi maiintindihan ng mga Indio. Ang tanging naunawaan ng karamihan ay ang salitang guwardiya-sibil, tulisan, San Diego, at San Francisco. Umasim din ang mukha ng alperes, kaya inakala ng marami na pinagalitan siya ni Padre Damaso dahil sa hindi pagkakahuli nito sa mga tulisan.

Nang mabanggit naman niya ang tungkol sa patente upang tukuyin ang pagwawalang-bahala ng mga tao sa kasalanan, isang lalaki ang namumutlang tumindig at nagtago sa kumpiskalan. Nagbebenta kasi siya ng alak at madalas na usigin siya ng mga karabinero dahil sa hinihingan siya ng patente.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p40" class="paper">
                <div class="front">
                    <div id="f40" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 32: Ang Panghugos</h1>
                            Pinakita ng taong madilaw kay Nor Juan kung paano niya mapapagalaw ang pampakilos ng kalong na kaniyang itinayo. Ito ay mayroong walong metro ang taas, at nakabaon sa lupa ang apat na haligi. Sa haligi nakasabit ang malalaking lubid kaya tila napakatibay ng pagkayari at napakalaki. Ang bandang itaas naman ay mayroong banderang iba-iba ang kulay.

Tiningnang mabuti ni Nor Juan kung paano itinaas at ibinababa ang batong malaki na siyang ilalapat sa ilalim sa pamamagitan ng pag-aayos ng kahit isang tao lamang. Hangang-hanga si Juan sa taong madilaw. Nagbubulungan sa pagpuri ang mga taong nasa paligid nila.

Sinabi ng taong madilaw kay Nor Juan na natutuhan niya ang paggawa ng makinarya kay Don Saturnino, na nuno ni Don Crisostomo. Ito pa, aniya, ay maraming nalalaman. Hindi lang marunong mamalo at magbilad sa araw ang kaniyang mga tauhan; marunong ding gumising ng mga natutulog at magpatulog ng mga gising.

Sa kabilang dako, malakihan ang paghahanda ni Ibarra sa pagbabaon ng panulukang-bato ng bahay-paaralan. Sa ilalim ng maraming habong na itinayo ay pawang puno ng pagkain at inuming aalmusalin ng mga panauhing isa-isang sinundo ng mga banda at musiko. Ang mga naghanda sa almusal ay mga guro at mag-aaral.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f40" class="back-cont">
                    <div class="content">
                    Nagsimulang magbasbas si Padre Salvi sa pamamagitan ng pagbibihis ng damit na pang-okasyon. Ang mga mahahalagang kasulatan naman pati na ang mga medalya, salaping pilak, at relikya ay inilulan na isang kahang bakal. Ang kahang bakal ay ipinasok naman sa bumbong na yari sa tingga.

Hindi kumukurap si Elias sa pagkakatitig sa taong madilaw na siyang may hawak ng lubid. Ang lubid ay nakatali naman sa isang kalo na magtataas at magbaba ng batong ilalapat sa nakatayong bato sa ibaba. May uka sa gitna ang bato, at sa ukang ito ilalagay ang bumbong na tingga.

Bago simulan ang pagpapalitada, nagtalumpati muna sa wikang Kastila ang alkalde. Pagdaka’y isa-isang bumaba ang kura, mga prayle, mga kawani, ilang mayayamang bisita, at Kapitan Tiyago para sa pasinaya. Dahil sa biro ni Kapitan Tiyago at amuki ng alkalde, napilitan ding bumaba si Ibarra. Hustong nasa ibaba ito nang bigla na lamang humalagpos ang lubid sa kalo. Nagiba ang buong balangkas at umalimbukay ang makapal na alikabok. Nang mapawi ang usok, si Ibarra ay nakitang nakatayo sa pagitan ng bumagsak na kalo at ng batongbuhay.

Ang taong madilaw ay tinanghal na isang bangkay. Ito ay natabunan ng mga biga na nasa paanan ni Ibarra. 


                        </div>
                    </div>
                </div>
            </div>
            <div id="p41" class="paper">
                <div class="front">
                    <div id="f41" class="front-cont">
                        <div class="content">
                        Gusto ng alkalde na ipahuli ang nangasiwa sa pagpapagawa, na walang iba kundi si Nor Juan. Pero, nakiusap si Ibarra na siya na ang bahala sa lahat. Makaraang ipagtanong niya si Maria, kaagad na umuwi si Ibarra upang magpalit ng damit.

Isa si Pilosopo Tasyo sa nakasaksi sa naganap na pangyayari. Yaon daw ay isang masamang simula.
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f41" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 33: Malayang Kaisipan</h1>
                        Panauhin ni Ibarra si Elias. Hiningi ni Elias sa binata na ipaglihim nito ang pagbibigay niya ng babala sa kaniya. Isa pa, si Elias ay nagbabayad lamang ng utang na loob sa kaniya. Ipinaliliwanag din niya na dapat pa ring mag-ingat si Ibarra sapagkat sa lahat ng dako ay mayroon itong kaaway.

“Batas ng buhay ang hindi pagkakasundo. Lahat tayo’y may kalaban, mula sa pinakamaliit na kulisap hanggang sa tao; mula sa pinakadukha hanggang sa lalong mayaman at makapangyarihan,” pagdidiin pa ni Elias.

Ang mga kaaway ni Ibarra ay naglilipana sa halos lahat ng lugar, dahil sa kaniyang mga ninuno at ama na nagkaroon doon ng mga kagalit, dahil na rin sa kaniyang balak na pagpapatayo ng paaralan. Isa sa mga kaaway ni Ibarra ay ang taong madilaw. Umano’y narinig ni Elias ang taong madilaw noong sinundang gabi na nakikipag-usap sa hindi kilalang tao at sinabing, “Hindi kakanin ng isda ang isang ito (Ibarra) tulad ng kaniyang ama, makikita ninyo.”

                        </div>
                    </div>
                </div>
            </div>
            <div id="p42" class="paper">
                <div class="front">
                    <div id="f42" class="front-cont">
                        <div class="content">
                        Ang ganitong natuklasan ni Elias ay kaniyang ikinabahala sapagkat kahit na ipinagmamalaki ng taong madilaw ang kaalaman sa trabaho, hindi ito humingi ng mataas na sahod nang magprisinta kay Nor Juan. Binanggit ni Ibarra na nanghihinayang siya sa pagkamatay ng taong dilaw sapagkat marami pa sanang mababatid buhat sa kaniya. Pero ikinatuwiran ni Elias na maski na mabuhay ang taong madilaw, inakala niyang matatakasan ang pag-uusig ng bulag na hukuman ng tao; subalit sa kamatayan, ang Diyos ang humatol at naging hukom.

Sinikap ni Ibarra na tuklasin ang tunay na pagkatao ni Elias, kung ito ba ay nakapag-aral o hindi. Ang sagot ni Elias ay, “Napilitan akong maniwalang lubos sa Diyos sapagkat nawalan na ako ng tiwala sa Diyos.” Alam ni Elias na marami pa ang mga taong gustong kumausap kay Ibarra kaya nagpaalam na ito. Pero nangako siyang anumang oras na kailangan siya ay babalik siya sapagkat mayroon pa siyang tinatanaw na utang na loob kay Ibarra.


                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f42" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 34: Ang Pananghalian</h1>
                        Ang mga kilalang tao sa San Diego ay magkaharap na nanananghalian sa isang malaking hapag. Nakaluklok sa magkabilang dulo ng mesa sina Ibarra at ang alkalde. Nasa bandang kanan ni Ibarra si Maria at nasa kaliwa naman ang eskribano. Sa magkabilang panig naman nakaluklok sina Kapitan Tiyago, kapitan ng bayan, mga prayle, kawani, at kaibigang dalaga ni Maria. Ganadong kumain ang lahat nang makatanggap ng telegrama si Kapitan Tiyago, kaya siya’y kaagad na umalis. Darating ang kapitan heneral at magiging panauhin ni Kapitan Tiyago sa kaniyang bahay.

Hindi nasasabi sa kable kung ilaw araw na mananatili ang kapitan heneral sapagkat ito umano ay mahilig sa bagay-bagay na kataka-taka. Kung saan-saan napasuot ang usapan ng mga kumakain. Ang hindi pag-imik ni Padre Salvi, ang hindi pagdating ni Padre Damaso, kawalan ng kaalaman ng mga magbubukid sa kobyertos, at kung anong kurso ang ipapakuha nila sa kanilang mga anak.

Patapos na ang tanghalian nang dumating si Padre Damaso. Lahat ay bumati sa kaniya, maliban kay Ibarra. Umiinit na ang usapan noon sapagkat nagsisimula nang ilagay ang mga tsampan sa kopa. Nahalata ng alkalde na panay ang pasaring ni Padre Damaso kay Ibarra. Sinikap na ibahin nito ang usapan, pero patuloy ang pari sa pagsasaring. Walang kibo na lamang si Ibarra.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p43" class="paper">
                <div class="front">
                    <div id="f43" class="front-cont">
                        <div class="content">
                        Pero, nang ungkatin ni Padre Damaso ang tungkol sa pagkamatay ng ama ni Ibarra na may kasamang pag-aglahi, sumulak ang dugo ni Ibarra. Biglang dinaluhong niya si Padre Damaso at sasaksakin na sana nito sa dibdib, ngunit pinigilan siya ni Maria. Gulo ang isip ni Ibarra na umalis at iniwan ang mga kasalo sa pananghalian.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f43" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 35: Mga Usap-usapan</h1>
                        
Ang mga pangyayaring namagitan kina Ibarra at Padre Damaso ay madaling kumalat sa buong San Diego. Sa mga usapan, hindi matukoy kung sino ang may katuwiran sa dalawa. Nagkakaisa ang lahat na kung naging matimpi si Ibarra, hindi sana nangyari ang gayon. Pero, ikinatuwiran ni Kapitan Martin na walang makapigil kay Ibarra sapagkat wala itong kinatatakutang awtoridad. Handa ang binata na dungisan ang kamay nito sa sinumang lumapastangan sa kaniyang ama. Dahil sa maagap na pagsansala ng kaniyang itinangi at minamahal na si Maria kaya hindi niya itinuloy ang balak na kitlan ng hininga si Padre Damaso.

Ipinapalagay naman ni Don Filipo na hinihintay raw ni Ibarra na tulungan siya ng taumbayan bilang pagtanaw ng utang na loob sa kabutihang nagawa niya at ng kaniyang ama. Nanindigan naman ang kapitan ng bayan na wala silang magagawa sapagkat laging nasa katuwiran ang mga prayle. Ang ganito, anang Don Filipo, ay nangyayari sapagkat hindi nagkakaisa at watak-watak ang taumbayan samantalang ang mga prayle at mayayaman ay nagkakabuklod-buklod.

Sa kabilang dako, karamihan naman sa mga babae ay takot na mawalay sa grasya ng simbahan. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p44" class="paper">
                <div class="front">
                    <div id="f44" class="front-cont">
                        <div class="content">
                        Tanging si Kapitana Maria lamang ang kumampi kay Ibarra at sinabing karangalan niya ang magkaroon ng anak na magtatanggol at mangangalaga sa sagradong alaala ng yumaong ama.

                        Sakmal naman ng matinding pagkatakot ang mga magsasaka sa hindi matutuloy na pagpapatayo ng paaralan, dahil bawat isa sa kanila ay naghahangad na ang kanilang anak ay makapagtapos ng pag-aaral. May nagsabing hindi na matutuloy ang pagpapatayo ng paaralan sapagkat tinawag na pilibustero ng prayle si Ibarra. Hindi naman maintindihan ng mga magsasaka ang kahulugan ng “pilibustero”.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f44" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 36: Ang Unang Suliranin</h1>
                        Isang malaking gulo ang nangyayari sa bahay ni Kapitan Tiyago dahil sa hindi inaasahang pagdating ng Kapitan-Heneral. Si Maria ay panay ang pagtangis at hindi pinakikinggan ang payo ng kaniyang tiya at ni Andeng. Paano nga kasi ay ipinagbawalan si Maria ng kaniyang ama na makipag-usap kay Ibarra habang hindi pa inaalis ang eskomonyon sa binata.

Saglit na umalis si Kapitan Tiyago sapagkat pinapapunta ito sa kumbento. Patuloy na inaalo naman ni Tiya Isabel si Maria sa pagsasabing susulat sila sa Papa at magbibigay ng malaking limos. Madali namang mapapatawad si Ibarra sapagkat nawalan lamang ng ulirat si Padre Damaso. Si Andeng ay nagboluntaryong gagawa ng paraan para makapag-usap ang magkasintahan.

Nasa gayon silang pag-uusap nang bumalik si Kapitan Tiyago. Sinabi nito na inutusan siya ng pari na sirain ang kasunduan ng pag-iisang dibdib ng magkasintahan. Si Padre Sibyla ay nagsabi naman na huwag tanggapin si Ibarra sa kaniyang tahanan at ang utang ni Kapitan Tiyago na limangpung libong piso sa binata ay huwag nang bayaran kundi ay mawawala ang kaniyang buhay at kaluluwa.


                        </div>
                    </div>
                </div>
            </div>
            <div id="p45" class="paper">
                <div class="front">
                    <div id="f45" class="front-cont">
                        <div class="content">
                        Inalo ni Kapitan Tiyago si Maria sa pagsasabing ang ina raw nito ay nakita lamang niyang umiyak nang ito ay naglilihi. Isa pa, anito, may kamag-anak si Padre Damaso na nakatakdang dumating mula sa Europa at siyang inilalaan na magiging panibagong katipan ni Maria. Nasindak ang mga kausap ni Kapitan Tiyago, lalo na si Maria na napailing lamang, umiiyak, at tinakpan ang mga tainga. Pati si Isabel ay nagalit at sinabihan ang kapitan na ang pagpapalit ng katipan ay hindi parang nagpapalit lamang ng baro.

Dahil kaibigan ni Kapitan Tiyago ang arsobispo, iminungkahi ni Tiya Isabel na sulatan ito. Pero sinabi ng kapitan na mawawalang kabuluhan lamang sapagkat ang arsobispo ay isang prayle rin at walang ibang pauunlakan kundi ang mga kapwa prayle nito. Pagkaraang pagsabihan ng kapitan si Maria na tumigil na ito sa kangangalngal at baka mamugto ang mga mata ay hinarap na niya ang paghahanda sa bahay.

Pamaya-maya ay dumating na nga ang Kapitan-Heneral. Ang buong kabahayan ni Kapitan Tiyago ay nagsimulang mapuno ng mga tao. Si Maria naman ay tumakbo sa silid at nagdasal sa Mahal na Birhen. Nasa ganito siyang kalagayan nang pumasok ang kaniyang Tiya Isabel at sinabing gusto siyang makausap ng Kapitan-Heneral. Mabigat man sa loob ay unti-unti na siyang nag-ayos ng katawan.


                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f45" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 37: Ang Kapitan-Heneral</h1>
                        Pagkarating ng Kapitan-Heneral, ipinahanap niya kaagad si Ibarra. Samantala, kinausap muna niya ang binatang taga-Maynila na nagkamaling lumabas habang nagsesermon sa misa si Padre Damaso. Ang paglabas ng binata sa simbahan ay ikinagalit ni Padre Damaso. Namumutla at nanginginig ang buong katawan ng binata nang pumasok ito upang kausapin ng heneral. Ngunit nang lumabas ito ay nakangiti na siya. Ito ay tanda ng mabuting ugali ng Kapitan-Heneral. Mayroon siyang panahon basta sa katarungan.

Pagkalabas ng binata, ipinapasok na ng kagawad ang mga reverencia na sina Padre Sibyla, Padre Martin, Padre Salvi, at iba pang mga prayle. Yumuko ang mga ito at nagbigay galang sa heneral. Dahil hindi kasama si Padre Damaso ay hinanap siya ng heneral. Sinabi nina Padre Sibyla at Padre Salvi na may sakit ang kaniyang hinahanap. Ang sumunod na nagbigay galang sa heneral ay sina Kapitan Tiyago at Maria.

Pinapurihan ng heneral si Maria dahil sa ginawa nito sa pananghalian. Kung hindi dahil sa kaniya ay maaaring nautas na ni Ibarra si Padre Damaso. Sinabi ng heneral na kailangang tumanggap ng gantimpala si Maria na kagyat namang tumutol.

Samantala, ipinahayag ng kagawad na dumating na si Ibarra at nakahanda na siyang humarap sa heneral. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p46" class="paper">
                <div class="front">
                    <div id="f46" class="front-cont">
                        <div class="content">
                        Napansin ng heneral na medyo nabalisa si Maria, kaya sinabi niyang nais niya itong makaharap bago umalis patungong Espanya. Sinabi naman niya sa alkalde na samahan siya nito sa paglilibot.
                        Hindi matiis ni Padre Salvi na ipaalala sa heneral na si Ibarra ay excomulgado. Pero, hindi siya pinapansin nito at sa halip ay sinabi ng heneral na ipaabot kay Padre Damaso ang pangangamusta na gumaling ito kaagad. Napaamang ang mga reverencia at sabay-sabay na nagpaalam. Nakasalubong nila ang pagpanaog ni Ibarra ngunit hindi sila nagkakibuan; mata lamang ang nag-usap.

Pagkakita ng heneral kay Ibarra ay mabilis niya itong kinamayan at sinabing tama lamang ang kaniyang ginawa lalo na ang ginawang pagtatanggol sa alaala ng ama. Tiniyak niya na kakausapin niya ang arsobispo tungkol sa pagkaka-excomulgado ni Ibarra.

Sa pagkukuwento, lumitaw na nagkapalad si Ibarra na makatagpo ang pamilya ng Kapitan-Heneral noong siya ay nagpunta sa Madrid. Tinanong ng heneral kung wala man lang liham na tagubiling dala si Ibarra para sa kaniya. Hindi na kailangan ito, ani Ibarra, sapagkat lahat daw ng mga Pilipino ay tinagubilin sa heneral. 
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f46" class="back-cont">
                    <div class="content">
                    Sa pagpapahayag ni Ibarra ng kaniyang sariling pananaw sa buhay, napagmuni ng heneral na matalino ang binata. Inamuki niya itong ipagbili lahat-lahat ng ari-arian at sumama na sa kaniya sa Espanya sapagkat hindi nababagay ang kaniyang kaisipan sa Pilipinas. Pero, sinasabi ni Ibarra na higit na matamis ang mamuhay sa kaniyang bayang sinilangan at pinamuhayan din ng mga magulang ito.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p47" class="paper">
                <div class="front">
                    <div id="f47" class="front-cont">
                        <div class="content">
                            <h1>
                            KABANATA 38: Ang Prusisyon
                            </h1>
                            Ang nakakatulig na paputok at sunod-sunod na pagdupikal ng mga batingaw ay nagbabadya na inilabas na ang prusisyon. Ang mga binata ay halos lahat mayroong dalang sinding parol. Kasamang naglalakad ni Kapitan-Heneral ang mga kagawad, si Kapitan Tiyago, ang alkalde, ang alperes, at si Ibarra patungo sa bahay ng kapitan. Nagpatayo ang kapitan ng isang kubol sa harap ng kaniyang bahay upang pagdausan ng pagbigas ng tulang papuri o loa sa pintakasi ng bayan. Kung hindi lamang sa imbitasyon ng Kapitan-Heneral, mas gusto ni Ibarra na manatili na lamang sa tahanan ni Kapitan Tiyago upang makasama niya si Maria.

Nangunguna sa prusisyon ang tatlong sakristan na may hawak na mga seryales na pilak. Kasunod nila ang mga guro, mag-aaral, at mga batang may dala-dalang parol na papel. Ang mga agwasil at tinitini naman ay may dalang mga pamalo upang gamitin sa sinumang maniksik o humiwalay sa hanay. Mayroon din silang kasamang namimigay ng libreng kandila para gamiting pang-ilaw sa prusisyon.

Ang mga santong pinuprusisyon ay pinangungunahan ni San Juan Bautista. Sumunod sina San Francisco, Sta. Maria Magdalena, San Diego de Alcala, at ang pinakahuli ay ang Mahal na Birhen. Ang karo ni San Diego ay hinihila ng anim na Hermano Tercero.


                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f47" class="back-cont">
                    <div class="content">
                    Inihinto ang mga karo at andas ng mga santo sa tapat ng kubol sa pagdadarausan ng loa. Mula sa tabing ay may isang batang lalaking may pakpak, nakabotang pangabayo, nakabanda, at may bigkis ang lumabas. Pagkatapos na bumigkas ng papuri ang bata sa wikang Latin, Kastila, at Tagalog ay pinagpatuloy ang prusisyon hanggang sa mapatapat sa bahay ni Kapitan Tiyago. Ang lahat ay natigilan sa magandang pag-awit ni Maria Clara ng Ave Maria ni Gounod sa saliw ng kaniyang sariling piyano. Kung napatigil si Padre Salvi sa ganda ng tinig ni Maria, higit namang nakadama ng kalungkutan si Ibarra. Nadarama niya ang mensahe ng tinig ng kasiphayuan ng kasintahan. Saglit na naputol ang pagmumuni-muni ni Ibarra nang paalalahanan siya ng Kapitan-Heneral tungkol sa imbitasyon nitong makasalo sa pagkain upang pag-usapan ang pagkawala nina Basilio at Crispin.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p48" class="paper">
                <div class="front">
                    <div id="f48" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 39: Si Doña Consolacion</h1>
                            Kahit na napatapat ang prusisyon sa bahay ni Doña Consolacion ay pinid na pinid ito. Nang umagang iyon, ang asawa ng alperes at paraluman ng mga guwardiya-sibil ay hindi nakapagsimba. Paano ay hindi siya pinayagang lumabas ng kaniyang asawa. Ikinahihiya ng alperes ang kata-tawang pagdadamit nito. Ang kaniya namang amoy ay katulad ng kalaguyo ng mga guwardiya-sibil. Pero, para sa sarili, si Doña Consolacion ay higit pa ngang maganda kaysa kay Maria Clara.

Ang ipinagpuputok pa ng damdamin ng Doña bukod sa siya ay hindi pinayagang lumabas ng bahay ay ang pangyayaring sobra kung alipustahin at murahin siya ng alperes. Suklam na suklam ang Doña at iniisip niya kung paano siya makakapaghiganti. Ang pagdili-dili niya ay nakapagbigay sa kaniya ng ibayong ngitngit.

Nang araw ngang iyon, bago dumaan ang prusisyon, ipinasara niya sa bantay ang lahat ng mga bintana at nagpasindi pa ng ilaw. Inutusan din nitong huwag magpapasok maski sinuman. Pinakandado niyang mabuti pati pintuan. Habang nag-iisip ang Doña, narinig niyang umaawit si Sisa na dalawang araw nang nakakulong sa kuwartel. Pinapaakyat ng Doña si Sisa upang pakantahin. Palibhasa, sa wikang Kastila ang utos ng Doña, hindi ito maunawaan ni Sisa.
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f48" class="back-cont">
                    <div class="content">
                    Isa pa ay hindi matino ang kaniyang pag-iisip; isa na siyang baliw.

Kinuha ng Doña ang latigo ng alperes at muling inutos na kumanta si Sisa. Pero hindi sumunod si Sisa. Dahil dito, inutusan ng Doña ang sundalo na sabihin kay Sisa ang gusto nitong mangyari. Kumanta si Sisa ng Kundiman ng Gabi. Ang awit ay tumalab sa damdamin ng Doña at nakapagsalita ito ng Tagalog. Napaamang ang sundalo; hindi niya sukat akalain na marunong mag-Tagalog ang Doña. Napansin ng Doña ang pagkaamang ng kawal, kaya galit na pinaalis ito. Binalingan ng Doña si Sisa at sa pilipit na pangangastila ay inutusan itong magbaile o sumayaw.

Nang hindi sumunod si SIsa, pinalo niya ito sa binti at paa. Nabuwal si Sisa at nagisi ang manipis nitong damit kasabay ng paglabas ng dugo mula sa nabakbak na sugat. Nasisiyahan ang Doña sa gayong tanawin. Ang kaniyang galit ay naibunton niya kay Sisa.

Hindi napansin ng Doña ang pagdating ng alperes na pasikad na binuksan ang nakasarang pintuan. Pagkakita ng alperes kay SIsa, siniglahan ito ng pangangatal ng katawan sa galit at namutla. Bumalasik ang kaniyang mukha. Ngunit parang walang anuman ito sa Doña. Tinanong pa niya ang alperes kung bakit hindi man lang daw ito bumati sa kaniya. Hindi sumagot ang alperes. Inutusan niya ang bantay na bigyan ng damit at pagkain si Sisa. Kailangang gamutin din ang mga sugat nito, bigyan ng magandang higaan, at huwag lalapastanganin. Ang dahilan ay si Sisa ay nakatakdang ihatid sa tahanan ni Ibarra kinabukasan din.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p49" class="paper">
                <div class="front">
                    <div id="f49" class="front-cont">
                        <div class="content">
                        Sa kabilang dako, kung magkaroon man ng kagaspangan ng ugali si Doña Consolacion, yaon ay bunga ng kaniyang kawalan ng sapat na edukasyon. Siya ay dating labandera lamang ng mga sundalo at napangasawa niya ang alperes na noon ay isa lamang kabo. Ito ang dahilan kung bakit may plastik na pag-uugali ito. Pilit siyang nag-aastang may pinag-aralan, marunong ng Kastila, at may ugaling Europeo.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f49" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 40: Ang Karapatan at Lakas</h1>
                        Mag-iikasampu na ng gabi nang paisa-isang sindihan ang mga kuwitis. Ang huling pailaw ay parang bulkan habang ng daan ay naliliwanagan ng ‘luces de Bengala’ na siyang nagsisilbing ilaw sa mga taong naglalakad patungo sa liwasang bayan.

Malaki ang entabladong pagdarausan ng dula. Ang nangasiwa sa palabas ay ang tinyente mayor na si Don Filipo sapagkat ang kapitan ay nasa sugalan. Kausap ng tinyente si Pilosopo Tasyo at nakasentro ang kanilang pag-uusap tungkol sa pagbibitiw ng Don sa kaniyang tungkulin. Danga’t nalamang hindi tinanggap ng alkalde ang pagbibitiw nito. Saglit na naputol ang pag-uusap ng dalawa nang dumating si Maria Clara kasama ang mga kaibigan. Kasunod nilang dumating ang kura at ilang Kastila. Isa-isa silang inihatid sa upuan ng tinyente.

Nagsimula na ang palabas sa pamamagitan ng tambalang tinig nin Chananay at Marianito ng ‘Crispino dela Comare’. Ang pansin ng lahat ay nasa entablado maliban kay Padre Salvi na walang kurap na nakatitig kay maria Clara.
Tapos na ang unang bahagi ng dula nang pumasok si Ibarra. Umugong ang bulungan, pero hindi ito pinansin ni Ibarra. Malugod na binati niya ang kasintahan at ang mga kasama nito. Tumindig si Padre Salvi, o ang kura, at hiniling kay Don Filipo na paalisin si Ibarra. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p50" class="paper">
                <div class="front">
                    <div id="f50" class="front-cont">
                        <div class="content">
                        Ngunit hindi sumunod ang Don at sinabing hindi niya magagawa ang gayon sapagkat nag-abuloy ng malaki si Ibarra. Isa pa, anang Don, ay hindi siya natatakot sa gagawin ng kura sapagkat maghapong kau-kausap ng Kapitan-Heneral at ng alkalde ng lalawigan si Ibarra. Kaya wala itong dapat ipangamba. Napilitang umalis ang kura at ang mga kasama nito. May ilang taong lumapit kay Ibarra at sinabing huwag pansinin ang paglisan ng kura, sapagkat ang mga ito ang nagsasabing si Ibarra ay escomulgado. Dahil dito, naitanong ni Ibarra na sila ay nasa panahon pa ng edad Media.

Nilapitan ni Ibarra ang mga dalaga at nagpaalam na ilang sandali siyang mawawala sapagkat mayroong nalimutang tipanan. Pinigilan siya ni Sinang subalit nangako si Ibarra na babalik na lamang siya. Papalabas na si Yeyeng upang sumayaw nang lumapit ang dalawang sibil kay Don Filipo at ipinatitigil ang palabas dahil hindi raw makatulog sa ingay ang alperes at si Doña Consolacion. Pero hindi pinagbigyan ang kahilingan ng mga sibil at natapos na ang dula. Bigla na lamang nagkagulo.

May dalawang sibil na hinagad ang mga musikero upang pigilin ang palabas pero ang mga ito ay nahuli ng mga kuwadrilyero na katulong ni Don Filipo. Tiyempo namang nakabalik na si Ibarra at kaagad niyang hinanap si Maria. Kumapit sa bisig ni Ibarra ang mga nasindak na dalaga.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f50" class="back-cont">
                    <div class="content">
                    Walang tigil naman sa kakausal ng litanya sa Latin si Tiya Isabel. Ang mga sibil na inihatid ng mga kuwadrilyero sa tribunal ay pinagbabato ng mga tao. May mga pulutong ng mga kalalakihan na nagbabalak ng masama sa mga sibil. Pero, pinakiusapan sila ni Don Filipo na huwag nang palalain pa ang pangyayari, ngunit hindi siya pinansin ng mga ito. Kaya kay Ibarra siya nakiusap. Sinabi ng binata na wala siyang magagawa. Pinakiusap ni Ibarra kay Elias na puntahan ang mga kalalakihang nagbabalak ng masama. Napahinuhod naman ng piloto ang mga lalaki na huwag nang ituloy ang kanilang mga binabalak. Isa-isang nagsialisan ang mga tao.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p51" class="paper">
                <div class="front">
                    <div id="f51" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 41: Dalawang Dalawa</h1>
                            Dahil sa nangyari, hindi dinalaw ng antok si Ibarra, kaya naisipan nitong gumawa sa kaniyang laboratoryo. Pamaya-maya ay pumasok ang kaniyang utusan at sinabing mayroon siyang panauhing taga-bukid. Pinatuloy niya ito nang hindi man lang lumilingon. Ang kaniyang panauhin ay si Elias.

Tatlo ang pakay ni Elias sa pagpunta niya kay Ibarra. Una, ay upang ipaalam na nilalagnat o may sakit si Maria Clara. Ikalawa, magpapaalam na siya kay Ibarra sapagkat nakatakda siyang magtungo sa Batangas. At ikatlo, itatanong niya sa binata kung wala ba itong ipagbibilin sa kaniya. Hinangad ni Ibarra ang maluwalhating paglalakbay ni Elias.

Hindi nakatiis si Ibarra at tinanong niya kung paano napatigil ni Elias ang kaguluhang nangyari sa liwasan. Sinabi ni Elias na kilala niya ang magkapatid na namumuno sa panggugulo. Ang mga ito ay may galit sa mga sibil. Ang ama ng magkakapatid ay pinatay sa palo ng mga sibil na nanggulo sa liwasan. Pero dahil sa may utang na loob ang magkapatid kay Elias, sila ay madaling napakiusapan nito. Hindi na kumibo si Ibarra, kaya nagpaalam na si Elias.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f51" class="back-cont">
                    <div class="content">
                    Nagbihis at nanaog na si Ibarra habang sinisisi ang sarili sa pagkakasakit ng kasintahan. Tutungo siya sa bahay ni Kapitan Tiyago. Sa daan, nakasalubong niya ang isang maliit na lalaking nakaitim at may pilat sa kaliwang pisngi. Ito ay si Lucas, at kapatid ng taong madilaw na namatay sa paghuhugos ng unang bato sa paaralan. Nabanas nang husto si Ibarra sa pangungulit ni Lucas na kung magkano raw ang ibabayad sa pamilya ng kaniyang kapatid. Sinabi ni Ibarra na magbalik na lamang si Lucas dahil dadalaw ito sa isang maysakit. Saka na nila pag-uusapan ang tungkol sa pagbabayad. Mauubos na ang pagtitimpi ni Ibarra, kaya tinalikuran niya kaagad si Lucas.

Sinundan ng masamang tingin ni Lucas si Ibarra sabay bulong sa sariling si Ibarra ay apo nga talaga ng nagbilad sa init sa kaniyang ama at iisa ang dugong nananalaytay sa kanilang mga ugat. Subalit kapag si Ibarra ay mahusay na magbayad ng mataas, sila ay magiging mabuting magkaibigan.


                        </div>
                    </div>
                </div>
            </div>
            <div id="p52" class="paper">
                <div class="front">
                    <div id="f52" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 42: Ang Mag-asawang de Espadaña</h1>
                            Malungkot sa bahay ni Kapitan Tiyago sapagkat may sakit si Maria. Pinag-uusapan ng magpinsang Tiya Isabel at Kapitan Tiyago kung alin ang mabuting bigyan ng limos: ang krus ba sa Tunasan na malaki, o ang krus sa Matahong na nagpapawis. Nais malaman ni Tiyago kung alin sa dalawang ito ang higit na mapaghimala. Napagdesisyunan na parehong bigyan ng limos ang dalawang ito upang gumaling kaagad ang karamdaman ni Maria. Natigil ang pag-uusap ng magpinsan nang mayroong tumigil sa harap ng bahay. Ang dumating ay sina Dr. Tiburcio de Espadaña, na inaanak ng kamag-anak ni Padre Damaso na si Linares, at tanging kalihim ng lahat ng ministro sa Espanya.

Inaasahan ni Tiyago ang mga dumating na panauhin. Pagkatapos na maipakilala ni Victorina si Linares, sinamahan sila ni Tiyago sa kani-kanilang silid.

Sa biglang tingin, aakalain na si Doña Victorina ay isang Orofea. Siya ay isang ginang na may edad na 45, pero ipinamamalitang siya ay 32 taong gulang lamang. Noong bata at dalaga pa siya ay kapani-paniwalang maganda ito. Kaya, hindi siya nagpasilo sa mga lalaking Pilipino at ang pinangarap niyang mapangasawa ay isang dayuhan. Ibig nitong mapabilang sa mataas na antas ng lipunan.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f52" class="back-cont">
                    <div class="content">
                    Ngunit ang bitag na inihanda niya ay walang nasilo. Nalagay siya sa pangangailangan na kailangang makapangasawa siya ng dayyuhan. Napilitan siyang masiyahan sa isang maralitang Kastila na taga-Espanya na itinaboy ng bayang Extremadura at ipinadpad ng kapalaran sa Pilipinas. Ang kastilang ito ay si Tiburcio de Espadaña na may 35 taong gulang, ngunit mukha pang matanda kay Doña Victorina.

Nakarating siya sa Pilipinas sakay ng barkong Salvadora. Sa barko ay dumanas siya ng katakot-takot na pagkahilo at nabalian pa ng paa. Nahihiya na siyang magbalik sa Espanya kaya ipinasiya na niyang manatili sa Pilipinas. Eksaktong 15 araw siya sa bansa nang matanggap siya sa trabaho dahil sa tulong ng mga kababayang Kastila. Sapagkat hindi naman siya nag-aral ay pinayuhan siya ng mga kababayan na humanap ng magandang kapalaran sa mga lalawigan at magpanggap na isang mediko na ang tanging puhunan ay ang pagiging Kastila. Ayaw sana niyang sumunod dahil nahihiya siya, pero dahil sa gipit na gipit na siya, wala siyang mapagpipilian kundi sumunod sa payo nila.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p53" class="paper">
                <div class="front">
                    <div id="f53" class="front-cont">
                        <div class="content">
                        Siya ay dating nagtatrabaho sa pagamutan ng San Carlos bilang tagapagbaga ng mga painitan at tagapaspas ng alikabok sa mga mesa at upuan pero wala talagang kaalam-alam ito sa paggagamot. Sa una, mababa ang singil niya. Lumalaon ay pataas nang pataas; sinasamantala niya nang husto ang pagtitiwala sa kaniya ng mga Indio. Dahil dito, umaasa siya na tuloy-tuloy ang kaniyang pagyaman. Ngunit nagsumbong ang mga tunay na mediko sa Protomediko de Manila na siya ay pekeng doktor. Nawalan na siya ng pasyente. Babalik na sana siya sa pamamalimos sa mga kakilala’t kababayan subalit napangasawa nga niya si Doña Victorina.

Pagkakasal, lumipat sila sa Sta. Ana at dito idinaos ang kanilang pulut-gata. Ilang araw ang nagtagal ay bumili ng aranya at karomata si Doña Victorina at matutuling kabayo mula sa Albay at Batangas para sa gamit nilang mag-asawa. Binihisan din niya nang husto ang asawa para magmukhang kagalang-galang. Ang Doña ay nagsimulang maging ilusyunada bilang isang Orofea. Nagpusod-Espanyola at naglagay ng mga palamuti sa katawan. Ilang buwan ang lumipas, ipinamalita niyang siya ay naglilihi at sa Espanya manganganak sapagkat ayaw niyang ipanganak ang anak na tatawaging rebolusyonaryo. Ang kaniyang pangalan ay dinagdagan ng de, kaya nakalimbag sa mga tarheta nito ang Victorina de los Reyes de Espadaña.


                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f53" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 43: Mga Balak o Panukala</h1>
                        Tuloy-tuloy si Padre Damaso sa kamang kinahihigaan ni Maria at luhaang sinabi na, “Anak ko, hindi ka mamamatay.” Nagtaka si Maria sa nakitang anyo ng pari. Ang mga nakakakilala sa prayle ay halos hindi rin makapaniwala na ang paring may magaspang na ugali at matipunong anyo ay mayroon palang gayong kalambot na damdamin. Tumindig si Padre Damaso at nagpunta sa silong ng balag sa ilalim ng balkonahe at umiyak na parang batang ibinulalas ang lahat ng sama ng loob. Dahil dito, nasabi ng lahat na talagang mahal na mahal ng pari ang inaanak na si Maria.

Nang kumalma na ang damdamin ng pari, ipinakilala ni Doña Victorina si Linares. Sinabi ni Linares na siya ay anak ng bayaw ni Damaso na si Carlicos. Ibinigay ni Linares ang sulat sa pari na binasa naman niya. Lumitaw na si Linares ay nangangailangan ng trabaho at mapapangaswa. Ayon kay Padre Damaso ay madali niyang mahahanapan ng trabaho ang binata sapagkat ito ay tinanggap na abogado sa Unibersidad Central. Tungkol naman sa pag-aasawa, sinabi ni Damaso na kakausapin nila si Tiyago.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p54" class="paper">
                <div class="front">
                    <div id="f54" class="front-cont">
                        <div class="content">
                            
Naiwan si Padre Salvi na malungkot at nagmumuni-muni. Nagitla na lamang siya nang batiin ni Lucas, na humihingi umano ng payo tungkol sa pagkamatay ng kaniyang kapatid. Nagdrama nang husto si Lucas, pilit na nagpapatulo siya ng luha nang isalaysay niya ang pakikipagkita niya kay Ibarra at binigyan lamang siya ng limang daang piso para sa pagkamatay ng kaniyang kapatid. Nagalit ang pari sa kadramahan ni Lucas, kaya pinagtabuyan niya ito at pasalamat siya’t hindi siya ipinabilanggo ni Ibarra. Umalis na bumubulong-bulong si Lucas.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f54" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 44: Pagsusuri sa Budhi</h1>
                        Nabinat si Maria pagkatapos na makapagkumpisal. Sa kaniyang pagkahibang ay wala siyang sinasabing pangalan kundi ang pangalan ng kaniyang inang hindi man lamang niya nakilala. Siya ay binabantayang mabuti ng kaniyang mga kaibigang dalaga. Si Tiyago naman ay nagpamisa at nangako na magbibigay ng tungkod na ginto sa Birhen ng Antipolo. Unti-unti namang bumaba ang lagnat ni Maria.

Takang-taka naman si Don Tiburcio sa naging epekto ng gamot na inireseta niya sa dalaga. Sa kasiyahan ni Doña Victorina ay hindi niya nilabnot ang pustiso ng asawa.

Isang hapon, napag-usapan ang nakatakdang paglipat ng parokya ni Padre Damaso sa Tayabas. Sinabi ni Kapitan Tiyago na ang ganitong pagkakalayo ng pari ay labis na daramdamin ni Maria sapagkat para na rin niya itong ama. Ipinaliwanag din niya na ang pagkakasakit ng dalaga ay bunga ng mga pangyayari noong pista. Sinabi naman ng kura na mabuti nga ang hindi pagpapahintulot ng kapitan na magkausap ang anak at si Ibarra. Pero, tinutulan ng Doña ang ganitong pananaw sapagkat matibay ang kaniyang paniniwala na si Don Tiburcio ang nakapagpagaling kay Maria.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p55" class="paper">
                <div class="front">
                    <div id="f55" class="front-cont">
                        <div class="content">
                        Hindi pinansin ni Padre Salvi ang doña at sa halip ay sinabi niyang malaki raw ang nagawa ng pangungumpisal sapagkat daig ng isang malinis na budhi ang lahat ng mga gamot na gaya ng pinatutunayan na ng maraming pagkakataon. Dahil dito, nabanas ang doña at iminungkahi niya kay Padre Salvi na gamutin ng kaniyang kumpisal si Doña Consolacion na asawa ng alperes.

Hindi umimik ang pari at sa halip ay tinagubilinan niya si Kapitan Tiyago na ipahanda kay Tiya Isabel si Maria sa isang pangungumpisal muli sa gabing iyon at bibigyan niya ng viatico kinabukasan upang tuloy-tuloy na ang kaniyang paggaling.

Samantala, pinainom ni Sinang si Maria ng isang pildoras na mula sa bumbong na kristal at ayon sa bilin ng doktor ay itigil ito kapag nakakaramdam siya ng pamimingi. Itinanong ni Maria kay Sinang kung hindi ba sumulat si Ibarra. Sumagot si Sinang na abala si Ibarra sa pag-aasikaso na mapatawad ng arsobispo ang kaniyang ekskomunyon. Saglit na natigil ang kanilang pag-uusap sapagkat pumasok si Tiya Isabel upang ihanda muli si Maria na sulatan niya si Ibarra at sabihing kalilimutan niya na ito. Hindi nakapagtanong si Sinang dahil nagsisimula na si Tiya Isabel, si Maria naman ay nag-iisip ng mga kasalanan. Binasa ni Tiya Isabel ang sampung utos. Pagkaraan ay nagtulos ng isang malaking kandila si Tiya Isabel sa harap ng altar ng mahal na birhen.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f55" class="back-cont">
                    <div class="content">
                    Nagtagal ang kumpisalan sa gabing iyon. Napansin ni Tiya Isabel na sa halip na makinig ang pari sa sinasabi ni Maria, tila ba binabasa niya ang nas aisip ng dalaga. Nang lumabas ng silid si Padre Salvi, ito ay namumutla at nakapangagat labi, kunot ang noo at pawisan. Sa malas, siya ang kinumpisalan na hindi nagtamo ng patawad.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p56" class="paper">
                <div class="front">
                    <div id="f56" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 45: Ang mga Pinag-usig</h1>
                            Nagpunta sa kagubatan si Elias at hinanap si Kapitan Pablo. Siya ay sinamahan ng isang lalaki sa yungib na tila nasa ilalim ng lupa. Nang makita ni Elias ang matandang Pablo, ang ulo nito’y natatalian ng isang bigkis na kayong may bahid ng dugo. Kaya nagkakilala silang dalawa. May anim na buwan na nang huli silang magkita. Noon, ayon kay matandang Pablo, siya ang naaawa kay Elias. Subalit ngayon ay nagkapalit sila ng puwesto. Si Elias ay malakas samantalang ang matanda ay sugatan at lugami sa hirap ng katawan at kalooban. May 15 na araw na naibalita kay Elias tungkol sa sinapit ni Kapitan Pablo. Katunayan ay pinaghanap siya nito sa kabundukan ng dalawang lalawigan. At ngayon nga ay kaniyang natagpuan ito.

Ipinaliwanag ni Elias sa Kapitan na nais niya itong isama sa lupain ng mga di-binyagan upang doon na manirahan nang payapa kahit na malayo sa sibilisasyon, yamang wala rin daw nangyari sa kaniyang paghahanap sa angkang nagpahamak sa kaniyang pamilya. Binigyang-diin ni Elias na magturingan na lamang silang dalawa bilang mag-ama yayamang pareho na silang nag-iisa sa buhay. Umiiling lamang ang matanda sa kahilingan ni Elias at sinabing wala siyang dahilan para magpanibagong buhay sa ibang lupain.
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f56" class="back-cont">
                    <div class="content">
                    Kailangan niyang maipaghiganti ang kalupitang sinapit o ang pagkamatay ng kaniyang dalawang anak na lalaki at isang babae sa kamay ng mga buhong. Noon, aniya, siya ay isang duwag, ngunit ang dugo at kamatayan ang isinisigaw ng kaniyang budhi dahil sa kaapihang kaniyang natamo. Karumaldumal ang sinapit ng kaniyang mga anak kaya ganito na lamang ang kaniyang pagpupuyos.
                    Ang kaniyang anak na dalaga ay pinagsamantalahan at inilugso ang kapurihan ng isang alagad ng simbahan. Dahil dito, nagsiyasat ang dalawa niyang anak na lalaki. Pero, nagkaroon ng nakawan sa kumbento at ang isa niyang anak ay sinuplong. Ang anak niyang ito ay ibinitin sa kaniyang buhok at narinig niya ang sigaw, daing, at pagtawag sa kaniya, pero siya ay nasanay sa buhay na tahimik at naging duwag, at hindi nagkaroon ng lakas ng loob na pumatay o magpakamatay. Ang paratang na pagnanakaw sa kaniyang anak ay hindi napatunayan; isa lamang malaking kasinungalingan. Ang kurang nagparatang ay inilipat sa ibang lugar, pero ang kaniyang anak ay namatay sa sobrang pahirap na dinanas.

Ang isa naman niyang anak ay hindi duwag at pinangambahan na siya ay maghihiganti dahil sa sinapit ng dalawang kapatid. Ito ay hinuli ng mga awtoridad dahil nakalimutan lamang niyang magdala ng sedula. Ito ay pinahirapan din hanggang sa magpatiwakal na lamang siya.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p57" class="paper">
                <div class="front">
                    <div id="f57" class="front-cont">
                        <div class="content">
                        Ngayon, wala nang nalalabi sa kaniya kundi ibaba ang bayan upang maghimagsik at makapaghiganti. Hindi naman siya nag-iisa, marami siyang kanaib na kapwa ring pinag-uusig ng awtoridad. Ang mga ito ang bumubuo sa kaniyang pangkat na pinamumunuan. At sila ay naghihintay lamang ng tamang tiyempo at araw upang lumusob.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f57" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 46: Ang Sabungan</h1>
                        
Katulad din ng iba pang bayan ng Pilipinas, may sabungan din sa San Diego. Ito ay nahahati sa tatlong bahagi. May pasukan ito sa pinto na binabantayan ng isang babaeng naniningil ng bayad sa pagpasok. Nakahanap naman sa magkabilang daraanan ng mga tao ang mga tindera na nagtitinda ng kung ano-ano, katulad ng pagkain, gamit na maliliit sa bahay, sigarilyo, at iba pa. Kalapit ito ng isang may kalakihan ding lugar na kinaroroonan ng mga tahur, magtatari, at mga sobra ang hilig sa sabong. Dito nagpapalipat-lipat nang mabilis ang kuwarta sa kamay ng mga tao at nakikipagkasunduan. Ang tawag sa lugar na ito ay ulutan. Ang ikatlong bahagi naman ng sabungan ay tinatawag na ruweda. Dito dinaraos ang mga sultada. Makikita sa lugar na ito ang mga taong may matataas na tungkulin, mayayaman, ang mga tahur, at sentensyador.

Nasa loob ng sabungan sina Kapitan Pablo, Kapitan Basilio, at Lucas. Nagtanong si Kapitan Basilio tungkol sa manok na isasabong ni Kapitan Tiyago samantalang papasok ito sa sabungan na kasunod ang dalawang alalay o utusan na may dalang isang lasak na manok at isang malaking puting tinali. Bulik naman ang manok ni Kapitan Basilio
.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p58" class="paper">
                <div class="front">
                    <div id="f58" class="front-cont">
                        <div class="content">
                        Nagkaroon muna ng batian tungkol sa pagkakasakit ni Maria Clara, pagkaraan naman ay nagkasundo ang dalawa na paglabanin ang bulik at ang lasak sa pustang tatlong libong piso. Parang apoy na kumalat ang paglalaban. Nagkaroon ng pustahan ang mga sabungero. Lumilitaw na dehado ang pula at llamado naman ang puti.

Habang hindi magkamayaw sa pagpusta ang ilang sabungero sa gagawing pagsusultada, ang dalawang binatang magkapatid na sina Tarsilo at BRuno ay naiinggit sa mga pumupusta. Sila ay matamang pinagmamasdan ni Lucas. Pamaya-maya ay lumapit ang pinakabata sa dalawa kay Lucas at nakiusap na pautangin ito ng pera para may maipusta. Sina Bruno at Tarsilo ay may masaklap na karanasan sa mga sibil, ang kanilang ama ay pinatay sa palo ng mga ito.

Tinanong ni Lucas ang magkapatid kung payag na sila sa kondisyong kaniyang ibinigay. Ayaw ng nakatatanda. Dahil dito, sinabi ni Lucas na kahit kilala man niya ang magkapatid na ayaw ipaghigantii ang pagkamatay ng kanilang ama, hindi niya mapapautang ang mga ito ng perang hindi niya pag-aari. Ang pera, aniya, ay kay Don Crisostomo Ibarra. Gayunman, kung papayag sila sa kanilang amuki, madali niyang mabibigyan ng pera ang mga ito. Ikinatuwiran ng dalawa na kundi lamang sa kanilang kapatid na babae ay matagal na siguro silang nabitay. Pero, sinagot sila ni Lucas na ang mga nabibitay ay mga duwag lamang, walang salapi, at mahihina, at kung sakali ay malapit lamang ang bundok.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f58" class="back-cont">
                    <div class="content">
                    Samantala, pinagsalpuk na ang dalawang manok, na ilang sandali lang ay kapuwa sugatan. Pero matindi ang sa puti. May tarak ito sa dibdib samantalang ang sa pula naman ay sa pakpak lamang. Gayunman, unang bumulagta ang puwit na nagkikisay at sumunod naman ang pula na ipinipikit ang mga mata. Ang nanalo sa labanan ay ang pula. Hiyawang umaatikabo ang sumunod.

Nanghinayang sina Tarsilo at Bruno dahil hindi sila nakapusta, disin sana’y nanalo ng tig-isang daang piso ang bawat isa. Sa hindi kalayuan, nakita nila si Pedro, ang asawa ni Sisa, na binibilangan ng pera ni Lucas. Naisip nilang pumusta sa susunod na laban.


                        </div>
                    </div>
                </div>
            </div>
            <div id="p59" class="paper">
                <div class="front">
                    <div id="f59" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 47: Ang Dalawang Senyora</h1>
                            Habang nakikipaglaban ang lasak ni Kapitan Tiyago, magkaakbay naman na namamasyal sina Doña Victorina at Don Tiburcio upang malasin ang bahay ng mga Indio. Ayon sa doña, pangit ang mga bahay ng mga Indio. Sa kanilang paglakad, nababanas siya nang husto kapag hindi nagpupugay sa kanila ang mga nakakasalubong. Dahil dito, inutos niya sa don na mamalo ng sumbrero. Pero, tumanggi ang don bunga raw ng kaniyang kapansanan.

Nang mapadaan ang doña sa tapat ng bahay ng alperes, nagkatama ang kanilang mga paningin. Parehong matalim. Tiningnan ng alperesa ang doña mula ulo hanggang paa, ngumuso, at dumura sa kabila. Sinugod ng doña ang alperesa at nagkaroon ng mainitang pagtatalo. Binanggit ng doña ang pagiging labandera ng alperesa samantalang pinagdidikdikan naman ng huli ang pagiging pilay at mapagpanggap na asawa ng doña. Puyos sa galit si Doña Consolacion nang nanaog ito habang hawak na mahigpit ang latigo ng alperes upang daluhugin si Doña Victorina. Pero, bago magpang-abot ang dalawa, dumating ang alperes. Umawat si Don Tiburcio. Ang pangyayari ay sinaksihan ng maraming tao na nakatawag-pansin ng kanilang pagtatalakan.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f59" class="back-cont">
                    <div class="content">
                    Dumating ang kura at pinatitigil ang dalawa, ngunit pasinghal na binulyawan siya ng alperes kasabay sa pagtawag dito ng “mapagbanal-banalang Carliston”. Nagalit naman ng husto si Victorina at sinabi kay Tiburcio na kailangan ay hamunin niya ang alperes sa pamamagitan ng sabelo o rebolber. Tumanggi si Tiburcio, kaya nahablot na naman ng di-oras ang kaniyang pustiso ng nagtatalak na asawa.

Pagdating sa bahay ng mag-asawa, inabutan nilang kausap ni Linares si Maria at ang mga kaibigan nito. Kay Linares nabaling ang atensyon ng doña, at inutusan nito na siya ang humamon sa alperes sa pamamagitan ng baril o sable at kung hindi, ibubulatlat nito sa madla at kay Kapitan Tiyago ang tunay nitong pagkatao. Namutla si Linares at humingi ito ng paumanhin sa doña.

Siya namang pagdating ni Kapitan Tiyago na lugo-lugo sapagkat natalo ang kaniyang lasak. Hindi pa nakapagpapahinga si Tiyago, tinaltalan kaagad siya ng doña. Sinabi niya sa kapitan na hahamunin ni Linares ang alperes at kapag hindi niya ito nagawa, hindi ito dapat magpakasal kay Maria. “Sapagkat ang duwag ay hindi nababagay sa inyong anak,” pagdidiin pa ng doña. Dahil sa narinig, nagpahatid si Maria sa kaniyang silid.

Kinagabihan, bago umalis sina Doña Victorina at Don Tiburcio, iniwan nila ang kuwenta sa paggagamot kay Maria at ito’y umaabot sa kung ilang libong piso. Naiwan naman si Linares na nasa gipit na kalagayan.


                        </div>
                    </div>
                </div>
            </div>
            <div id="p60" class="paper">
                <div class="front">
                    <div id="f60" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 48: Ang Talinghaga</h1>
                            
Dumating kinabukasan si Ibarra na gaya ng pagkakabalita ni Lucas sa magkapatid na Tarsilo at Bruno. Ang unang sinadya ng binata ay ang tahanan ni Kapitan Tiyago upang ibalita na siya ay hindi excomulgado at dadalawin niya si Maria. May dala siyang sulat mula sa arsobispo na ibinigay nito sa Aura at nagsasaad na inaalis na ang ekskomunyon. Tuwang-tuwa si Tiya Isabel sapagkat boto siya kay Ibarra at ayaw rin niyang mapangasawa ng kaniyang pamangking si Maria ang Kastilang si Linares. Tinawag ni Isabel si Maria at pinatuloy si Ibarra.

Ngunit biglang naumid ang dila ng binata sapagkat nakita niyang kalapit ng kasintahan si Linares na nasa balkon. Nakasandig sa silyon si Maria at may hawak na abaniko. Sa may paanan nito ay nandoroon si Linares na nagkukumpol ng rosas at sampaga. Namulat si Linares nang makita si Ibarra samantalang si Maria ay namula at hinayaang malaglag na lamang ang tangang pamaypay. Sinikap nitong tumayo, pero hinang-hina siya dahil nga sa pagkakasakit. Si Linares ay waring napapatda at hindi makapagsalita.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f60" class="back-cont">
                    <div class="content">
                    Sinabi ni Ibarra sa kasintahan ang dahilan ng kaniyang di-ipinasabing pagdalaw. Nakatingin lamang sa kaniya si Maria na parang inuunawa ang bawat katagang namutawi sa kaniyang labi. Malungkot si Maria, kaya nakuro ni Ibarra na bukas na lamang siya dadalaw. Tumango ang dalaga. Umalis si Ibarra na ang puso ay ginugutay ng matinding pag-aalinlangan, gulo ang kaniyang isipan. Sa paglakad niya, humantong siya sa ipinapagawang paaralan. Binati siya ni Nor Juan at mangggagawang dinatnan niyang abalang gumagawa. Binigyang diin ni Ibarra sa mga dinatnan na wala nang dapat ipangamba sa kaniya ng sinuman sapagkat siya ay hindi na excomulgado. Pero, tinugon siya ni Nor Juan na hindi nila pinapansin ang ekskomunyon sapagkat silang lahat ay pawang excomulgado.

Nakita ni Ibarra si Elias na kasama ang mga manggagawa. Yumukod si Elias at ipinahiwatig sa pamamagitan ng tingin na mayroon siyang gustong sabihin sa kaniya. Dahil dito, inutusan ni Ibarra si Nor Juan na kunin at ipakita sa kaniya ang talaan nito ng mga obrero upang kaniyang tingnan. Nilapitan ni Ibarra si Elias na nag-iisang nagkakarga ng bato sa isang kariton. Sinabi ni Elias na nais niyang makausap ang binata ng ilang oras. Ipinakiusap nitong mamangka sila sa baybay ng lawa sa bandang hapon upang pag-usapan ang isang napakahalagang bagay. Tumango lamang si Ibarra nang makitang papalapit na sa kanila si Nor Juan. Si Elias naman ay lumayo na. Nang tingnan ng binata ang talaan ng mga obrero, wala ang pangalan ng pilotong si Elias.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p61" class="paper">
                <div class="front">
                    <div id="f61" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 49: Ang Tinig ng mga Pinag-uusig</h1>
                            Nang lumulan si Ibarra sa bangka ni Elias, waring ito ay hindi nasisiyahan. Kaya, kaagad na humingi ng paumanhin si Elias sa pagkagambala niya sa binata. Sinabi ni Ibarra ang dahilan, nakasalubong niya ang alperes at gusto nitong magkausap muli. Dahil nag-aalala siyang makita si Elias, nagdahilan na lamang siya. Nanghinayang naman ang binata nang sabihin ni Elias na hindi siya matatandaan ng alperes. Saglit na napabuntong-hininga si Ibarra sapagkat biglang pumasok sa kaniyang isipan ang kaniyang pangako kay Maria.

Hindi na nag-aksaya ng panahon si Elias. Sinabi niya kaagad kay Ibarra na siya ang sugo ng mga sawimpalad. Ipinaliwanag niya ang napagkasunduan ng puno ng mga tulisan, si Kapitan Pablo, na hindi na binanggit pa ang mga pag-aalinlangan at pagbabala. Ang kahilingan ng mga sawimpalad, ani Elias, ay humingi sila ng makaamang pagtangkilik sa gobyerno katulad ng mga ganap na pagbabago sa mga kawal na sandatahan, sa mga prayle, sa paglalapat ng katarungan, at sa iba pang pangangasiwa ng gobyerno, at pagkakaloob ng kaunting karangalan sa pagkatao ng mga tao, ang kanilang kapanatagan at bawasan ang lakas at kapangyarihang taglay ng mga sibil na madalas na nagiging puno’t dulo ng paglapastangan sa kaparatang pantao.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f61" class="back-cont">
                    <div class="content">
                    Tumugon si Ibarra na anumang pagbabagong nais nila, sa halip na ito ay makabubuti ay lalo pang makakasama. Sinabi nitong maaari niyang pakilusin ang kaniyang mga kaibigan sa Madrid sa pamamagitan ng salapi at pati na ang Kapitan-Heneral ay kaniyang mapapakiusapan, ngunit lahat sila ay walang magagawa. Siya man ay hindi gagawa ng anumang pagkilos ukol sa mga bagay na iyon sapagkat kung may kasiraan man ang korporasyon, ay matatawag naman nilang masasamang kailangan.

Nagtaka si Elias. Hindi niya sukat akalaing ang isang tulad ni Ibarra ay naniniwala sa tinatawag na masamang kailangan na para bang nais palabasin nitong kailangang gumawa muna ng masama upang makapagdulot ng mabuti. Naniniwala siya na kapag ang sakit ay malala, kailangang gamutin ng isang mahapding panlunas. Ang sakit ng bayan ay malubha kaya’t kailangan ang kaparaanang marahas kung ito ay makakabuti. Ang isang mabuting manggagamot, aniya, ay sinusuri ang pinagmulan ng sakit at hindi ang mga palatandaan nito na sinisikap na bigyan ng lunas. Katulad ng mga sibil na sa pagnanais daw na masugpo ang kasamaan, ito ay iniinis sa pananakot, paggawa ng karahasan, at walang habas na paggamit ng lakas. At kapag pinahina ang guwardiya-sibil ay malalagay naman sa panganib ang katahimikan ng bayan.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p62" class="paper">
                <div class="front">
                    <div id="f62" class="front-cont">
                        <div class="content">
                        Paano raw magkakagayon gayong labinlimang taon nang may mga sibil, ngunit ang mga tulisan ay patuloy pa rin sa pandarambong. Ang mga sibil ay walang naidudulot na kabutihan sa bayan sapagkat kanilang pinipigil at pinahihirapan ang isang tao kahit na marangal dahil lamang sa nakalimutan ang cedula personal, at kapag kailangang malinis ang kanilang mga kuwartel, ay manghuhuli sila ng mga kaawa-awang mamamayan na walang lakas na tumutol.


                        Napag-usapan pa nila na bago itatag ang guwardiya-sibil, nanunulisan na ang mga tao dahil sa matinding pagkagutom. Binigyang diin naman ni Elias na ang mga sawimpalad ay humihingi ng pagbabago sa mga palakad ng mga prayle at ng isang pagtangkilik laban sa korporasyon. Pero, sinabi naman ni Ibarra na may utang na loob na dapat tanawin ang bayan sa mga paring pinagkakautangan ng pananalig at pagtangkilik noon laban sa mga pandarahas ng mga may-kapangyarihan.

Lumitaw sa pagpapalitan ng kuro-kuro ng dalawa na kapwa nila mahal ang bayan. Pero, hindi napahinuhod ni Elias si Ibarra tungkol sa pakiusap ng mga sawimpalad. Kaya, ipinahayag niya kay Ibarra na sasabihin na lamang daw niya sa mga ito na ilipat na sa Diyos o sa kanilang mga bisig ang pagtitiwala sa kapwa tao na hindi magtatamong-pala

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f62" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 50: Ang mga Kaanak ni Elias</h1>
                        Sinaysay ni Elias ang kaniyang kasaysayan kay Ibarra upang malaman nito na siya ay kabilang din sa mga sawimpalad. May anim na pung taon na ang nakakalipas, ang kaniyang nuno ay isang tenedor de libros sa isang bahay-kalakal ng Kastila. Kasama ng kaniyang asawa at isang anak na lalaki, ito ay nanirahan sa Maynila. Isang gabi, nasunog ang isang tanggapang pinaglilingkuran niya. Isinakdal ang kaniyang nuno sa salang panununog. Palibhasa ay maralita at walang kayang ibayad sa abogado, siya ay nahatulan. Ito ay ipinaseo sa lansangan na nakagapos sa kabayo at pinapalo sa bawat panulukan ng daan. Buntis noon ang asawa, at nagtangka pa rin siyang humanap ng pagkakakitaan kahit na sa masamang paraan para lamang sa anak at asawang may sakit. Nang gumaling ang sugat ng kaniyang nuno, silang mag-anak ay namundok na lamang. Nanganak ang babae, ngunit hindi nagtagal ay namatay ito. Hindi nakayanan ng kaniyang nuno ang sapin–saping pagdurusang kanilang natanggap. Nagbigti ito. Hindi ito naipalibing ng babae. Nangamoy ang bangkay at nalaman ng mga awtoridad ang pagkamatay ng asawa. Nahatulan din siyang paluin. Pero, ito ay hindi itinuloy at ipinagpaliban sapagkat dalawang buwan siyang buntis noon. Gayunman, pagkasilang niya, ginawa ang hatol.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p63" class="paper">
                <div class="front">
                    <div id="f63" class="front-cont">
                        <div class="content">
                        Nagawang tumakas ng babae mula sa malupit na kamay ng batas. Lumipat sila sa kalapit na lalawigan. Sa paglaki ng anak na panganay, ito ay naging tulisan. Gumawa siya ng panununog at pagpatay upang maipaghiganti nila ang kaapihang natamo. Nakilala siya sa tawag na “Balat”. Ang lahat ay natakot sa kaniyang pangalan. Ang ina ay nakilala naman sa tawag na haliparot, delingkuwente, at napalo. At ang bunso, dahil ito ay mabait, tinawag na lamang anak ng ina.

Isang umaga, nakagisnan na lamang ng anak ang ina na patay na. Ito ay nakabulagta sa ilalim ng isang puno at ang isang ulo ay nakatingala sa isang bakol na nakasabit sa puno. Ang kaniyang katawan ay ibinaon samantalang ang mga paa at kamay ay ikinalat. Ang ulo naman ay siyang dinala sa kaniyang ina. Walang nalalabing paraan sa nakakabata dahil sa kalunos-lunos na pangyayaring ito kundi ang tumakas. Siya ay ipinadpad ng kapalaran sa Tayabas at namasukang obrero sa isang mayamang angkan. Madali naman siyang nakagiliwan sapagkat nagtataglay nga ito ng magandang ugali.

Siya ay masikap at nang nagkaroon ng puhunan, napaunlad niya ang kaniyang kabuhayan hanggang sa makakilala siya ng isang dalagang taga-bayan na kaniyang inibig nang tapat. Gayunman, sinasagilahan siya ng matinding pangambba na mamanhikan. Nangangamba siyang matuklasan ang tunay niyang pagkatao. 
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f63" class="back-cont">
                    <div class="content">
                    Palibhasa ay mahal niya ang babae, minsan ay nailugso nito ang puri at desidido siyang panindigan ang nagawa. Ngunit dahil sa mayaman ang ama ng babae at wala siyang kayang ipagtanggol ang sarili, siya ay nakulong sa halip na makasal sa babae.
                    Bagamat hindi nagsama ang magkasuyo, ang kanilang pagatampisaw sa dulot ng pag-ibig ay nagkaroon ng bunga. Ang babae ay nanganak ng kambal, isang babae at isang lalaki. Ang lalaki ay si Elias. Bata pa sila ay iminulat sa kanilang patay na ang kanilang ama. Naniniwala naman sila sapagkat musmos pa lamang ay namatay ang kanilang ina. Nang magkaroon ng sapat na pag-iisip, palibhasa’y may-kaya ang nuno, si Elias ay nag-aral sa mga Heswitas samantalang ang kapatid na babae ay sa Concordia. Nagmamahalan silang magkapatid at ang pag-igkas ng panahon ay hindi nila namamalayan. Namatay ang kanilang nuno kaya’t umuwi silang magkapatid upang asikasuhin ang kanilang kabuhayan.


                        </div>
                    </div>
                </div>
            </div>
            <div id="p64" class="paper">
                <div class="front">
                    <div id="f64" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 51: Mga Pagbabago</h1>
                            Sakmal ng pagkabalisa at hindi pag-imik si Linares sapagkat nakatanggap siya ng liham mula kay Doña Victorina na nagsasaad ng ganito:
<br><br><hr><br><br><i>
    Mahal kong pinsan,
    <br><br>
    Sa loob ng tatlong araw, kailangang malaman ko kung kayo ay magtutuos ng alperes at maglalaban. Kapag natapos na ang taning na ito at hindi mo pa siya nakakalaban ay ipababatid ko kay Kapitan Tiyago na ikaw ay hindi naging kalihim, hindi mo nabibiro si Canovas, at hindi ka nakakasama ni Heneral Martinez sa anumang kasayahan. Ibubunyag ko rin ang iyong lihim kay Clarita (Maria) at hindi rin kita bibigyan ng salapi. Lahat ng magustuhan mo ay ibibigay ko basta kalabanin mo lamang ang alperes. Ako ay hindi tatanggap ng anumang paumanhin o dahilan.
    <br><br>
Ang pinsan mong nagmamahal sa iyo ng buong puso,
<br><br>

VICTORINA DE LOS REYES ESPADAÑA
<br>
Sampaloc, Lunes ika-7 ng gabi

</i>
<hr>
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f64" class="back-cont">
                    <div class="content">
                    Alam ni Linares na hindi nagbibiro ang Doña. Kailangang hamunin niya ang alperes subalit sino naman kaya ang papayag na maging padrino niya, ang kura kaya o si Kapitan Tiyago? Pinagsisisihan niya ang kaniyang paghahambog at pagsisinungaling sa paghahangad lamang na makapagsamantala. Labis siyang nagpatianod sa kapritso ng doña.

Dumating si Padre Salvi at nagmano si Kapitan Tiyago. Masayang ibinalita niya ang tungkol sa sulat ng arsobispo tungkol sa pagkakaalis ng ekskomunyon kay Ibarra, kasabay ng kaniyang pagpupuring ang binata ay kalugod-lugod ngunit may kapusukan ng kaunti. Tanging ang sagabal na lamang sa pagpapatawad ay si Padre Damaso. Pero, aniya, ay hindi makatanggi kung si Maria ang kakausap sapagkat inaama niya ang pari. Narinig ni Maria ang usapan at nagtungo ito sa silid kasama si Victoria.

Sa bahaging iyon ng usapan ng pari at ni Kapitan Tiyago, pumasok si Ibarra na kasama ni Tiya Isabel. Binati niya ang kapitan at yumukod naman kay Linares. Si Padre Salvi ay buong lugod na kumamay kay Ibarra at sinabi nitong katatapos pa lamang niyang papurihan ito. Nagpapasalamat ang binata at lumapit kay SInang upang itanong kung galit ba sa kaniya si Maria. Ipinasasabi raw ni Maria, ani Sinang, na limutin na siya ng binata ngunit sinabi ni Ibarra na gusto niyang makausap ng sarilinan ang kasintahan. Di nagluwat ay umalis na rin si Ibarra.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p65" class="paper">
                <div class="front">
                    <div id="f65" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 52: Ang Baraha ng Patay at ang mga Anino</h1>
                            
Madilim ang gabi at malamig ang ihip ng hanging pumapaspas sa mga dahong tuyo at alikabok ng makipot na daang patungo sa libingan. May tatlong anino na paanas na nag-uusap sa ilalim ng pinto ng libingan. Itinanong ng isa kung nakausap na niya nang harapan si Elias. Hindi raw pero siguradong kasama ito sapagkat nailigtas na minsan ni Ibarra ang buhay nito. Tumugon ang unang anino na ito nga ay pumayag na sumama sapagkat ipapaala ni Ibarra sa Maynila ang kaniyang asawa upang ipagamot. Siya ang sasalakay sa kumbento upang makaganti siya sa kura. Binigyang-diin naman ng ikatlong anino na kasama ng lima na lulubos sila sa kuwartel upang ipakilala sa mga sibil na ang kanilang ama ay may mga anak na lalaki. Isa pa, sinabi ng alila ni Ibarra na sila ay magiging dalawampung katao na. Saglit na huminto sa pag-aasanan ang mga anino nang mabanaagan nilang may dumarating na isang aninong namamaybay sa bakod.

Pagdating sa lugar ng tatlo, nagkakilala sila. 
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f65" class="back-cont">
                    <div class="content">
                    Ipinaliwanag ng bagong dating na anino na sinusubaybayan siya kaya’t naghiwa-hiwalay na sila at tinagubilinan ang mga dinatnan ng kinabukasan na gabi nila tatanggapin ang mga sandata kasabay ng sigaw na, “Mabuhay Don Crisostomo!”. Ang tatlong anino ay nawala sa likod ng pader. Ang bagong dating naman ay naghintay sa sulok ng pintuan.
                    Nang dumating ang ikalawang anino, nagmasid ito sa kaniyang paligid. Palibhasa’y umaambon, sumilong ito sa pintuan kaya’t nagkita sila ng unang sumilong. Naisipan nilang magsugal at kung sinuman ang manalo sa kanila ay maiiwan upang makipagsugal sa mga patay. Pumasok sila sa loob ng libingan at sa ibabaw ng puntod ay umupong magkaharap ang dalawang upang magsugal. Ang mataas sa dalawa ay si Elias at ang may pilat sa mukha ay si Lucas. Nagsimula na silang magsugal sapagkat sa isang tao lamang nakikipagsugal ang mga patay. Natalo si Elias kaya umalis itong hindi kumikibo. Nilamon siya ng kadiliman.

Nang gabing iyon, may dalawang sibil ang naglalakad sa tabi ng simbahan. Pinag-uusapan nila ang tungkol sa paghuli kay Elias sapagkat sinumang makahuli rito ay hindi mapapalo sa loob ng tatlong buwan. Nakasalubong nila si Lucas at itinanong kung saan ito pupunta. Sa simbahan, ani Lucas, upang magpamisa. Pinabayaan nila sapagkat ayon sa alperes ay walang pilat si Lucas. Ilang saglit lamang, si Elias mismo ang nakasalubong ng mga sibil. Dinala siya sa liwanag upang kilalanin. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p66" class="paper">
                <div class="front">
                    <div id="f66" class="front-cont">
                        <div class="content">
                        Sinabi ni Elias na hinahabol niya ang lalaking may pilat sapagkat siyang bumugbog sa kaniyang kapatid. Ang mga sibil ay patakbong nagtungo sa simbahang pinasukan ni Lucas.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f66" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 53: Ang Mabuting Araw ay Nakikilala sa Umaga</h1>
                        Kinabukasan ng umaga, kumalat ang balita tungkol sa mga ilaw na nakita sa libingan noong nakaraang gabi. Sa paniniwala ng mga puno ng mga kapatiran ni San Francisco, may dalawampu ang nakita niyang kandila na sinindihan. Panaghoy at pahikbi namang narinig ni Ermana ang sipa kahit na malayo ang kaniyang bahay sa libingan. Sa pulpito, binigyang-diin naman ng kura sa kaniyang sermon ang tungkol sa kaluluwa sa purgatoryo.

Ang usapan ay hindi nakaligtas sa matalas na paningin nina Don Filipo at Pilosopo Tasyo na ilang araw nang nanghihina. Nasabi ng don na tinanggap ng alkalde ang kaniyang pagbibitiw sa tungkulin. Hindi naman mapakali si Tandang Tasyo sapagkat naniniwala siyang ang pagbibitiw ay hindi nararapat at napapanahon. Sa panahon ng digmaan, aniya, ang puno ay dapat na manatili sa kaniyang mga tauhan. Ayon sa pag-iisip ni Pilosopo Tasyo, nag-iba ang bayan at hindi na katulad noong may dalawampung taon na ang nakakalipas. Ang nakaraan ay nagbigay ng aralin. Namamalas na ang naging bunga ng pagdayo sa Pilipinas ng mga Europeo at ang pagdamo naman ng mga kabataan sa Europa ay nadama na rin.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p67" class="paper">
                <div class="front">
                    <div id="f67" class="front-cont">
                        <div class="content">
                            
Ang mga kabataang nakapag-aral sa Europa ay nagkaroon ng malawak na kaalaman tungkol sa kasaysayan, matematika, agham, wika, at iba pang uri ng kaalaman na maituturing na enerhiya noong una. Kaya na ng taong pangasiwaan ang malawak na daigdig na kaniyang ginagalawan at tinatahanan. Sa panitikan, nagsimula na ring lumitaw ang mga makatang nagpapahayag ng malaya at mga makaagham na pagsubok. Hindi na rin kayang sawatain ng kumbento ang paglaganap ng mga modernong kabihasnan.

Nagkaroon pa ng palitan ng katuwiran ang dalawa tungkol sa bayan, sa relihiyon, sa kahihinatnan ng bayan, ugali ng mga binata at dalaga na mga naglilingkod sa simbahan, hanggang sa tanungin ni Don Filipo si Tandang Tasyo kung hindi ba ito nangangailangan ng gamot sapagkat napansin nitong hinang-hina na siya. Pero, tinugon siya ni Tandang Tasyo na ang mga mamamatay ay hindi na nangangailangan ng gamot at sa halip, ang mga maiiwan ang mangangailangan. Ipinakiusap din niya sa don na sabihin kay Ibarra na makipagkita sa kaniya sa loob ng ilang araw sapagkat malapit na siyang yumao. Sa kabila ng karamdaman ni Tandang Tasyo, ang kapakanan ng bayan ang kaniyang inaalaala. Matibay ang kaniyang paniniwala na ang Pilipinas ay tumatahak pa rin sa karimlan. Hindi nagluwat, nagpaalam na rin si Don Filipo.


                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f67" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 54: Lahat ng Lihim ay Nabubunyag at Walang Di Nagkakamit ng Parusa</h1>
                        Orasyon. Pahangos na tumungo ang kura sa bahay ng alperes. Ang mga taong gustong humalik sa kaniyang kamay ay hindi niya pinapansin. Tuloy-tuloy na pumanhik ito ng bahay at malakas na tinawag ang alperes. Lumabas agad ang alperes kasunod ang asawang si Doña Consolacion. Bago makapagsalita ang kura, inireklamo agad ng alperes ang mga kambing ng kura na naninira sa kaniyang bakod. Sinabi naman ng pari na nanganganib ang buhay ng lahat. Katunayan, aniya, ay mayroong napipintong pag-aalsa na gagawin nang gabing iyon. Nalaman ito ng pari, aniya, sa pamamagitan ng isang babaeng nangumpisal sa kaniya na nagsabi sa kaniya na sasalakayin ang kuwartel at kumbento. Dahil dito, nagkasundo ang kura at alperes na paghandaan nila ang gagawing paglusob ng mga insurektos. Humingi ang kura ng apat na sibil na nakapaisana upang italaga sa kumbento. Sa kuwartel naman ay palihim ang pagkilos ng mga kawal upang mahuli nang buhay ang mga lulusob. Layunin nito na kanilang mapakanta ang sinumang mahuhuling buhay. 
                        </div>
                    </div>
                </div>
            </div>
            <div id="p68" class="paper">
                <div class="front">
                    <div id="f68" class="front-cont">
                        <div class="content">
                        Ika-walo ng gabi ang nakatakdang paglusob, kaya nakini-kinita ng alperes at kura ang pag-ulan ng krus at bituin sapagkat ganap silang nakahanda.
                        Sa kabilang dako, isa namang lalaki ang mabilis na tumatakbo sa daan patungo sa tirahan ni Ibarra. Mabilis na umakyat ng bahay at hinanap sa nakitang utusan ang amo nito na kaagad namang itinuro na ito ay nasa laboratoryo. Pagkakita ni Elias kay Ibarra, ipinagtapat niya kaagad ang nakatakdang paglusob at ang kaniyang mga natuklasan. Si Ibarra ang kapural at nagbayad sa mga kalahok sa paglusob. Ipinasunog ni Elias kay Ibarra ang lahat ng mga aklat at kasulatan nito sapagkat hindi maiiwasang siya ay mapasangkot at tiyak na siya ang isisigaw ng sinumang mahuhuli ng mga sibil.

Tinulungan ni Elias si Ibarra sa pagpili ng mga kasulatan. Sa mga kasulatan, nabasa niya ang tungkol kay Don Pedro Eibarramendia at tinanong niya kay Ibarra kung ano ang relasyon nito sa kaniya. Halos nayanig ang buong pagkatao ni Elias nang sabihin ni Ibarra na iyon ang kaniyang nuno na ipinaikli lamang ang apelyido. Isa pa, ito ay isang baskongado. Natagpuan na ng piloto ang lahing lumikha ng matinding kasawian sa kanilang buhay. Biglang bumunot ng balaraw si Elias at naisip niyang gamitin iyon kay Ibarra. Ngunit, saglit ang ang pagkadimlan ng kaisipan niya at bigla siyang natauhan. Binitiwan niya ang hawak na balaraw at tulirong tumingin nang tuwid kay Ibarra at saka mabilis na pumanaog ng bahay. 
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f68" class="back-cont">
                    <div class="content">
                    Nagtaka si Ibarra. Itinuloy niya ang pagsusunog sa mga mahahalagang papeles at dokumento.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p69" class="paper">
                <div class="front">
                    <div id="f69" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 55: Ang Pagkakagulo</h1>
                            Sama-samang naghahapunan sina Kapitan Tiago, Tiya Isabel, at Linares. Niyaya naman ni Maria Clara si Sinang sa harap ng pyano. Hindi mapakali si Maria Clara sa paghihintay sa pagdating ni Ibarra.


Nang sumapit ang ikawalo ng gabi, narinig na tunog na batingaw ng simbahan. Nagtayuan ang lahat sa sala at nagsimula nang magdasal sa pangunguna ni Padre Salvi. Hindi pa man natatapos ang pagdadasal ay bumukas na ang pinto at siyang pasok ni Ibarra.


Tinangka pang lapitan ni Maria Clara si Ibarra ngunit biglang nakarinig ang lahat ng malalakas na putok sa labas ng bahay.


Nagtago si Padre Salvi sa likod ng haligi ng bahay. Walang tigil sa pagdadasal si Tiya Isabel habang magkayakap sina Sinang at Maria. Nanatili namang kalmado si Ibarra sa kabila ng takot nito.
Rinig din ang sunod-sunod na kalabog mula sa mga yapak ng mga paa. Nang matapos ang putukan ay pinababa ng alperes si Padre Salvi. Ang akala ng lahat ay humihingi ito ng tulong matapos masawi sa putukan.
Madaling pinapasok ni Tiya Isabel si Maria Clara at Sinang sa kwarto. Hindi na din nakapag-usap sina Ibarra at Maria Clara dahil mabilis na itong umalis.


Nang makarating sa bahay, agad na inutos ni Ibarra sa kanyang tauhan na ihanda ang kabayong sasakyan nito.
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f69" class="back-cont">
                    <div class="content">
                    Kinuha niya ang lahat ng salapi at alahas at sinilid ito sa isang sako at isinuksok sa gabinete. Binitbit din niya ang larawan ni Maria Clara. Nagdala din siya ng dalawang rebolber at isang panaksak.


                    Paalis na siya nang may narinig na sunud-sunod na katok sa kanyang pinto. Pagbukas ay nakita niya ang tatlong gwardiya sibil na naparoon upang arestuhin siya. Di man alam ang rason sa pagkadakip ay sumama parin ng matiwasay si Ibarra.


Samantala, gulong-gulo pa din ang isip ni Elias nang malaman na lolo ni Ibarra ang pinagmulan ng pagdurusa ng kanyang angkan. Pumunta ito sa bahay ni Ibarra ngunit nalaman na kinuha sya ng gwardiya sibil.


Nagkunwari ito na umalis pero ang totoo ay umakyat ito sa bintana ng bahay kung saan niya natagpuan ang mga salapi at alahas ni Ibarra kasama ang iba pang mga dokumento. Nakita rin niya doon ang larawan ni Maria Clara maging ang rebolber at panaksak.


Isinilid ni Elias lahat ng gamit sa sako. Nang paalis na ay may parating na gwardiya sibil kaya madali nitong kinuha ang gasera at winisikan ang mga gamit ng gas. Mabilis na tumalon si Elias sa bintana at nagsimulang magliyab ang bahay ni Ibarra.
Nagpupumilit pumasok ang mga gwardiya sibil ngunit di naman pumapayag ang mga katiwala hanggang walang sinasabi ang among si Ibarra.


Natinag naman ang mga katiwala nang makitang may dalang mga baril ang mga gwardiya sibil. Mabilis na pumanhik ang mga gwardiya ngunit wala silang natagpuan sa itaas kundi ang makapal na usok hatid ng sunog.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p70" class="paper">
                <div class="front">
                    <div id="f70" class="front-cont">
                        <div class="content">
                        Patakbo silang nagbabaan nang makita ang dingding na tinutupok na ng apoy.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f70" class="back-cont">
                    <div class="content">
                        <h1> KABANATA 56: Ang mga Sabi at Kuro-kuro</h1>
                        Hanggang sa kinabukasan, sakmal pa rin ng takot ang buong bayan ng San Diego. Ni isa mang tao ay walang makitang naglalakad sa gitna ng daan. Tahimik na tahimik ang buong paligid. Pamaya-maya ay may isang batang naglakas ng loob na magbukas ng bintana at inilibot ang paningin. Dahil sa ginawa ng bata, nagsisunod ang iba at nagsibukasan ng mga bintana. Ang mga magkakapit-bahay ay nagbalitaan. Lubhang kalagim-lagim daw ang nagdaang gabi tulad noong mandambong si Balat. Sa kanilang pag-uusap, lumilitaw na si Kapitan Pablo raw ang sumalakay. Ipinapalagay naman ng iba na ang mga kuwadrilyero raw kaya dinakip si Ibarra. Ang mga lalaki ay nagpunta naman sa kuwartel at sa may tribunal. Lumitaw pa sa usapan ng mga tao na tinangka raw ni Ibarra na itanan ang kasintahang si Maria upang hindi matuloy ang pakikipag-isang dibdib niya kay Linaares. Kaya lang ay sinansala ni Kapitan Tiyago ang kanilang pagtatanan sa tulong ng mga sibil.

Samantala, nakausap ni Hermana Pute ang isang lalaking kagagaling lamang sa tribunal. Sinabi nitong nagtapat na si Bruno. Pinatunayan nito ang balita tungkol sa magkasintahang sina Ibarra at Maria. Sa ngitngit daw ni Ibarra, pati simbaha’y nais niyang paghigantihan. Mabuti na lamang at nasa bahay ni Kapitan Tiyago si Padre Salvi.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p71" class="paper">
                <div class="front">
                    <div id="f71" class="front-cont">
                        <div class="content">
                        Ang mga sibil daw ang sumunog sa bahay ng binata. May isang utusang babae naman ang nagpahayag na nakita niyang nakabitin sa ilalim ng puno ng santol si Lucas.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f71" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 57: Vae Victus! Sa Aba ng mga Manlulupig</h1>
                        
Balisa ang mga sibil na nasa kuwartel. Panay ang kanilang pagbabanta sa mga batang sumisilip sa puwang ng mga rehas upang tingnan ang mga nadakip. Naroroon ang alperes, direktorsilyo, Doña Consolacion, at ang kapitan na halatang malungkot. Bago mag-ika-siyam ay dumating ang kura at wala sa loob na naitanong niya sa alperes sina Ibarra at Don Filipo. Kasunod niya ang isang parang batang umiiyak at duguan ang salawal. Hinarap sa kura ang dalawang tanging buhay na nabihag ng mga sibil.

Tarsilo Alasigan ang tunay na pangalan ni Tarsilo. Pilit siyang tinatanong kung kaalam si Ibarra sa nasabing paglusob. Ngunit iginigiit din niyang walang kamalay-malay si Ibarra sapagkat ang ginawa ay upang ipaghiganti ang kanilang amang pinatay sa palo ng mga sibil. Dahil dito, iniutos ng alperes na dalhin si Tarsilo sa limang bangkay, ito ay umiling. Nakita niya ang kaniyang kapatid na si Bruno na tadtad ng saksak, si Pedro na asawa ni Sisa, at si Lucas na may tali pang lubid sa leeg. Dahil sa patuloy itong walang imik sa sunod-sunod na pagtatanong sa kaniya ay nagpuyos sa galit ang alperes. Iniutos nito na paluin ng yantok si Tarsilo hanggang sa magdugo ang buong katawan nito.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p72" class="paper">
                <div class="front">
                    <div id="f72" class="front-cont">
                        <div class="content">
                        Hindi makakanta si Tarsilo kaya ito ay ibinalik sa bulwagan. Nadatnan niya ang isang bilanggo ring nagpapalahaw sa iyak at tumatawag sa mga santo. Ipinasino kay Tarsilo ang dinatnan. Sinabi niyang ngayon niya lamang ito nakita. Dahil dito, muli siyang pinalo hanggang sa mabalot ng dugo ang buong katawan. Hindi nakayanan ng kura ang gayong tanawin kaya lumabas siya sa bulwagan na namumutla. Nakita ng kura ang isang dalagang parang nagbibilang ng mga naririnig sa loob ng tribunal, humahalinghing, at nananaghoy nang malakas. Ang babaeng ito ay ang kapatid na dalaga nina Bruno at Tarsilo. Samantala, nang hindi mapansin ni Tarsilo, lalong nagngitngit ang alperes. Binulungan pa siya ni Doña Consolacion na lalong pahirapan ang binata. Pero, hiningi na lamang ni Tarsilo na madaliin ang kaniyang kamatayan. Walang makuhang anumang impormasyon at hindi mapaamin si Tarsilo kaya ito ay itinumba sa isang balong nakakabaligtad ng sikmura ang tubig at amoy. Ilang beses ibinulusok ang katawan ni Tarsilo sa balon. Hindi niya natagalan ang pagpapahirap hanggang sa takasan siya ng hininga sa gayong uri ng kalupitan. Nang matiyak na patay na si Tarsilo, ang binalingan naman ay ang isa pang bilanggo.

Ang pangalan diumano ng bilanggong ito ay Andong. Loko-loko ito at kaya napapunta sa patyo ay upang magbawas sapagkat pinapakain siya ng bulok ng biyenan niya. Inaantok ang alperes sa naging sagot ng bilanggo kaya iniutos nitong ipasok siyang muli sa karsel.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f72" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 58: Ang Sinumpa</h1>
                        
Tuliro at balisa ang mga pamilya ng mga bilanggo. Sila ay pabalik-balik sa kumbento, kuwartel, at tribunal. Ngunit hindi sila makapagtamo ng lunas sa kanilang mga inilalakad. Palibhasa ay wala silang kilalang malakas at makakapitan na makakatulong upang palayain ang kanilang kamag-anak na bilanggo. May sakit ang kura at ayaw na lumabas ng kaniyang silid. Ayaw rin nitong makipag-usap sa kahit kanino. Ang alperes naman ay nagdagdag ng mga bantay upang kulahatin ang mga babaeng nagsusumamo sa kaniya. Ang kapitan naman ay lalong nawalan ng silbi.

Nakakapaso ang sikat ng araw ngunit ang mga babae ay ayaw umalis. Palakad-lakad na umiiyak ang mag-ina ni Don Filipo. Inusal-usal naman ni Kapitana Tinay ang pangalan ng kaniyang anak na si Antonio. Si Kapitana Maria naman ay pasilip-silip sa rehas upang tingnan ang kambal niyang anak. Ang biyenan ni Andong ay nandoroon din at walang gatol na ipinagsasabing kaya raw hinuli si Andong ng mga sibil ay dahil sa bago nitong salawal. May isang babae naman ang halos mangiyak-ngiyak na nagsasabing si Ibarra ang may pakana at kasalanan ng lahat. Ang guro ng paaralan ay kasama-sama rin ng mga tao. Samantalang si Nor Juan ay nakaluksa na sapagkat ipinalagay niyang wala nang kaligtasan si Ibarra.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p73" class="paper">
                <div class="front">
                    <div id="f73" class="front-cont">
                        <div class="content">
                        Mag-iikalawa na ng hapon nang dumating ang isang kariton na hila ng isang baka. Tinangka ng mga kaanak ng mga bilanggo na sirain at kalagan ang mga hayop na humihila sa kariton. Pero, pinagbawalan sila ni Kapitana Maria at sinabing kapag ginawa nila iyon, mahihirapan sa paglalakad ang kanilang kaanak na bilanggo.

Pamaya-maya ay lumabas ang may dalawampung kawal at pinaligiran ang kariton. Ang sinunod na ilabas ay ang bilanggo sa pangunguna ni Don Filipo na nakuha pang batiin nang nakangiti ang kaniyang asawang si Doray at yayakapin niya na sana ang kaniyang asawa pero hinadlangan siya ng dalawang sibil. Nang makita naman si Antonio ng inang si Kapitana Tinay ay binirahan ito ng katakot-takot na hagulgol. Si Andong ay napaiyak din nang makita ang biyenan na may pasari ng kaniyang pagkakakulong. Katulad ng kambal na anak ni Kapitana Maria, ang seminaristang si Albano ay nakagapos na mabuti. Ang huling lumabas ay si Ibarra na walang gapos ngunit nasa pagitan ng dalawang kawal. Ang namumutlang si Ibarra ay pasuyod na tiningnan ang maraming tao at naghahanap ng isang mukhang kaibigan.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f73" class="back-cont">
                    <div class="content">
                    Pagkakita kay Ibarra ng mga tao, biglang umugong ang salitaan na kung sino pa ang may sala ay siya pa itong walang tali. Dahil dito, inuttusan ni Ibarra na gapusin siya ng mga kawal ng abot-siko. Kahit na walang utos ang kanilang mga pinuno, ang mga sibil ay sumunod din sa utos ng binata. Ang alperes ay lumabas na naka-kabayo at batbat ng sandata ang katawan. Kasunod niya ay may labinlimang kawal na umaalalay sa kaniya.

Sa kalipunan ng mga bilanggo, tanging si Ibarra lamang ang walang tumatawag sa kaniyang pangalan at sa halip ay siya ang binubuntunan ng sisi at tinawag siyang duwag. Pati ang kaniyang mga nuno at magulang ay sinumpa ng mga tao hanggang siya ay tinawag na erehe na dapat mabitay. Kasunod nito ay pinagbabato na si Ibarra. Naalaala niya ang kuwento ni Elias tungkol sa babaeng nakakita ng ulong nasa bakol at nakabitin sa punongkahoy. Ang kasaysayan ng piloto ay parang biglang naglaro sa kaniyang pangitain.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p74" class="paper">
                <div class="front">
                    <div id="f74" class="front-cont">
                        <div class="content">
                            <h1>KABANATA 59: Pag-ibig sa Bayan</h1>
                            
Ang ginawang paglusob ng mga naapi o sawimpalad ay nakarating at napalathala sa mga diyaryo sa Maynila. Iba rin ang balitang nagmula sa kumbento. Iba-iba ang estilo ng mga balitang lumaganap. At ang pang-unawa sa mga ito ay batay sa talas ng isip, kuro-kuro, damdamin at paniniwala. Ang mga tauhan ng kumbento ay higit na naliligalig. Ang mga probinsya ay palihim na nagdadalawang-isip at gumagawa ng mga pagpapanayam hinggil sa nangyari. Ang ilan naman ay nagpunta sa palasyo at naghandog ng tulong sa pamahalaang nasa panganib. Nabanggit pa nga na maging ang munting heneral o generalillo daw ay napagkuro ang kahalagahan ng korporasyon. Samantala, ipinagbubunyi naman si Padre Salvi at sinabing ito ay karapat-dapat na bigyan ng isang mitra.

Sa ibang kumbento naman ay iba ang pinag-uusapan. Ang mga nag-aaral daw na mga heswita sa Ateneo ay lumalabas na nagiging pilibustero. Sa isang bahay naman sa Tondo, hindi mapakali si Kapitan Tinong dahil minsan ito ay nagpakita ng kagandahang-loob kay Ibarra, kaya panay ang sisi sa kanya ng asawang si Kapitana Tinchang. Ang kanilang dalawang anak na dalaga ay nasa isang tabi lamang at hindi umiimik.
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f574" class="back-cont">
                    <div class="content">
                    Nasabi pa ni Tinchang na kung siya ay naging lalaki lamang, disin sana ay haharap siya sa Kapitan-Heneral at ihahandog nito ang kanyang paglilingkod laban sa mga manghihimagsik.
                    Malapit nang mabanas nang husto si Tinong sa kakulitan ng asawa nang dumating ang kanilang pinsan na si Don Primitivo. Ito ay isang lalaking may edad at mahilig magsalita ng Latin. Siya ay ipinasundo ni Tinchang upang hingan ng payo sapagkat marunong itong mangatwiran. Kaagad na nag-umpisa ng pagsasalita si Tinchang pagkakita sa kaniyang pinsan. Ayon sa kanya, pinakain ni Tinong si Ibarra sa kanilang bahay at niyukuran pa niya ito nang makita sa may tulay ng Espanya sa gitna ng maraming tao at sinabing sila ay magkaibigan.

Sinabi ni Don Primitivo na dapat nagpakilala si Tinong kay Ibarra sapagkat ang mga mabubuti raw ay napaparusahan dahil sa mga masasama. Kaya’t walang ibang nalalabing paraan kundi ang gumawa ng huling habilin si Tinong. Nawalan ng malay ng di oras si Tinong dahil sa payo. Nang bumalik ang kanyang ulirat, dalawang payo ang ibinigay ni Don Primitivo. Una ay magbigay sila ng regalo sa heneral ng kahit anong alahas at idahilan na ito ay pamasko, at pangalawa ay sunuging lahat ang mga kasulatan na maaaring makapagpahamak kay Tinong, na katulad ng ginawang pagsunog ni Ibarra sa kanyang mga kasulatan. Boto silang lahat sa payo.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p75" class="paper">
                <div class="front">
                    <div id="f75" class="front-cont">
                        <div class="content">
                        Sa kabilang dako, sa isang pagtitipon sa Intramuros na dinaluhan ng mga dalaga, mga asawa at mga anak ng kawani, ang tema ng kanilang pag-uusap ay ang tungkol din sa naganap na pag-aalsa. Ayon sa isang lalaking komang ay galit na galit daw ang heneral kay Ibarra sapagkat naging napakabuti pa nito sa binata. Sinabi naman ng isang ginang na talagang walang utang na loob ang mga Indio kaya hindi dapat silang ituring na mga tunay na tao. Kahit na araw ang itatayong paaralan ay isang pakana lamang sapagkat ang tunay na layunin ni Ibarra ay gawin lamang itong kuta na gagamitin niya sa kanyang pansariling pangangailangan. Sumabad naman ang isa pang babae at ipinaliwanag na si Tinchang daw ay nagregalo ng isang singsing na puno ng brilyante sa Heneral. Napalingon ang lalaking komang at tiniyak kung totoo ang balita. Nagdahilan ang pingkok at nanaog na ng bahay.

Ilang oras pa ang nakalipas, ang ilang mag-anak sa Tondo ay tumanggap ng mga paanyaya ng pamahalaan sa pamamagitan ng mga kawal. Ang imbitasyon ay tungkol sa pagtulog ng ilang mayayaman at tanyag na tao sa Fuerza de Santiago na may bantay pa. Si Kapitan Tinong ay kasama sa mga inimbita.


                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f75" class="back-cont">
                    <div class="content">
                        <h4>KABANATA 60: Ikakasal na si Maria Clara</h4>
                        Tuwang-tuwa si Kapitan Tiyago sapagkat hindi siya nahuli o natanong man lamang. Hindi rin siya nakuryente o nabilanggo sa ilalim ng lupa. Dahil dito, siya ay nagpamisa sa Mahal na Birhen sa Antipolo, Birhen del Rosario, at sa Birhen del Carmen. Kung hindi naimbita si Kapitan Tiyago ng pamahalaan, masamang kapalaran naman ang dumapo kay Kapitan Tinong. Tulad ng karamihan siya ay inimbitahan ng pamahalaan. Di nakabuti sa kanya ang paglalakbay sa ibat-ibang tanggapan nito sapagkat siya ay may sakit, putlain, namamanas, at hindi palaimik. Hindi na rin siya bumaba ng bahay, dahil nangangamba itong baka batiin siya na isang pilibustero. Alam ni Kapitan Tiyago ang ganitong sinapit ni Tinong.

Dumating sa bahay ni Tiyago si Linares at ang mag-asawang de Espadaña na kapwa itinuring na pangkat ng maka-pamahalaan. Sinarili ni Doña Victorina ang usapan. Sinabi na kung babarilin si Ibarra, iyon ang nararapat sapagkat siya ay isang pilibustero. Bagama’t namumutla at mahina si Maria, kanyang hinarap ang mga bisita. Humantong ang usapan tungkol sa pagpapakasal nina Maria at Linares. Nagkayarian din na magpapapista si Tiyago. Sinabihan niya si Tiya Isabel na alamin kung ano ang nasa loob ni Maria tungkol sa napipinto nitong pakikipag-isang dibdib.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p76" class="paper">
                <div class="front">
                    <div id="f76" class="front-cont">
                        <div class="content">
                        Sa wari, desidido na si Kapitan Tiyago na ipakasal si Maria sapagkat nakini-kinita niyang siya’y maglalabas-masok sa palasyo sa sandaling maging manugang niya si Linares. Si Linares ang tagapayo ng Kapitan Heneral, kaya’t inaakala ni Kapitan Tiyago na siya ay kaiinggitan ng mga tao.
                        Kinabukasan, ang bulwagan ni Tiyago ay puno ng mga bisitang Kastila at Intsik. Nangunguna sa mga ito si Padre Salvi, Padre Sibyla, ilang Pransiskano at Dominikano, ang alperes na ngayon ay tinyente na at may grado ng komandante, ang mag-asawang de Espadaña, si Linares na nagpatihuli ng dating, at si Tinyente Guevarra ng mga sibil.

Ang paksa ng mga babae ay si Maria na kahit malungkot siya ay magalang na tinanggap ang mga bisita. Sinabi ng isang babae na maganda nga raw si Maria, pero ito raw ay tanga naman. Kayamanan lang daw habol ni Linares sa kaniya. Sinabi rin na marunong daw siya sa buhay sapagkat kaya siya ikakasal dahil bibitayin ang unang katipan ni Ibarra. Sa narinig ni Maria ay lalo siyang nasaktan at naghirap ang kalooban. Iniwan niya ang mga babaeng nag-uusap.

Sa pulutong ng mga lalaking nag-uusap naman, lumitaw na ang kura ay lilipat na sa Maynila samantalang hindi tiyak ng alperes kung saan ito madedestino. Ipinaliwanag ni Guevarra na hindi mabibitay si Ibarra na katulad ng mga nangyari kina Gomez, Burgos, at Zamora, at sa halip ito ay ipatatapon lamang. Binanggit din niya ang tungkol sa kaso ng binata at pagkaraan ay binati niya si Maria. 
                    </div>
                </div>
                </div>
                <div class="back">
                    <div id="f76" class="back-cont">
                    <div class="content">
                    Ito raw ay nakakatiyak ng magandang kinabukasan. Nagpaalam na ang tinyente.
                    Nagtungo sa asotea si Maria. Nakita niya ang bangkang pumasadsad sa may sadsaran ng bahay ni Kapitan Tiyago. Puno ng damo ang ibabaw ng bangka at may lulan itong dalawang lalaki. Bumaba ang isa sa lulan ng bangka at pinanhik si Maria; ito ay si Ibarra. Nakatakas siya sa tulong ni Elias. Dumaan lamang ang binata upang ipaalam ang damdamin nito at tuluyang bibigyan ng laya ang kasintahan tungkol sa kanilang kasunduan. Inilahad ni Maria ang tunay na kasaysayan at pagkatao nito. Napilitan umano itong talikuran ang kanilang pag-iibigan alang-alang sa kanyang inang namayapa at sa dalawang amang nabubuhay pa. Pero wala siyang tanging iniibig kundi si Ibarra lamang. Mahigpit na niyapos at pinupog ng halik ni Ibarra si Maria.  Pagkaraan ay lumundag muli ito sa pader at sumakay sa bangka. Nag-alis ng sumbrero si Elias at yumukod kay Maria. Sumagwang papalayo ang dalawa sa lumuluhang si Maria.
                     </div>
                    </div>
                    
                </div>
            </div>
            <div id="p77" class="paper">
                <div class="front">
                    <div id="f77" class="front-cont">
                        <div class="content">
                            <h5>KABANATA 61: Ang Barilan sa Lawa</h5>
                            Habang mabilis na sumasagwan si Elias, sinabi niya kay Ibarra na itatago niya siya sa bahay ng isang kaibigan sa Mandaluyong. Ang salapi ni Ibarra na itinago niya sa may puno ng baliti sa libingan ng ninuno nito ay kanyang ibabalik upang may magamit si Ibarra sa pagpunta nito sa ibang bansa. Nasa ibang lupain daw ang katiwasayan ni Ibarra at hindi nababagay na manirahan sa Pilipinas, dahil ang buhay niya ay hindi inilaan sa kahirapan. Inalok ni Ibarra na magsama na lang sila ni Elias, tutal pareho na sila ng kapalaran at magturingan na parang magkapatid. Pero, tumanggi si Elias.

Nang mapadaan sila sa tapat ng palasyo, napansin nilang nagkakagulo ang mga bantay. Pinadapang mabuti ni Elias si Ibarra at tinakpan ng maraming damo. Nang mapadaan sila sa tapat ng isang polvorista, sila’y pinatigil at tinanong ng bantay si Elias kung saan ito nanggaling. Ipinaliwanag ni Elias na siya’y galing ng Maynila at rarasyunan niya ng damo ang hukom at ang kura. Nakumbinsi naman ang bantay sa paliwanag ni Elias kaya ipinatuloy niya ito sa pagsasagwan at pinagbilinan na huwag magpapasakay sa bangka sapagkat katatakas pa lamang ng isang bilanggo. Kung mahuhuli raw ito ni Elias, siya ay bibigyan ng gantimpala. Inilarawan ng bantay na ang bilanggong tinutukoy ay nakalebita at mahusay magsalita ng Kastila. Nagpatuloy sa pagsasagwan si Elias at lumihis sila ng landas. Pumasok sila sa may ilog Beatang na inawit ni Balagtas upang akalaing siya ay taga-Peñafrancia.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f77" class="back-cont">
                    <div class="content">
                    Itinapon ni Elias ang mga damo sa pampang, kinuha ang isang mahabang kawayan at ilang bayong, at sumige sa pagsagwan. Nagkuwentuhan muli sina Elias at Ibarra. Nakalabas na sila sa ilog Pasig.

Nakarating sila sa may Sta. Ana. Napadaan sila sa tapat ng bahay-bakasyunan ng mga heswitas kaya hindi maiwasang manariwa sa isip ni Elias ang masasayang araw na tinamasa niya; may magulang, kapatid, magandang kinabukasan, at mamuhay nang masagana at mapayapa. Sumapit sila sa malapad na bato at nang makitang inaantok ang bantay at wala siyang kasama, pinaraan niya si Elias.

Umaga na nang sapitin nila ang lawa. Pero sa hindi kalayuan ay nabanaagan nila ang isang palwa ng mga sibil na papalapit sa kanila. Pinahiga ni Elias si Ibarra at tinakpan niya ito ng bayong. Nahalata ni Elias na hinahadlangan sila sa baybayin. Kaya sumagwan itong patungo sa may Binangonan, ngunit nagbago rin ng direksyon ang palwa at tinawag sila. Inisip ni Elias na magbalik sa bunganga ng ilog Pasig. Nakuro ni Elias na napagtatalikupan sila at wala silang kalaban-laban. Isa pa ay wala silang dala ni isa mang sandata. Mabilis na naghubad ng damit si Elias. Sinabi niya kay Ibarra na magkita na lamang sila sa noche buena sa libingan ng nuno ni Ibarra. Tumayo si Elias at tumalon sabay sikad sa bangka.

Ang atensyon ng mga sibil sa palwa at nakasakay sa bangka ay natuon kay Elias. Pinaulanan nila ng punglo ang lugar na pinagtalunan nito. 
                   </div>
                    </div>
                </div>
            </div>
            <div id="p78" class="paper">
                <div class="front">
                    <div id="f78" class="front-cont">
                        <div class="content">
                        Kapag lumilitaw si Elias pinapuputukan ito. Nang may limangpung dipa na lamang ang layo ni Elias sa may pampang, nahapo na ang humahabol sa kanya sa kasasagwan. Makalipas ang tatlong oras ay umalis na ang mga sibil sapagkat napansin nilang may bahid ng dugo sa tubig ng baybayin ng pampang.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f78" class="back-cont">
                    <div class="content">
                        <h5>KABANATA 61: Ang Habulan sa Lawa</h5>
                        Plano ni Elias na itago si Ibarra sa bahay ng kaibigan niya sa Mandaluyong.
Huhukayin niya ang mga salapi at alahas na itinago niya sa puno ng balite na nasa libingan ng mga nito upang may magamit papunta sa ibang bansa. Doon ay mamumuhay siya ng tahimik.


Nang mapadaan sa ilalim ng tulay ay may narinig silang mga tunog ng takbo ng kabayo. Umiikot na ang mga gwardiya sibil upang hanapin si Ibarra.


Inalok ni Ibarra na sumama si Elias dahil pareho naman silang ng kinahantungan. Ngunit hindi naman pumayag si Elias. Malapit na sila sa palasyo ng Kapitan Heneral at kitang nagkakagulo na ang mga gwardiya sibil.


Paikot-ikot ang mga gwardiya sa paligid dahil tiyak na alam na ng mga ito ang gagawing pagtakas ni Ibarra. Tinakpan ni Elias si Ibarra ng mga damo upang hindi ito makita. Tinanong si Elias ng isang bantay kung saan ito nanggaling.


Galing siya sa Maynila at magrarasyon siya ng damo para sa alagang kabayo ng konsehal at kura ang tugon niya. Naniwala naman ang bantay kaya pinalagpas nito si Elias. Ibinilin ng bantay na huwag magpapasakay kung mayroon mang humingi ng tulong dahil may isang bilanggo ang nakatakas.


Muling lumabas si Ibarra ng makalayo na sa paningin ng bantay. Patungo sila sa Ilog Beata. Doon ay ibinaba ni Elias ang mga sakay na damo at nagputol naman ng mga kawayan. Sinakay rin nila sa bangka ang mga bayong na nagkalat.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p79" class="paper">
                <div class="front">
                    <div id="f79" class="front-cont">
                        <div class="content">
                        Nang dumaan sa Malapad na Bato ay sinipat-sipat sila ng gwardiya. Sinabi niya na ibebenta niya sa mga Intsik ang mga kawayan at bayong na nasa bangka. Agad namang naniwala ang bantay at pinalagpas ulit si Elias.
Nakahinga nang maluwag ang dalawa dahil malayo na sila sa gwardiya ngunit meron silang napansin na lantsang paparating na parang sumusunod sa kanila. Iyon ang mga konstabularyo na mukhang ikinakasa ang kanilang mga riple at nakaasinta sa kanila.


Naghubad ng damit si Elias at biglang talon sa tubig. Balak niyang iligaw ang mga sumusunod sa kanila. Sa tuwing inilalabas ni Elias ang ulo ay nakakarinig si Ibarra ng mga putok ng baril. Habang nililito ni Elias ang mga gwardiya payapa namang inaanod ang bangkang hinihigaan ni Ibarra.


Nagpatuloy sa pagsisid at paglangoy si Elias. Makikita na ang pagod sa mukha nito. Malapit nang makarating si Elias sa pampang nang inasinta siya ng sarhento ng konstabularyo.


Maya-maya pa’y may nakitang dugo ang gwardiya ngunit wala namang nakitang bangkay.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f79" class="back-cont">
                    <div class="content">
                        <h5>KABANATA 61: Ang Pagtatapat ni Padre Damaso</h5>
                        Umaga na. Hindi pansin ni Maria ang maraming regalo na nakabunton sa itaas ng hapag. Ang mga mata niya ay nakapako lamang sa diyaryong nagbabalita tungkol sa pagkamatay o pagkalunod ni Ibarra. Pero, hindi naman binasa ni Maria ang diyaryo. Pamaya-maya ay dumating si Padre Damaso at humiling kaagad kay Maria na sirain ang kasunduan ng kanyang kasal kay Linares at pangalagaan ang kapakanan ng ama. Sinabi ni Maria na ngayong patay na si Ibarra ay walang sinumang lalaking kaniyang pakakasalan. Dalawang bagay na lamang ang mahalaga sa kanya, ang kamatayan o ang kumbento.

Napagmuni ni Padre Damaso na pinaninindigan ni Maria ang kanyang sinabi, kaya humingi ito ng tawad sa kaniya. Napahagulgol pa ito nang malakas habang binibigyan diin niya ang walang kapantay na pagtingin kay Maria. Wala siyang nagawa kundi pahintulutan na pumasok sa kumbento si Maria kaysa piliin nito ang kamatayan. Umalis si Padre Damaso na sakbibi ng lumbay. Tumingala ito sa langit at pabulong na sinabing totoo ngang may Diyos na nagpaparusa. Hiniling niya sa Diyos na siya ang parusahan at huwag ang walang malay niyang anak na nangangailangan ng kanyang pagkalinga. Ramdam na ramdam ng pari ang kasiphayuang dinaranas ni Maria.

                        </div>
                    </div>
                </div>
            </div>
            <div id="p80" class="paper">
                <div class="front">
                    <div id="f79" class="front-cont">
                        <div class="content">
                        <h5>KABANATA 63: Ang Noche Buena</h5>
                        May isang kubo na yari sa balu-baluktot na sanga ng kahoy ang nakatayo sa libis ng isang bundok. Sa dampa ay mayroong nakatirang mag-anak na Tagalog na nabubuhay dahil sa pangangaso at pangangahoy. Sa lilim ng isang puno ay mayroong isang matanda na gumagawa ng walis. Sa isang tabi naman ay mayroong isang dalaga na naglalagay ng mga itlog ng manok, gulay at dayap sa isang bilao. Sa hindi kalayuan, may isang batang lalaki at batang babae na naglalaro sa tabi ng isang payat at putlain. Ang batang nakaupo sa nakabuwal na kahoy ay si Basilio, at may sugat ito sa paa. Inaaliw siya ng dalawang batang naglalaro. Nang utusan ng matanda ang apong dalaga na ipagbili ang mga nagawang walis, sinabi niya kay Basilio na may dalawang buwan na ang nakakaraan nang ito ay kanilang matagpuang sugatan at kalingain pagkatapos. Isinalaysay naman niya ang tungkol sa buhay nilang mag-anak. Kaya, nang ito ay magpaalam na uuwi na sa kanila, siya ay pinayagan ng matanda at ipinagbaon pa niya ng pindang na usa para sa kanyang inang si Sisa.

Samantala, noche buena na, ngunit ang mga taga-San Diego ay nangangatog sa ginaw bunga ng hanging amihan na nagmumula sa hilaga. Kung ikukumpara sa mga nagdaang handaan, hindi na masayang-masaya ang mga tao.  Sa halip ay lungkot na lungkot ang buong bayan. 
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f80" class="back-cont">
                    <div class="content">
                    Wala man lamang nakasabit na mga parol sa bintana ng bahay, at kahit na sa tahanan ni Kapitan Basilio ay wala ring kasigla-sigla. Kausap ng kapitan si Don Filipo na napawalang sala sa mga bintang laban dito nang mamataan nila si Sisa na isa nang palaboy. Pero, hindi naman siya nananakit ng kapwa.
                    Ang pinsan nitong si Victoria ay si Iday. Si Sinang ay tumanggap ng liham buhat kay Maria subalit hindi niya ito binubuksan sa takot na malaman ang nilalaman.
                    Habag na habag ang magkakaibigan sa magkasintahang Maria at Ibarra. May kumalat namang balita na ang pagkakaligtas ni Kapitan Tiyago mula sa bibitayin ay utang niya kay Linares.

Nakarating na si Basilio sa kanilang tahanan. Pero, wala ang kanyang ina. Paika-ika niyang tinalunton ang landas patungo sa tapat ng bahay ng alperes. Nandoon ang ina, umaawit ng walang katuturan.
Inutusan ng babaeng nasa durungawan ang sibil na papanhikin si Sisa. Subalit nang makita ni Sisa ang tanod, kumaripas ito ng takbo at natakot.    Hinabol ni Basilio ang ina, pero binato siya ng alilang babaeng nasa daan. Nasapol sa ulo si Basilio pero hindi ito tumigil sa pagsunod sa inang tumatakbo. Nakarating sila sa may gubat.
                        </div>
                    </div>
                </div>
            </div>
            <div id="p81" class="paper">
                <div class="front">
                    <div id="f81" class="front-cont">
                        <div class="content">
                          Pumasok sa pinto ng libingan ng matandang Kastila si Sisa, kung saan ito ay nasa tabi ng punong baliti. Pilit na binubuksan ito ni Basilio. Nakita niya ang isang sanga ng baliting nakakapit sa kinaroroonan ng ina. Kaagad niya itong niyakap at pinaghahagkan hanggang sa mawalan ng ulirat.

                          Nang makita naman ni Sisa ang duguang ulo si Basilio, unti-unting nagbalik ang katinuan ng kanyang isip. Nakilala rin niya ang anak. Napatili ito nang malakas at biglang napahandusay sa ibabaw ng anak. Nawalan naman ito ng malay. Nang bumalik ang ulirat ni Basilio at makita ang ina, kumuha ito ng tubig at winisikan ito sa mukha. Dinaiti niya ang kanyang tainga sa dibdib ni Sisa. Sinakmal ng matinding pagkasindak si Basilio. Patay na ang kanyang ina. Buong higpit na niyakap niya ang malamig na bangkay ng ina at napahagulgol nang malakas at sumubsob sa ina. Nang mag-angat siya ng ulo, nakita niya ang isang taong nagmamasid sa kaniya. Tumango si Basilio nang tanungin siya ng tao kung anak siya ng namatay.

                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f81" class="back-cont">
                    <div class="content">
                        <h1>KABANATA 64: Katapusan</h1>
                        Magmula ng pumasok sa kumbento si Maria, nanirahan na si Padre Damaso sa Maynila. Hindi nagtagal ay inilipat ang padre probinsyal sa isang malayong probinsiya. Kinabukasan, siya ay nakitang bangkay sa kanyang higaan. Sa pagsusuri ng doktor, sama ng loob o bangungot ang sanhi ng kanyang ikinamatay.

Sa kabilang dako, habang hinihintay niya ang pagiging obispo, si Padre Salvi ay nanungkulan pansamantala sa kumbento ng Sta. Clara na pinasukan ni Maria Clara. Kasunod nito ay umalis na rin siya sa San Diego at nanirahan na sa Maynila.

Ilang linggo naman bago naging ganap na mongha si Maria. Si Kapitan Tiyago ay dumanas ng sapin-saping paghihirap ng damdamin, nangayayat nang husto, naging mapag-isip, at nawalan ng tiwala sa mga kainuman. Pagkagaling niya sa kumbento, sinabihan niya si Tiya Isabel na umuwi na ito sa Malabon o sa San Diego sapagkat gusto na lamang niyang mabuhay mag-isa. Ang lahat ng mga santo at santang kanyang pinipintakasi ay nalimot na niya. Ang kanyang inaatupag ngayon ay ang paglalaro ng liyempo, sabong at paghithit ng marijuana. Madalas, tuwing takip-silim ay makikita siya sa tindahan ng Intsik sa Sto. Cristo. Hindi nagtagal, napabayaan niya ang kanyang katawan at kabuhayan. Ang kanyang dating marangyang tahanan ay mayroong nakasulat sa pintuan na: Fumadero Publico de Anfion.</div>
                    </div>
                </div>
            </div>
            <div id="p82" class="paper">
                <div class="front">
                    <div id="f82" class="front-cont">
                        <div class="content">
                        Ganap na siyang nalimot ng mga tao. Wala ni isa mang nakakaalala sa kanya; siya na isang tanyag at dating iginagalang.

Nagdagdag ng mga kulot sa ulo si Doña Victorina upang mapagbuti ang pagbabalat-kayo niyang siya’y taga-Andalucia. Siya ngayon ang nangungutsero. Si Don Tiburcio ay hindi na niya pinakikilos. Nagsasalamin na ito. Hindi na rin siya natatawag bilang doktor para maggamot. Wala na rin siyang ngipin.
                        
                         </div>
                    </div>
                </div>
                <div class="back">
                    <div id="f82" class="back-cont">
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