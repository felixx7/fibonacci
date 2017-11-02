<?php 
	$a = 0;
	$b = 1;
	$m = 32;
	
	for($i=1;$i <= $m; $i++){
		$c = $a + $b; 
		$a = $b; 
		$b = $c; 
		echo $c."<br/>";
		$n = $n + $c;
	}
	echo "sum = ". $n . "<br>";
	echo "even-valued = ". $n / $m;
?>
