<?php
$tituloPagina = "Entre em contato";
require_once __DIR__ . "/../includes/cabecalho.php";
?>

<main>
    <div class="contato">
        <h1 class="montserrat_title">INFORMAÇÕES DE<br>CONTATO</h1>

        <div class="cards_contato">
            <div class="card_contato">
                <h1 class="montserrat_title">NOSSO CONTATO</h1>

                <div class="informacoes">
                    <div class="info_topico">
                        <h3 class="title_topico">Telefone: </h3>
                        <a href="tel:+551434334187">(14) 3433-4187</a>
                    </div>

                    <div class="info_topico">
                        <h3 class="title_topico">Celular/Whatsapp: </h3>
                        <div class="contato_whats">
                            <a href="https://wa.me/5514981195399" target="_blank">(14) 98119-5399 / </a>&nbsp;&nbsp;
                            <a href="https://wa.me/5514981824187" target="_blank">(14) 98182-4187</a>
                        </div>
                    </div>

                    <div class="info_topico">
                        <h3 class="title_topico">E-mail: </h3>
                        <a href="" onclick="window.location.href='mailto:' + 'nihongakko' + '@' + 'nikkeymarilia.com.br'; return false;" target="_blank">nihongakko@nikkeymarilia.com.br</a>
                    </div>
                </div>
            </div>

            <div class="card_contato localizacao_card">
                <h1 class="montserrat_title">NOSSA</h1>
                <div class="localizacao">
                    <p>Rua Paes Leme, 543 - <br> Alto Cafezal, Marília - SP</p>

                    <div class="google">
                        <img src="/assets/img/icons/localizacaoVerde.png" alt="Ícone Google Maps">
                        <a href="https://www.google.com/maps/place/Associação+Cultural+e+Esportiva+Nikkey+de+Marília/@-22.2177047,-49.9542978,15z/data=!4m14!1m7!3m6!1s0x94bfd73c3013178d:0x80f33cf43ff320a0!2sAssociação+Cultural+e+Esportiva+Nikkey+de+Marília!8m2!3d-22.2177047!4d-49.9542978!16s%2Fg%2F1ts1tb7d!3m5!1s0x94bfd73c3013178d:0x80f33cf43ff320a0!8m2!3d-22.2177047!4d-49.9542978!16s%2Fg%2F1ts1tb7d?entry=ttu" target="_blank">Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . "/../includes/rodape.php";
?>