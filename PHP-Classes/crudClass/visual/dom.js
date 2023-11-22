function mudaForm(event) {
    event.preventDefault(); // Isso impede que o link recarregue a página
    document.getElementById('cad').style.display = "none";
    document.getElementById('edita').style.display = "block";
}

var elementos = document.querySelectorAll('.linkMudaForm');

for (var i = 0; i < elementos.length; i++) {
    elementos[i].addEventListener('click', mudaForm);
}


