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
        bodyInicio.style.overflowY = "auto";
        bodyInicio.style.overflowX = "hidden";

        mainInicio.style.height = "auto";
    }, 5500);

    $(".contenido div").hide();
    $(".contenido div").eq(0).show();
        $(".botones button").on("click", function(e){
            indice = $(this).index();
            console.log((indice));
            $(".contenido div").hide()
            mostrar();
        })
})

function mostrar(){
    $(".contenido div").eq(indice).show();
}

const sections = document.querySelectorAll('main.oscuridad > section'); // Todas las secciones
let isScrolling = false; // Control de animación
let currentSectionIndex = 0; // Índice de la sección actual

// Función personalizada para desplazamiento suave
function smoothScrollTo(targetPosition, duration) {
    const startPosition = window.scrollY;
    const distance = targetPosition - startPosition;
    const startTime = performance.now();

    function animationStep(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1); // Progresión entre 0 y 1

        // Función de aceleración/desaceleración (easeInOutQuad)
        const easeInOutQuad = progress < 0.5
            ? 2 * progress * progress
            : 1 - Math.pow(-2 * progress + 2, 2) / 2;

        window.scrollTo(0, startPosition + distance * easeInOutQuad);

        if (progress < 1) {
            requestAnimationFrame(animationStep);
        } else {
            isScrolling = false; // Permitir nuevos eventos de scroll
        }
    }

    requestAnimationFrame(animationStep);
}

// Función para desplazarse a una sección
function scrollToSection(index) {
    if (index >= 0 && index < sections.length) {
        isScrolling = true; // Bloquear scroll manual
        const targetPosition = sections[index].offsetTop; // Posición de la sección
        smoothScrollTo(targetPosition, 1000); // Duración de 1 segundo
    }
}

// Manejo del evento de scroll del usuario
document.addEventListener('wheel', (event) => {
    if (isScrolling) return;

    const delta = event.deltaY;
    if (delta > 0 && currentSectionIndex < sections.length - 1) {
        currentSectionIndex++;
        scrollToSection(currentSectionIndex);
    } else if (delta < 0 && currentSectionIndex > 0) {
        currentSectionIndex--;
        scrollToSection(currentSectionIndex);
    }
});

// Manejo del evento de teclado
document.addEventListener('keydown', (event) => {
    if (isScrolling) return;

    if (event.key === 'ArrowDown' && currentSectionIndex < sections.length - 1) {
        currentSectionIndex++;
        scrollToSection(currentSectionIndex);
    } else if (event.key === 'ArrowUp' && currentSectionIndex > 0) {
        currentSectionIndex--;
        scrollToSection(currentSectionIndex);
    }
});

