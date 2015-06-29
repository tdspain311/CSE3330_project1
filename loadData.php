<?php
$servername = "localhost";
$username = "test_user";
$password = "password";
$dbname = "soccer";

// Create connection
//$conn = new oci_connect($servername, $username, $password);

//echo "Load Data Page";

//$myfile = fopen("webdictionary.txt", "r") or die("Unable to open 
//file!");
//echo fread($myfile,filesize("webdictionary.txt"));
//fclose($myfile);

$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<br/> <br/> Load Country.csv <br/>";

//$myfile = fopen("Input_Data/Country.csv", "r") or die("Unable to openfile!");


//**TESTING**
$myfile = fopen("Input_Data/Country.csv", "r");

echo $myfile;

while (! feof($myfile))
{
	$line = (fgetcsv($myfile));
	
	echo $line;
	
	list($Country_Name, $Population, $No_of_Worldcup_won, $Manager)=explode(",", $line);
	
	echo $list;
	
	$sql="INSERT INTO country(Country_Name, Population, No_of_Worldcup_won, Manager) VALUES ('" . $Country_Name . "','" . $Population . "','" . $No_of_Worldcup_won . "','" . $Manager . "')";
	
	echo $sql;
	
	//mysqli_query($conn, $sql);
	
}
fflush($myfile);
/*
foreach($myfile as $line){

	//extract the variables
	list($Country_Name, $Population, $No_of_Worldcup_won, $Manager)=explode(",", $line);
	
	
	//making a query string
	$sql="INSERT INTO country(Country_Name, Population, No_of_Worldcup_won, Manager) VALUES ('$Country_Name','$Population','$No_of_Worldcup_won','$Manager')";

	echo $sql;
	
	$conn->query($sql);
	/*
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}*/
	//error checking
/*if ( !mysql_query($sql) ) {
		echo("<P>Error inserting data: " .

		mysql_error() . "</P>");

	}

}
//echo //fread($myfile,filesize("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Country.csv"));
echo "file loaded successfully";

fclose($myfile);
*/
/*
echo "<br/> <br/> Load Players.csv <br/>";

$myfile = fopen("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Players.csv", "r") or die("Unable to openfile!");
//echo fread($myfile,filesize("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Players.csv"));
foreach($myfile as $line){

	//extract the variables
	list($Player_id, $Name, $FName, $LName, $DOB, $Country, $Height, $Club, $Position, $Caps_for_Country, $Is_captain)=explode(",", $line);
	
	//making a query string
	$sql="INSERT INTO match_results(Player_id, Name, FName, LName, DOB, Country, Height, Club, Position, Caps_for_Country, Is_captain) VALUES 
('$Player_id','$Name','$FName','$LName','$DOB','$Country','$Height','$Club','$Position','$Caps_for_Country','$Is_captain')";
}

fclose($myfile);

echo "<br/> <br/> Load Match_results.csv <br/>";
$myfile = fopen("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Match_results.csv", "r") or die("Unable to openfile!");
//echo fread($myfile,filesize("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Match_results.csv"));
foreach($myfile as $line){

	//extract the variables
	list($Match_id, $Date_of_Match, $Start_Time_Of_Match, $Team1, $Team2, $Team1_score, $Team2_score, $Stadium_Name, $Host_City)=explode(",", $line);
	
	//making a query string
	$sql="INSERT INTO match_results(Match_id, Date_of_Match, Start_Time_Of_Match, Team1,Team2,Team1_score,Team2_score,Stadium_Name, Host_City) VALUES 
('$Match_id','$Date_of_Match','$Start_Time_Of_Match','$Team1','$Team2','$Team1_score','$Team2_score','$Stadium_Name','$Host_City)";
}
fclose($myfile);


echo "<br/> <br/> Load Player_Cards.csv <br/>";
$myfile = fopen("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Player_Cards.csv", "r") or die("Unable to openfile!");
//echo fread($myfile,filesize("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Player_Cards.csv"));
foreach($myfile as $line){

	//extract the variables
	list($Player_id, $Yellow_Cards, $Red_Cards)=explode(",", $line);
	
	//making a query string
	$sql="INSERT INTO player_cards(Country_Name, Population, No_of_Worldcup_won, Manager) VALUES ('$Player_id','$Yellow_Cards','$Red_Cards')";
}
fclose($myfile);


echo "<br/> <br/> Load Player_Assists_Goals.csv <br/>";
$myfile = fopen("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Player_Assists_Goals.csv", "r") or die("Unable to openfile!");
//echo fread($myfile,filesize("/home/i/im/ims3488/public_html/Input_Data/Input_Data/Player_Assists_Goals.csv"));
foreach($myfile as $line){

	//extract the variables
	list($Player_id, $No_of_Matches, $Goals, $Assists, $Minutes_Played)=explode(",", $line);
	
	//making a query string
	$sql="INSERT INTO player_assists_goals(Player_id, No_of_matches, Goals, Assists, Minutes_Played) VALUES ('$Player_id','$No_of_Matches','$Goals','$Assists', 
'$Minutes_Played')";
}
fclose($myfile);


*/
?>



