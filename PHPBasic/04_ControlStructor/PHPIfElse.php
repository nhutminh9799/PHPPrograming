<?php
    $numberRandom = rand(1,100);

    if($numberRandom > 50 and $numberRandom <= 70) {
        echo "Ngày đẹp!";
    } elseif($numberRandom > 70) {
        echo "Ngày mưa";
    } else {
        echo "Ngày Giông Tố!";
    }
?>