document.addEventListener('DOMContentLoaded', function(){
    let accordion = document.querySelector('.answers__accordion');

    accordion.addEventListener('click', function(e){
        if (e.target.classList.contains('answers__title')) {
            let question = e.target,
                answer = question.nextElementSibling;
            // console.log(question);
            // console.log(answer);
            question.classList.toggle('open');
            if (answer.style.height) {
                answer.style.height = null;
            } else {
                answer.style.height = answer.scrollHeight + 'px';
            }
        }
    });
});