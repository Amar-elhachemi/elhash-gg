import { elements } from "./config";
import { updateCrosshair } from "./preview";

export const presets = {

    donk: {
        size: 1,
        thickness: 1,
        gap: -4,
        color: "#00ff00",
        dot: false,
        outline: false
    },

    m0NESY: {
        size: 2,
        thickness: 0.5,
        gap: -3,
        color: "#00ff00",
        dot: false,
        outline: false
    },

    ZywOo: {
        size: 2,
        thickness: 1,
        gap: -2,
        color: "#00ff00",
        dot: false,
        outline: false
    },

    NiKo: {
        size: 1,
        thickness: 1,
        gap: -4,
        color: "#00ff00",
        dot: false,
        outline: false
    },

    ropz: {
        size: 2,
        thickness: 1,
        gap: -3,
        color: "#00ff00",
        dot: false,
        outline: false
    },

    s1mple: {
        size: 2,
        thickness: 1,
        gap: -3,
        color: "#00ff00",
        dot: false,
        outline: false
    }

};

export function loadPreset(player){

    const preset = presets[player];

    if(!preset) return;

    elements.size.value = preset.size;
    elements.thickness.value = preset.thickness;
    elements.gap.value = preset.gap;
    elements.color.value = preset.color;
    elements.centerDot.checked = preset.dot;
    elements.outline.checked = preset.outline;

    document.querySelectorAll(".player-card").forEach(card=>{
        card.classList.remove("active");
    });

    document
        .querySelector(`[data-player="${player}"]`)
        ?.classList.add("active");

    updateCrosshair();

}

window.loadPreset = loadPreset;