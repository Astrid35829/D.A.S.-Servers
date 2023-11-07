<?php
    function displaySDG($limit = 3){
        include 'config.php';
        if ($result->num_rows > 0){
            $sdgData = [];
            while ($row = $result->fetch_assoc()){
                $sdgData[] = $row;
            }
            shuffle($sdgData);
            $selectedData = array_slice($sdgData, 0, $limit);
            foreach ($selectedData as $row){
                $sdgImage = $row['photo'];
                $base64Image = base64_encode($sdgImage);
                echo '<article class="sdg__card" data-sdg-id="'.$row['id'].'">';
                echo '<img class="sdg__card--photo" src="data:image/webp;base64,'.$base64Image.'" data-sdg-id="'.$row['id'].'">';
                echo '<h2 class="sdg__cardH2" data-sdg-id="'.$row['id'].'">'.$row['title'].'</h2>';
                echo '<p class="sdg__card--intro" data-sdg-id="'.$row['id'].'">'.$row['introText'].'</p>';
                echo '<a href="sdgOverzicht.php?sdgId='.$row['id'].'" class="sdg__cardLink" data-sdg-id="'.$row['id'].'">Klik hier voor meer informatie</a>';
                echo '</article>';
            }
        }
        $connection->close();
    };

    if(isset($_POST['call']) && $_POST['call'] === 'displaySDG'){
        displaySDG();
    };
?>