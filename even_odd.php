<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		//Task 4: Even or Odd Checker
	
	
		/*
		$number = 24;
		if($number%2==0){
			echo "$number is Even number";
		}else{
			echo "$number is odd number";
		}
		*/
		
		/*
		if(isset($_POST['submit'])){
			$n = $_POST['number'];
			
			if($n%2==0){
				echo "Even";
			}else{
				echo "Odd";
			}
		}
		*/
		
		$even ="";
		$odd = "";
		if(isset($_POST['submit'])){
			$n = $_POST['number'];
			
				for($i=1; $i<=$n; $i++){
				
				if($i%2==0){
					
					$even.=$i.",";
				}else{
					$odd.=$i.",";
				}
			}
			$even=rtrim($even,",");
			$odd=rtrim($odd,",");
			
			echo "Even: ".$even;
			echo "<br/>";
			echo "Odd: ".$odd;
		}
		
	?>
	
	<form action="" method="post">
		<input type="text" name="number" required />
		<input type="submit" name="submit" />
	</form>
</body>
</html>