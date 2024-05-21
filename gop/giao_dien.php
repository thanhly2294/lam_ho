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
            width: 55%;
            margin: 10px auto 10px auto;
        }
        .container{
            width: 55%;
            background-color: #FFFAF0;
            margin: 20px auto 20px auto;
        }
        .A{
            background-color: hsla(250, 36%, 0%, 0.1);
            border-radius: 10px;
            padding: 9px;
        }
        .bq{
            color: #ffffff;
            border: 1px solid pink;
            background-color: #696969;
            width: 90px;
            height: 30px;
            border-radius: 5px;
        }
        .bq:hover{
            cursor: pointer;
        }
        .button {
            padding: 15px 25px;
            font-size: 12px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #04AA6D;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
            }

            .button:hover {background-color: #3e8e41}

            .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
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
            <input class="bq" type="submit" name="btn-chon" id="chon" value="Biểu quyểt">
        </form>
    </div>
    <form class="g" action="giaodien_KQ.php">
    <button class="button" name>Xem kết quả</button>
    </form>
</body>
</html>