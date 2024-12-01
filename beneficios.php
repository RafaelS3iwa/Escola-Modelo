<?php
$tituloPagina = "Benefícios de Aprender Japonês: Cultura, Carreira e Mais";
require_once __DIR__ . "/includes/cabecalho.php";
?>

<main>
    <div class="beneficios">
        <h1 class="montserrat_title">POR QUE</h1>

        <div class="links">
            <div class="beneficio selected" onclick="abrirCarrossel.call(this)" data-target="1">
                <h2 class="montserrat_title pessoal">DESENVOLVIMENTO</h2>
                <img src="/assets/img/icons/setinha.png" alt="Seta Desenvolvimento">
            </div>

            <div class="vl"></div>

            <div class="beneficio" onclick="abrirCarrossel.call(this)" data-target="2">
                <h2 class="montserrat_title cultural">IMERSÃO</h2>
                <img src="/assets/img/icons/setinha.png" alt="Seta Imersão Cultural">
            </div>

            <div class="vl"></div>

            <div class="beneficio" onclick="abrirCarrossel.call(this)" data-target="3">
                <h2 class="montserrat_title profissional">OPORTUNIDADES</h2>
                <img src="/assets/img/icons/setinha.png" alt="Seta Oportunidades">
            </div>
        </div>

        <div class="beneficios_carrossel active" id="carousel-1">
            <img src="/assets/img/kappa/Kappa-Professor.png" alt="Imagem do Mascote Kappa">

            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                    <a class="btn waves-effect" style="visibility: hidden;"></a>
                </div>
                <div class="carousel-item white" href="#one!">
                    <h2>Aumento da capacidade<br>de memorização.</h2>
                    <p> Estudar japonês exige memorização de caracteres kanji, hiragana e katakana, o que ajuda a
                        exercitar o cérebro, estimula a concentração e a melhora as habilidades cognitivas.
                    </p>
                </div>
                <div class="carousel-item white" href="#two!">
                    <h2>Desenvolvimento da Disciplina.</h2>
                    <p>A complexidade da língua exige estudo constante,
                        fortalecendo a disciplina e a perseverança.</p>
                </div>
                <div class="carousel-item white" href="#three!">
                    <h2>Melhora da Concentração.</h2>
                    <p>Aprender uma língua tonal e com múltiplos sistemas
                        de escrita aumenta a capacidade de foco e atenção aos detalhes.</p>
                </div>
            </div>
        </div>

        <div class="beneficios_carrossel" id="carousel-2">
            <img src="/assets/img/kappa/Kappa-Professor.png" alt="Imagem do Mascote Kappa">

            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                    <a class="btn waves-effect" style="visibility: hidden;"></a>
                </div>
                <div class="carousel-item white" href="#one!">
                    <h2>Compreensão das Tradições.</h2>
                    <p>A participação em aulas culturais e eventos como festivais, cerimônias, workshops,
                        intercâmbios, etc proporciona aos alunos vivenciar valores japoneses, permitindo uma conexão
                        cultural mais rica.
                    </p>
                </div>
                <div class="carousel-item white" href="#two!">
                    <h2>Acesso a Mídia Original.</h2>
                    <p>Entendimento de animes, mangás,
                        e filmes em sua língua original, proporcionando uma experiência autêntica.</p>
                </div>
                <div class="carousel-item white" href="#three!">
                    <h2>Intercâmbio Cultural.</h2>
                    <p> Facilidade em interagir com nativos
                        e participar de programas de intercâmbio, ampliando a vivência cultural.</p>
                </div>
            </div>
        </div>

        <div class="beneficios_carrossel" id="carousel-3">
            <img src="/assets/img/kappa/Kappa-Professor.png" alt="Imagem do Mascote Kappa">

            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                    <a class="btn waves-effect" style="visibility: hidden;"></a>
                </div>
                <div class="carousel-item white" href="#one!">
                    <h2>Vantagem Competitiva.</h2>
                    <p>O conhecimento em japonês permite que o aluno destaque-se no mercado de trabalho,
                        especialmente em empresas japonesas ou multinacionais, dentro e fora do Brasil em vários
                        setores, além de vantagem para trabalhar em embaixadas, consulados ou organizações que
                        envolvam relações internacionais e comércio-exterior com o Japão.
                    </p>
                </div>
                <div class="carousel-item white" href="#two!">
                    <h2>Carreira em Tradução e Interpretação.</h2>
                    <p>O domínio da língua abre portas em setores de tradução e interpretação, especialmente em
                        negócios, conferências e publicações, além do mercado voltado para a cultura pop japonesa
                        como anime, mangá e video-games.</p>
                </div>
                <div class="carousel-item white" href="#three!">
                    <h2>Trabalhar no Japão.</h2>
                    <p>Com a escassez de mão-de-obra qualificada no mercado de trabalho do Japão, o conhecimento
                        do idioma japonês facilidade o acesso a essas vagas de emprego ou à participação em
                        programas de trabalho e estudo no Japão.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
<script src="/assets/js/beneficio.js"></script>
<script>
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

</script>

<?php
require_once __DIR__ . "/includes/rodape.php";
?>