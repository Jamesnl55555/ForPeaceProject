const prevbtn=document.querySelector("#prev-btn");
const nextbtn=document.querySelector("#next-btn");
const book=document.querySelector("#book");
const sidenotes=document.querySelector("#sidenotes");
const text=document.querySelectorAll(".hoverables");
const mark = document.getElementById("bm");
const papers = document.querySelectorAll(".paper");
const textfloat = document.getElementById('floatext');

document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function (event) {
        event.preventDefault();
        const answer = this.getAttribute('data-answer'); 
        document.getElementById('response').innerText = `[-_-] : ${answer}`; 
    });
});

document.addEventListener('mousemove', function(event){
    textfloat.style.left = event.pageX + 10 + 'px';
    textfloat.style.top = event.pageY + 10 + 'px';
})

prevbtn.addEventListener("click", goPrevPage);
nextbtn.addEventListener("click", goNextPage);



let currentLocation = 1;
let numOfPapers = papers.length;
let maxLocation = numOfPapers + 1;


function upindex(){
    for (let i = 1; i <= numOfPapers; i++) {
        const page = document.querySelector(`#p${i}`);
        if (page.classList.contains('flipped')) {
            page.style.zIndex = i;
        }
        else{
            page.style.zIndex = numOfPapers - i + 1;
        }
    }
}
upindex();

function openBook(){
    book.style.transform = "translateX(50%)";
    prevbtn.style.transform = "translateX(-220px)";
    nextbtn.style.transform = "translateX(220px)";
}

function closeBook(isAtBeginning){
    if(isAtBeginning){
        book.style.transform = "translateX(0%)";
    }
    else{
        book.style.transform = "translateX(100%)";
    }
    
    prevbtn.style.transform = "translateX(0px)";
    nextbtn.style.transform = "translateX(0px)";
}

function goNextPage(){
    if(currentLocation < maxLocation){
        const paper = document.querySelector(`#p${currentLocation}`);
        paper.classList.add("flipped");
        paper.style.zIndex = currentLocation;
        currentLocation++;
        upindex();
        if (currentLocation === maxLocation) {
            closeBook(false);
        } else {
            openBook();
        }
    }
    mark.value = currentLocation;
}

function goPrevPage(){
    if(currentLocation > 1){
        currentLocation--;
        const paper = document.querySelector(`#p${currentLocation}`);
        paper.classList.remove("flipped");
        paper.style.zIndex = numOfPapers - currentLocation + 1;
        upindex();
        if (currentLocation === 1) {
            closeBook(true);
        } else {
            openBook();
        }
    }
    mark.value =currentLocation;
}
function navigateToPage(targetPage) {
    for (let i = 1; i <= numOfPapers; i++) {
        const page = document.querySelector(`#p${i}`);
        if (i < targetPage) {
            page.classList.add('flipped');
            page.style.zIndex = i;
        } else {
            page.classList.remove('flipped');
            page.style.zIndex = numOfPapers - i + 1;
        }
    }
    currentLocation = targetPage;
    mark.value = currentLocation;
    document.querySelectorAll('.paper').forEach(page => {
        page.addEventListener('transitionend', () => {
            if (page.classList.contains('flipped')) {
                page.style.pointerEvents = 'none';
            } else {
                page.style.pointerEvents = 'auto';
          }
    });
});
    if (currentLocation === 1) {
        closeBook(true);
    } else if (currentLocation === maxLocation) {
        closeBook(false);
    } else {
        openBook();
    }
}
document.addEventListener('DOMContentLoaded', () =>{
    document.querySelectorAll('.bmlink').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const targetPage = parseInt(this.getAttribute('data-page'));
            navigateToPage(targetPage);
        });
    });
});
document.querySelector('#bmForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const val = mark.value;

    fetch('/bookmark', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify({ page: val }),
    })
        .then((response) => response.json())
        .then((data) => {
            console.log('Response from server:', data);

            if (data.success) {
                alert('Bookmark Successfully added');
                updateBM(data.bookmarks);
                mark.value = '';
                
            } else {
                alert('Failed to add bookmark.');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
});
function updateBM(bookmarks){
    const bookmarkList = document.querySelector('#bookmarkList');
    bookmarkList.innerHTML = '';

    bookmarks.forEach(bookmark => {
        const bookmarkDiv = document.createElement('div');
        const bookmarkLink = document.createElement('a');

        bookmarkLink.href = '#';
        bookmarkLink.classList.add('bmlink');
        bookmarkLink.setAttribute('data-page', bookmark.page);
        bookmarkLink.textContent = `Page: ${bookmark.page}`;

        bookmarkDiv.appendChild(bookmarkLink);
        bookmarkList.appendChild(bookmarkDiv);

        bookmarkLink.addEventListener('click', function (e) {
            e.preventDefault();
            const targetPage = parseInt(bookmark.page);
            navigateToPage(targetPage);
        });
    });

}

const WMap={
"Kundiman": "Kahulugan: tradisyonal na awiting Pilipino na nagpapahayag ng malalim na damdamin ng pag-ibig",
"Balana": "Kahulugan: sinumang tao",    
"Dais": "Kahulugan: maliit na bagay na ginagamit sa paglalaro",
"Napakakipot": "Kahulugan: makitid o masikip na daan",
"Masukal": "Kahulugan: makapal ang mga halaman o madamo",
"Sepulterero": "Kahulugan: tagapangalaga ng puntod",
"Nitso": "Kahulugan: puntod na yari sa semento o bato",
"Mangmang": "Kahulugan: taong walang alam o walang pinag-aralan",
"Dalubhasaan": "Kahulugan: paaralan o institusyon na nakatuon sa isang partikular na larangan ng pag-aaral o propesyon",
"Unos": "Kahulugan: malakas at mahanging buhos ng ulan",
"Isinuwestiyon": "Kahulugan: pagpapahayag ng isang ideya",
"Pararayos": "Kahulugan: isang uri ng proteksyon laban sa kidlat",
"Batingaw": "Kahulugan: kampana",
"Plegarya": "Kahulugan: isang tunog na nauugnay sa malalakas at magkasunod na pag-kalabit o pagtama",
"Onsa": "Kahulugan: isang unit ng timbang na ginagamit sa pagsukat ng bigat; sa ingles ay 'ounce'",
"Kuwalta": "Kahulugan: pera",
"Hidhid": "Kahulugan: makasarili o sakim",
"Sinasala": "Kahulugan: pinigilan",
"Pagpapalahaw": "Kahulugan: malakas na pag-iyak o sigaw na nagmumula sa isang tao",
"Santinakpan": "Kahulugan: kalawakan; Sa ingles ay 'universe'",
"Dampa": "Kahulugan: bahay kubo",
"Kapuspalad": "Kahulugan: masamang kapalaran o walang swerte",
"Martir": "Kahulugan: tao na nagdurusa dahil sa kanyang mga paniniwala, prinsipyo, o relihiyon",
"Tawilis": "Kahulugan: isda",
"Mabundat": "Kahulugan: pakiramdam ng sobrang kabusugan",
"Pinukulan": "Kahulugan: inilaan",
"Napatigagal": "Kahulugan: nagulat o nabigla",
"Naibulalas": "Kahulugan: pagsabog ng emosyon / eksklamasyon",
"Nagpapasan": "Kahulugan: nagdadala",
"Siniyasat": "Kahulugan: sinuri / tiningnan nang mabuti",
"Hitsa puwera": "Kahulugan: pag-aalis o pagtabi ng isang bagay o tao mula sa isang lugar o sitwasyon",
"Yantok": "Kahulugan: pabilog na sanga ng puno o mga maliliit na kahoy",
"Ipapakaon": "Kahulugan: ipakuha",
"Paglilinang": "Kahulugan: pagpapabuti, pag-aalaga, o pagpapalago ng isang bagay",
"Isangguni": "Kahulugan: iparating / ikonsulta",
"Indulhensiya plenarya": "Kahulugan: nagbibigay ng ganap na kapatawaran sa mga parusang ipinataw dahil sa kasalanan",
"Sunong": "Kahulugan: pagdadalá ng anu-mang ipinatong sa ulo",
"Bakol": "Kahulugan: malaking basket na maluwang ang bibíg",
"Kwartel": "Kahulugan: isang lugar o gusali na ginagamit ng mga sundalo o miyembro ng militar bilang pansamantalang tirahan",
"Naumid": "Kahulugan: natahimik",
"Tuliro": "Kahulugan: nalilito o nababagabag",
"Labi": "Kahulugan: natirang bahagi o katawan ng isang tao o hayop, karaniwan pagkatapos ng pagkamatay",
"Tumustos": "Kahulugan: nagbigay",
"Katesismo": "Kahulugan: isang aklat o pagtuturo na naglalaman ng mga pangunahing aral at turo ng isang relihiyon",
"Tribunal": "Kahulugan: husgado o korte",
"Urbanidad": "Kahulugan: Urbanidad = Spanish term, Ang kahulugan sa Tagalog ay magandang pag-uugali",
"Lapian": "Kahulugan: samaháng pampolitika ng mga manghahalal",
"Walang binesa": "Kahulugan: walang kabuluhan",
"Walang kawawaan": "Kahulugan: damdamin o estado ng matinding simpatya",
"Singkad": "Kahulugan: kabuuan ng sukatan o panahon",
"Ulumbayan": "Kahulugan: namumuno sa isang bayan",
"Sikdo": "Kahulugan: malakas na pintig ng puso",
"Nanlilimahid": "Kahulugan: marumi o nakakadiri",
"Sinabungkay": "Kahulugan: ilarawan ang isang kalagayan ng buhok na magulo",
"Kasiphayuan": "Kahulugan: pagkabigo o kalungkutan",
"Painot-inot": "Kahulugan: paunti-unti",
"Panhik panaog": "Kahulugan: akyat-baba",
"Alperes": "Kahulugan: ranggo sa militar; pinuno ng mga guwardiya-sibil",
"Kayumian": "Kahulugan: mahinhin / mahinahon",
"Pusikit": "Kahulugan: sobrang kapal o densidad na hindi kayang daanan ng liwanag o anumang bagay",
"Pasigan": "Kahulugan: mabuhanging pampang ng ilog",
"Sunong-sunong": "Kahulugan: pagdadala ng anumang pinapatong sa ulo",
"Pinipintuho": "Kahulugan: hinahangaan / minamahal",
"Umalimbukay": "Kahulugan: biglaang pagtaas o pag-agos ng tubig",
"Pagkapatda": "Kahulugan: pakatulala",
"Nilamutak": "Kahulugan: sinira",
"Maulinigan": "Kahulugan: hindi sinasadyang marinig",
"Tumalilis": "Kahulugan: Tumakas",
"Sarhento": "Kahulugan: ranggo sa militar o pulisya",
"Hiroglipiko": "Kahulugan: sistema ng pagsulat gamit ang mga simbolo o larawan ng Ehipto",
"Uldog": "Kahulugan: pari; kasama sa orden (member of a religious order)",
"Nakasandig": "Kahulugan: naka-depende sa isang bagay para sa suporta o lakas",
}
const conts = document.querySelectorAll('.content');
conts.forEach(cont=>{
    Object.keys(WMap).forEach(word=>{
        const regex = new RegExp(`(${word})`, 'gi');
        cont.innerHTML = cont.innerHTML.replace(
            regex,
            `<a class="hoverables" data-note="${WMap[word]}">$1</a>`
            );
    });
});
document.addEventListener('mouseover', (event) => {
    if (event.target.classList.contains('hoverables')) {
        const note = event.target.getAttribute('data-note');
        if (note) {
            sidenotes.textContent = note;
            textfloat.style.display = 'block';
            textfloat.textContent = note;
        }
    }
});

document.addEventListener('mouseout', (event) => {
    if (event.target.classList.contains('hoverables')) {
        textfloat.style.display = 'none';
        textfloat.textContent = '';
    }
});
