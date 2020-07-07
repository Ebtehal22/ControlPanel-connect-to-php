<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "ControlPanel";
  
 // connect to mysql database using mysqli

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


$result = "SELECT Backward , Forward ,STOP ,Right_ , Left_ FROM remoteControl ;";

$query = mysqli_query($connect, $result) or die('Unable to work ');

while($row= mysqli_fetch_assoc($query)){
    foreach($row as $row){
        print "$row\t";
    }
    }
?>
