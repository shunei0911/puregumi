<?php
$pdo = new PDO('mysql:host=mysql311.phy.lolipop.lan;dbname=LAA1553861-pure;charset=utf8','LAA1553861','pure');
$name = $_POST['user_name'];
$gender = $_POST['gender'];
$address = $_POST['user_address'];
$birth = $_POST['birthday'];
$mail = $_POST['user_mail'];
$post = $_POST['user_post'];
$pass =$_POST['user_pass'];
$sql = $pdo->prepare('insert into user(user_name,password,seibetu,yubin,address,birthday) values(?,?,?,?,?,?)');
$sql->execute([$name,$pass,$gender,$post,$address,$birth]);
header("Location: roguin.php");
?>