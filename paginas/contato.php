<?php
$tituloPagina = "Entre em contato";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<main>
    <div class="contato">
        <h1 class="title1">INFORMAÇÕES DE<br>CONTATO</h1>

        <div class="cards_contato">
            <div class="card_contato">
                <h1 class="title1">NOSSO CONTATO</h1>

                <div class="informacoes">
                    <div class="info_topico">
                        <h3 class="title_topico">Telefone: </h3>
                        <p>(14) 3433-4187</p>
                    </div>

                    <div class="info_topico">
                        <h3 class="title_topico">Celular/Whatsapp: </h3>
                        <a href="#">(14)98119-5399 / (14)98182-4187</a>
                    </div>

                    <div class="info_topico">
                        <h3 class="title_topico">E-mail: </h3>
                        <a href="#">nihongakko@nikkeymarilia.com.br</a>
                    </div>
                </div>
            </div>

            <div class="card_contato localizacao_card">
                <h1 class="title1">NOSSA LOCALIZAÇÃO</h1>
                <div class="localizacao">
                    <p>Rua Paes Leme, 543 - <br> Alto Cafezal, Marília - SP</p>

                    <div class="google">
                        <img src="/assets/img/icons/localizacaoVerde.png" alt="Ícone Google Maps">
                        <a href="#">Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>