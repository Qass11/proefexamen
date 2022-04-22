const trash = document.querySelector('i.trash');
const modal = document.querySelector('.modal__container');
const modalBox = document.querySelector('.modal__box');

const errorProductName = document.querySelector('.error-product-name');
const errorAantalProducten = document.querySelector('.error-aantal-producten');
const errorDiscription = document.querySelector('.error-discription');
const alleErrors = document.querySelector('.alle-errors');




function validatProductName() {
    var productName = document.querySelector('#prodcutName').value;
    if (productName.length < 3) {
        errorProductName.innerHTML = "<span>De ingevoerde waarde is tekort!</span>";
        document.querySelector('#prodcutName').style.border = '2px solid red';
        return false;
    } else if (!productName.match(/^[A-Za-z]/)) {
        errorProductName.innerHTML = "<span>Typ een zinvolle productnaam!</span>";
        document.querySelector('#prodcutName').style.border = '2px solid red';
        return false
    } else {
        document.querySelector('#prodcutName').style.border = '2px solid green';
        errorProductName.innerHTML = "<i class='fa-solid fa-circle-check true'></i>";
        return true
    }
}

function validateAantalProducten() {
    var aantalProducten = document.querySelector('#aantaalproducten').value;
    if (aantalProducten > 50) {
        errorAantalProducten.innerHTML = "<span>De ingevoerde waarde is te groot!</span>";
        document.querySelector('#aantaalproducten').style.border = '2px solid red';
        return false;
    } else if (aantalProducten == '') {
        errorAantalProducten.innerHTML = "<span>Deze veld is verplicht om in te vullen!</span>";
        document.querySelector('#aantaalproducten').style.border = '2px solid red';
        return false;
    }
    else {
        document.querySelector('#aantaalproducten').style.border = '2px solid green';
        errorAantalProducten.innerHTML = "<i class='fa-solid fa-circle-check true'></i>";
        return true;
    }
}

function validateDescription() {
    var discription = document.querySelector('#productDescription').value;

    if (discription.length < 5) {
        errorDiscription.innerHTML = "<span>De ingevoerde waarde is tekort!</span>";
        document.querySelector('#productDescription').style.border = '2px solid red';
        return false;
    } else if (discription.length = '') {
        errorDiscription.innerHTML = "<span>Deze veld is verplicht om in te vullen!</span>";
        document.querySelector('#productDescription').style.border = '2px solid red';
        return false;
    }else{
        document.querySelector('#productDescription').style.border = '2px solid green';
        errorDiscription.innerHTML = "<i class='fa-solid fa-circle-check true'></i>";
        return true;
    }
}

function validateForm(){
    if(!(validatProductName() && validateAantalProducten() && validateDescription())){
        alleErrors.innerHTML = 'Fix de errors altstublieft';
        alleErrors.style.display = 'block';
        setTimeout(function () {alleErrors.style.display = 'none'}, 3000)
        return false;
    }else{
        alleErrors.innerHTML = 'Goed zo';
        return true;
    }
}



function addHidden() {
    modal.classList.add('hidden');
}

function removeHidden() {
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





