import { elements, defaults } from "./config";
import { updateCrosshair } from "./preview";
import { toast } from "../components/toast";

elements.copyButton?.addEventListener("click", () => {

    navigator.clipboard.writeText(elements.configOutput.value);

    const original = elements.copyButton.textContent;

    toast(

    "success",

    "Crosshair Copied",

    "Ready to paste into CS2"

);
    elements.copyButton.classList.add("copied");

    setTimeout(() => {

        elements.copyButton.textContent = original;
        elements.copyButton.classList.remove("copied");

    },1500);

});

elements.resetButton?.addEventListener("click", () => {

    elements.size.value = defaults.size;
    elements.thickness.value = defaults.thickness;
    elements.gap.value = defaults.gap;
    elements.color.value = defaults.color;

    elements.centerDot.checked = defaults.dot;
    elements.outline.checked = defaults.outline;

    document
        .querySelectorAll(".player-card")
        .forEach(card=>card.classList.remove("active"));

    updateCrosshair();

});

elements.exportButton?.addEventListener("click",()=>{

    const blob = new Blob(
        [elements.configOutput.value],
        {type:"text/plain"}
    );

    const url = URL.createObjectURL(blob);

    const a = document.createElement("a");

    a.href = url;
    a.download = "elhash-crosshair.cfg";

    toast(

    "success",

    "CFG Exported",

    "Saved successfully"

);

    URL.revokeObjectURL(url);

});

elements.colorButtons.forEach(button=>{

    button.addEventListener("click",()=>{

        elements.color.value = button.dataset.color;

        updateCrosshair();
        toast(
    "warning",
    "Reset",
    "Crosshair restored"
);

    });

});
const maps = document.querySelectorAll(".map-card");
const preview = document.querySelector(".preview-screen");

preview.style.backgroundImage = "url('/images/maps/mirage.jpg')";

maps.forEach(button => {

    button.addEventListener("click", () => {

        maps.forEach(btn => btn.classList.remove("active"));

        button.classList.add("active");

        const map = button.dataset.map;

        preview.style.backgroundImage =
            `url('/images/maps/${map}.jpg')`;

    });

});

elements.colorButtons.forEach(button=>{

    button.addEventListener("click",()=>{

        elements.color.value = button.dataset.color;

        updateCrosshair();

    });

});
const fullscreenBtn = document.querySelector(".fullscreen-btn");
const previewScreen = document.getElementById("preview-screen");

fullscreenBtn?.addEventListener("click", async () => {

    if (!document.fullscreenElement) {

        await previewScreen.requestFullscreen();

        fullscreenBtn.textContent = "🡼";

    } else {

        await document.exitFullscreen();

        fullscreenBtn.textContent = "⛶";

    }

});
document.addEventListener("fullscreenchange", () => {

    if (!document.fullscreenElement) {

        fullscreenBtn.textContent = "⛶";

    }

});