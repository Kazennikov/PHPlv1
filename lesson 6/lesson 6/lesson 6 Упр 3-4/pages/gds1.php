<?php
include "config.php";

// для каталога нужны имена товаров, адес картинки, id  id=название=адрекс картинки

$zapros_ima= "SELECT naime FROM goods";
$rezult_ima = mysqli_query($connection,$zapros_ima)  or die(mysqli_error());
$arr = array();
while($row = mysqli_fetch_assoc($rezult_ima))
        $arr[] = $row;
	//print_r($arr);	
	foreach ($arr as $key => $value){
		foreach ($value as $nmn => $name){
		$key=$i++;
	$zapros_id="SELECT id FROM goods WHERE naime='$name'";
		$result_id = mysqli_query($connection,$zapros_id)  or die(mysql_error());
			$row = mysqli_fetch_row($result_id);
			 $id = $row[0];
	
		
		
	$zapros_opisanie="SELECT opisanie FROM goods WHERE naime='$name'";
		$result_opisanie = mysqli_query($connection,$zapros_opisanie)  or die(mysql_error());
			$row = mysqli_fetch_row($result_img);
			$opisanie = $row[0];	
			
			
		$zapros_dopopisani="SELECT dop_opisani FROM goods WHERE naime='$name'";
		$result_dopopisani = mysqli_query($connection,$zapros_dopopisani)  or die(mysql_error());
			$row = mysqli_fetch_row($result_img);
			$dop_opisani = $row[0]	;
			
			
			echo $opisanie;
			echo $dop_opisani;
	}
	}	
?>