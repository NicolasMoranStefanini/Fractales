document.addEventListener('DOMContentLoaded', showAdmin);

function showAdmin () {
    document.querySelector("#admin").addEventListener("click", show);
    let form = document.querySelector("#form");
    function show () {                                                      //evento de quitar y agregar formulario de administracion
        console.log("Boton");
        form.classList.toggle("hide");
    }
}