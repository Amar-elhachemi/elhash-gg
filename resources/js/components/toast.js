export function toast(type,title,message){

    const container=document.getElementById("toast-container");

    if(!container) return;

    const icons={

        success:"✅",

        warning:"⚠️",

        error:"❌"

    };

    const div=document.createElement("div");

    div.className=`toast ${type}`;

    div.innerHTML=`

        <div class="toast-icon">

            ${icons[type]}

        </div>

        <div class="toast-content">

            <div class="toast-title">

                ${title}

            </div>

            <div class="toast-message">

                ${message}

            </div>

        </div>

    `;

    container.appendChild(div);

    setTimeout(()=>{

        div.style.animation="toastOut .35s forwards";

        setTimeout(()=>{

            div.remove();

        },350);

    },2500);

}