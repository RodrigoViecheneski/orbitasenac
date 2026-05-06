function subirTela() {
    //window.scrollTo(0,0);
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
}
function decidirBotaoScroll(){
    if(window.scrollY === 0){
      //ocultar o botão  
      document.querySelector('.scrollbutton').style.display = 'none';
    }else{
        //mostrar o botão
        document.querySelector('.scrollbutton').style.display = 'block';
    }
}
//setInterval(decidirBotaoScroll, 1000); problema consumo de processamento solução abaixo

window.addEventListener('scroll', decidirBotaoScroll);