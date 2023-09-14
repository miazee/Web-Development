
<?php 
	$error = "";
	$x = "";
	$y = "";
	$result = "";
	if(isset($_POST['operation'])){
		$x = $_POST['num1'];
		$y = $_POST['num2'];
		$op = $_POST['operation'];
		
		if(is_numeric($x) && is_numeric($y)){
			switch($op){
			case 'add' : $result = $x + $y;
			break;
			case 'sub' : $result = $x - $y;
			break;
			case 'pro' : $result = $x * $y;
			break;
			case 'div' : $result = $x / $y;
			break;
			 
			}
		
		}else{
			$error = "Enter Number first";
		}
		
	}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1><?= $error ?></h1>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
		<div>
			<label for="num1">Number 1</label>
			<input type="number" name="num1" id="num1" value="<?= $x ?>" />
		</div>
		<br>
		<div>
			<label for="num2">Number 2</label>
			<input type="number" name="num2" id="num2" value="<?= $y ?>" />
		</div>
		<br>
		<div>
			<label for="result">Result</label>
			<input type="number" id="result" value="<?= $result ?>" disabled />
		</div>
		<br>
		<div> 
			<input type="submit" value="add" name="operation" />
			<input type="submit" value="sub" name="operation" />
			<input type="submit" value="pro" name="operation" />
			<input type="submit" value="div" name="operation" />
		</div>
	</form>
</body>
</html>