const hijosMain = document.querySelectorAll(".oscuridad > *"); 
const mainInicio = document.querySelector(".oscuridad");
const headerInicio = document.querySelector("#principal header");
console.log(hijosMain);
const footerInicio = document.querySelector("#principal footer");
const bodyInicio = document.querySelector("#principal");

document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        hijosMain.forEach(hijo => {
            hijo.style.opacity = "1";
        });
        headerInicio.style.opacity = "1";
        headerInicio.style.background = "rgba(255, 255, 255, 0.07)";
        footerInicio.style.opacity = "1";
        bodyInicio.style.overflow = "auto";
        mainInicio.style.height = "auto";
    }, 5500);
})