const text = document.querySelector(".ftext")
const textf = document.querySelector(".tfloat")

text.addEventListener('mouseenter', function(){
    textf.style.display = 'block';
    textf.textContent = text.getAttribute('data-answer');
})

text.addEventListener('mouseleave', function(){
    textf.style.display = 'none';
    textf.textContent = '';
});

document.addEventListener('mousemove', function(event){
    textf.style.left = event.pageX + 10 + 'px';
    textf.style.top = event.pageY + 10 + 'px';
})