<?php
    $myString = "Hello World!";

    // Hàm dùng để lấy chiều dài chuỗi
    echo strlen($myString); //Output: 12

    echo "\n";

    // Đếm số lượng từ trong chuỗi
    echo str_word_count($myString); //Output: 2

    echo "\n";

    // Đảo chuỗi
    echo strrev($myString); //Output: !dlroW olleH

    echo "\n";

    // strpos(a,b): Vị trí của từ b trong chuỗi a (phân biệt hoa thường)
    echo strpos($myString,"World!"); //Output: 6

    echo "\n";

    // str_replace(a,b,c): Thay chuỗi a thành chuỗi b trong chuỗi c
    echo str_replace("World!","Nhựt",$myString); //Output: Hello Nhựt!
?>