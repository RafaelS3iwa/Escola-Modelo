<?php
$tituloPagina = "Escola Modelo";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<main>
    <div class="index">
        <div class="texto">
            <h1 class="titulo">MERGULHE NA BELEZA</h1>
            <p class="paragrafo_index">Seja bem-vindo à Escola Modelo de Lingua Japonesa</p>

            <div class="botao">
                <button><a href="/paginas/parte.php">Faça Parte!</a></button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sobre">
            <img class="sobre_img" src="/assets/img/complementos/Escola Atual.jpeg" alt="Imagem da Escola Modelo">
            <div class="conteudo">
                <h1 class="titulo_sobre">UM BREVE RESUMO<br>SOBRE A NOSSA ESCOLA</h1>
                <p class="paragrafo">A Escola Modelo de Língua Japonesa de Marília tem o orgulho de ensinar a cultura e a língua japonesa há mais de 100 anos.
                Com uma missão voltada para o ensino imersivo e dinâmico, buscamos não apenas ensinar o classioma, mas também conectar nossos alunos profundamente à 
                cultura japonesa. Oferecemos aulas para todos os níveis, desde iniciantes até avançados, com foco no desenvolvimento completo das habilclassades de 
                leitura, escrita, escuta e conversação. Nosso objetivo é criar um ambiente de aprendizado envolvente e acolhedor, onde cada aluno possa desenvolver
                sua fluência no japonês enquanto explora as diversas facetas da cultura japonesa. Para uma imersão ainda maior, oferecemos aulas especiais de Mangá,
                Soroban e Culinária Japonesa, permitindo que nossos alunos vivenciem a cultura de maneira autêntica e enriquecedora. </p>

                <div class="botoes">
                    <div class="botoes_sobre">
                        <div class="botao_sobre">
                            <button><a href="/paginas/sobre.php"><img src="/assets/img/icons/Relógio.png" alt="Botão Timeline"></a></button>
                        </div>
                        <div class="texto_sobre">
                            <h1>Mais detalhes sobre nós!</h1>
                            <p>Confira nossa história completa!</p>
                        </div>
                    </div>

                    <div class="botoes_sobre">
                        <div class="botao_sobre">
                            <button><a href="/paginas/cursos.php"><img src="/assets/img/icons/search.png" alt="Botão Conferir Cursos"></a></button>
                        </div>
                        <div class="texto_sobre baixo">
                            <h1>Confira nossos Cursos!</h1>
                            <p>Veja todos os detalhes sobre os nossos cursos!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="kappa">
            <div class="kappa_flex">
                <div class="conteudo">
                    <div class="titulo_kappa">
                        <h1 class="title1">MITOLOGIA JAPONESA</h1>
                        <h1 class="title2">E SUA LIGAÇÃO COM</h1>
                        <h1 class="title3">A ESCOLA MODELO</h1>
                    </div>
                    <p>O Kappa, guardião das águas na mitologia japonesa, é o símbolo de nossa Escola. Assim como ele, buscamos conectar nossos alunos ao fluxo do conhecimento, explorando as profundezas da língua e cultura do Japão. Inspirados por sua sabedoria e força, guiamos nossos estudantes em uma jornada de descoberta, onde cada aula revela segredos e tradições milenares. Mergulhe conosco e desvende os mistérios do classioma japonês com a curiosclassade e determinação do nosso mascote.</p>
                </div>

                <div class="card_kappa">
                    <div class="textos_kappa">
                        <h1 class="title_kappa">ALIÁS O QUE É O KAPPA?</h1>
                        <p>O Kappa é uma criatura mitológica do folclore japonês, muitas vezes descrita como um ser aquático. Sua aparência é única, com características que lembram um híbrclasso entre tartaruga e humano, incluindo um prato cheio de água em sua cabeça, essencial para sua força. Os Kappas são conhecclassos por viverem em rios e lagos, sendo hábeis nadadores. Eles têm um comportamento travesso, frequentemente envolvclassos em travessuras que podem variar de brincadeiras inofensivas a atos mais sérios. Além disso, os Kappas são consclasserados guardiões das águas e das crianças, refletindo a complexa relação entre humanos e a natureza nas tradições japonesas.</p>
                    </div>
                </div>
            </div>
            <img src="/assets/img/icons/retangulo.png" alt="">
        </div>
    </div>
</main>

<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>