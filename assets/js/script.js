//Darkmode
let darkmode = localStorage.getItem('darkmode');
const themeSwitch = document.querySelectorAll('.data_theme'); // Alterado para selecionar por classe

const enableDarkmode = () => {
    document.body.classList.add('darkmode');
    localStorage.setItem('darkmode', 'active'); 
}

const disableDarkmode = () => {
    document.body.classList.remove('darkmode');
    localStorage.setItem('darkmode', null);
}

if (darkmode === "active") enableDarkmode()

// Iterando sobre todos os botões com a classe "data_theme" para adicionar o evento de clique
themeSwitch.forEach((button) => {
    button.addEventListener("click", () => {
        darkmode = localStorage.getItem('darkmode');
        darkmode !== "active" ? enableDarkmode() : disableDarkmode();
    });
});

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

    // Recupera ou inicializa o carrossel se necessário
    const carouselElement = activeCarousel.querySelector('.carousel');
    let carouselInstance = M.Carousel.getInstance(carouselElement);

    if (!carouselInstance) {
        carouselInstance = M.Carousel.init(carouselElement, {
            fullWidth: true,
            indicators: false
        });
    } else {
        // Navega para o primeiro item do carrossel ao invés de destruir e recriar a instância
        carouselInstance.set(0);
    }

    // Restaura o botão de toque (touch)
    const fixedItem = activeCarousel.querySelector('.carousel-fixed-item .btn');
    if (fixedItem) {
        fixedItem.style.visibility = 'hidden';  
    }

    // Faz o scroll até o carrossel ativo se a tela for menor ou igual a 450px
    if (window.matchMedia("(max-width: 767px)").matches) {
        setTimeout(() => {
            activeCarousel.scrollIntoView({ behavior: 'smooth' });
        }, 100);  // Define 100ms de delay para garantir o scroll
    }
}