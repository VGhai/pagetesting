<?php 
if(isset($_POST["submitme"])){
	$firstname 	= $_POST["firstname"];	
	$lastname 	= $_POST["lastname"];	
	$country 	= $_POST["country"];	
	$subject 	= $_POST["subject"];

	echo "You have Entered:<br>";
	echo "Firt Name: " . $firstname."<br>";	
	echo "Last Name: " . $firstname."<br>";	
	echo "Country: " . $firstname."<br>";	
	echo "Subject: " . $firstname."<br>";
		
}

?>
