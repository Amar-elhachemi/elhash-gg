document.addEventListener("DOMContentLoaded", () => {

    const input = document.getElementById("playerSearch");

    if (!input) return;

    const cards = document.querySelectorAll(".pro-card");

    input.addEventListener("input", () => {

        const value = input.value.toLowerCase().trim();

        cards.forEach(card => {

            const text = card.textContent.toLowerCase();

            card.style.display = text.includes(value)
                ? ""
                : "none";

        });

    });

});