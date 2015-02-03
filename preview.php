<?php

$input_name = $_POST['inputNameID'];
$input_unit = $_POST['inputUnit'];
$input_tel = $_POST['inputTel'];
$input_use = $_POST['inputUse'];

$input_no = $_POST['inputNo'];
$input_bat = $_POST['inputBattery'];
$input_tri = $_POST['inputTripod'];
$input_staff = $_POST['inputStaff'];
$input_pow = $_POST['inputPower'];
$input_usb = $_POST['inputUSB'];

require_once __DIR__.'/config.php';

try {
    
    $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT.';charset=utf8';
    $db_connect = new PDO($dsn, DB_USER, DB_PASS);
    
//    $db_query_result = $db_connect->query("SELECT * FROM `borrow` WHERE 1");
    $db_insert = "INSERT INTO `equipment`.`borrow` (`id`, `name`, `unit`, `tel`, `purpose`, `restoration_date`, `dv_no`, `batteries _total`, `tripod_total`, `staff`,`power_line`, `usb`, `other`) VALUES (NULL, '".$input_name."', '".$input_unit.".', '".$input_tel."', '".$input_use."', 'b', '1', '1', '1', '1', '1', '1', NULL)";
    
    //$db_insert = INSERT INTO `equipment`.`borrow` (`id`, `name`, `unit`, `tel`, `purpose`, `restoration_date`, `dv_no`, `batteries _total`, `tripod_total`, `staff`,`power_line`, `usb`, `other`) VALUES (NULL, '".$input_name."', '".$input_unit."', '".$input_tel."', '".$input_use."', 'A', '1', '1', '1', '', '1', '1', NULL);
       
    $db_connect->exec($db_insert);
//    $result = $db_query_result->fetchAll();
    
}
catch (PDOException $e) {
    echo '<h1>資料庫連接錯誤</h1>'.$e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>剛剛填入的</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
    
    <body>

        <h1>你剛剛填入的...</h1>
        <ul>
            <li>姓名: <?=$input_name?></li>
            <li>單位: <?=$input_unit?></li>
            <li>電話: <?=$input_tel?></li>
            <li>用途: <?=$input_use?></li>
            <li>歸還日期:</li>
        </ul>
        
        <h2>管理者顯示...</h2>
        <ul>
            <li>DV編號: <?=$input_NO?> </li>
            <li>電池數量: <?=$input_Bat?> </li>
            <li>腳架數量: <?=$input_Tri?> </li>
            <li>經手人: <?=$input_Staff?> </li>
            <li>電源線: <?=$input_Pow?> </li>
            <li>傳輸線: <?=$input_Usb?> </li>
        </ul>
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    </body>
</html>
