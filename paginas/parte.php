<?php
$tituloPagina = "Faça Parte";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<main>
    <div class="container">
        <div id="parte">
            <img src="/assets/img/complementos/image.png" alt="">
            <div class="conteudo">
                <h1 class="title1">SE JUNTE<br>AGORA NA<br>NOSSA COMUNIDADE</h1>
                <p>Junte-se à Escola Modelo de Língua Japonesa de Marília e seja parte de uma comunidade vibrante de aprendizes e entusiastas da cultura japonesa. Oferecemos uma jornada educacional única, com cursos de idioma e uma ampla gama de atividades culturais que promovem o conhecimento, a amizade e o respeito mútuo.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="inscrever">
            <div class="conteudo2">
                <h1 class="title1">COMO SE INSCREVER</h1>
                <p>Junte-se à nossa comunidade de maneira fácil e rápida! Basta nos enviar uma mensagem ou e-mail, e agendaremos uma visita personalizada para você.Estamos ansiosos para conhecê-lo e apresentar tudo o que temos a oferecer!</p>
    
                <h1 class="title2">AGENDE AGORA!</h1>
                <p>Faça agora seu agendamento pelo E-mail ou Whatsapp.</p>

                <div id="botoes_inscrever">
                    <button><a href="#">E-mail</a></button>
                    <button><a href="#">Whatsapp</a></button>
                </div>
            </div>

            <div id="topicos">
                <div class="topico">
                    <div class="numero_topico">
                        <h1>1</h1>
                    </div>
                    <div class="card_textos">
                        <h1 class="titulo_card">ESCOLHA SEU CURSO</h1>
                        <p>Decida entre nossas opções de cursos de língua japonesa, aulas culturais, e mais.</p>
                    </div>
                </div>
    
                <div class="topico">
                    <div class="numero_topico">
                        <h1>2</h1>
                    </div>
                    <div class="card_textos">
                        <h1 class="titulo_card">ENTRE EM CONTATO</h1>
                        <p>Agende uma visita para conhecer nossa escola, os professores e as instalações.</p>
                    </div>
                </div>
    
                <div class="topico">
                    <div class="numero_topico">
                        <h1>3</h1>
                    </div>
                    <div class="card_textos">
                        <h1 class="titulo_card">MATRICULE-SE</h1>
                        <p>Preencha nosso formulário de inscrição disponível na secretaria da escola.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>