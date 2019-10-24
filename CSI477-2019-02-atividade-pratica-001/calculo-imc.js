function validar(campo) {
    let x = campo.value;

    if (x.length == 0 || isNaN(parseFloat(x))) {
        //Erro
        window.alert("Informe o valor corretamente!");

        campo.value = "";
        campo.focus();
        return false;
    }
    //correto
    return true;
}

function calcular() {
    let peso = document.dados.peso;
    let alt = document.dados.altura;

    if (validar(peso) && validar(alt)) {
        let res = (peso.value / (alt.value * alt.value));

        document.dados.resultado.value = res.toFixed(2);

        let p_min = (alt.value * alt.value) * 18.5;
        let p_max = (alt.value * alt.value) * 24.9;


        if (res.value < 18, 5) {
            document.dados.condição.value = "Subnutrição";
            document.dados.ideal_min.value = (p_min.toFixed(2));
            document.dados.ideal_max.value = (p_max.toFixed(2));
        } else if (res.value > 18, 5 && res.value < 24, 9) {
            document.dados.condição.value = "Peso Saudável";
            document.dados.ideal_min.value = (p_min.toFixed(2));
            document.dados.ideal_max.value = (p_max.toFixed(2));
        } else if (res.value > 25 && res.value < 29, 9) {
            document.dados.condição.value = "Sobrepeso";
            document.dados.ideal_min.value = (p_min.toFixed(2));
            document.dados.ideal_max.value = (p_max.toFixed(2));
        } else if (res.value > 30 && res.value < 34, 9) {
            document.dados.condição.value = "Obesidade grau 1";
            document.dados.ideal_min.value = (p_min.toFixed(2));
            document.dados.ideal_max.value = (p_max.toFixed(2));
        } else if (res.value > 35 && res.value < 39, 9) {
            document.dados.condição.value = "Obesidade grau 2";
            document.dados.ideal_min.value = (p_min.toFixed(2));
            document.dados.ideal_max.value = (p_max.toFixed(2));
        } else if (res.value > 40) {
            document.dados.condição.value = "Obesidade grau 3";
            document.dados.ideal_min.value = (p_min.toFixed(2));
            document.dados.ideal_max.value = (p_max.toFixed(2));
        }
    }


}