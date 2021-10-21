<?php
    //Bước 01:Kiểm tra Kết nối vào CSDL:
    $conn = mysqli_connect('localhost', 'root', '', 'project');
    if (!$conn) {
        echo "Kết nối không thành công";
    }
?>