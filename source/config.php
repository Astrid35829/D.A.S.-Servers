<?php
    include 'sdgs.php';
    shuffle($SDGLibary);
    foreach($SDGLibary as $sdg);
    echo '<img class="sdg__cardImg" src='.$sdg['photo'].'>';
    echo '<h2 class="sdg__cardH2">'.$sdg['title'].'</h2>';
    echo '<p class="sdg__card--intro">'.$sdg['introText'].'</p>';
?>