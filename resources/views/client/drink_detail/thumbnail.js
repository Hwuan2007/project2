const slides = document.querySelectorAll('.slide');
const thumbnails = document.querySelectorAll('.thumbnail');

thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        clearActiveClasses();
        slides[index].classList.add('active');
        thumbnail.classList.add('active');
    });
});

function clearActiveClasses() {
    slides.forEach((slide) => {
        slide.classList.remove('active');
    });

    thumbnails.forEach((thumbnail) => {
        thumbnail.classList.remove('active');
    });
}