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