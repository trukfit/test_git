<?php
	function getTime(){
		echo "������� ����� � ���� - ".date("Y-m-d H:i:s");
	}
	getTime();
   echo "<br>";

   function mult($x, $y){
      $sum = $x * $y;
      echo $sum;
   }
   mult(43, 4);
   function fact($x){
      if($x < 0) return false;
      if($x == 0) return 1;
      $t = 1;
      for($i = 1; $i <= $x; $i++){
         $t *= $i;
      }
      echo $t;
   }
fact(5);

?>