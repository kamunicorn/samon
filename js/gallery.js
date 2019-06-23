document.addEventListener('DOMContentLoaded', function() {
    let galleryBox = document.querySelector('.gallery .row'),
        galleryItems = galleryBox.querySelectorAll('.gallery__item'),
        slider = document.querySelector('.gallery-slider'),
        sliderContent = slider.querySelector('.slider__content'),
        btnPrev = document.querySelector('.slider__buttons.prev'),
        btnNext = document.querySelector('.slider__buttons.next'),
        btnClose = document.querySelector('.slider__close'),
        index = 0;
    
    galleryBox.addEventListener('click', function(e) {
        console.log(e.target);
        if (e.target.classList.contains('gallery__item')) {
            slider.style.display = 'flex';
            document.body.style.overflow = 'hidden';
            index = Array.prototype.indexOf.call(galleryItems, e.target);
            changeSlide(index);
            console.log(index);
        }
    });

    btnNext.addEventListener('click', function(){
        index = (index == galleryItems.length - 1) ? 0 : index + 1;
        changeSlide(index);        
    });

    btnPrev.addEventListener('click', function(){
        index = (index == 0) ? galleryItems.length - 1 : index - 1;
        changeSlide(index);        
    });

    function changeSlide(index) {
        let newContent = document.createElement('img');
        newContent.src = galleryItems[index].querySelector('img').getAttribute('src');
        sliderContent.textContent = '';
        sliderContent.appendChild(newContent);
    }

    slider.addEventListener('click', function(e){
        if (e.target == this || e.target == btnClose) {
            slider.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});