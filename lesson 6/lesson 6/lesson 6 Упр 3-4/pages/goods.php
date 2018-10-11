<?php
include "config.php";

$id = $_GET['id'];


$zapros_ima= "SELECT naime FROM goods WHERE id='$id'";
$rezult_ima = mysqli_query($connection,$zapros_ima)  or die(mysqli_error());
			$row = mysqli_fetch_row($rezult_ima);
			 $ima = $row[0];
			 

			 
	$zapros_img="SELECT img FROM goods WHERE id='$id'";
		$result_img = mysqli_query($connection,$zapros_img)  or die(mysql_error());
			$row = mysqli_fetch_row($result_img);
			$img = $row[0];	
		

	$zapros_price="SELECT price FROM goods WHERE id='$id'";
		$result_price = mysqli_query($connection,$zapros_price)  or die(mysql_error());
			$row = mysqli_fetch_row($result_price);
			$price = $row[0];
		
	$zapros_opis="SELECT opisanie FROM goods WHERE id='$id'";
		$result_opis = mysqli_query($connection,$zapros_opis)  or die(mysql_error());
			$row = mysqli_fetch_row($result_opis);
			$opis = $row[0];
			
	$zapros_dopis="SELECT dop_opisani FROM goods WHERE id='$id'";
		$result_dopis = mysqli_query($connection,$zapros_dopis)  or die(mysql_error());
			$row = mysqli_fetch_row($result_dopis);
			$dopis = $row[0];			
			
			
		/*	echo $id;
			echo $img;
			echo $price;
			echo $opis;
			echo $dopis;
		*/		


	
?>