document.addEventListener("DOMContentLoaded",()=>{

const input=document.getElementById("valorantSearch");

if(!input)return;

const cards=document.querySelectorAll(".valorant-player-card");

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