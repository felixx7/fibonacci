<?php
	$link = "http://".$_SERVER['HTTP_HOST']."/fibonacci/soding-fibonacci-test.php";
?>
<form action="" method="GET">
	<h1>Enter your number for Fibonacci</h1>
	<input name="number">
	<input type="submit" name="submit">
	<a href="<?php echo $link; ?>"><input type="button" name="test" value="Reset"></a>
</form>

<?php 
	$m = 8;
	if (isset($_GET['submit'])){
		$m = $_GET['number'];
	}
	$a = 0;
	$b = 1;
	
	
	for($i=1;$i <= $m; $i++){
		$c = $a + $b; 
		$a = $b; 
		$b = $c; 
		echo $c.", ";
		$n = $n + $c;
	}
	echo "<br><br>sum = ". $n . "<br>";
	echo "even-valued = ". $n / $m;
?>
