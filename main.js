let from = document.querySelector("#from1")
let cajamensaje = document.querySelector(".solucion")

let solucion = async()=>{
    let config = {
        method : from.method,
        body: JSON.stringify({
            cadena : document.querySelector("#mensaje").value,
        })
    };
    let peticion = await fetch(from.action, config);
    let data = await peticion.json();
    cajamensaje.insertAdjacentHTML("beforeend", `<div>${data.respuesta}</div>`);
}
from.addEventListener("submit", (e)=>{
    switch (e.submitter.dataset.accion) {
        case "enviar":
            solucion();
            break;
        case "limpiar":
            cajamensaje.innerHTML = "";
            from.reset();
            break;
        default:
            cajamensaje.insertAdjacentHTML("beforeend", `<div>El data-accion='${e.submitter.dataset.accion}' no esta configurado</div>`)
            break;
    }
    e.preventDefault();
})
