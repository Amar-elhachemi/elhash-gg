const presets = {

    s1mple: {
        size: 2,
        thickness: 1,
        gap: -3,
        color: "#00ff00",
        dot: false
    },

    donk: {
        size: 1,
        thickness: 1,
        gap: -4,
        color: "#00ff00",
        dot: false
    },

    m0NESY: {
        size: 2,
        thickness: 0.5,
        gap: -3,
        color: "#00ff00",
        dot: false
    },

    ZywOo: {
        size: 2,
        thickness: 1,
        gap: -2,
        color: "#00ff00",
        dot: false
    },

    NiKo: {
        size: 1,
        thickness: 1,
        gap: -4,
        color: "#00ff00",
        dot: false
    },

    ropz: {
        size: 2,
        thickness: 1,
        gap: -3,
        color: "#00ff00",
        dot: false
    }

};
const size = document.getElementById("size");
const thickness = document.getElementById("thickness");
const gap = document.getElementById("gap");
const color = document.getElementById("color");
const centerDot = document.getElementById("centerDot");

const topArm = document.querySelector(".top");
const bottomArm = document.querySelector(".bottom");
const leftArm = document.querySelector(".left");
const rightArm = document.querySelector(".right");

const dot = document.getElementById("center-dot");

function updateCrosshair() {

    // Update slider values
    document.getElementById("sizeValue").textContent = size.value;
    document.getElementById("thicknessValue").textContent = thickness.value;
    document.getElementById("gapValue").textContent = gap.value;

    const s = parseFloat(size.value) * 8;
    const t = parseFloat(thickness.value);
    const g = parseFloat(gap.value) * 2;
    const c = color.value;

    // Top
    topArm.style.width = `${t}px`;
    topArm.style.height = `${s}px`;
    topArm.style.left = `${-t / 2}px`;
    topArm.style.top = `${-(s + g)}px`;

    // Bottom
    bottomArm.style.width = `${t}px`;
    bottomArm.style.height = `${s}px`;
    bottomArm.style.left = `${-t / 2}px`;
    bottomArm.style.top = `${g}px`;

    // Left
    leftArm.style.width = `${s}px`;
    leftArm.style.height = `${t}px`;
    leftArm.style.left = `${-(s + g)}px`;
    leftArm.style.top = `${-t / 2}px`;

    // Right
    rightArm.style.width = `${s}px`;
    rightArm.style.height = `${t}px`;
    rightArm.style.left = `${g}px`;
    rightArm.style.top = `${-t / 2}px`;

    document.querySelectorAll(".arm").forEach((arm) => {
        arm.style.background = c;
    });

    dot.style.background = c;
    dot.style.display = centerDot.checked ? "block" : "none";

    const cfg = `cl_crosshaircolor 5;
cl_crosshairalpha 255;
cl_crosshairdot ${centerDot.checked ? 1 : 0};
cl_crosshairgap ${gap.value};
cl_crosshairsize ${size.value};
cl_crosshairthickness ${thickness.value};
cl_crosshair_drawoutline 0;
cl_crosshair_outlinethickness 1;
cl_crosshairusealpha 1;
cl_crosshair_t 0;
cl_crosshair_recoil 0;
cl_crosshairgap_useweaponvalue 0;
cl_fixedcrosshairgap 3;
cl_crosshairstyle 4;
cl_crosshair_dynamic_splitdist 3;
cl_crosshair_dynamic_splitalpha_innermod 0;
cl_crosshair_dynamic_splitalpha_outermod 1;
cl_crosshair_dynamic_maxdist_splitratio 1;`;

    document.getElementById("configOutput").value = cfg;
}

size.addEventListener("input", updateCrosshair);
thickness.addEventListener("input", updateCrosshair);
gap.addEventListener("input", updateCrosshair);
color.addEventListener("input", updateCrosshair);
centerDot.addEventListener("change", updateCrosshair);

document.getElementById("copyConfig").addEventListener("click", () => {

    navigator.clipboard.writeText(
        document.getElementById("configOutput").value
    );

    const btn = document.getElementById("copyConfig");

    btn.textContent = "✅ Copied!";

    setTimeout(() => {
        btn.textContent = "📋 Copy Crosshair";
    }, 1500);

});

updateCrosshair();

window.loadPreset = function(player) {

    const p = presets[player];

    if(!p) return;

    size.value = p.size;
    thickness.value = p.thickness;
    gap.value = p.gap;
    color.value = p.color;
    centerDot.checked = p.dot;

    updateCrosshair();

}