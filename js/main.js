const imagenes = [
    "img/perro1.jpg",
    "img/gato1.jpg",
    "img/conejo.jpg",
    "img/hanters.jpg",
    "img/conejos.jpg",
    "img/perro1.jpg",
    "img/perro2.jpg",
    "img/gato3.jpg"
];

const collage = document.querySelectorAll(".collage img");

function mezclar(array) {
    return [...array].sort(() => Math.random() - 0.5);
}

function cambiarImagenes() {

    let disponibles = mezclar(imagenes);

    collage.forEach((img, index) => {

        img.style.opacity = "0";

        setTimeout(() => {
            img.src = disponibles[index];
            img.style.opacity = "1";
        }, 500);

    });
}

cambiarImagenes();

setInterval(cambiarImagenes, 4000);