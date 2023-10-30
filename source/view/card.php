<?php
    function randomSDG(){
        include 'sdgs.php';
        shuffle($SDGLibary);
        foreach($SDGLibary as $sdg);
        echo '<article class="sdg__card" data-sdg-id="'.$sdg['id'].'">';
        echo '<img class="sdg__cardImg" src='.$sdg['photo'].'>';
        echo '<h2 class="sdg__cardH2">'.$sdg['title'].'</h2>';
        echo '<p class="sdg__card--intro">'.$sdg['introText'].'</p>';
        echo '<p class="sdg__cardLink">Klik hier voor meer informatie</p>';
        echo '</article>';
    };

    if(isset($_POST['call']) && $_POST['call'] === 'randomSDG'){
        randomSDG();
    };

    function SDGOverzicht(){
        include 'sdgs.php';
        foreach($SDGLibary as $sdg);
        echo '<article class="sdgOverzicht__card">';
        echo '<figure class="sdgOverzicht__cardFigure">';
        echo '<img src='.$sdg['photo'].'alt="" class="sdgOverzicht__cardFigure--img">';
        echo '</figure>';
        echo '<div class="sdgOverzicht__cardDiv">';
        echo '<h2 class="sdgOverzicht__cardDiv--title">'.$sdg['title'].'</h2>';
        echo '<p class="sdgOverzicht__cardDiv--intro">'.$sdg['introText'].'</p>';
        echo '</div>';
        echo '</article>';
    };
?>