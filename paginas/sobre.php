<?php
$tituloPagina = "Sobre nós";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<main>
    <div class="sobre_nos">
        <div class="conteudo_sobre">
            <h1 class="title1">A NOSSA HISTÓRIA</h1>
            <p>
                A cidade de Marília tem uma ligação profunda com a colônia japonesa, visto que antes de sua
                fundação já recebia os primeiros imigrantes japoneses em sua região em 1926.
                Em agosto de 1930, Zenkiti Shiroma idealizou e fundou a primeira Associação da colônia
                japonesa(atual Nikkey Marília) onde iniciou as atividades educacionais para os filhos dos
                imigrantes. Desta forma, nossa Escola existe há quase um século. Tornou-se ESCOLA MODELO
                em 14 de dezembro de 1994, através do apoio do Governo japonês representado pela
                JICA(Agência de Cooperação Internacional do Japão), que desde então vêm nos apoiando de
                diversas formas como envio de voluntários no ensino do idioma, proporcionando acesso a cursos
                para alunos e professores no Japão, etc. Assim, nossa escola vem evoluindo-se sempre no
                intuito de melhor atender e cumprir nossa missão.
            </p>
        </div>
        <img src="/assets/img/complementos/EscolaPassado.jpeg" alt="">
    </div>


    <div class="historia">
        <div class="imagens">
            <img class="imagem" src="/assets/img/complementos/sobre-2.jpg" alt="">
            <img src="/assets/img/complementos/sobre-1.jpg" alt="">
        </div>

        <div class="conteudo_sobre">
            <h1 class="title1">A NOSSA MISSÃO</h1>
            <p>Através da orientação da língua japonesa, aprofundando o entendimento a respeito da cultura e
                tradições japonesas, desejamos criar indivíduos perseverantes, gentis e respeitosos, e que
                sejam cidadãos cosmopolitas que contribuam para o desenvolvimento da sociedade brasileira.
            </p>
        </div>
    </div>

    <div class="faca_parte">
        <div class="texto_parte">
            <h1 class="title1">VENHA!</h1>
            <h1 class="title2">CONTINUE COM</h1>
            <a href="/paginas/parte.php" class="title3">PARTE DELA!</a>
        </div>
    </div>
</main>

<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>