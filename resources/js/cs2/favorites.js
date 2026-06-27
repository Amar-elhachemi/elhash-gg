document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".favorite-btn").forEach(button => {

        button.addEventListener("click", () => {

            button.classList.toggle("active");

        });

    });

});