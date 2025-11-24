//elementos del DOM
const btnAgregar = document.getElementById("btnAgregar");
const contenedorFormulario = document.getElementById("contenedorFormulario");
const formProducto = document.getElementById("formProducto");
const catalogo = document.getElementById("catalogo");
const contador = document.getElementById("contador");

//variables de control
let listaIds = [];
let totalProductos = 0;

//mostrar u ocultar el form
btnAgregar.addEventListener("click", () => {
    contenedorFormulario.classList.toggle("oculto");
});

//actualizar el contador
function actualizarContador() {
    contador.textContent = "Total de productos: " + totalProductos;
}

//gestionar el envio del form
formProducto.addEventListener("submit", function (evento) {
    evento.preventDefault();

    let id = document.getElementById("idProducto").value.trim();
    let nombre = document.getElementById("nombreProducto").value.trim();
    let descripcion = document.getElementById("descripcionProducto").value.trim();
    let precio = document.getElementById("precioProducto").value.trim();
    let imagen = document.getElementById("imagenProducto");

    // VALIDACIONES
    if (id === "" || listaIds.includes(id)) {
        alert("ID vacío o repetido.");
        return;
    }

    if (nombre === "") {
        alert("El nombre no puede estar vacío.");
        return;
    }

    if (precio <= 0) {
        alert("Precio no válido.");
        return;
    }

    if (imagen.files.length === 0) {
        alert("Debe seleccionar una imagen.");
        return;
    }

    listaIds.push(id);

    let imagenURL = URL.createObjectURL(imagen.files[0]);

    //crear tarjeta
    let tarjeta = document.createElement("div");
    tarjeta.classList.add("tarjeta");

    let img = document.createElement("img");
    img.src = imagenURL;
    img.title = nombre;
    tarjeta.appendChild(img);

    //click para ver detalles
    img.addEventListener("click", () => {
        mostrarDetalles(tarjeta, id, nombre, descripcion, precio)
    });

    //añadir al catálogo
    catalogo.appendChild(tarjeta);

    //actualizar contador
    totalProductos++;
    actualizarContador();

    //limpiar form y ocultar
    formProducto.reset();
    contenedorFormulario.classList.add("oculto");
});

//función mostrar detalles
function mostrarDetalles(tarjeta, id, nombre, descripcion, precio) {
    let divDetalles = tarjeta.querySelector(".detalles");

    if (divDetalles) {
        divDetalles.remove();
        return;
    }

    divDetalles = document.createElement("div");
    divDetalles.classList.add("detalles");
    divDetalles.innerHTML = `
        <strong>ID:</strong> ${id}<br>
        <strong>Nombre:</strong> ${nombre}<br>
        <strong>Precio:</strong> ${precio}<br>
        <strong>Descripción:</strong> ${descripcion}
    `;

    tarjeta.appendChild(divDetalles);
}