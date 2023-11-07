<?php
if (isset($_GET['sdgId'])) {
    $sdgId = $_GET['sdgId'];
    include 'config.php';
    $sql = "SELECT * FROM sdgs WHERE id = $sdgId";
    $result = $connection->query($sql);

    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $itemPhoto = $row['photo'];
        $base64Image = base64_encode($itemPhoto);
        echo '<section class="OZsdgItem">';
        echo '<div class="OZsdgItem__div">';
        echo '<span class="OZsdgItem__divSpan">';
        echo '<h2 class="OZsdgItem__divTitle">'.$row['title'].'</h2>';
        echo '<h2 class="OZsdgItem__divIntro">'.$row['introText'].'</h2>';
        echo '</span>';
        echo '<p class="OZsdgItem__divDescription">'.$row['description'].'</p>';
        echo '<a href="'.$row['URL'].'" class="OZsdgItem__divLink"></a>';
        echo '</div>';
        echo '<figure class="OZsdgItem__figure">';
        echo '<img src="data:image/webp;base64,'.$base64Image.'" alt="" class="OZsdgItem__figureImg">';
        echo '</figure>';
        echo '</section>';
    }
    else {
        echo "fout " . $sdgId;
    }
    $connection->close();
    }
    else{
    echo "geen waarde fout";
    }
?>
