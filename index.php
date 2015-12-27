<?php
	function getTime(){
		echo "Текущее время и дата - ".date("Y-m-d H:i:s");
	}
	getTime();
   echo "<br>";
   function mult($x, $y){
      $sum = $x * $y;
      echo $sum;
   }
   mult(43, 4);
?>