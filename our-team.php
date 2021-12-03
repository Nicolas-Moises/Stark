<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0">
    <title>Stark Engenharia - Time</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/scroll.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="assets/images/logo.ico">
</head>
<header>
    <div class="header">
        <div class="logo">
            <a href=""><img src="assets/images/logo.png" alt="Nossa empresa"></a>
        </div>
        <div class="menu">
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <nav>
                <ul class="nav-list">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">SOBRE</a></li>
                    <li><a href="services.php">SERVIÇOS</a></li>
                    <li><a href="our-team.php"  class="active">NOSSO TIME</a></li>
                    <li><a href="contact.php">CONTATO</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<body>
<section class="default dark bg-team">
    <div class="section-title">
        Nosso Time
    </div>
    <div class="section-desc">
        Equipe técnica e especializada
    </div>
    <div class=section-team--box>
        <div class=section-team--item>
            <img src="assets/images/engineer.png" alt="">
            <h1>Eng. Galvão Silva</h1>
            <h2>Responsável Técnico CREA-SP 5070648894</h2>
        </div>
        <div class=section-team--item>
            <img src="assets/images/mestre.png" alt="">
            <h1>Oliveira Rodrigues</h1>
            <h2>Diretor operacional / Mestre de obras</h2>
        </div>
        <div class=section-team--item>
            <img src="assets/images/manager.png" alt="">
            <h1>Jackson Rodrigo</h1>
            <h2>Diretor comercial</h2>
        </div>
    
    </div>
    <div class=section-team--box2>
        <div class=section-team--item2>
            <img src="assets/images/engineer.png" alt="">
            <h1>Eng. Wandrei M. Nascimento</h1>
            <h2>Coordenador de obras</h2>
        </div>
        <div class=section-team--item2>
            <img src="assets/images/tecnico.png" alt="">
            <h1>Araújo</h1>
            <h2>Tecnico responsável CRT: 37160814851</h2>
        </div>
    </div>
    </section>
    <?php 
        include_once('footer.php')
    ?>
    <script src="js/mobile-navbar.js"></script>
</body>
</html>