<!DOCTYPE HTML>
<html lang="ru">
<meta charset="UTF-8">
<link rel="stylesheet" href="recurses/styles.css" type="text/css" />
<title>Калькулятор , бля !!!!</title>

<body>
	<form action='index.php' method='post' class="calculate-form">
		<input type="text" name="number1" class="numbers" placeholder="Первое число">
		<select class="operations" name="operation">
			<option value='plus'>+</option>
			<option value='minus'>-</option>
			<option value="multiply">*</option>
			<option value="divide">/</option>
		</select>
		<input type="text" name="number2" class="numbers" placeholder="Второе число">
		<input class="submit_form" type="submit" name="submit" value="Получить ответ">
	</form>
	<?php if (isset($error_result)) : ?>
		<div class='error-text'>Ошибка: <?= $error_result ?> </div>
	<?php else : ?>
		<div class='answer-text'>Ответ: <?= $result ?> </div>
	<?php endif; ?>
</body>

</html>