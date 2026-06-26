document.addEventListener("DOMContentLoaded", () => {

    const glow = document.createElement("div");

    glow.className = "mouse-glow";

    document.body.appendChild(glow);

    window.addEventListener("mousemove", (e) => {

        glow.style.left = e.clientX + "px";
        glow.style.top = e.clientY + "px";

    });

});