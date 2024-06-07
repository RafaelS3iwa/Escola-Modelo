<?php
$tituloPagina = "Escola Modelo";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<main>
    <div class="index">
        <div class="texto">
            <h1 class="titulo">MERGULHE NA BELEZA DA LÍNGUA JAPONESA</h1>
            <p>Seja bem-vindo à Escola Modelo de Lingua Japonesa de Marilia onde cada aula<br>é uma aventura cultural única!</p>

            <div class="botao">
                <button><a href="/paginas/parte.php">Faça Parte!</a></button>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="sobre">
            <img src="/assets/img/icons/Whatsapp.png" alt="">
            <div class="conteudo">
                <h1 class="titulo_sobre">UM BREVE RESUMO<br>SOBRE A NOSSA ESCOLA</h1>
                <p class="paragrafo">A Escola de Língua Japonesa de Shinjuku (SNG) tem uma história de mais de 48 anos em educação de língua japonesa.<br>É uma escola de língua japonesa da corporação escolar com várias aprovações da escola do Governador Metropolitano de Tóquio<br>e um currículo de preparação designado pelo Ministro da Educação, Cultura, Esportes, Ciência e Tecnologia. <br>Nossa escola está localizada em Takadanobaba, uma cidade estudantil em Tóquio. Vários metros passam pela Estação Takadanobaba, facilitando o acesso à escola.</p>

                <div id="botoes">
                    <div class="botoes_sobre">
                        <div class="botao_sobre">
                            <button><a href="/paginas/sobre.php"><img src="/assets/img/icons/Relógio.png" alt="Botão Timeline"></a></button>
                        </div>
                        <div class="texto_sobre">
                            <h1>Veja a Timeline da Escola Modelo</h1>
                            <p>Texto Temporário</p>
                        </div>
                    </div>

                    <div class="botoes_sobre">
                        <div class="botao_sobre">
                            <button><a href="/paginas/cursos.php"><img src="/assets/img/icons/search.png" alt="Botão Conferir Cursos"></a></button>
                        </div>
                        <div class="texto_sobre">
                            <h1>Confira nossos Cursos!</h1>
                            <p>Texto Temporário</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="kappa">
            <div id="kappa_flex">
                <div class="conteudo">
                    <div id="titulo_kappa">
                        <h1 class="title1">MITOLOGIA JAPONESA</h1>
                        <h1 class="title2">E SUA LIGAÇÃO COM</h1>
                        <h1 class="title3">A ESCOLA MODELO</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro laudantium expedita numquam, eum vero at labore accusamus quod alias sunt nesciunt voluptatibus molestias non ipsa quaerat tenetur, dolor officia. Accusantium veritatis et voluptatem excepturi? Expedita dolorem libero possimus autem eaque quis.</p>
                </div>

                <div id="card_kappa">
                    <div id="textos_kappa">
                        <h1 id="title_kappa">ALIÁS O QUE É O KAPPA?</h1>
                        <p>O Kappa é uma criatura mitológica do folclore japonês, muitas vezes descrita como um ser aquático. Sua aparência é única, com características que lembram um híbrido entre tartaruga e humano, incluindo um prato cheio de água em sua cabeça, essencial para sua força. Os Kappas são conhecidos por viverem em rios e lagos, sendo hábeis nadadores. Eles têm um comportamento travesso, frequentemente envolvidos em travessuras que podem variar de brincadeiras inofensivas a atos mais sérios. Além disso, os Kappas são considerados guardiões das águas e das crianças, refletindo a complexa relação entre humanos e a natureza nas tradições japonesas.</p>
                    </div>
                </div>
            </div>
            <img src="/assets/img/icons/image.png" alt="">
        </div>
    </div>
</main>

<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>