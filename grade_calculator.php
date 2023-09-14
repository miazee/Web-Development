

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Grade Calculator</title>
	<style>
			body{background:#262525;}
			form{width:50%; height:300px; background:gray; margin-left:300px; margin-top:160px; margin-top:100px;}
			input{ padding:10px;}
			.please{text-align:center; font-size:40px; font-weight:bold; }
			h2{text-align:center;}
		</style>
</head>
<body>
	<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
		<h2 class="please">Please enter your grade:</h2>
		<input style="margin-left:190px; margin-top:60px;" type="text" name="percent" />
		<input type="submit" value="submit" />
		
		<h2>
			<?php 
			
			//Task 3: Grade Calculator
			
				$percent = $_POST['percent'];
				if($percent>=80){
					echo "Result - Grade : A+";
				}else if($percent>=70){
					echo "Result - Grade : A";
				}else if($percent>=60){
					echo "Result - Grade : A-";
				}else if($percent>=50){
					echo "Result - Grade : B";
				}else if($percent>=40){
					echo "Result - Grade : C";
				}else if($percent>=33){
					echo "Result - Grade : D";
				}else{
					echo "Result - Grade : F";
				}
			?>
		</h2>
	</form>
	
	
</body>
</html>