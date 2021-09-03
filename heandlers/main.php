<?php

$result = 0;
if (isset($_POST['submit'])) {
	// Валидация
	if (!isset($_POST['number1']) || !isset($_POST['number2']) || !isset($_POST['operation'])) {
		$error_result = 'Не все поля заполнены';
	} else {
		if (!is_numeric($_POST['number1']) || !is_numeric($_POST['number2'])) {
			$error_result = "Операнды должны быть числами";
		} else {
			switch ($_POST['operation']) {
				case 'plus':
					$result = $_POST['number1'] + $_POST['number2'];
					break;
				case 'minus':
					$result = $_POST['number1'] - $_POST['number2'];
					break;
				case 'multiply':
					$result = $_POST['number1'] * $_POST['number2'];
					break;
				case 'divide':
					if ($_POST['number2'] == '0') {
						$error_result = "На ноль делить нельзя!";
					} else {
						$result = $_POST['number1'] / $_POST['number2'];
					}
					break;
				default:
					$error_result = "Нет такого оператора!";
			}
		}
	}
}
