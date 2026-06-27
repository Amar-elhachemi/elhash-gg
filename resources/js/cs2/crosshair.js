import { elements } from "./config";
import { updateCrosshair } from "./preview";

import "./presets";
import "./actions";
import "./search";

[
    elements.size,
    elements.thickness,
    elements.gap,
    elements.color
].forEach(input => {
    input?.addEventListener("input", updateCrosshair);
});

[
    elements.centerDot,
    elements.outline
].forEach(input => {
    input?.addEventListener("change", updateCrosshair);
});

elements.playerCards.forEach(card => {
    card.addEventListener("click", () => {
        const player = card.dataset.player;

        if (window.loadPreset) {
            window.loadPreset(player);
        }
    });
});

updateCrosshair();