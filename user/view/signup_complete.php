<?php
$pdo = new PDO('mysql:host=mysql311.phy.lolipop.lan;dbname=LAA1553861-pure;charset=utf8','LAA1553861','pure');
$name = $_POST['name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$birth = $_POST['birth_year']."/".$_POST['birth_month']."/".$_POST['birth_day'];
$mail = $_POST['email'];
$post = $_POST['post_code'];
$pass =$_POST['password'];
$sql = $pdo->prepare('insert into user(user_name,password,seibetu,yubin,address,birthday) values(?,?,?,?,?,?)');
$sql->execute([$name,$pass,$gender,$post,$address,$birth]);
header("Location: roguin.php");
?>