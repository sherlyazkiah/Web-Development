$(document).ready(function() {
    let i = 0;
    const totalImages = 3;
    const fadeDuration = 1100;
    const delayDuration = 1100;

    $('.slider-image').hide();
    showNextImage();

    setInterval(showNextImage, 3000);

    function showNextImage() {
        i++;
        if (i > totalImages) {
            i = 1;
        }

        $('.slider-image').hide();
        $('#sliderImage' + i).fadeIn(fadeDuration).delay(delayDuration).fadeOut(fadeDuration);
    }
});
