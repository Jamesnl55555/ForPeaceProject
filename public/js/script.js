const prevbtn=document.querySelector("#prev-btn");
const nextbtn=document.querySelector("#next-btn");
const book= document.querySelector("#book");

prevbtn.addEventListener("click", goPrevPage);
nextbtn.addEventListener("click", goNextPage);

const paper1 = document.querySelector("#p1");
const paper2 = document.querySelector("#p2");
const paper3 = document.querySelector("#p3");

let currentLocation = 1;
let numOfPapers = 3
let maxLocation = numOfPapers + 1;

function openBook(){

}

function closeBook(){

}

function goNextPage(){
    if(currentLocation < maxLocation){
        switch(currentLocation){
            case 1:
                openBook();
                paper1.classList.add("flipped");
                break;
            case 2:
                paper2.classList.add("flipped");
                break;
            case 3:
                paper3.classList.add("flipped");
                closeBook();
                break;
            default:
                throw new Error("Error!");
        }
        currentLocation++;
    }
}

function goPrevPage(){

}