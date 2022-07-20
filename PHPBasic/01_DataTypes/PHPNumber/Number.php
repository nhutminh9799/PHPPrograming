<?php
    $number = 1;

    var_dump(is_int($number));

    //echo is_int($number);

    $numberFloat = 1.2;

    // Kiểm tra numberFloat là số nguyên
    var_dump(is_int($numberFloat));

    // Kiểm tra numberFloat là số thực
    var_dump(is_float($numberFloat));

    // Kiểm tra numberFloat là số không
    var_dump(is_numeric($numberFloat));

    //Ép kiểu

    $stringNumber = "2";
    $numberCast = (int)$stringNumber;

    // Kiểm tra stringNumber là số không?
    var_dump(is_numeric($stringNumber)); //Output: True

    // Kiểm tra numberCast là số không?
    var_dump(is_numeric($numberCast)); //Output: True;

    $stringNoneCast = "Abc";

    // Kiểm tra stringNoneCast là số không?
    var_dump(is_numeric($stringNoneCast)); //Output: Flase
?>