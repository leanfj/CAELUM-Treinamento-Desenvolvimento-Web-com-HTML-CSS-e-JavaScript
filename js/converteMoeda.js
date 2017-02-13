function numberParaReal(numero) {
  var formatado = "R$ " + numero.toFixed(2).replace(".",",");
  return formatado;
};

function realParaNumber(texto) {
  var valor = parseFloat(texto.replace("R$ ","").replace(",", "."));
  return valor;
};

