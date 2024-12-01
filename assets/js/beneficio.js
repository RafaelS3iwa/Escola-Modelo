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
            indicators: true
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