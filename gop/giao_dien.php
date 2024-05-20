<?php
    require 'ketnoiCSDL.php';
    if(isset($_POST['btn-chon'])){
        $lay = $_POST['ng'];
        $sql =  "INSERT INTO `ten`(`tenchon`) VALUE('$lay')"; //ten ở đây lấy đúng với giá trị của BẢNG còn tenchon là TÊN BẢNG
        if($conn->query($sql)===TRUE){
            echo "<script>alert('Cám ơn bạn đã bầu chọn');</script>";
        }
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khảo sát</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .g{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <legend>Truyện Kiều Nguyễn Du do ai đặt</legend>
            <p class="A"><input type="radio" name="ng" id="ng" value="TT" checked>Thanh Tâm tài nhân</p>
            <p class="A"><input type="radio" name="ng" id="ng" value="NgDu">Nguyễn Du</p>
            <p class="A"><input type="radio" name="ng" id="ng" value="NgDan">Người dân</p>
            <p class="A"><input type="radio" name="ng" id="ng" value="NgKhac">Người khác</p>
            <input type="submit" name="btn-chon" id="chon" value="Biểu quyểt">
        </form>
    </div>
    <form class="g" action="giaodien_KQ.php"><input type="submit" name="btn_hienthi" id="ht" value="Xem kết quả"></form>
</body>
</html>