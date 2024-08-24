<?php
$tituloPagina = "Benefícios de Aprender Japonês: Cultura, Carreira e Mais";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<main>
    <div class="beneficios">
        <h1 class="title1">POR QUE</h1>

        <div class="links">
            <div class="beneficio selected" onclick="abrirCarrossel.call(this)" data-target="1">
                <h2 class="title2 pessoal">DESENVOLVIMENTO</h2>
                <h3 class="title3">自己成長</h3>
                <h4 class="title4">じこせいちょう</h4>
                <img src="/assets/img/icons/setinha.png" alt="Seta Desenvolvimento">
            </div>

            <div class="vl"></div>

            <div class="beneficio" onclick="abrirCarrossel.call(this)" data-target="2">
                <h2 class="title2 cultural">IMERSÃO</h2>
                <h3 class="title3">文化の没入</h3>
                <h4 class="title4">ぶんかのぼつにゅう</h4>
                <img src="/assets/img/icons/setinha.png" alt="Seta Imersão Cultural">
            </div>

            <div class="vl"></div>

            <div class="beneficio" onclick="abrirCarrossel.call(this)" data-target="3">
                <h2 class="title2 profissional">OPORTUNIDADES</h2>
                <h3 class="title3">キャリアの機会</h3>
                <h4 class="title4">きゃりあのきかい</h4>
                <img src="/assets/img/icons/setinha.png" alt="Seta Oportunidades">
            </div>
        </div>

        <div class="beneficios_carrossel active" id="carousel-1">
            <img src="/assets/img/kappa/Kappa Professor.png" alt="">

            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                    <a class="btn waves-effect" style="visibility: hidden;"></a>
                </div>
                <div class="carousel-item white" href="#one!">
                    <h2>Aumento da capacidade<br>de memorização.</h2>
                    <p> Estudar japonês exige memorização de caracteres kanji, 
                    melhorando a memória e a capacidade de retenção.</p>
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
            <img src="/assets/img/kappa/Kappa Professor.png" alt="">

            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                    <a class="btn waves-effect" style="visibility: hidden;"></a>
                </div>
                <div class="carousel-item white" href="#one!">
                    <h2>Compreensão das Tradições.</h2>
                    <p>E Aprofundamento em festivais, cerimônias e valores japoneses,
                    permitindo uma conexão cultural mais rica.</p>
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
            <img src="/assets/img/kappa/Kappa Professor.png" alt="">

            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                    <a class="btn waves-effect" style="visibility: hidden;"></a>
                </div>
                <div class="carousel-item white" href="#one!">
                    <h2>Vantagem Competitiva.</h2>
                    <p>O conhecimento de japonês destaca no mercado de trabalho, 
                    especialmente em empresas japonesas ou multinacionais.</p>
                </div>
                <div class="carousel-item white" href="#two!">
                    <h2>Carreira em Tradução e Interpretação.</h2>
                    <p>O domínio da língua abre portas em setores de tradução,
                    localização de jogos, e interpretação.</p>
                </div>
                <div class="carousel-item white" href="#three!">
                    <h2>Trabalhar no Japão.</h2>
                    <p>Facilidade em conseguir emprego ou participar de programas de trabalho
                    e estudo no Japão, aumentando as oportunidades internacionais.</p>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>