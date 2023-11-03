<?php

    function displaySDG($limit = 3){
        include 'config.php';
        $count = 0;
    
        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                if ($count < $limit){
                    $sdgImage = $row['photo'];
                    $base64Image = base64_encode($sdgImage);
                    echo '<article class="sdg__card" data-sdg-id="'.$row['id'].'">';
                    echo '<img class="sdg__card--photo" src="data:image/webp;base64,'.$base64Image.'">';
                    echo '<h2 class="sdg__cardH2">'.$row['title'].'</h2>';
                    echo '<p class="sdg__card--intro">'.$row['introText'].'</p>';
                    echo '<p class="sdg__cardLink">Klik hier voor meer informatie</p>';
                    echo '</article>';
                    $count++;
                } else{
                    break;
                }
            }
        }
    
        $connection->close();
    };
    


    if(isset($_POST['call']) && $_POST['call'] === 'displaySDG'){
        displaySDG();
    };

    // function SDGOverzicht(){
    //     include '../config.php';
    //     foreach($SDGLibary as $sdg);
    //     echo '<article class="sdgOverzicht__card">';
    //     echo '<figure class="sdgOverzicht__cardFigure">';
    //     echo '<img src='.$sdg['photo'].'alt="" class="sdgOverzicht__cardFigure--img">';
    //     echo '</figure>';
    //     echo '<div class="sdgOverzicht__cardDiv">';
    //     echo '<h2 class="sdgOverzicht__cardDiv--title">'.$sdg['title'].'</h2>';
    //     echo '<p class="sdgOverzicht__cardDiv--intro">'.$sdg['introText'].'</p>';
    //     echo '</div>';
    //     echo '</article>';
    // };
?>