<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&display=swap" rel="stylesheet">
    <script src="js/846de9e07b.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
    <title>NVVN SDG's</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/cirkelSDGs.webp" />
</head>
<body>
    <nav class="nav">
        <img src="img/logoSDGs.webp" alt="Een wiel met de sdg kleuren naast een tekst met The global Goals for sustainable development" class="nav__logo">
        <ul class="nav__list">
            <li class="nav__listItem"><a href="index.php" class="nav__tab">Home</a></li>
            <li class="nav__listItem"><a href="#game" class="nav__tab">Game</a></li>
            <li class="nav__listItem"><a href="#sdg" class="nav__tab">SDG's</a></li>
            <li class="nav__listItem"><a href="#over" class="nav__tab">Over</a></li>
            <li class="nav__listItem"><a href="#contact" class="nav__tab">Contact</a></li>
            <i id="js--darkmode" class="fa-solid fa-moon darkmode"></i>
        </ul>
        <ul class="nav__functionsList">
        </ul>
    </nav>
    <header id="game" class="header">
        <div class="header__div">
            <h1 class="header__divH1"></h1>
            <img src="img/cirkelSDGs.webp" alt="" class="header__img">
            <a class="cta" href="https://sdggame.nl/">speel hier!</a> 
        </div>
    </header>
    <main class="main">
        <section id="sdg" class="sdg">
            <h2 class="sdg__title">SDG's</h2>
            <div class="sdg__div">
                <i id="js--arrowLeft" class="fa-solid fa-angle-left sdg__arrowsArrow"></i>
                <div id="js--shuffle" class="sdg__cards">
                    <?php 
                        include('../source/card.php');
                        displaySDG();
                    ?>
                </div>
                <i id="js--arrowRight" class="fa-solid fa-angle-right sdg__arrowsArrow"></i>
            </div>
        </section>
        <section id="over" class="over">
            <article class="over__text">
                <h2 class="over__h2">Wat zijn de SDG's</h2>
                <p class="over__p">
                In de wereld van vandaag staan we voor grote uitdagingen: 
                armoede, honger, ongelijkheid, 
                klimaatverandering en de biodiversiteitscrisis zijn slechts enkele van de problemen die we dringend moeten aanpakken.
                </p>
                <p class="over__p">
                    Grote uitdagingen vereisen gedurfde actie om ze te overwinnen, 
                    en dat is waar de Sustainable Development Goals om de hoek komen kijken. 
                    Ze zijn ontwikkeld om tegen 2030 een groenere, eerlijkere en betere wereld te bouwen, 
                    en we hebben allemaal een rol bij het bereiken ervan.
                </p>
                <p class="over__p">
                Met deze doelen willen we in 2030 een duurzame wereld voor iedereen bereiken, 
                waarin niemand wordt buitengesloten. In 2015 hebben alle 193 landen die lid zijn van de Verenigde Naties (VN) de Sustainable Development Goals aangenomen. 
                De doelen gelden voor alle landen en voor alle mensen. 
                </p>
            </article>
            <img src="img/uitlegSDGs.webp" alt="" class="over__img">
        </section>
    </main>
    <footer id="contact" class="footer">
        <figure class="footer__logo">
            <img src="img/logoSDGs.webp" alt="" class="logo__img">
        </figure>
        <article class="footer__email">
            <h2 class="email__h2">Vragen?</h2>
            <p class="email__p">Stuur een email naar: <a class="email__a" href = "mailto: info@nvvn.nl">info@nvvn.nl</a></p>
        </article>
        <article class="footer__adres">
            <h2 class="adres__h2">Adres</h2>
            <p class="adres__p">NVVN</p>
            <p class="adres__p">Eisenhowerlaan 128</p>
            <p class="adress__p">3527HJ Utrecht</p>
        </article>
        <article class="footer__social">
            <div class="social__facebook">
                <a href="https://www.facebook.com/UNANetherlands" class="social__a">
                    <i class="fa-brands fa-facebook social__logo"></i>
                    <p class="social__p">Nederlandse Vereniging voor de Verenigde Naties</p>
                </a>
            </div>
            <div class="social__instagram">
                <a href="https://www.instagram.com/nederlandse_vereniging_vn/" class="social__a">
                    <i class="fa-brands fa-instagram social__logo"></i>
                    <p class="social__p">nederlandse_vereniging_vn</p>
                </a>
            </div>
            <div class="social__linkedin">
                <a href="https://www.linkedin.com/company/nederlandse-vereniging-voor-de-verenigde-naties/" class="social__a">
                    <i class="fa-brands fa-linkedin social__logo"></i>    
                    <p class="social__p">Nederlandse Vereniging voor de Verenigde Naties</p>
                </a>
            </div>
            <div class="social__twitter">
                <a href="https://twitter.com/UNANL" class="social__a">
                <i class="fa-brands fa-twitter social__logo"></i>    
                <p class="social__p">Dutch UN Association (NVVN)</p>
                </a>
            </div>
        </article>
    </footer>
</body>
</html>