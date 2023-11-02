<?php

    function randomSDG(){
        include 'config.php';
        echo '<article class="sdg__card" data-sdg-id="'.$sdgItem['id'].'">';
        echo '<h2 class="sdg__cardH2">'.$sdgItem['title'].'</h2>';
        echo '<p class="sdg__card--intro">'.$sdgItem['introText'].'</p>';
        echo '<p class="sdg__cardLink">Klik hier voor meer informatie</p>';
        echo '</article>';
    };

    if(isset($_POST['call']) && $_POST['call'] === 'randomSDG'){
        randomSDG();
    };

    // function SDGOverzicht(){
    //     include '../config.php';
    //     foreach($SDGLibary as $sdg);
    //     echo '<article class="sdgOverzicht__card">';
    //     echo '<figure class="sdgOverzicht__cardFigure">';
    //     echo '<img src='.$sdg['photo'].'alt="" class="sdgOverzcht__cardFigure--img">';
    //     echo '</figure>';
    //     echo '<div class="sdgOverzicht__cardDiv">';
    //     echo '<h2 class="sdgOverzicht__cardDiv--title">'.$sdg['title'].'</h2>';
    //     echo '<p class="sdgOverzicht__cardDiv--intro">'.$sdg['introText'].'</p>';
    //     echo '</div>';
    //     echo '</article>';
    // };

    // $dir = [];
    //     if (file_exists(dirname(__FILE__).'/sqlToArray.php')) {
    //         $dir = parse_ini_file(dirname(__FILE__).'/sqlToArray.php');
    // //     };
    //     echo '<img class="sdg__cardImg" src='.$sdgItem[''].'>';
?>