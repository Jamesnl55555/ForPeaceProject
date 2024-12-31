
document.addEventListener('DOMContentLoaded', function () {
    const successElements = document.querySelectorAll(".success");
    const failElements = document.querySelectorAll(".wrong");
    const resetButton = document.querySelector('.reset');
    const button = document.querySelector('.Hidden');
    let input = document.getElementById('int');
    var score = 0;

    successElements.forEach(success => {
        success.addEventListener('click', function () {
            score++;
            const questionContainer = success.closest('.questions');
            input.value =score;
            if (questionContainer) {
                questionContainer.style.display = "none";
            }
            checkAllHidden();
        });
    });
    failElements.forEach(fail => {
        fail.addEventListener('click', function () {
            const questionContainer = fail.closest('.questions');
            questionContainer.style.display = "none";
            checkAllHidden();
        });
    });

    resetButton.addEventListener('click', resetChanges); 
    
    window.check = function(questionId, correctAns){
        const questionContainer = document.getElementById(`container-${questionId}`);
        const answer = document.getElementById(`Answer-${questionId}`).value;
        if(answer.toLowerCase() === correctAns.toLowerCase()){
            alert("Correct");
            score++;
            input.value = score;     
            questionContainer.style.display = "none";
            checkAllHidden();
        }
        else {
            alert("Incorrect! The correct answer is: " + correctAns);
            questionContainer.style.display = "none";
            checkAllHidden();
        }
    }

    function checkAllHidden() {
        
        const allHidden = Array.from(document.querySelectorAll('.questions')).every(container => {
            return container.style.display === 'none';
        });

        if (allHidden) {
            alert('You scored: ' + score);
            button.style.display ="block"
        }
        else{
            button.style.display ="none"
        }
    }

    function resetChanges() {
        document.querySelectorAll('.questions').forEach(container => {
            container.style.display = "block";
        score = 0;
        input.value =score;
        button.style.display ="none";
        });
    }
});
