var select = document.querySelector("#selectCategoria");


if (select.value == 1) {
    document.querySelector('.infantil-Nomb').style.display = "block";
    document.querySelector('.infantil-Doc').style.display = "block";
    document.querySelector('.veterano').style.display = "none";
    document.querySelector('.veteranoInv').style.display = "none";
}

if (select.value == 2 || select.value == 3) {
    document.querySelector('.infantil-Nomb').style.display = "none";
    document.querySelector('.infantil-Doc').style.display = "none";
    document.querySelector('.veterano').style.display = "none";
    document.querySelector('.veteranoInv').style.display = "none";
}

if (select.value == 4) {
    document.querySelector('.infantil-Nomb').style.display = "none";
    document.querySelector('.infantil-Doc').style.display = "none";
    document.querySelector('.veterano').style.display = "block";
    document.querySelector('.veteranoInv').style.display = "block";
}


document.querySelector("#selectCategoria").addEventListener("change", function () {
    document.querySelector('.infantil-Nomb').style.display = this.value == 1 ? "block" : "none";
    document.querySelector('.infantil-Doc').style.display = this.value == 1 ? "block" : "none";
    document.querySelector('.veterano').style.display = this.value == 4 ? "block" : "none";
    document.querySelector('.veteranoInv').style.display = this.value == 4 ? "block" : "none";
});


const edadForm = document.getElementById('inputEdad');
const edadLabel = document.getElementById('edadIncorrecta');
const btnInscribirse = document.getElementById('btnInscribirse');

// (select.value == 1 && 6 <= edadForm.value && edadForm.value <= 12) || 
// (select.value == 3 && 19 <= edadForm.value && edadForm.value <= 30))
// || || 

function ctrlEdadCategoria() {
    if ((select.value == 1 && 6 <= edadForm.value && edadForm.value <= 12)
        || (select.value == 2 && 13 <= edadForm.value && edadForm.value <= 18)
        || (select.value == 3 && 19 <= edadForm.value && edadForm.value <= 30)
        || (select.value == 4 && 30 < edadForm.value)) {
        edadLabel.innerHTML = "";
        btnInscribirse.disabled = false;
    } else {
        edadLabel.innerHTML = "El valor de la edad y la categoria no coinciden";
        btnInscribirse.disabled = true;
    }
};