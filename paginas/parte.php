<?php
$tituloPagina = "Faça Parte";
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/cabecalho.php";
?>

<main>
    <div class="container">
        <div class="parte">
            <img src="/assets/img/complementos/comunidade.jpg" alt="">
            <div class="conteudo">
                <h1 class="title1">SEJA UM DE NÓS!</h1>
                <p>Junte-se à Escola Modelo de Língua Japonesa de Marília e seja parte de uma comunidade vibrante de aprendizes e entusiastas da cultura japonesa. Oferecemos uma jornada educacional única, com cursos de idioma e uma ampla gama de atividades culturais que promovem o conhecimento, a amizade e o respeito mútuo.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="inscrever desktop">
            <div class="conteudo2">
                <div class="primeiro">
                    <h1 class="title1">COMO SE INSCREVER</h1>
                    <p>Junte-se à nossa comunidade de maneira fácil e rápida! Basta nos enviar uma mensagem ou e-mail, e agendaremos uma visita personalizada para você.Estamos ansiosos para conhecê-lo e apresentar tudo o que temos a oferecer!</p>
                </div>

                <div class="segundo">
                    <h1 class="title2">AGENDE AGORA!</h1>
                    <p>Faça agora seu agendamento pelo E-mail ou Whatsapp.</p>

                    <div class="botoes_inscrever">
                        <button><a href="" onclick="window.location.href='mailto:' + 'nihongakko' + '@' + 'nikkeymarilia.com.br'; return false;" target="_blank">E-mail</a></button>
                        <button><a href="https://wa.me/5514981195399" target="_blank">Whatsapp</a></button>
                    </div>
                </div>
            </div>

            <div class="topicos">
                <div class="topico">
                    <div class="numero_topico">
                        <h1>1</h1>
                    </div>
                    <div class="topico_texto">
                        <h1 class="titulo_topico">ESCOLHA SEU CURSO</h1>
                        <p>Decida entre nossas opções de cursos de língua japonesa, aulas culturais, e mais.</p>
                    </div>
                </div>

                <div class="topico">
                    <div class="numero_topico">
                        <h1>2</h1>
                    </div>
                    <div class="topico_texto">
                        <h1 class="titulo_topico">ENTRE EM CONTATO</h1>
                        <p>Agende uma visita para conhecer nossa escola, os professores e as instalações.</p>
                    </div>
                </div>

                <div class="topico">
                    <div class="numero_topico">
                        <h1>3</h1>
                    </div>
                    <div class="topico_texto">
                        <h1 class="titulo_topico">MATRICULE-SE</h1>
                        <p>Preencha nosso formulário de inscrição disponível no link abaixo.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="inscrever mobile">
            <div class="conteudo2">
                <div class="primeiro">
                    <h1 class="title1">COMO SE INSCREVER</h1>
                    <p>Junte-se à nossa comunidade de maneira fácil e rápida! Basta nos enviar uma mensagem ou e-mail, e agendaremos uma visita personalizada para você. Estamos ansiosos para conhecê-lo e apresentar tudo o que temos a oferecer!</p>
                </div>

                <div class="topicos">
                    <div class="topico">
                        <div class="numero_topico">
                            <h1>1</h1>
                        </div>
                        <div class="topico_texto">
                            <h1 class="titulo_topico">ESCOLHA SEU CURSO</h1>
                            <p>Decida entre nossas opções de cursos de língua japonesa, aulas culturais, e mais.</p>
                        </div>
                    </div>

                    <div class="topico">
                        <div class="numero_topico">
                            <h1>2</h1>
                        </div>
                        <div class="topico_texto">
                            <h1 class="titulo_topico">ENTRE EM CONTATO</h1>
                            <p>Agende uma visita para conhecer nossa escola, os professores e as instalações.</p>
                        </div>
                    </div>

                    <div class="topico">
                        <div class="numero_topico">
                            <h1>3</h1>
                        </div>
                        <div class="topico_texto">
                            <h1 class="titulo_topico">MATRICULE-SE</h1>
                            <p>Preencha nosso formulário de inscrição disponível na secretaria da escola.</p>
                        </div>
                    </div>
                </div>

                <div class="segundo">
                    <h1 class="title2">AGENDE AGORA!</h1>
                    <p>Faça agora seu agendamento pelo E-mail ou Whatsapp.</p>

                    <div class="botoes_inscrever">
                        <button><a href="" onclick="window.location.href='mailto:' + 'nihongakko' + '@' + 'nikkeymarilia.com.br'; return false;" target="_blank">E-mail</a></button>
                        <button><a href="https://wa.me/5514981195399" target="_blank">Whatsapp</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/includes/rodape.php";
?>