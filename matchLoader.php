<?php


//Match Results Loader

echo "<br/> <br/> Load Match_results.csv <br/>";

$myfile = fopen("Input_Data/Match_results.csv", "r") or die("Unable to openfile!");

while(!feof($myfile)){
    $line = fgets($myfile);

    $newstring = preg_replace("/[\r\n]/","",$line);
 
    list($Match_id, 
		 $Date_of_Match, 
		 $Start_Time_Of_Match, 
		 $Team1, 
		 $Team2, 
		 $Team1_score, 
		 $Team2_score, 
		 $Stadium_Name, 
		 $Host_City)=explode(",", $newstring);
	
    $stmt = $conn->prepare("INSERT INTO `soccer`.`match_results` (`Match_id`, `Date_of_Match`, `Start_Time_Of_Match`, `Team1`, `Team2`, `Team1_score`, `Team2_score`, `Stadium_Name`, `Host_City`) VALUES (?,?,?,?,?,?,?,?,?)");
 
    $stmt->bind_param("issssiiss", 
			$Match_id, 
			$Date_of_Match, 
			$Start_Time_Of_Match, 
			$Team1, 
			$Team2, 
			$Team1_score, 
			$Team2_score, 
			$Stadium_Name, 
			$Host_City
	);
	
    $stmt->execute();
    
    $stmt->close();
    
}
fflush($myfile);

?>