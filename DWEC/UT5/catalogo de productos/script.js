//elementos del DOM
const btnAgregar = document.getElementById("btnAgregar");
const contenedorFormulario = document.getElementById("contenedorFormulario");
const formProducto = document.getElementById("formProducto");
const catalogo = document.getElementById("catalogo");
const contador = document.getElementById("contador");

//variables de control
let listaIds = []; //ids usados
let totalProductos = 0; //numTotal de productos

//mostrar u ocultar el form
btnAgregar.addEventListener("click", () => {
    contenedorFormulario.classList.toggle("oculto");
});

//actualizar el contador
function actualizarContador() {
    actualizarContador.textContent = "Total de productos: " + totalProductos;
}

//gestionar el envio del form
formProducto.addEventListener("submit", function (evento) {
    evento.preventDefault(); //para que el form no recargue la pagina
})

//recoger valores del usuario con trim para que quita los espacios
let id = document.getElementById("idProducto").value.trim();
let nombre = document.getElementById("nombreProducto").value.trim();
let descripcion = document.getElementById("descripcionProducto").value.trim();
let precio = document.getElementById("precioProducto").value.trim();
let imagen = document.getElementById("imagenProducto");

//VALIDACIONES

//id no vacío y que no esté en la lista de IDs
if (id === "" || listaIds.includes(id)) {
    alert("ID vacío o repetido.");
    return;
}

//nombre no vacío
if (nombre === "") {
    alert("El nombre no puede estar vacío.");
    return;
}

//precio mayor que 0
if (precio <= 0) {
    alert("Precio no válido.");
    return;
}

//imagen seleccionada
if (imagenEntrada.files.length === 0) {
    alert("Debe seleccionar una imagen.");
    return;
}