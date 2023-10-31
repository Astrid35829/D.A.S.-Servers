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
    <title>NVVN SDG's Page 2</title>
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
    <main class="main">
        <section class="sdgOverzicht">
            <?php
                include('../source/view/card.php');
                include('../source/view/sdgs.php');
                for($i = 0; $i < count($SDGLibary); $i++){
                    SDGOverzicht();
                }
            ?>
        </section>
    </main>
    <footer id="contact" class="footer">

    </footer>
</body>
</html>