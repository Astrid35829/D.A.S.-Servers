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
    <nav class="nav OZnav">
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
    <main class="main">
        <?php
            include('../source/item.php');
        ?>
    </main>
    <footer id="contact" class="footer OZfooter">
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