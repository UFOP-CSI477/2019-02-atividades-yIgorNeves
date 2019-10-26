function calcular() {
    let mag = document.formulario.magnitude;
    let intTime = document.formulario.intTempo;

    let res = (Math.log10(mag.value) + 3 * Math.log10(8 * intTime.value) - 2.92);

    document.formulario.resultado.value = res.toFixed(2);
    if (res < 3.5) {
        document.formulario.efeito.value = "Geralmente não sentido, mas gravado.";
    } else if (res >= 3.5 && res < 5.4) {
        document.formulario.efeito.value = "Ás vezes sentido, mas raramente causa danos.";
    } else if (res >= 5.5 && res < 6) {
        document.formulario.efeito.value = "No maximo causa pequenos danos a predios bem construidos, mas pode danificar seriamente casas mal construidas ";
    } else if (res >= 6.1 && res < 6.9) {
        document.formulario.efeito.value = "Pode ser destrutivo em areas em torno até 100km do epicentro.";
    } else if (res >= 7 && res < 7.9) {
        document.formulario.efeito.value = "Grande terremoto. Pode causar serios danos numa grande faixa.";
    } else if (res >= 8) {
        document.formulario.efeito.value = "Enorme Terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilometros.";
    }
}