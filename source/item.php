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
        $classData = ["One", "Two", "Three"];
        shuffle($classData);
        $randomClass = $classData[0];
        echo '<section class="OZsdgItem'.$randomClass.'">';
        echo '<a href="index.php#sdg" class="OZsdgItem'.$randomClass.'__button"><i class="fa-solid fa-arrow-left"></i></a>';
        echo '<div class="OZsdgItem'.$randomClass.'__div">';
        echo '<span class="OZsdgItem'.$randomClass.'__divSpan">';
        echo '<h2 class="OZsdgItem'.$randomClass.'__divTitle">'.$row['title'].'</h2>';
        echo '<h2 class="OZsdgItem'.$randomClass.'__divIntro">'.$row['introText'].'</h2>';
        echo '</span>';
        echo '<p class="OZsdgItem'.$randomClass.'__divDescription">'.$row['description'].'</p>';
        echo '<a href="'.$row['URL'].'" class="OZsdgItem'.$randomClass.'__divLink" target="_blank">Klik hier voor meer informatie</a>';
        echo '</div>';
        echo '<figure class="OZsdgItem'.$randomClass.'__figure">';
        echo '<img src="data:image/webp;base64,'.$base64Image.'" alt="" class="OZsdgItem'.$randomClass.'__figureImg">';
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
