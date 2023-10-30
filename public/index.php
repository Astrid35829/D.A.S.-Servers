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
</head>
<body>
    <section id="js--modal" class="modal">
        <nav class="modalHeader"></nav>
        <i id="js--modalExit" class="fa-solid fa-arrow-left modalReturn"></i>
        <div class="modalDiv">
            <article class="modalDiv__article">
                <h2 id="js--modalTitle" class="modalDiv__articleTitle"></h2>
                <p class="modalDiv__articleIntro"></p>
                <p class="modalDiv__articleInformation">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Velit, ipsam consequatur doloremque dolor aut placeat, 
                    fuga voluptas nostrum, corporis odit fugit! Laborum omnis 
                    harum sunt facere dolorem deleniti. Delectus, eveniet.
                </p>
                <a class="modalDiv__articleLink" href="https://sdgs.un.org/goals" target="_blank">
                    Klik hier voor meer informatie
                </a>
            </article>
            <figure class="modalDiv__figure">
                <img id="js--modalImage" src="" alt="" class="modalDiv__figureImg">
            </figure>
        </div>
        <div class="modalFooter"></div>
    </section>
    <nav class="nav">
        <img src="img/logoSDGs.png" alt="Een wiel met de sdg kleuren naast een tekst met The global Goals for sustainable development" class="nav__logo">
        <ul class="nav__list">
            <li class="nav__listItem"><a href="index.php" class="nav__tab">Home</a></li>
            <li class="nav__listItem"><a href="#game" class="nav__tab">Game</a></li>
            <li class="nav__listItem"><a href="#sdg" class="nav__tab">SDG's</a></li>
            <li class="nav__listItem"><a href="#over" class="nav__tab">Over</a></li>
            <li class="nav__listItem"><a href="#contact" class="nav__tab">Contact</a></li>
        </ul>
    </nav>
    <header id="game" class="header">
        <div class="header__div">
            <h1 class="header__divH1"></h1>
            <button class="cta">cta</button>
        </div>
    </header>
    <main class="main">
        <section id="sdg" class="sdg">
            <h2 class="sdg__title">SDG's</h2>
            <div class="sdg__div">
                <i id="js--arrowLeft" class="fa-solid fa-angle-left sdg__arrowsArrow"></i>
                <div id="js--shuffle" class="sdg__cards">
                    <?php 
                        include('../source/view/card.php');
                        for($i = 0; $i < 3; $i++){
                            randomSDG();
                        }
                    ?>
                </div>
                <i id="js--arrowRight" class="fa-solid fa-angle-right sdg__arrowsArrow"></i>
            </div>
        </section>
        <section id="over" class="over">
            <article class="over__text">
                <h2 class="over__h2">Over</h2>
                <p class="over__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Assumenda dicta eos cupiditate deserunt ipsa magni! 
                    Laudantium in doloremque nam quam, ratione nobis ut, 
                    eveniet aliquam tempore sequi tenetur excepturi perferendis.
                </p>
            </article>
            <img src="img/cirkelSDGs.png" alt="" class="over__img">
        </section>
    </main>
    <footer id="contact" class="footer">

    </footer>
</body>
</html>