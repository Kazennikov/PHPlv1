<?php
include "config.php";
if (!$_POST) {
	echo "Произошла ошибка";
}	else {
		echo "Спасибо, Ваш отзыв принят";
}
		


if(isset ($_POST['ochen'])) 
{
if ( $_POST['ochen']==="1") $ozhenka="1";
if ( $_POST['ochen']==="2") $ozhenka="2";
if ( $_POST['ochen']==="3") $ozhenka="3";
if ( $_POST['ochen']==="4") $ozhenka="4";
if ( $_POST['ochen']==="5") $ozhenka="5";
}

$user_name=$_POST['user_name'];
$user_mail=$_POST['user_mail'];
$user_subj=$_POST['user_subj'];
$user_tekst=$_POST['user_tekst'];

$otziv = "INSERT INTO forma (name_user, user_mail, subj, text, ozhenka) VALUES ('$user_name', '$user_mail', '$user_subj', '$user_tekst','$ozhenka')";
$form_otzv = mysqli_query($connection,$otziv)  or die(mysqli_error());	
?>


