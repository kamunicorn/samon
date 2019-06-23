document.addEventListener('DOMContentLoaded', function() {
    let galleryBox = document.querySelector('.gallery .row'),
        galleryItems = galleryBox.querySelectorAll('.gallery__item'),
        slider = document.querySelector('.gallery-slider'),
        sliderContent = slider.querySelector('.slider__content'),
        btnPrev = document.querySelector('.slider__buttons.prev'),
        btnNext = document.querySelector('.slider__buttons.next'),
        btnClose = document.querySelector('.slider__close'),
        counter = 0;
    
    galleryBox.addEventListener('click', function(e) {
        console.log(e.target);
        if (e.target.classList.contains('gallery__item')) {
            slider.style.display = 'flex';
            let oldContent = sliderContent.firstElementChild,
                newContent = document.createElement('img');
            newContent.src = e.target.querySelector('img').getAttribute('src');
            sliderContent.replaceChild(newContent, oldContent);
        }
    });

    btnNext.addEventListener('click', function(){

    });

    btnPrev.addEventListener('click', function(){
        
    });

    slider.addEventListener('click', function(e){
        if (e.target == this || e.target == btnClose) {
            slider.style.display = 'none';
        }
    });
});