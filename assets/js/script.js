//Muda curso
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

//Animação Botão Cabeçalho 
function animar() {
    const btn = document.getElementById('btn_fechar');
    const div = document.getElementById('menu_mobile');

    // Verifica se os elementos existem antes de executar o código
    if (btn && div) {
        btn.classList.toggle('ativar');
        div.classList.toggle('abrir');
    }
}

//Benefícios Slide
function abrirCarrossel() {
    const beneficios = document.querySelectorAll('.beneficio');
    
    beneficios.forEach(beneficio => {
        beneficio.classList.remove('selected');
    });

    this.classList.add('selected');

    const target = this.getAttribute('data-target');
    document.querySelectorAll('.beneficios_carrossel').forEach(carousel => {
        carousel.classList.remove('active');
    });

    const activeCarousel = document.getElementById('carousel-' + target);
    activeCarousel.classList.add('active');

    // Reconfigura o carrossel se necessário
    const carouselInstance = M.Carousel.getInstance(activeCarousel.querySelector('.carousel'));
    if (!carouselInstance) {
        M.Carousel.init(activeCarousel.querySelector('.carousel'), {
            fullWidth: true,
            indicators: false
        });
    } else {
        carouselInstance.set('fullWidth', true);
        carouselInstance.set('indicators', false);
        carouselInstance.update();
    }

    // Restaura o botão de toque (touch)
    const fixedItem = activeCarousel.querySelector('.carousel-fixed-item .btn');
    if (fixedItem) {
        fixedItem.style.visibility = 'hidden';  
    }
}