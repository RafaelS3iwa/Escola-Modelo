//Script da tela Métodos

//Mostra o Lexical
document.querySelector("#btnLexical").addEventListener("click", () => {

    if(document.querySelector("#lexical").classList.contains("show")){
        
        setTimeout(() =>{
            document.querySelector("#lexical").classList.remove("show");
        }, 1000);

        document.querySelector("#lexical").style.animationName = "hide";
        setTimeout(() =>{
            document.querySelector("#lexical").classList.add("hide");
        }, 1000);

    }
    else if(document.querySelector("#comunicativo").classList.contains("show")){
        setTimeout(() =>{
            document.querySelector("#comunicativo").classList.remove("show");
        }, 1000);

        document.querySelector("#comunicativo").style.animationName = "hide";
        setTimeout(() =>{
            document.querySelector("#comunicativo").classList.add("hide");
        }, 100);


        document.querySelector("#lexical").style.animationName = "show";
        setTimeout(() =>{
            document.querySelector("#lexical").classList.add("show");
        }, 1000);
    }
    else{
        document.querySelector("#lexical").style.animationName = "show";
        setTimeout(() =>{
            document.querySelector("#lexical").classList.add("show");
        }, 500);
    }
});

//Mostra o comunicativo
document.querySelector("#btnComunicativo").addEventListener("click", () => {

    if(document.querySelector("#comunicativo").classList.contains("show")){
        setTimeout(() =>{
            document.querySelector("#comunicativo").classList.remove("show");
        }, 1000);

        document.querySelector("#comunicativo").style.animationName = "hide";
        setTimeout(() =>{
            document.querySelector("#comunicativo").classList.add("hide");
        }, 1000);

    }
    else if(document.querySelector("#lexical").classList.contains("show")){
        setTimeout(() =>{
            document.querySelector("#lexical").classList.remove("show");
        }, 1000);

        document.querySelector("#lexical").style.animationName = "hide";
        setTimeout(() =>{
            document.querySelector("#lexical").classList.add("hide");
        }, 1000);

        document.querySelector("#comunicativo").style.animationName = "show";
        setTimeout(() =>{
            document.querySelector("#comunicativo").classList.add("show");
        }, 1000);
    }
    else{
        document.querySelector("#comunicativo").style.animationName = "show";
        setTimeout(() =>{
            document.querySelector("#comunicativo").classList.add("show");
        }, 500);
    }
});

//Muda curso
function changeBg(bg, title) {
    const cursos = document.querySelector('.cursos');
    const contents = document.querySelectorAll('.contents'); 
    cursos.style.background = `url(/assets/img/carousel/${bg})`;
    cursos.style.backgroundSize = 'cover'; 
    cursos.style.backgroundPosition = 'center'; 

    contents.forEach(content =>{
        content.classList.remove('active');
        if (content.classList.contains(title)){
            content.classList.add('active');
        }
    })
}

//Animação Botão Cabeçalho 
function animar(){
    const btn = document.getElementById('btn_fechar')
    //toggle verifica se existe, se existe remove, se não, adiciona
    btn.classList.toggle('ativar')

    const div = document.getElementById('menu_mobile')
    div.classList.toggle('abrir')

    }
    

