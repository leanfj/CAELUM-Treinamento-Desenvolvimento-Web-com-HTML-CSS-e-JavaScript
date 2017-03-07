//Implementação de banner rotativo 11.18 - Exercício opcional: banner rotativo

// array para receber as imagens
var banners = ["../img/destaque-home.png", "../img/destaque-home-2.png"];
// setar o valor atual
var bannerAtual = 0;
// função para troca da imagem conforme o tempo
function trocaBanner () {
    // variável setada para 0 recebe o valor do resto da soma dela com 1
    bannerAtual = (bannerAtual + 1) % 2;
    // utilizado o querySelector para modificar o valor do seu source(src) com o valor do item da array que será definido pela variavel bannerAtual 
    // document.querySelector('.destaque img').src = banners[bannerAtual];
    // 12.12 - Exercícios opcionais - implementação usando jquery
    $('.destaque img').attr("src", banners[bannerAtual]);
}

//Implementação de botão de pause
//coloca dentro da variável timer a função setInterval
var timer = setInterval(trocaBanner, 3000);
//cria variável de controle para selecionar o botão dentro do DOM
var controle = document.querySelector('.pause');

//Modificado o acesso evento click do elemento selecionado


controle.addEventListener('click', function () {
    //cria a condição de pausa e play verificando o valor da propriedade do seletor de classe. Modifica o valor da propriedade para validar a condição.
    if (controle.className == 'pause') {
        clearInterval(timer);
        controle.className = 'play';
    }else {
        timer = setInterval(trocaBanner, 4000);
        controle.className = 'pause';
    }
    return false;
});

//configuração de botão mostrar mais 12.7 - Exercícios: jQuery na home
//Inclusão de classe css no elemento selecionado pelas classes novidade e mai-vendidos
$('.novidades, .mais-vendidos').addClass('painel-compacto');
//Função de click no button para remover classe
$('.novidades button').click(function () {
    $('.novidades').removeClass('painel-compacto');
});
$('.mais-vendidos button').click(function () {
    $('.mais-vendidos').removeClass('painel-compacto');
});