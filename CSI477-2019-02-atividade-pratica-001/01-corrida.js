var d = document;

function adicionaLinha(idTabela) {
    var table = document.getElementById("minhaTabela");
    var linha = table.insertRow(0);
    var celula1 = linha.insertCell(0);
    var celula2 = linha.insertCell(1);
    var celula3 = linha.insertCell(2);
    celula1.innerHTML = document.getElementById("largada").value;
    celula2.innerHTML = document.getElementById("nome").value;
    celula3.innerHTML = document.getElementById("tempo").value
    return false;
}