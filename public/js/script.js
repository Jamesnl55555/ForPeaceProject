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
text.forEach(texts =>{
    texts.addEventListener('mouseenter', function(){
        sidenotes.textContent = this.getAttribute('data-note');
        textfloat.style.display = 'block';
        textfloat.textContent = this.getAttribute('data-note');
    });
    texts.addEventListener('mouseleave', function(){
        textfloat.style.display = 'none';
        textfloat.textContent = '';
    });
})
prevbtn.addEventListener("click", goPrevPage);
nextbtn.addEventListener("click", goNextPage);



let currentLocation = 1;
let numOfPapers = papers.length;
let maxLocation = numOfPapers + 1;


function upindex(){
    for (let i = 1; i <= numOfPapers; i++) {
        const page = document.querySelector(`#p${i}`);
        page.style.zIndex = numOfPapers - i + 1;
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
