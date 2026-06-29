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

if (window.playerCrosshair) {

    elements.size.value = window.playerCrosshair.size;

    elements.gap.value = window.playerCrosshair.gap;

    elements.thickness.value = window.playerCrosshair.thickness;

    elements.color.value = window.playerCrosshair.color;

    elements.centerDot.checked = window.playerCrosshair.dot;

    elements.outline.checked = window.playerCrosshair.outline;

    updateCrosshair();

}

