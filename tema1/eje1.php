

<?php
   $array=[];

   for($i=0; $i<7; $i++){
	   for($j=0; $j<7;$j++){
		   echo $array[$i][$j]=rand(0,9)." ";
		   if($i==$j){
			   echo $array[$i][$j]="1   ";
		   }
	   }
	   echo "<br>";
   }
?>
