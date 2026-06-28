document.addEventListener("DOMContentLoaded",()=>{

    const input=document.getElementById("mapSearch");

    if(!input) return;

    const cards=document.querySelectorAll(".map-card");

    input.addEventListener("input",()=>{

        const value=input.value.toLowerCase();

        cards.forEach(card=>{

            card.style.display=

                card.textContent.toLowerCase().includes(value)

                ? ""

                : "none";

        });

    });

});