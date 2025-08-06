let menuVisible = false;
//Función que oculta o muestra el menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList ="";
        menuVisible = false;
    }else{
        document.getElementById("nav").classList ="responsive";
        menuVisible = true;
    }
}

function seleccionar(){
    //oculto el menu una vez que selecciono una opcion
    document.getElementById("nav").classList = "";
    menuVisible = false;
}
// //Funcion que aplica las animaciones de las habilidades
// function efectoHabilidades(){
//     var skills = document.getElementById("skills");
//     var distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;
//     if(distancia_skills >= 300){
//         let habilidades = document.getElementsByClassName("progreso");
//         habilidades[0].classList.add("python");
//         habilidades[1].classList.add("htmlcss");
//         habilidades[2].classList.add("lenguajec");
//         habilidades[3].classList.add("lenguajeensam");
//         habilidades[4].classList.add("javascript");
//         habilidades[5].classList.add("php");
//         habilidades[6].classList.add("sql");
//         habilidades[7].classList.add("comunicacion");
//         habilidades[8].classList.add("trabajoequipo");
//         habilidades[9].classList.add("adaptacion");
//         habilidades[10].classList.add("scrum");
//         habilidades[11].classList.add("resolucion");
        
//     }
// }

// function efectoHabilidades() {
//     const skills = document.getElementById("skills");
//     if (!skills) return; // Si no existe, salimos

//     const distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;

//     if (distancia_skills >= 300) {
//         const habilidades = document.getElementsByClassName("progreso");

//         const clases = [
//             "python", "htmlcss", "lenguajec", "lenguajeensam",
//             "javascript", "php", "sql", "comunicacion",
//             "trabajoequipo", "adaptacion", "scrum", "resolucion"
//         ];

//         for (let i = 0; i < clases.length; i++) {
//             if (habilidades[i]) {
//                 habilidades[i].classList.add(clases[i]);
//             }
//         }
//     }
// }

function efectoHabilidades() {
    const skills = document.getElementById("skills");
    if (!skills) return;

    const distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;

    if (distancia_skills >= 300) {
        const habilidades = document.querySelectorAll(".progreso");

        habilidades.forEach((elemento) => {
            const porcentaje = elemento.getAttribute("data-porcentaje");
            elemento.style.width = porcentaje;
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', efectoHabilidades);
});

// Funcionalidad de modales para experiencia laboral
document.addEventListener('DOMContentLoaded', function() {
    const modalButtons = document.querySelectorAll('.modal-btn');
    const modals = document.querySelectorAll('.modal');
    const closeButtons = document.querySelectorAll('.modal-close');

    // Abrir modal
    modalButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const modalId = this.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('show');
                document.body.style.overflow = 'hidden'; // Prevenir scroll
            }
        });
    });

    // Cerrar modal con botón X
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modal');
            if (modal) {
                modal.classList.remove('show');
                document.body.style.overflow = 'auto'; // Restaurar scroll
            }
        });
    });

    // Cerrar modal con tecla Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const openModal = document.querySelector('.modal.show');
            if (openModal) {
                openModal.classList.remove('show');
                document.body.style.overflow = 'auto';
            }
        }
    });
});