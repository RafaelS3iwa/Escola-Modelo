//Muda curso
$(document).ready(function() {
    $('.carousel').carousel();  // Inicializa o carrossel na página cursos
});

function changeBg(bg, title) {
    const cursos = document.querySelector('.cursos');
    const contents = document.querySelectorAll('.contents');

    // Verifica se os elementos existem antes de executar o código
    if (cursos && contents.length > 0) {
        cursos.style.background = `url(/assets/img/carousel/${bg})`;
        cursos.style.backgroundSize = 'cover';
        cursos.style.backgroundPosition = 'center';

        contents.forEach(content => {
            content.classList.remove('active');
            if (content.classList.contains(title)) {
                content.classList.add('active');
            }
        });
    }
}