<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
		<style>
			body{background:#262525;}
			.temperature{}
			form{width:50%; height:300px; background:gray; margin-left:300px; margin-top:160px;}
			input{margin-left:60px; margin-top:130px; padding:10px;}
		</style>
</head>
<body>
	<div class="temperature">
		<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
		<input type="number" name="temperature" />
		<input type="radio" name="units" value="c" />C
		<input type="radio" name="units" value="f" />F
		<input type="submit" name="submit" value="CONVERT" />
		
		<p style="text-align:center; font-size:30px;"> 
			<?php 
			
			//Task 2: Temperature Converter
			
				if(isset($_POST["submit"])){
					$temperature = $_POST["temperature"];
					$units = $_POST["units"];
					
					if($units == "c"){
						$result = $temperature * 9 / 5 + 32;
					}else{
						$result = ($temperature - 32) *5 / 9;
					}
					echo "The converted temperature is " . $result;
				}
				?>
		</p>
	</form>
	</div>
	
	
</body>
</html>