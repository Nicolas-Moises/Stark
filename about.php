<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stark Engenharia - Sobre</title>
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
                        <li><a href="about.php" class="active">SOBRE</a></li>
                        <li><a href="services.php">SERVIÇOS</a></li>
                        <li><a href="our-team.php">NOSSO TIME</a></li>
                        <li><a href="contact.php">CONTATO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
    <section class="default light">
            <div class="section-title">
                Sobre Nós
            </div>

            <div class="section-desc">
                Quem somos nós?
            </div>
            
            <div class="section-body">
                <div class="section-aboutus">
                    <div class="section-aboutus--left">
                        <p>A Stark engenharia é uma empresa altamente qualificada no seguimento de impermeabilização e reformas dentro da 
                            construção civil. Somos referência no mercado pelo diferencial de nosso departamento técnico que atua de maneira 
                            efetiva na execução dos serviços prestados, transpassando confiança, qualidade e um ótimo atendimento aos nossos 
                            clientes.
                        </p><br>
                        <p>Nossa história não acontece somente pela nossa existência, mas sim quando nos juntamos aos nossos clientes e 
                            cumprimos nosso propósito de servir, promovendo o progresso das empresas e da sociedade.</p> <br>
                    </div>
                    <div class="section-aboutus--right">
                        <img src="assets/images/architect.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="default dark">
            <div class="section-title">
                E tem mais!
            </div>

            <div class="section-desc">
                Seguimos com os seguintes pilares:
            </div>
            
            <div class="section-body">
                <div class="section-services">
                    <div class="section-service">
                        <h4>Missão</h4>
                        <p>Valorizar os sonhos dos clientes com os nossos serviços, prezando sempre a qualidade e garantia, cuja a satisfação 
                            dos nossos clientes assegurem a sustentabilidade da nossa empresa.</p>
                    </div>
                    <div class="section-service">
                        <h4>Visão</h4>
                        <p>Ocupar posição de destaque e qualidade na área da construção civil, consolidando sua base no mercado da capital, 
                            interior e litoral Paulista</p>
                    </div>
                    <div class="section-service">
                        <h4>Valores</h4>
                        <p>Comprometimento com resultado, ética, justiça, profissionalismo e transparência.</p>
                    </div>
                </div>
            </div>

        </section>
        <section class="company">
            <div class="companys">
                <img src="assets/images/mission.png" alt="" width="75px">
            </div>
            <div class="companys">
                <img src="assets/images/eye.png" alt="" width="75px">
            </div>
            <div class="companys">
                <img src="assets/images/business.png" alt="" width="75px">
            </div>
        </section>
    </main>
    <?php 
        include_once('footer.php')
    ?>
</body>
<script src="script.js"></script>
</html>