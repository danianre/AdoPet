document.getElementById("btn_menu").addEventListener("click", mostrar_menu);

document.getElementById("back_menu").addEventListener("click", ocultar_menu);

nav = document.getElementById("nav");
background_menu = document.getElementById("back_menu");

function mostrar_menu(){
    nav.style.right = "0px";
    background_menu.style.display = "block";
}

function ocultar_menu(){
    nav.style.right = "-250px";
    background_menu.style.display = "none";
}

let cerrar = document.querySelectorAll(".close")[0];
let abrir = document.querySelectorAll(".cta")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalC = document.querySelectorAll(".modal-unirse")[0];

abrir.addEventListener("click", function(e){
    e.preventDefault();
    modalC.style.opacity = "1";
    modalC.style.visibility = "visible";
    modal.classList.toggle("modal-close");
});


cerrar.addEventListener("click", function(){
    modal.classList.toggle("modal-close");
    modalC.style.opacity = "0";
    modalC.style.visibility = "hidden";
})


window.addEventListener("click", function(e){
    console.log(e.target)
    if(e.target == modalC){
        modal.classList.toggle("modal-close");
        modalC.style.opacity = "0";
        modalC.style.visibility = "hidden";
    }
})

//Genero
document.getElementById('genero').addEventListener('change', function() {
    var genero = this.value;
    if (genero === '1') {
        // Si se selecciona "Hombre", establece el valor a 1 o true
        document.getElementById('valor_genero').value = '1'; // Aquí colocas el ID de tu campo oculto
    } else {
        // Si se selecciona "Mujer", establece el valor a 0 o false
        document.getElementById('valor_genero').value = '0'; // Aquí colocas el ID de tu campo oculto
    }
});


//Botones del index leer mas y leer menos
const botonLeerMas = document.querySelector("input[value='Leer Más']");
const botonLeerMenos = document.querySelector("input[value='Leer Menos']");
let textoAdicional = "Te hacemos más fácil la búsqueda de distintos refugios de animales domésticos en Santa Marta";
let parrafoAgregado = null;

botonLeerMas.addEventListener("click", function () {
    const parrafoAdicional = document.createElement("p");
    parrafoAdicional.textContent = textoAdicional;
    document.querySelector(".text").appendChild(parrafoAdicional);
    parrafoAgregado = parrafoAdicional; // Guardar referencia al párrafo agregado

    botonLeerMas.style.display = "none";
    botonLeerMenos.style.display = "inline-block";
    document.querySelector(".text").appendChild(botonLeerMenos); // Mover el botón "Leer Menos" debajo del párrafo adicional
});

botonLeerMenos.addEventListener("click", function () {
    if (parrafoAgregado !== null) {
        parrafoAgregado.remove(); // Eliminar el párrafo agregado
    }

    botonLeerMenos.style.display = "none";
    botonLeerMas.style.display = "inline-block";
});

// Ocultar el botón "Leer Menos" al inicio (solo se mostrará el botón "Leer Más")
botonLeerMenos.style.display = "none";

