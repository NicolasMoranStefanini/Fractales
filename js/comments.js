"use strict"

document.addEventListener('DOMContentLoaded', e => {
    let url = window.location.pathname;
    let array = url.split('/');
    let id = array[array.length-1];   
    const location = `api/comments/${id}`;
    getComments(location);
    document.querySelector('#comment-form').addEventListener('submit', e => {
        e.preventDefault();
        addComment(location,id);
    })
});

async function getComments(location) {
    try {
        const response = await fetch(location);
        const comments = await response.json();
        renderComments(comments);
    } catch(e) {
        console.log(e);
    }
}

function renderComments(comments) {
    let container = document.querySelector('#comments-list');
    container.innerHTML = '';
    //si el contenedor es de administrador, envía la clase admin para insertar el boton DELETE ((Seguridad en controller))
    let admin = container.classList.contains('admin');
    for (let comment of comments) {
        let rating = comment.rating;
        rating = stars(rating);
        if (admin){
            container.innerHTML += `<li class='w-100 list-group-item d-flex justify-content-between'> <strong class='textmuted'>
            ${comment.nombre}</strong> <div>${comment.comment}</div> <div>${rating}</div> <button class='btn btn-danger btn-sm btn' onclick='deleteComment(${comment.id})'> DELETE </button> </li>`;
        }else{
            container.innerHTML += `<li class='w-100 list-group-item d-flex justify-content-between'> <strong class='textmuted'>${comment.nombre}</strong>
            <div>${comment.comment}</div> <div>${rating}</div></li>`
        }
    }
}

function stars(rating){
    let stars;
    switch (rating){
        case '1':
            stars= '★☆☆☆☆';
            break;
        case '2':
            stars= '★★☆☆☆';
            break;
        case '3':
            stars= '★★★☆☆';
            break;
        case '4':
            stars= '★★★★☆';
            break;
        default:
            stars= '★★★★★';
            break;
    }
    return stars;
}

async function addComment(location,id) {

    // armo el objeto comentario
    const comment = {
        id_product: id,
        id_user: document.querySelector('input[name=id-user]').value,
        text: document.querySelector('textarea[name=commentText]').value,
        rating: document.querySelector('select[name=rating]').value
    }
    console.log(comment);

    try {
        await fetch(location , {
            method: 'POST',
            headers: {'Content-Type': 'application/json'}, 
            body: JSON.stringify(comment)
        });

        getComments(location);

    } catch(e) {
        console.log(e);
    }
}

 async function deleteComment(id_comment) {
    let url = window.location.pathname;
    let array = url.split('/');
    let id = array[array.length-1];   
    const location = `api/comments/${id}`;
    try {
        await fetch(`api/comments/${id_comment}` , {
            method: 'DELETE',
            headers: {'Content-Type': 'application/json'}, 
            body: JSON.stringify(id_comment)
        });
        getComments(location);
        
    } catch(e) {
        console.log(e);
    }
}