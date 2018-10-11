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
			 
	$zapros_img="SELECT img FROM goods WHERE naime='$name'";
		$result_img = mysqli_query($connection,$zapros_img)  or die(mysql_error());
			$rowl = mysqli_fetch_row($result_img);
			$img = $rowl[0];	
			
				echo '<div class="catalog1">';
				echo '<div class="catalog1_ins">';
				echo '<div>';
               echo '<p class="nazv_tov"><a href="shop.php?id='.$id.'">'.$name.'</a><p>';
               echo '<a href="shop.php?id='.$id.'"><img src="'.$img.'" class="prodcatal"></a>';
               echo '<p class="nazv_tov"><a href="shop.php?id='.$id.'">Подробнее</a><p>';
			   echo '</div></div></div>';
			   
			}
			}

	
?>