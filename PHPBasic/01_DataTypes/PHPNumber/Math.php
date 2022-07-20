<?php
    //Hàm lấy số PI
    echo (pi()); // Output: 3.1415926535898

    //Tìm số lớn nhất và nhỏ nhất trong dãy
    echo "\n";
    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo "\n";
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150

    //Hàm lấy trị tuyệt đối
    echo "\n";
    echo(abs(-7.7));

    //Hàm lấy căn bậc 2
    echo "\n";
    echo(sqrt(64));

    // Hàm lấy căn bậc 3
    echo "\n";
    echo(pow(27,1/3));

    //Hàm làm tròn 
    echo "\n";
    echo(round(7.984));
    echo "\n";
    echo(round(7.984,2));

    echo "\n";
    //Hàm lấy số ngẫu nhiên
    echo (rand());
    
    echo "\n";
    echo (rand(10,100));
?>