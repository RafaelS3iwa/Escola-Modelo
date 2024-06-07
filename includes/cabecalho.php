<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title><?= $tituloPagina ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="pt-br" />


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
                    <a href="/"><img src="/assets/img/logo/Logo Escola Modelo.png" alt="Logo Escola Modelo"></a>
                    <p class="titulo_logo">
                        ESCOLA<br>
                        MODELO DE<br>
                        LÍNGUA JAPONESA
                    </p>
                </div>
                <ul class="menu-desktop">
                    <li><a href="/paginas/metodos.php" class="active">MÉTODOS</a></li>
                    <li>/</li>
                    <li><a href="/paginas/cursos.php">CURSOS</a></li>
                    <li>/</li>
                    <li><a href="/paginas/parte.php">FAÇA PARTE</a></li>
                    <li>/</li>
                    <li><a href="/paginas/sobre.php">SOBRE</a></li>
                </ul>

                <div class="menu_mobile">
                    <div class="btn-fechar">
                        <i class="bi bi-x-lg"></i>
                    </div>

                    <ul class="nav">
                        <li><a href="/paginas/metodos.php" class="active">MÉTODOS</a></li>
                        <li><a href="/paginas/cursos.php">CURSOS</a></li>
                        <li><a href="/paginas/parte.php">FAÇA PARTE</a></li>
                        <li><a href="/paginas/sobre.php">SOBRE</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>