export const elements = {

    size: document.getElementById("size"),
    thickness: document.getElementById("thickness"),
    gap: document.getElementById("gap"),
    color: document.getElementById("color"),

    centerDot: document.getElementById("centerDot"),
    outline: document.getElementById("outline"),

    sizeValue: document.getElementById("sizeValue"),
    thicknessValue: document.getElementById("thicknessValue"),
    gapValue: document.getElementById("gapValue"),

    configOutput: document.getElementById("configOutput"),

    copyButton: document.getElementById("copyConfig"),
    exportButton: document.getElementById("exportCFG"),
    resetButton: document.getElementById("resetCrosshair"),

    preview: document.getElementById("crosshair-preview"),
    dot: document.getElementById("center-dot"),

    top: document.querySelector(".top"),
    bottom: document.querySelector(".bottom"),
    left: document.querySelector(".left"),
    right: document.querySelector(".right"),

    playerSearch: document.getElementById("playerSearch"),

    playerCards: document.querySelectorAll(".player-card"),

    colorButtons: document.querySelectorAll(".color")

};

export const defaults = {

    size:2,
    thickness:1,
    gap:-3,
    color:"#00ff00",
    dot:false,
    outline:false

};