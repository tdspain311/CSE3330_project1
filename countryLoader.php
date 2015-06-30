<?php

//Country Loader

echo "<br/> <br/> Load Country.csv <br/>";

$myfile = fopen("Input_Data/Country.csv", "r") or die("Unable to openfile!");

while(!feof($myfile)){
    $line = fgets($myfile);

    $newstring = preg_replace("/[\r\n]/","",$line);
 
    list($Country_Name, 
		 $Population, 
		 $No_of_Worldcup_won, 
		 $Manager)=explode(",", $newstring);

    $stmt = $conn->prepare("INSERT INTO `soccer`.`country` (`Country_Name`, `Population`, `No_of_Worldcup_won`, `Manager`) VALUES (?,?,?,?)");
 
    $stmt->bind_param("sdis", 
			$Country_Name, 
			$Population, 
			$No_of_Worldcup_won, 
			$Manager
	);
	
    $stmt->execute();
    
    $stmt->close();
    
}
fflush($myfile);

?>