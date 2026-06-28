document.addEventListener("DOMContentLoaded", () => {

    // Sensitivity Converter
    const convertBtn = document.getElementById("convertBtn");

    if (convertBtn) {

        convertBtn.addEventListener("click", () => {

            const game = document.getElementById("game").value;
            const sensitivity = parseFloat(document.getElementById("sensitivity").value);

            let result;

            if (game === "cs2") {
                result = (sensitivity / 3.181818).toFixed(3);
            } else {
                result = (sensitivity * 3.181818).toFixed(3);
            }

            document.getElementById("result").textContent = result;

        });

    }

    // FPS Calculator
    const fpsBtn = document.getElementById("fpsBtn");

    if (fpsBtn) {

        fpsBtn.addEventListener("click", () => {

            const cpu = Number(document.getElementById("cpu").value);
            const gpu = Number(document.getElementById("gpu").value);

            const fps = (cpu * 90) + (gpu * 110);

            document.getElementById("fpsResult").textContent = fps + " FPS";

        });

    }

    // Monitor Distance
    const distanceBtn = document.getElementById("distanceBtn");

    if (distanceBtn) {

        distanceBtn.addEventListener("click", () => {

            const value = parseFloat(document.getElementById("distance").value);

            document.getElementById("distanceResult").textContent =
                (value * 0.75).toFixed(1) + "%";

        });

    }
    // Config Converter

const configBtn = document.getElementById("configBtn");

if (configBtn) {

    configBtn.addEventListener("click", () => {

        const input = document.getElementById("configInput").value;

        document.getElementById("configOutput").value =
            "// Converted Configuration\n\n" + input;

    });

}

});