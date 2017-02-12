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
