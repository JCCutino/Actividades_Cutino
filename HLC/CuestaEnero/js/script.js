document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", revealOnScrollLeft);
    window.addEventListener("scroll", revealOnScrollRight);

    function revealOnScrollLeft() {
        var elements = document.querySelectorAll(".scroll-animation-left");

        for (var i = 0; i < elements.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = elements[i].getBoundingClientRect().top;
            var distance = windowHeight - elementTop;

            if (distance > 0) {
                elements[i].classList.add("active");
            }
        }
    }

    function revealOnScrollRight() {
        var elements = document.querySelectorAll(".scroll-animation-right");

        for (var i = 0; i < elements.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = elements[i].getBoundingClientRect().top;
            var distance = windowHeight - elementTop;

            if (distance > 0) {
                elements[i].classList.add("active");
            }
        }
    }

    revealOnScrollLeft();
    revealOnScrollRight();
})

function toggleSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section.classList.contains("hidden")) {
        section.classList.remove("hidden");
        section.classList.remove("active");
    } else {
        section.classList.add("hidden");
        section.classList.add("active");
    }
}
;