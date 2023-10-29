<?php
    function randomSDG(){
        include 'sdgs.php';
        shuffle($SDGLibary);
        foreach($SDGLibary as $sdg);
        echo '<article class="sdg__card">';
        echo '<img class="sdg__cardImg" src='.$sdg['photo'].'>';
        echo '<h2 class="sdg__cardH2">'.$sdg['title'].'</h2>';
        echo '<p class="sdg__card--intro">'.$sdg['introText'].'</p>';
        echo '<p class="sdg__cardLink">Klik hier voor meer informatie</p>';
        echo '</article>';
    };

    if(isset($_POST['call']) && $_POST['call'] === 'randomSDG'){
        randomSDG();
    };
?>