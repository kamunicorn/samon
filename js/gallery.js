document.addEventListener('DOMContentLoaded', function() {
    let photoBox = document.querySelector('.gallery .row');
    console.log(photoBox);

    photoBox.addEventListener('click', function(e) {
        console.log(e.target);
        if (e.target.classList.contains('gallery__item')) {
            
        }
    });
});