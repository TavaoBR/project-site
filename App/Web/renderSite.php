<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/css/padrao.css">
    <title><?=$this->e($title)?></title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

<div class="top-nav" id="home" style="background-color: #034161;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> debra.holt@example.com</p>
                    <p> <i class='bx bxs-phone-call'></i> (219) 555-0114</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-pinterest'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top" >
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" class="image2"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Edital
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           <li><a class="dropdown-item" href="/public/transparencia/edital/convocao.pdf" target='blank'>Convocação 23/12/2022 - Postado 12/12/22</a></li>
                           <li><a class="dropdown-item" href="/public/transparencia/edital/ATADEJULGAMENTOEDITAL01.2022.pdf" target='blank'>ATA DE JULGAMENTOEDITAL Nº 01/2022 - Postado 16/12/22</a></li>
                           <li><a class="dropdown-item" href="/public/transparencia/edital/termo_homologacao_edital-01-2022.pdf" target='blank'>Termo de Homologação. Edital Nº 01/2022 - Postado 04/01/23</a></li>
                           <li><a class="dropdown-item" href="/public/transparencia/edital/CONTRATO 01.2023 E & P CONSTRUÇÕES.pdf" target='blank'>CONTRATO N° 01/2023. Edital Nº 01/2022 - Postado 05/01/23</a></li>
                        </ul>
                      </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
            </div>
        </div>
    </nav>

    <?=$this->section('content')?>


    <script src="/assets/libs/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/scripts/jquery.min.js"></script>
    <script src="/assets/scripts/owl.carousel.min.js"></script>
    <script src="/assets/scripts/app.js"></script>
</body>
</html>
