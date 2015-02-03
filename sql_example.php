<?php
require_once __DIR__.'/config.php';

try {
    
    $dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port='.DB_PORT.';charset=utf8';
    $db_connect = new PDO($dsn, DB_USER, DB_PASS);
    
    $db_query_result = $db_connect->query("SELECT * FROM `borrow` WHERE 1");
    
    $result = $db_query_result->fetchAll();
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

        <title></title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
    
    <body>

        <h1>所有東東</h1>
        
        
        <ul>
            <?php 
                for($i=0; $i<count($result); $i++) {
                    echo '<li>'.'第'.$i.'位: '.$result[$i]['name'].'</li>'; 
                     echo '<li>'.'第'.$i.'位: '.$result[$i]['tel'].'</li>'; 
                }    
            ?>
        </ul>

        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    </body>
</html>
