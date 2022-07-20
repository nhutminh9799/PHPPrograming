<?php
    // Trả về thời gian hiện tại trong UNIX theo dạng micro
    $timeStart = microtime(true);
    echo $timeStart;
    // Echo thông thường
    echo "Hello World";

    // Sử dụng hàm Microtime
    $diff = microtime(true) - $timeStart;
    $sec = intval($diff);
    $micro = $diff - $sec;
    
    echo 'Jobs hoàn thành trong: ' . round($micro * 1000, 4) . ' ms';

    $timeStart = microtime(true);

    // Echo thông thường
    print "Hello World";

    // Sử dụng hàm Microtime
    $diff = microtime(true) - $timeStart;
    $sec = intval($diff);
    $micro = $diff - $sec;
    
    echo 'Jobs hoàn thành trong: ' . round($micro * 1000, 4) . ' ms';
?>
