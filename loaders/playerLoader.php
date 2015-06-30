<?php

//Players Loader

echo "<br/> <br/> Load Players.csv <br/>";

$myfile = fopen("Input_Data/Players.csv", "r") or die("Unable to openfile!");

while(!feof($myfile)){
    $line = fgets($myfile);
    
    $newstring = preg_replace("/[\r\n]/","",$line);
  
 
    list($Player_id, 
		 $Name, 
		 $FName, 
		 $LName, 
		 $DOB, 
		 $Country, 
		 $Height, 
		 $Club, 
		 $Position, 
		 $Caps_for_Country, 
		 $Is_captain)=explode(",", $newstring);

    $stmt = $conn->prepare("INSERT INTO `soccer`.`players` (`Player_id', 'Name', 'FName', 'LName', 'DOB', 'Country', 'Height', 'Club', 'Position', 'Caps_for_Country', 'Is_captain`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
 
    $stmt->bind_param("isssssissis", 
			$Player_id,
			$Name,
			$FName,
			$LName,
			$DOB,
			$Country,
			$Height,
			$Club,
			$Position,
			$Caps_for_Country,
			$Is_captain
	);
	
    $stmt->execute();
    
    $stmt->close();
    
}
fflush($myfile);
?>