<?php

//Player Assist Goals Loader

echo "<br/> <br/> Load Player_Assists_Goals.csv <br/>";

$myfile = fopen("Input_Data/Player_Assists_Goals.csv", "r") or die("Unable to openfile!");

while(!feof($myfile)){
    $line = fgets($myfile);
    $newstring = preg_replace("/[\r\n]/","",$line);

    list($Player_id, 
		 $No_of_Matches, 
		 $Goals, 
		 $Assists, 
		 $Minutes_Played)=explode(",", $newstring);

  
 $stmt = $conn->prepare("INSERT INTO `soccer`.`player_assists_goals` (`Player_id`, `No_of_Matches`, `Goals`, `Assists`, 'Minutes_Played') VALUES (?,?,?,?,?)");
 

    $stmt->bind_param("iiiii", 
			$Player_id, 
			$No_of_Matches, 
			$Goals, 
			$Assists, 
			$Minutes_Played
	);
	
    $stmt->execute();
    
    $stmt->close();
    
}
fflush($myfile);

?>