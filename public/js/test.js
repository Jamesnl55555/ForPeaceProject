var score = 0
document.addEventListener('DOMContentLoaded', function () {
    const successElements = document.querySelectorAll(".success");
    const resetButton = document.querySelector('.reset');

    successElements.forEach(success => {
        success.addEventListener('click', function () {
            score++;
            const questionContainer = success.closest('.questions');

            if (questionContainer) {
                questionContainer.style.display = "none";
            }
            checkAllHidden();
        });
    });

    resetButton.addEventListener('click', resetChanges); 

    function checkAllHidden() {
        const allHidden = Array.from(document.querySelectorAll('.questions')).every(container => {
            return container.style.display === 'none';
        });

        if (allHidden) {
            alert('You scored: ' + score);
        }
    }

    function resetChanges() {
        document.querySelectorAll('.questions').forEach(container => {
            container.style.display = "block";
        score = 0;
        });
    }
});
