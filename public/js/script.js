const trash = document.querySelector('i.trash');
const modal = document.querySelector('.modal__container');
const modalBox = document.querySelector('.modal__box');

function addHidden(){
    modal.classList.add('hidden');
}

function removeHidden(){
    modal.classList.remove('hidden');
}

trash.addEventListener('click', () => {
        removeHidden();
})

const layer = document.querySelector('.layer');
const closeBtn = document.querySelector('.close-btn');

layer.addEventListener('click', () => {
    addHidden();
})

closeBtn.addEventListener('click', () => { 
    addHidden();
})



