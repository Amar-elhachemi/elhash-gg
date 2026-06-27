import { elements } from "./config";

export function updateCrosshair() {

    const size = parseFloat(elements.size.value) * 8;
    const thickness = parseFloat(elements.thickness.value);
    const gap = parseFloat(elements.gap.value) * 2;
    const color = elements.color.value;

    // Update numbers
    elements.sizeValue.textContent = elements.size.value;
    elements.thicknessValue.textContent = elements.thickness.value;
    elements.gapValue.textContent = elements.gap.value;

    // Top
    elements.top.style.width = `${thickness}px`;
    elements.top.style.height = `${size}px`;
    elements.top.style.left = `${-thickness / 2}px`;
    elements.top.style.top = `${-(size + gap)}px`;

    // Bottom
    elements.bottom.style.width = `${thickness}px`;
    elements.bottom.style.height = `${size}px`;
    elements.bottom.style.left = `${-thickness / 2}px`;
    elements.bottom.style.top = `${gap}px`;

    // Left
    elements.left.style.width = `${size}px`;
    elements.left.style.height = `${thickness}px`;
    elements.left.style.left = `${-(size + gap)}px`;
    elements.left.style.top = `${-thickness / 2}px`;

    // Right
    elements.right.style.width = `${size}px`;
    elements.right.style.height = `${thickness}px`;
    elements.right.style.left = `${gap}px`;
    elements.right.style.top = `${-thickness / 2}px`;

    document.querySelectorAll(".arm").forEach(arm => {
        arm.style.background = color;
    });

    elements.dot.style.background = color;

    elements.dot.style.display =
        elements.centerDot.checked ? "block" : "none";

    generateConfig();
}

export function generateConfig() {

    const commands = [

        "cl_crosshaircolor 5",
        "cl_crosshairalpha 255",
        `cl_crosshairdot ${elements.centerDot.checked ? 1 : 0}`,
        `cl_crosshairgap ${elements.gap.value}`,
        `cl_crosshairsize ${elements.size.value}`,
        `cl_crosshairthickness ${elements.thickness.value}`,
        `cl_crosshair_drawoutline ${elements.outline.checked ? 1 : 0}`,
        "cl_crosshair_outlinethickness 1",
        "cl_crosshairusealpha 1",
        "cl_crosshair_t 0",
        "cl_crosshairstyle 4",
        "cl_crosshair_recoil 0",
        "cl_crosshairgap_useweaponvalue 0"

    ];

    elements.configOutput.value =
    commands
        .map(command => command + ";")
        .join("\n");

}