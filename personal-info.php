<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css"> 
		h1{text-align:center;}
		h2{}
	</style>
	
</head>
<body>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php echo "Personal Information Page"?></h1>
					<?php 
						
						$name		= "Md. Shahjahan Miazee";
						$age 		= 283746;
						$country 	= "Bangladesh";
						$title		= "About myself";
						$pera		= "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
						
						echo "<h3>My name is : $name</h3>";
						echo "<br/>";
						echo "<h3>I am $age years old</h3>";
						echo "<br/>";
						echo "<h3>My country is $country</h3>";
						echo "<br/>";
						echo "<hr>";
						echo "<h2>$title<h2>";
						echo "<br/>";
						echo "<p>$pera</p>";
					?>
				</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>