//1) Escreva um código que mostre os números ímpares entre 1 e 10.
for (var i = 1; i < 10; i++) {
  // for cria um loop que consiste em três expressões opcionais seguidas por uma declaração ou uma sequência de declarações executadas em sequência. for ([inicialização]; [condição]; [expressão final])
  //i++ incrmento Adciona um ao seu operando
  if (i % 2 !== 0) {
  //A condicional if  é uma estrutura condicional que executa a afirmação, dentro do bloco, se determinada condição for verdadeira.
  // (% retorna o resto da operação) e !== (dieferente de)
  // Nesta caso será SE o resto da variável for diferente de 0 execute.
    console.log(i);
  // CONSOLE.LOG mostra no console o valor da variável I
  };
};
//2) Escreva um código que calcule a soma de 1 até 100. (obs: a resposta é 5050)
soma = 0;
  //Atribuido o valor de 0 a variável soma
for (var i = 1; i < 101; i++) {
  soma += i; //Atribuição de adição (soma = soma + i)
};
console.log(soma);
