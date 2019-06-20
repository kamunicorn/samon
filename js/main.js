document.addEventListener('DOMContentLoaded', function(){
    let dotsBox = document.querySelector('.main .slider__dots'),
        dotsItems = dotsBox.querySelectorAll('.slider__dots-item'),
        // mainSlider = document.querySelector('.main__slider');
        slides = document.querySelectorAll('.main__slider .slider__item'),
        currentSlide = 0;
    
    setInterval(function(){
        let next = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
        changeSlide(currentSlide, next);
    }, 5000);

    dotsBox.addEventListener('click', function(e) {
        if (e.target.classList.contains('slider__dots-item') && !e.target.classList.contains('active')) {
            for (let i = 0; i < dotsItems.length; i++) {
                if (e.target == dotsItems[i]) {
                    changeSlide(currentSlide, i);
                    break;
                }
            }
        }
    });

    function changeSlide(current, next) {
        dotsItems[current].classList.remove('active');
        dotsItems[next].classList.add('active');

        slides[current].classList.remove('active');
        slides[next].classList.add('active');

        currentSlide = next;
    }
});