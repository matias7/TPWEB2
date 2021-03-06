'use strict';

document.querySelector(".js-create").addEventListener("click", crearComentario);

let admin = document.querySelector("#admin").value==1;
let templateComentarios;

window.onload = function() {
  fetch('templates/comentarios.handlebars')
  .then(response => response.text())
  .then(template => {
      templateComentarios = Handlebars.compile(template); // compila y prepara el template
      getComentarios();
  });
}

function getComentarios() {

let id = document.querySelector("#id_producto").value;

    fetch("api/comentarios/"+id)

      .then(response => response.json())

          .then(jsonComentarios => {

        mostrarComentarios(jsonComentarios);
        console.log(jsonComentarios);
    })

}

function mostrarComentarios(jsonComentarios) {
    let context = {
        comentarios: jsonComentarios,
        admin: admin
    }
    let html = templateComentarios(context);
    document.querySelector("#ComentariosDiv").innerHTML = html;
}

function crearComentario(){
  let comentario = {
    "comentario": document.querySelector(".coment").value,
    "valoracion": document.querySelector('input[name="valoracion"]:checked').value,
    "id_producto": document.querySelector("#id_producto").value,
    "id_user": document.querySelector("#id_user").value
  }

  fetch("api/comentarios/",  {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify(comentario)
              })
              .then(r => getComentarios())
              .catch(error => console.log("error"));
}

function eliminarComentario(id){
  fetch("web/api/comentarios/"+id, {
    method: "DELETE"
  }).then(r=>getComentarios());
}
