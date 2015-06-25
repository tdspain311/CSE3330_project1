CREATE TABLE country 
(
Country_Name varchar(20),
Population  decimal(10,2),
No_of_Worldcup_won int,
Manager varchar (20)
);

CREATE TABLE players
(
Player_id int,
Name varchar (40),
Fname varchar (20),
Lname varchar (35),
DOB date,
Country varchar(20),
Height(cms) int,
Club varchar(30),
Position varchar(10),
Caps_for_Country int,
is_captain Boolean
);

CREATE TABLE match_results
(
Match_id int,
Date_of_Match date,
Start_Time_Of_Match time,
Team1 varchar(25),
Team2 varchar(25),
Team1_score int,
Team2_score int,
Stadium_Name varchar(35),
Host_City varchar(20)
);

CREATE TABLE player_cards
(
Player_id int,
Yellow_Cards int,
Red_Cards int
);

CREATE TABLE player_assists_goals 
(
Player_id int,
No_of_Matches int,
Goals int,
Assists int,
Minutes_Played int
);
