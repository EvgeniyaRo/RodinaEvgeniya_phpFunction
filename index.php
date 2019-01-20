<h1>Евгения Родина. Функции д/з</h1>

<?php
	
	function greeting($name = "друг", $dayNumber = 0)
	{
		switch ($dayNumber) {
			case '1':
			case '2':
			case '3':
			case '4':
			case '5':
				echo "Привет, $name! Хорошего и продуктивного рабочего дня!";
				break;
			case '6':
			case '7':
				echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!";
				break;
			
			default:
				echo "Привет, $name! Сегодня хороший день!";
				break;
		}
			
	}

	echo 'greeting(); : ' . "</br><b>";
	greeting();
	echo "</b></br></br>";

	echo 'greeting("Женя"); : ' . "</br><b>";
	greeting("Женя");
	echo "</b></br></br>";

	echo 'greeting("Женя", 1); : ' . "</br><b>";
	greeting("Женя", 1);
	echo "</b></br></br>";

	echo 'greeting("Женя", 7); : ' . "</br><b>";
	greeting("Женя", 7);
	echo "</b></br></br>";

	echo 'greeting("Женя", 17); : ' . "</br><b>";
	greeting("Женя", 17);
	echo "</b></br></br>";

	
?>