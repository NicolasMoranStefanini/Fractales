"use strict"

document.addEventListener('DOMContentLoaded', e => {
    let url = window.location.pathname;
    let array = url.split('/');
    let id = array[array.length-1];   
    const location = `api/comments/${id}`;
    getComments(location);
    document.querySelector('#comment-form').addEventListener('submit', e => {
        e.preventDefault();
        addComment(location);
    });

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
    for (let comment of comments) {
        let rating = comment.rating;
        rating = stars(rating);
        container.innerHTML += `<li class='w-100 list-group-item d-flex justify-content-between'> <div>${comment.nombre}</div> <div>${comment.comment}</div> <div>${rating}</div> </li>`
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

async function addComment(location) {

    // armo el objeto comentario
    const comment = {
        username: document.querySelector('Nicolas?').value,
        text: document.querySelector('textarea[name=comment]').value,
        rating: document.querySelector('select[name=rating]').value,
        id_product: id
    }

    try {
        const response = await fetch(location , {
            method: 'POST',
            headers: {'Content-Type': 'application/json'}, 
            body: JSON.stringify(comment)
        });

        const t = await response.json();
        app.comments.push(t);

    } catch(e) {
        console.log(e);
    }

}