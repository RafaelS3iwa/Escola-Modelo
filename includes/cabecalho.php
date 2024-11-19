<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title><?= $tituloPagina ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="description" content="A Escola de Língua Japonesa de Marília oferece aulas dinâmicas para todos os níveis. Aprenda a língua e a cultura japonesa de forma prática e imersiva. Venha conhecer agora!">
    <meta name="keywords" content="escola de japonês, aprender japonês em Marília, língua japonesa, cultura japonesa, escola de língua japonesa, aulas de japonês para iniciantes">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Escola Modelo de Língua Japonesa de Marília">
    <meta property="og:description" content="A Escola Modelo de Língua Japonesa de Marília oferece aulas dinâmicas e imersivas. Aprenda japonês de maneira prática e culturalmente rica. Inscreva-se agora!">
    <meta property="og:image" content="/assets/img/logo/EscolaModelo.png">

    <meta property="og:url" content="https://www.escolajaponesmarilia.com.br">
    <meta property="og:type" content="website">

    <link rel="canonical" href="https://www.escolajaponesmarilia.com.br/">
    <link rel="icon" href="/assets/img/logo/EscolaModelo.png" type="image/x-icon">
    <link rel="icon" href="/assets/img/logo/EscolaModelo.png" type="image/png">
    
    <link rel="apple-touch-icon" href="/assets/img/logo/EscolaModelo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="/"><img src="/assets/img/logo/EscolaModelo.png" alt="Logo da Escola Modelo de Língua Japonesa de Marília"></a>
                </div>
                <div class="menu_desktop">
                    <ul>
                        <li class="poppins"><a href="/beneficios.php" class="poppins active">BENEFÍCIOS</a></li>
                        <li class="poppins">/</li>
                        <li class="poppins"><a href="/cursos.php" class="poppins active">CURSOS</a></li>
                        <li class="poppins">/</li>
                        <li class="poppins"><a href="/parte.php" class="poppins active">FAÇA PARTE</a></li>
                        <li class="poppins">/</li>
                        <li class="poppins"><a href="/sobre.php" class="poppins active">SOBRE</a></li>
                        <li class="poppins">/</li>
                        <li class="poppins"><a href="/contato.php" class="poppins contato_titulo">CONTATO</a></li>
                        <button class="data_theme">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z" />
                            </svg>
                        </button>
                    </ul>
                </div>

                <div onclick="animar()" id="btn_fechar">
                    <span class="linha"></span>
                    <span class="linha"></span>
                    <span class="linha"></span>
                </div>

                <div class="menu_mobile" id="menu_mobile">
                    <ul>
                        <li class="poppins"><a href="/beneficios.php" class="poppins active">BENEFÍCIOS</a></li>
                        <li class="poppins"><a href="/cursos.php" class="poppins">CURSOS</a></li>
                        <li class="poppins"><a href="/parte.php" class="poppins">FAÇA PARTE</a></li>
                        <li class="poppins"><a href="/sobre.php" class="poppins">SOBRE</a></li>
                        <li class="poppins"><a href="/contato.php" class="poppins contato_titulo">CONTATO</a></li>
                        <button class="data_theme">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z" />
                            </svg>
                        </button>
                    </ul>
                </div>
            </div>
        </div>
    </header>