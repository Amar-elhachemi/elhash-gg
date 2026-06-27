const navbar = document.querySelector(".navbar");
const toggle = document.querySelector(".mobile-toggle");
const mobileMenu = document.querySelector(".mobile-menu");

window.addEventListener("scroll", () => {

    if (window.scrollY > 80) {

        navbar.classList.add("navbar-small");

    } else {

        navbar.classList.remove("navbar-small");

    }

});

if (toggle && mobileMenu) {

    toggle.addEventListener("click", () => {

        mobileMenu.classList.toggle("open");

        document.body.classList.toggle("menu-open");

    });

    document.addEventListener("click", (e) => {

        if (
            !mobileMenu.contains(e.target) &&
            !toggle.contains(e.target)
        ) {

            mobileMenu.classList.remove("open");

            document.body.classList.remove("menu-open");

        }

    });

    document.addEventListener("keydown", (e) => {

        if (e.key === "Escape") {

            mobileMenu.classList.remove("open");

            document.body.classList.remove("menu-open");

        }

    });

}
document.querySelectorAll(".mobile-menu a").forEach(link => {

    link.addEventListener("click", () => {

        mobileMenu.classList.remove("open");

        document.body.classList.remove("menu-open");

    });

});