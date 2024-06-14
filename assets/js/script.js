//Script da tela Métodos

//Mostra o Lexical
document.querySelector("#btnLexical").addEventListener("click", () => {
    const lexical = document.getElementById('lexical');
    const comunicativo = document.getElementById('comunicativo');

    if (comunicativo.classList.contains("show")) {
        comunicativo.style.animationName = "hide";
        setTimeout(() => {
            comunicativo.classList.remove("show");
            comunicativo.classList.add("hide");

            lexical.style.animationName = "show";
            setTimeout(() => {
                lexical.classList.add("show");
                lexical.classList.remove("hide");
            }, 50); 
        }, 1500); 
    } else if (!lexical.classList.contains("show")) {
        lexical.style.animationName = "show";
        setTimeout(() => {
            lexical.classList.add("show");
            lexical.classList.remove("hide");
        }, 800); 
    } else if (lexical.classList.contains("show")) {
        lexical.style.animationName = "hide";
        setTimeout(() => {
            lexical.classList.remove("show");
            lexical.classList.add("hide");
        }, 1500); 
    }
});


//Mostra o comunicativo
document.querySelector("#btnComunicativo").addEventListener("click", () => {
    const lexical = document.getElementById('lexical');
    const comunicativo = document.getElementById('comunicativo');

    if (lexical.classList.contains("show")) {
        lexical.style.animationName = "hide";
        setTimeout(() => {
            lexical.classList.remove("show");
            lexical.classList.add("hide");

            comunicativo.style.animationName = "show";
            setTimeout(() => {
                comunicativo.classList.add("show");
                comunicativo.classList.remove("hide");
            }, 50); 
        }, 1500); 
    } else if (!comunicativo.classList.contains("show")) {
        comunicativo.style.animationName = "show";
        setTimeout(() => {
            comunicativo.classList.add("show");
            comunicativo.classList.remove("hide");
        }, 800); 
    } else if (comunicativo.classList.contains("show")) {
        comunicativo.style.animationName = "hide";
        setTimeout(() => {
            comunicativo.classList.remove("show");
            comunicativo.classList.add("hide");
        }, 1500); 
    }
});

//Muda curso
function changeBg(bg, title) {
    const cursos = document.querySelector('.cursos');
    const contents = document.querySelectorAll('.contents');
    cursos.style.background = `url(/assets/img/carousel/${bg})`;
    cursos.style.backgroundSize = 'cover';
    cursos.style.backgroundPosition = 'center';

    contents.forEach(content => {
        content.classList.remove('active');
        if (content.classList.contains(title)) {
            content.classList.add('active');
        }
    })
}

//Animação Botão Cabeçalho 
function animar() {
    const btn = document.getElementById('btn_fechar')
    //toggle verifica se existe, se existe remove, se não, adiciona
    btn.classList.toggle('ativar')

    const div = document.getElementById('menu_mobile')
    div.classList.toggle('abrir')

}


