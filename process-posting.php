<?php


$title = $_REQUEST['title'];
$description = $_REQUEST['Description'];
$price = $_REQUEST['price'];
$link = $_REQUEST['link'];

//database connection
include('dbConnect.php');

$Image=$_FILES['image']['name'];
$tmp_dir=$_FILES['image']['tmp_name'];
$imageSize=$_FILES['image']['size'];

$upload_dir='uploads/';
$imgExt=strtolower(pathinfo($Image,PATHINFO_EXTENSION));
$vaild_extensions=array('jpeg','jpg','png','gif','pdf');
$picProfile=$Image=$_FILES['image']['name'].".".$imgExt;
move_uploaded_file($tmp_dir, $upload_dir.$picProfile);



$sql = "INSERT into post(title,	description	,price,image,link) values(:title,:description,:price,:image,:link)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(":title",$title);
$stmt->bindParam(":description",$description);
$stmt->bindParam(":price",$price);
$stmt->bindParam(":image",$Image);
$stmt->bindParam(":link",$link);


$stmt->execute();

header('location: admin-dashboard.php');



?>