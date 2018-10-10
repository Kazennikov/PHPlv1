
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">

    <title>Урок 6. Калькулятор</title>
</head>
<body>        
<form action="server.php" method="POST" enctype="multipart/form-data">
			
	<p>Введите число 1</p>
	<textarea name="d1"></textarea>
	<p>Введите число 2</p>
	<textarea name="d2"></textarea>
	
	
	<p>Что хотите сделать?</p>
	<select name="operation">
		<option  value="+">Сложение +</option>
		<option  value="-">Вычитание -</option>
		<option  value="*">Умножение *</option>
		<option  value="/">Деление /</option>
	</select>
	<br>
	  <br>
    <br>
    <br>
    <br>
	<input name="operation" value="+" type="submit"/>
    <input name="operation" value="-" type="submit"/>
    <input name="operation" value="*" type="submit"/>
    <input name="operation" value="/" type="submit"/>
    <br>
    <br>
    <input type="submit" class="submit" value="Отправить">
	<input type="reset" class="submit" value="Очистить">
	</form>
	<br>
 
</body>
</html>
