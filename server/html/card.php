<?php
// get the "message" variable from the post request
// this is the data coming from the Android app
$ID=$_POST["id"]; 
$time=$_POST["time"]; 
$busName=$_POST["busName"]; 
$operatorName=$_POST["operatorName"]; 
$cardData=$_POST["cardData"]; 
// specify the file where we will save the contents of the variable message
$filename="/home/ubuntu/cards";
// write (append) the data to the file
$result=$ID.";".$time.";".$busName.";".$operatorName.";".$cardData."\n";
file_put_contents($filename,$result,FILE_APPEND);

// load the contents of the file to a variable
//$androidmessages=file_get_contents($filename);
// display the contents of the variable (which has the contents of the file)
//echo $androidmessages;
?>

