<?php
$tituloPagina = "Escola Modelo de Língua Japonesa de Marília";
require_once __DIR__ . "/includes/cabecalho.php";
?>

<main>
    <div class="index">
        <div class="texto">
            <h1 class="montserrat_title">MERGULHE NA BELEZA</h1>
            <p class="nunito_text">Seja bem-vindo à Escola Modelo de Lingua Japonesa</p>

            <div class="botao">
                <button><a href="/paginas/parte.php" class="montserrat_title">Faça Parte!</a></button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="sobre">
            <img class="sobre_img" src="/assets/img/complementos/Escola Atual.jpeg" alt="Imagem da Escola Modelo de Língua Japonesa de Marília">
            <div class="conteudo">
                <h1 class="montserrat_title">UM BREVE RESUMO<br>SOBRE A NOSSA ESCOLA</h1>
                <p class="nunito_text">A Escola Modelo de Língua Japonesa de Marília tem o orgulho de ensinar a cultura e a língua
                    japonesa há quase 100 anos. Com uma missão voltada para o ensino imersivo e dinâmico,
                    buscamos não apenas ensinar o idioma, mas também conectar nossos alunos profundamente à
                    cultura japonesa. Oferecemos aulas para todos os níveis, desde iniciantes até avançados, com
                    foco no desenvolvimento completo das habilidades de leitura, escrita, escuta e conversação.
                    Nosso objetivo é criar um ambiente de aprendizado envolvente e acolhedor, onde cada aluno
                    possa desenvolver sua fluência no japonês enquanto explora as diversas facetas da cultura
                    japonesa. Para uma imersão ainda maior, oferecemos aulas especiais de Mangá, Soroban e
                    Culinária Japonesa, permitindo que nossos alunos vivenciem a cultura de maneira autêntica e
                    enriquecedora.</p>

                <div class="botoes">
                    <div class="botoes_sobre">
                        <div class="botao_sobre">
                            <button><a href="/paginas/sobre.php"><img src="/assets/img/icons/Relógio.png" alt="Botão Timeline"></a></button>
                        </div>
                        <div class="texto_sobre">
                            <h1 class="montserrat_title">Mais detalhes sobre nós!</h1>
                            <p class="nunito_text">Confira nossa história completa!</p>
                        </div>
                    </div>

                    <div class="botoes_sobre">
                        <div class="botao_sobre">
                            <button><a href="/paginas/cursos.php"><img src="/assets/img/icons/search.png" alt="Botão Conferir Cursos"></a></button>
                        </div>
                        <div class="texto_sobre baixo">
                            <h1 class="montserrat_title">Confira nossos Cursos!</h1>
                            <p class="nunito_text">Veja todos os detalhes sobre os nossos cursos!</p>
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
                        <h1 class="montserrat_title title1">MITOLOGIA JAPONESA</h1>
                        <h1 class="montserrat_title title2">E SUA LIGAÇÃO COM</h1>
                        <h1 class="montserrat_title title3">A ESCOLA MODELO</h1>
                    </div>
                    <p class="nunito_text">O KAPPA, guardião das águas na mitologia japonesa, é o mascote da nossa Escola desde 2017
                        quando um grupo de alunos e professores criou o KAPPAKAI, evento de divulgação da cultura
                        pop japonesa. Assim como o Kappa que está conectado com a natureza, buscamos conectar
                        nossos alunos ao fluxo do conhecimento, explorando as profundezas da língua e cultura do
                        Japão, guiando-os em uma jornada de descoberta, onde cada aula revela segredos e tradições
                        milenares. Mergulhe conosco e desvende os mistérios do idioma japonês com a curiosidade e
                        determinação do nosso mascote!</p>
                </div>

                <div class="card_kappa">
                    <div class="textos_kappa">
                        <h1 class="montserrat_title title_kappa">ALIÁS O QUE É O KAPPA?</h1>
                        <p class="nunito_text">Muito prazer, sou o KAPPA, um YOUKAI, ser aquático mitológico do folclore japonês. Ollhem,
                            tenho esta aparência única: um misto entre tartaruga e humano, incluindo um prato cheio de
                            água em sua cabeça, que é essencial para minha força. Vivo em rios e lagos, sendo um hábil
                            nadador. Tenho um espírito brincalhão e apesar de algumas travessuras, sou também o guardião
                            das águas e das crianças e protejo a natureza. Foi por isso que a ESCOLA MODELO me
                            escolheu pra ser o seu MASCOTE!</p>
                    </div>
                </div>
            </div>
            <img src="/assets/img/kappa/kappa Joinha.png" alt="Imagem do Mascote Kappa">
        </div>
    </div>
</main>

<?php
require_once __DIR__ . "/includes/rodape.php";
?>