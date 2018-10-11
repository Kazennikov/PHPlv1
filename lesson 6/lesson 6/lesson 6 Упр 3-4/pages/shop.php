<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<link href="../style.css" rel="stylesheet">
<link rel="SHORTCUT ICON" href="../favicon.ico" type="image/x-icon">
<title>Вкусные Разности|Пончики</title>
</head>
<body>
<?php
				include "config.php";
				include "goods.php";
				
		/*	echo $id;
			echo $img;
			echo $price;
			echo $opis;
			echo $dopis;
		*/		
				
				
				?>
<div class="container">
<div class="header">
    <div class="header_ins">
        <a href="../index.html" class="logo"><img src="../img/logo.svg"></a>
        <h1><span>Магазин "Вкусные разности"</span></h1>
        <ul class="menu">
            <li><a href="../index.html">Главная</a></li>
            <li><a href="catalog.php">Каталог</a></li>
            <li><a href="contacts.html">Контакты</a></li>
        </ul>
     </div>
</div>
  <ol class="breadcrumb1">
  <li><a href="../index.html">Главная</a></li>
  <li><a href="catalog.php">Каталог</a></li>
  <?php echo '<li class="activebb">'.$ima.'</li>';?>
</ol>  
<div class="ponhc">
<?php   echo '<div class="nadpispo"><font color="#616161" size="5"> '.$ima.' </font></div>';?>
    <div class="ponhc_ins">
     <?php echo   '<a href="'.$img.'" target="_blank"><img class="fottovar" src="'.$img.'" alt="Вкусный пончик" title="Вкусный пончик" width="534" height="300"/></a>';?>
      <?php echo  '<p class="kropis">'.$dopis.'</p>';?>
       <a href="#" class="wsbutton">Купить</a>
    </div> 
       <div class="opisanie">
       <div class="tabl1"> <! --подконтейнер>
       <table>
            <caption><b>Cтоимость заказа</b></caption>
                <thead>
                    <tr>
                        <th>Количество</th>
                        <th>Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1-10 шт.</td>
                     <?php echo '<td>'.$price.'</td>'; ?>
                    </tr>
                    <tr>
                        <td>11-30 шт.</td>
                      <?php echo   '<td>'.$price.'</td>';?>
                    </tr>
                    <tr>
                        <td>более 30 шт.</td>
                      <?php echo  '<td> '.$price.' </td>'; ?>
                    </tr>
                </tbody>
        </table>
        </div>
        <div class="podpis">
                <h2 class="zagolovok">Подробное описание товар</h2>
              <?php echo  '<p class="podropis"> '.$dopis.'</p>'; ?>
              <?php echo   '<p class="podropis"> '.$opis.' </p>'; ?>
        </div>
        <div class=sostav>
           <p><b>Состав:</b></p> 
            <ol class="sostavsp">
                <li>сахар</li>
                <li>молоко</li>
                <li>яйцо куриное</li>
                <li>мука</li>
            </ol>
            <b>Вес 50 грамм.</b>
        </div>
   </div>
</div> 
   </div>
    <div class="znkon">
        <div class="znkon_ins">
            <a href="contacts.html#phone" class="znak"><img src="../img/phone.png" class="znak1" alt="Телефон" title="Телефон"></a>
            <a href="contacts.html#pochta" class="znak"><img src="../img/EmailIcon.png" alt="Почта" title="Почта"></a>
            <a href="contacts.html#addres" class="znak"><img src="../img/globe-icon.png" alt="Адрес" title="Адрес"></a>
            <a href="index.html" class="znak"><img src="../img/VK.png" alt="Вконтакте" title="Вконтакте"></a>
        </div>
    </div>
<div class="footer">
<hr>
    <div class="footer_ins">
        &copy;&nbsp;<i>магазин "Вкусные разности"</i>
    </div>
</div>  

</body>
</html>