const hijosMain = document.querySelectorAll(".oscuridad > *");
const body = document.querySelector("body");
console.log(hijosMain);

document.addEventListener("DOMContentLoaded", () => {
    
    setTimeout(() => {
        hijosMain.forEach(hijo => {
            hijo.style.display = "block";
            // hijo.style.opacity = "1";
        });
        body.style.overflow = "auto";
    }, 4800);

    setTimeout(() => {
        hijosMain.forEach(hijo => {
            hijo.style.opacity = "1";
        });
    }, 5000);
})