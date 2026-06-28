const color=document.getElementById("color");
const thickness=document.getElementById("thickness");
const length=document.getElementById("length");
const gap=document.getElementById("gap");
const dot=document.getElementById("dot");

const preview=document.querySelector(".crosshair");
const code=document.getElementById("crosshairCode");

function update(){

    preview.style.setProperty("--color",color.value);
    preview.style.setProperty("--thickness",thickness.value+"px");
    preview.style.setProperty("--length",length.value+"px");
    preview.style.setProperty("--gap",gap.value+"px");

    preview.classList.toggle("show-dot",dot.checked);

    code.value=`Color:${color.value}
Thickness:${thickness.value}
Length:${length.value}
Gap:${gap.value}
Dot:${dot.checked}`;
}

[color,thickness,length,gap].forEach(e=>e.addEventListener("input",update));

dot.addEventListener("change",update);

document.getElementById("copyCode").onclick=()=>{

    navigator.clipboard.writeText(code.value);

};

update();