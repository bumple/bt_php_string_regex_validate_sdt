<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    SĐT: <input type="text" name="phoneNumber">
    <input type="submit" name="btn" value="Xác Nhận">
</form>
<br>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $phoneNumber = $_REQUEST['phoneNumber'];
    $pattern = '/^\([0-9]{2}\)[-]\([0][0-9]{9}\)$/';
    if (preg_match($pattern,$phoneNumber)){
        echo "SĐT: $phoneNumber hợp lệ ";
    }else{
        echo "SĐT: $phoneNumber không hợp lệ ";
    }
}
?>
</body>
</html>