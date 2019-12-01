<?php
  header('Content-type: text/html; charset=utf-8');
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $art = $_POST['art'];
  $color = filter_var(trim($_POST['color']),FILTER_SANITIZE_STRING);
  $depth = $_POST['depth'];
  $materialname = filter_var(trim($_POST['materialname']),FILTER_SANITIZE_STRING);
  $gabweight = $_POST['gabweight'];
  $gablenght = $_POST['gablenght'];
  $gabdepth = $_POST['gabdepth'];
  $num = $_POST['num'];

  $db_connect = new mysqli('localhost','root','root','ordersdb');
  $db_connect->set_charset('utf8');
  if ($db_connect->connect_error) {
    die("Connection fail : " .$db_connect->connect_error);
  }else{
    //echo "Connect success" ;
    echo "Connection succes";
  }
  $db_connect->query("INSERT INTO `orders`
    (`name`, `art`, `color`, `depth`, `materialname`, `gabweight`, `gablenght`, `gabdepth`, `number`)
      VALUES ('$name', '$art', '$color', '$depth', '$materialname', '$gabweight', '$gablenght', '$gabdepth', '$num')");
  $db_connect->close();
  header("Location: /");
  exit();
?>
