import { elements } from "./config";

elements.playerSearch?.addEventListener("input",()=>{

    const value =
        elements.playerSearch.value.toLowerCase();

    elements.playerCards.forEach(card=>{

        const text =
            card.textContent.toLowerCase();

        card.style.display =
            text.includes(value)
            ? ""
            : "none";

    });

});