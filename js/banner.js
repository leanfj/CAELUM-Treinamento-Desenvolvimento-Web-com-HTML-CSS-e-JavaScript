// array para receber as imagens
var banners = ["../img/destaque-home.png", "../img/destaque-home-2.png"];
// setar o valor atual
var bannerAtual = 0;
// função para troca da imagem conforme o tempo
function trocaBanner () {
    // variável setada para 0 recebe o valor do resto da soma dela com 1
    bannerAtual = (bannerAtual + 1) % 2;
    // utilizado o querySelector para modificar o valor do seu source(src) com o valor do item da array que será definido pela variavel bannerAtual 
    document.querySelector('.destaque img').src = banners[bannerAtual];
}

setInterval(trocaBanner, 4000);