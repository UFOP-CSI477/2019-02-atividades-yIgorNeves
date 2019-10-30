function checar() {
    if (document.getElementById('sabonete').checked && document.getElementById('algodao').checked && document.getElementById('maquina').checked) {
        window.alert("Voce marcou todas as opções certas!");
    } else if (document.getElementById('sabonete').checked || document.getElementById('algodao').checked || document.getElementById('maquina').checked) {
        window.alert("Voce marcou todas as opções certas!");
    }
}