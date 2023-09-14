document.addEventListener("DOMContentLoaded", function () {
    if (window.location.pathname === '/') {
    const texts = [
        "Shopping here feels like receiving gifts every time. The product quality is beyond praise, and the prices are a steal.",
        "I've ordered here several times, and each time I was pleasantly surprised by the quality of the products. And the prices are truly low.",
        "I recommend this online store to everyone. The product selection, quality, and pricing are simply fantastic.",
        "I'm so grateful to this store for its affordable prices and excellent product quality.",
        "I've ordered here many times and never regretted it. The product quality is excellent, and the prices make shopping even more enjoyable.",
        "I'm absolutely delighted with the variety of this store. Every time I find something new and interesting here."
    ];

    const names = [
        "Jeremiah V.",
        "Emily Taylor",
        "Ekaterina Pavlova",
        "Laura Martinez",
        "William Davis",
        "Eilidh Stewart"
    ];

    const locations = [
        "Birmingham, Great Britain",
        "Munich, Germany",
        "Voroneg, Russia",
        "Valencia, Spain",
        "Zurich, Switzerland",
        "Edinburgh, Scotland"
    ];

    const imgPaths = [
        "/wp-content/themes/wish-theme/lib/icons/face1.png",
        "/wp-content/themes/wish-theme/lib/icons/face2.png",
        "/wp-content/themes/wish-theme/lib/icons/face3.png",
        "/wp-content/themes/wish-theme/lib/icons/face4.png",
        "/wp-content/themes/wish-theme/lib/icons/face5.png",
        "/wp-content/themes/wish-theme/lib/icons/face6.png"
    ];

    const prevButton = document.getElementById("prevSliderBann");
    const nextButton = document.getElementById("nextSliderBann");
    const textElement = document.getElementById("sliderText");
    const nameElement = document.getElementById("sliderName");
    const locationElement = document.getElementById("sliderLocation");
    const imgElement = document.querySelector(".img__slider-bannere");

    let currentSlide = 0;

    function updateSlide() {
        textElement.textContent = texts[currentSlide];
        nameElement.textContent = names[currentSlide];
        locationElement.textContent = locations[currentSlide];
        imgElement.src = imgPaths[currentSlide];
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % texts.length;
        updateSlide();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + texts.length) % texts.length;
        updateSlide();
    }

    nextButton.addEventListener("click", nextSlide);
    prevButton.addEventListener("click", prevSlide);

   
    setInterval(nextSlide, 10000);

    
    updateSlide(); }
});


jQuery(document).ready(function($) {
    var $toggleButton = $('.translate-leng-icon');
    var $translateBlock = $toggleButton.find('.translate-leng-country');
    var $select = $translateBlock.find('.goog-te-combo');

    $toggleButton.on('click', function() {
        $translateBlock.css('display', 'block');
    });

    $select.on('change', function() {
        $translateBlock.css('display', 'none');
    });
});

