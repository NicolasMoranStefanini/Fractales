document.addEventListener('DOMContentLoaded', showAdmin);

function showAdmin () {
    document.querySelector("#admin").addEventListener("click", show);
    let form = document.querySelector("#form");
    function show () {                                                      //evento de quitar y agregar formulario de administracion
        form.classList.toggle(".hide");
    }
}