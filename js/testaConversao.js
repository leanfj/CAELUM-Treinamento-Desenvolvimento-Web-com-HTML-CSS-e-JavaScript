var formatado = numberParaReal(10.5);
var numero = realParaNumber("R$ 20,22");

console.log(formatado);
console.log(numero);

if (formatado == "R$ 10,50") {
  console.log("Conversão de moeda está funcionando");
} else {
  console.log("Conversão de moeda está bugada");
}
