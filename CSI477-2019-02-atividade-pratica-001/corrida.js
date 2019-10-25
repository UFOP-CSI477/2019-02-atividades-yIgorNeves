var d = document;

function adicionaLinha(idTabela) {
    var table = document.getElementById("minhaTabela");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    cell1.innerHTML = document.getElementById("largada").value;
    cell2.innerHTML = document.getElementById("nome").value;
    cell3.innerHTML = document.getElementById("tempo").value
    return false;
}