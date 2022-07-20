<?php
    $timeStart = microtime(true);

    // Echo thông thường
    print "Hello World\n";

    // Echo nhiều chuỗi muốn nối kết
    print "Hello"." World\n";

    // Dùng để cộng chuỗi
    print "Hello"." World\n";

    $ten = "Nhut";
    $tuoi = 23;

    // Cộng chuỗi nhiều đối số
    print "Hello ".$ten.", Age: ".$tuoi."\n";

    // Sử dụng hàm Microtime
    $diff = microtime(true) - $timeStart;
    $sec = intval($diff);
    $micro = $diff - $sec;
    
    echo 'Jobs hoàn thành trong: ' . round($micro * 1000, 4) . ' ms';
?>
