<html>
	<body>
	<?php
		$daysOfWeek=[
		'Mon'=>'Понедельник',
		'Wed'=>'Cреда',
		'Sun'=>'Воскресенье',
		'Thu'=> 'Четверг',
		'Fri'=>'Пятница',
		'Sat'=>'Суббота',
		'Tue'=> 'Вторник'
		];
	?>
		<?php	
			if (isset($_GET['value'])) {
				$myDate=DateTime::createFromFormat('Y-m-d', $_GET['value']);
			}
		?>
		<form metod="GET" action="index.php" >
			<input type="date" name="value" value="<?php if (isset($myDate))
			{
			
			echo htmlspecialchars($myDate->format('Y-m-d'));
			}?>">
			<input type="submit" value="Узнать день недели 1 числа месяца">
		</form>
		<?php
			if (isset($myDate)){
				$month=$myDate -> format('m');
				$year=$myDate -> format('Y');
				$day=1;
				$myDate->setDate((int)$year,(int)$month,(int)$day);
				$dayofWeek=$myDate->format('D');
				echo $daysOfWeek[$dayofWeek];
			}		
		?>
	</body>
</html>
