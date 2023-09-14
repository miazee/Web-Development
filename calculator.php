<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		*{
			padding:0;
			margin:0;
		}
		#calculator{
			background-color:#55596A;
			height:100vh;
		}
		.main-form{
			width:50%;
			background-color:#847F80;
			padding:30px 40px;
			border-radius:10px;
			position:absolute;
			top:50%;
			left:50%;
			transform: translate(-50%, -50%);
		}
		.main-form h1{
			color:red;
			font-weight:bold;
			border-left:5px solid #FF0000;
			font-size:2.5rem;
		}
		.form-group input{
			background-color:none;
			border:2px solid red;
			color:black;
			font-weight:bold;
		}
		.input-group select{
			background-color:none;
			border:2px solid red;
			color:white;
			font-weight:bold;
		}
		.input-group button{
			
			width:100%;
		}
		.pera{
			text-align:center;
			color:white;
			font-size:30px;
		}
		
		@media only screen and (max-width:767px){
			.main-form{
				width:80%;
			}
			.main-form h1{
				font-size:1.5rem;
			}
			.pera{
				font-size:15px;
			}
		}
	</style>
</head>
<body>
	<div id="calculator">
		<div class="container">
			<div class="main-form"> 
				<div class="row"> 
					<div class="col-md-6">
						<h1 class="text-uppercase p-3 mt-4">php <br>calculator</br></h1>
					</div>
					<div class="col-md-6">
						<form method="post">
							<div class="form-group">
								<input type="number" class="form-control" id="formGroupExampleInput" name="number1" placeholder="Number Input" />
							</div>
							
							<div class="form-group">
								<input type="number" class="form-control" id="formGroupExampleInput" name="number2" placeholder="Number Input" />
							</div>
							
							<div class="input-group">
								<select class="form-control" name="operator">
									<option>Select<option>
									<option value="add">+</option>
									<option value="sub">-</option>
									<option value="mult">*</option>
									<option value="div">/</option>
									<option value="mod">%</option>
									</optgroup>
								</select>
							</div>
							
							<div class="input-group">
								<button class="btn btn-info mt-3" name="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
				<p class="pera"> 
					<?php 
					
					//Task 7: Simple Calculator
					
						if(isset($_POST['submit'])){
							$num1 = $_POST['number1'];
							$num2 = $_POST['number2'];
							$operation = $_POST['operator'];
							
							switch ($operation){
								case 'add';
								$add = $num1+$num2;
								echo "The addition of two number is : {$add}";
								break;
								
								case 'sub';
								$sub = $num1-$num2;
								echo "The subtraction of two number is : {$sub}";
								break;
								
								case 'mult';
								$mult = $num1*$num2;
								echo "The multiplication of two number is : {$mult}";
								break;
								
								case 'div';
								$div = $num1/$num2;
								echo "The Division of two number is : {$div}";
								break;
								
								case 'mod';
								$mod = $num1%$num2;
								echo "The modulus of two number is : {$mod}";
								break;
								
								default:
								echo "Not Calculate";
								break;
							}
						}
					?>
				</p>
			</div>
		</div>
	</div>




 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</body>
</html>