<?php

//Player Cards Loader

echo "<br/> <br/> Load Player_Cards.csv <br/>";

$myfile = fopen("Input_Data/Player_Cards.csv", "r") or die("Unable to openfile!");

while(!feof($myfile)){
    $line = fgets($myfile);

    $newstring = preg_replace("/[\r\n]/","",$line);
 
    	list($Player_id, 
			 $Yellow_Cards, 
			 $Red_Cards)=explode(",", $newstring);

    $stmt = $conn->prepare("INSERT INTO `soccer`.`player_cards` (`Player_id`, `Yellow_Cards`,  `Red_Cards`) VALUES (?,?,?)");
 
    $stmt->bind_param("iii", 
			$Player_id, 
			$Yellow_Cards, 
			$Red_Cards
	);
	
    $stmt->execute();
    
    $stmt->close();
    
}
fflush($myfile);

?>