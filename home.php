<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0">
    <title>Stark Engenharia - Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/scroll.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="assets/images/logo.ico">
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">
                <a href=""><img src="assets/images/logo.png" alt="Nossa empresa"></a>
            </div>
            <div class="menu">
                <img src="assets/images/menu.png" alt="" class="menu-opener" width="50ox">
                <nav>
                    <ul>
                        <li><a href="home.php" class="active">HOME</a></li>
                        <li><a href="about.php">SOBRE</a></li>
                        <li><a href="services.php">SERVIÇOS</a></li>
                        <li><a href="our-team.php">NOSSO TIME</a></li>
                        <li><a href="contact.php">CONTATO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="slideshow-container">
            
            <div class="mySlides fade">
                <div class="slidearea">
                    <div class="numbertext">1 / 3</div>
                    <img src="assets/images/slide1.jpg" style="width:100%">
                    <div class="text">
                        <h1>Lajes de quadras <br><span>poliesportivas</span></h1>
                        <h2>Impermeabilizamos e reformamos quadras poliesportivas<h2>
                    </div>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="slidearea" >
                    <div class="numbertext">2 / 3</div>
                    <img src="assets/images/slide2.jpg" style="width:100%" >
                    <div class="text">
                        <h1>Lajes de <br><span>cobertura</span></h1>
                        <h2>Fazemos impermeabilização nos mais diversos tipo <br>de lajes de cobertura, com alta garantia<h2>
                    </div>
                </div>
            </div>
          
            <div class="mySlides fade">
                <div class="slidearea">
                    <div class="numbertext">3 / 3</div>
                    <img src="assets/images/slide3.jpg" style="width:100%">
                     <div class="text">
                        <h1>Impermeabilização de <br><span>Piscinas e Decks</span></h1>
                        <h2>Manutenção e impermeabilização de sua piscina ou deck<h2>
                    </div>
                </div>
            </div>
            <div class="controls">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            
            <div style="text-align:center" class="doters">
                <div class="dot" onclick="currentSlide(1)"></div>
                <div class="dot" onclick="currentSlide(2)"></div>
                <div class="dot" onclick="currentSlide(3)"></div>
            </div>
        </section>
        <section class="introduction">
            <div class="introduction-area">
                <div class="introduction-tittle">
                    <h1>Sejam bem vindos!</h1>
                    <h2>Você está buscando uma empresa de qualidade para realizar sua obra?</h2>
                </div>
                <div class="introduction-content">
                    <div class="introduction-desc">
                        <p>Então você veio ao lugar certo, nós da Stark Engenharia temos uma equipe altamente capacitada, que carrega uma bagagem de vários anos ativos em obras. Desta forma compreendemos que cada obra não é igual e precisa de uma solução personalizada.</p>

                        <p>Entre em contato conosco para fazer um orçamento sem compromisso, e deixe a nossa equipe mostrar como iremos solucionar o seu problema.</p> 
                        
                        <p>Clique no botão abaixo e nos deixe uma mensagem.</p>
                        <a href="https://web.whatsapp.com/send?phone=5511969490763" target="_blank">
                            <img src="assets/images/whatsapp.png">
                        </a>
                    </div>
                    <div class="introduction-banner">
                        <img src="assets/images/engineers.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer">
            <div class="footer-area">
                <div class="footer-nav">
                    <div class="footer-nav-itens">
                        <nav>
                            <ul>
                                <li><a href="home.php">HOME</a></li>
                                <li><a href="about.php">SOBRE</a></li>
                                <li><a href="services.php">SERVIÇOS</a></li>
                                <li><a href="our-team.php">NOSSO TIME</a></li>
                                <li><a href="contact.php">CONTATO</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="about-footer">
                        <a href=""><img class="logo-footer" src="assets/images/logo.png" alt=""></a>
                        <p>A Stark Engenharia é uma empresa nacional
                            que atua no segmento de impermeabilização, construções e reformas
                            de edificações e serviços especializados de construção.
                        </p>
                        <div class="about-icons">
                            <a href="https://www.instagram.com/stark_engenharia_/" target="_blank"><img src="assets/images/instagram.png" alt=""></a>
                            <a href="https://web.whatsapp.com/send?phone=5511969490763" target="_blank"><img src="assets/images/whatsappicon.png" alt=""></a>
                        </div>
                    </div>
                    <div class="contact">
                        <p>Tel: (11) 93201-4060</p>
                        <p>(11) 3911-2053</p>
                        <p>Email: rodrigo@starkeng.com.br</p>
                        <p>Rua Minas Gerais, 69, Jardim Rosinha</p>
                        <p>CEP: 05274090, São Paulo - SP</p>
                    </div>
                </div>
                <div class="footer_copy">
                    Copyright © 2018 <a href="">Stark Engenharia</a> All rights reserved</a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>