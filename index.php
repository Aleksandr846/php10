<!DOCTYPE html>
<html>
<head>
	<title>Лабораторная работа 10</title>
	<meta charset="utf-8">
	</head>
<body>
	<form id="frm" method="POST" action="">
		<p>Введите элементы массива через запятую:</p>
		<input type="text" name="n" value="1, 2, 3">
		<input type="submit" value="OK">
	</form>
	<?php
		$n=$_POST["n"];
		$myArray = explode(", ", $n);

		$minInd=0;
			for($i=1; $i<count($myArray); $i++){
				if($myArray[$i]<$myArray[$minInd]){
					$minInd=$i;
				}
			}
		$minim=$myArray[$minInd];

		//Сумма элементов массива, располоенных между первым и последним положительными элементами
		$firstPolEl;
		$lastPolEl;
		$sumBetPol=0;
		for($i=0; $i<count($myArray); $i++){
			if($myArray[$i]>0){
				$firstPolEl=$i;
				break;
			}
		}
		for($i=count($myArray); $i>0; $i--){
			if($myArray[$i]>0){
				$lastPolEl=$i;
				break;
			}
		}
		for($i=$firstPolEl+1; $i<$lastPolEl; $i++){
			$sumBetPol+=$myArray[$i];
		}

		//Массив, где сначала нули, а потом всё остальное
		$zero=[];
		$all = [];
		for($k=0; $k<count($myArray); $k++){
			if($myArray[$k]==0){
				$zero[]=$myArray[$k];
			}
			else{
				$all[]=$myArray[$k];
			}
		}
		$myArray = array_merge($zero, $all);

		echo "Минимальный элемент: ".$minim."; Сумма элементов массива, располоенных между первым и последним положительными элементами: ".$sumBetPol."; Массив, где сначала нули, а потом всё остальное: </br>";
		for($m=0; $m<count($myArray); $m++){
			echo $myArray[$m]."; ";
		}
	?>
</body>
</html>