<?php
require 'ketnoiCSDL.php';

$dem = array(
    "TT" => 0,
    "NgDu" => 0,
    "NgDan" => 0,
    "NgKhac" => 0
);

$sql = "SELECT * FROM `ten`";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $gt = $row['tenchon'];
        $dem[$gt]++;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <h2>Truyện Kiều là tên do ai đặt</h2>
        <p><?php echo"Thanh Tâm tài nhân - ".$dem["TT"]." phiếu"?></p>
        <p><?php echo"Nguyễn Du - ".$dem["NgDu"]." phiếu"?></p>
        <p><?php echo"Người dân - ".$dem["NgDan"]." phiếu"?></p>
        <p><?php echo"Người khác - ".$dem["NgKhac"]." phiếu"?></p>
        <a href="giao_dien.php">Quay về trang chính</a>
    </form>
</body>
</html>