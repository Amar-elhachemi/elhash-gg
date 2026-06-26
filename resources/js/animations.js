document.addEventListener("DOMContentLoaded", () => {

    const elements = document.querySelectorAll(
        ".card, .section-title, .hero-tags span"
    );

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add("show");

            }

        });

    }, {

        threshold: .15

    });

    elements.forEach(el => {

        el.classList.add("hidden");

        observer.observe(el);

    });

});
