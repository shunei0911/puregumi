<?php
$pdo = new PDO('mysql:host=mysql311.phy.lolipop.lan;dbname=LAA1553861-pure;charset=utf8','LAA1553861','pure');
$id = $_POST['login_id'];
$pass = $_POST['password'];
$sql = $pdo->prepare('select * from user where mail = ? and password = ?');
$sql->execute([$id,$pass]);

$row_count = $sql->rowCount();
if($row_count > 0){
    header("Location: home.php");
}else {
    header("Location: roguin2.php");
}

?>