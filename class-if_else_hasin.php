<?php 
	// Extension 
			// code runner by Jun Hun = install-
			// php by devsense or php intelephense by Ben Mewburn
			// php Intellsense by Damjan Cvetko
			
	//shortcut way 	
			// command command palette =  ctrl +shift + p 
	
	
	$number = 12;
	$reminder = $number % 2;
	/*
	
	
	if($reminder == 0){
		echo "The number $number is even";
	}else{
		echo "The number $number is odd";
	}
	
	*/
	
	/*
	switch ($reminder){
		case 0:
			//echo "$number is an even number";
			echo "{$number} is an even number";
		break;
		
		case 1:
			//echo "$number is and odd number";
			echo "{$number} is and odd number";
		break;
		
		default:
			//echo "$number is not a whole number";
			echo "{$number} is not a whole number";
	}
	*/
	
	/*
	if($reminder == 0){
		echo "{$number} is and even number";
	}else if($reminder == 1){
		echo "{$number} is and odd number";
	}else{
		echo "{$number} is not a whole number";
	}
	*/
	
	/* 
	$result = match($reminder){ // match হচ্ছে php-8 version এর এবং match এ && এবং || ব্যাবহার হয় না। 
		0 => "even",
		1 => "odd",
		default => "nothing"
	}; 
	echo "Number $number is $result";
	*/
	
	
	/*
	$color = "yellow";
	if($color == "red"){
		echo "Primary color red";
	}else if($color == "green"){
		echo "Secondary color";
	}else if($color == "blue"){
		echo "Primary color";
	}else if($color == "yellow"){
		echo "Primary color yellow";
	}else{
		echo "Invalid color";
	}
	*/
	
	/*
	$color = "yellow";
	
	if($color == "red" || $color == "blue" || $color == "yellow"){
		echo "Primary color";
	}else if($color == "green" || $color == "orange" || $color == "purple"){
		echo "Secondary color";
	}
	*/
	
	/*
	$color = "yellow";
	$dress = "shirt";
	
	if($color == "yellow" && $dress = "shirt"){
		echo "I love it";
	}else if($color = "yellow" && $dress == "pant"){
		echo "I don't like";
	}else{
		echo "nothing";
	}
	
	*/
	
	/*
	$color = "yellow";
	
	$result = match($color){ // match হচ্ছে php-8 version এর এবং match এ && এবং || ব্যাবহার হয় না। 
		"red" => "Primary color",
		"green" => "Secondary color",
		"blue" => "Primary color",
		"yellow" => "primary color", // output
		default => "Other color"
	};
	echo $result;
	*/
	
	/*
	// Ternary Operator
	
	
	$number = 16;
	$reminder = $number % 2;
	
	$result = ($reminder== 0) ? "Even number" : "Odd number";
	
	echo $result;
	*/
	
	/*
	$number = 16;
	$reminder = $number % 2;
	
	$result = ($number == 0) ? "Zero" : (($reminder == 0) ? "Even number" : "Odd number");
	
	echo $result;
	*/
	
	/*
	$marks = 90;
	$result = $marks >= 90 ? "A+" : ($marks >= 80 ? "A" : ($makrs >= 70 ? "A-" : ($marks >= 60 ? "B" : ($marks >= 50 ? "C" : ($marks >= 40 ? "D" : "F")))));
	echo $result;
	*/
	
	/*
	$marks = 90;
	
	if($marks >= 90){
		echo "Grade : A+";
	}else if($marks >= 80){
		echo "Grade : A";
	}else if($marks >= 70){
		echo "Grade : A-";
	}else if($marks >= 60){
		echo "Grade : B";
	}else if($marks >= 50){
		echo "Grade : C";
	}else if($marks >= 40){
		echo "Grade : D";
	}else{
		echo "Grade : F";
	}
	*/
	
	/*
	$marks = 90;
	
	if($marks >= 90){
		$result = "Grade : A+";
	}else if($marks >= 80){
		$result = "Grade : A";
	}else if($marks >= 70){
		$result = "Grade : A-";
	}else if($marks >= 60){
		$result = "Grade : B";
	}else if($marks >= 50){
		$result = "Grade : C";
	}else if($marks >= 40){
		$result = "Grade : D";
	}else{
		$result = "Grade : F";
	}
	echo $result;
	*/
	
	$marks = 90;
	$result = match($marks ){
		90,91,92,93,94,95,96,97,98,99,100 => "A+",
		80 => "A",
		70 => "A-",
		60 => "B",
		50 => "C",
		40 => "D",
		default => "F"
	};
	echo $result;
	