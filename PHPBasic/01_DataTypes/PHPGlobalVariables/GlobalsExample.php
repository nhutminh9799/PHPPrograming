<?php
    $x = 2;
    $y = 3;

    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();

    echo $z;
?>