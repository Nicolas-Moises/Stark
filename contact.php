<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stark Engenharia - Contato</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
                <nav>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="about.php">SOBRE</a></li>
                        <li><a href="services.php">SERVIÇOS</a></li>
                        <li><a href="our-team.php">NOSSO TIME</a></li>
                        <li><a href="contact.php" class="active">CONTATO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
    <section class="section-map">
            <div class="section-map--area">
                <div class="section-map--info">
                    <div class="section-map--info-item">
                        <img src="assets/images/arroba.png" alt="">
                        <span>E-mail </span> : rodrigo@starkeng.com.br
                    </div>
                    <div class="section-map--info-item">
                        <img src="assets/images/localizacao.png" alt="">
                        <span>Endereço </span> : Rua Minas Gerais, 69, Jardim Rosinha CEP: 05274090, São Paulo - SP
                    </div>
                    <div class="section-map--info-item">
                        <img src="assets/images/phone-call.png" alt="">
                        <span>Telefone </span> : +55 (11) 3911-2053
                    </div>
                    <div class="section-map--info-item">
                        <img src="assets/images/whatsgray.png" alt="">
                        <span>Whatapp </span> : +55 (11) 96949-0763
                    </div>
                    <div class="section-map--info-item">
                        <img src="assets/images/instagram.png" alt="">
                        <span>Instagram </span> : www.starkengenharia.com.br
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </section>
        <section class="default light">
            <div class="section-title">
                Contate-nos
            </div>

            <div class="section-desc contact">
                Preencha as informações abaixo
            </div>
            
            <div class="section-contact">
                <div class="section-contact-form">
                    <input type="text" name="nome" placeholder="Nome" class="contact-item">
                    <input type="email" name="email" placeholder="E-mail" class="contact-item">
                    <input type="number" name="fone" placeholder="Telefone" class="contact-item">
                    <input type="text" name="endereco" placeholder="Bairro - Cidade" class="contact-item">
                    <textarea name="message" id="" rows="5" placeholder="Do que precisa?"></textarea>
                </div>
            </div>
            <div class="button-contact">
                <a class="button" href="">Enviar</a>
            </div>
        </section>
    </main>
    <?php 
        include_once('footer.php')
    ?>
</body>
</html>