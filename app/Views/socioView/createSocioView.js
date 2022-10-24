document.querySelector("#selectCategoria").addEventListener("change", function () {
    document.querySelector('.infantil-Nomb').style.display = this.value == 1 ? "block" : "none";
    document.querySelector('.infantil-Doc').style.display = this.value == 1 ? "block" : "none";
    document.querySelector('.veterano').style.display = this.value == 4 ? "block" : "none";
    document.querySelector('.veteranoInv').style.display = this.value == 4 ? "block" : "none";
});
