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
    <link rel="stylesheet" href="csss/style.css">
    <script src="js/mainn.js" defer></script>
    <title>NVVN SDG's</title>
</head>
<body>
    <header class="header">
        <ul class="header__navigation">
        </ul>
    </header>
    <section class="heading">
        <div class="heading__div">
            <h1 class="heading__divH1"></h1>
            <button class="cta">cta</button>
        </div>
    </section>
    <main class="main">
        <section class="sdg">
            <h2 class="sdg__title">SDG's</h2>
            <div class="sdg__cards">
                <?php 
                    for($i = 0; $i < 3; $i++){
                        include('../source/view/card.php');
                    }
                ?>
            </div>
            <div class="sdg__arrows">
                <i id="js--arrowLeft" class="fa-solid fa-chevron-left sdg__arrowsArrow"></i>
                <i id="js--arrowRight" class="fa-solid fa-chevron-right sdg__arrowsArrow"></i>
            </div>
        </section>
        <section class="over">
        </section>
    </main>
    <footer class="footer"></footer>
</body>
</html>