<?php 


    
   // connect to mysql database using mysqli


  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "ControlPanel";
  
 // connect to mysql database using mysqli

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

    // check the connection 
    if(!$connect){

    	echo 'connection error ' ;

    }
 
 ?>
 <!DOCTYPE html>
 <html>
<head>
	<meta charset= "utf-8">
	<title> control panel </title>
	<style>
	
	</style>
	<link rel="stylesheet" href = "Format.css" />
	</head>
	<h1> press to move the Robot </h1>
	<br>
	<img src= "https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Nao_Robot_(Robocup_2016).jpg/1200px-Nao_Robot_(Robocup_2016).jpg"  alt = "control the Robot " high="50" width="300"/>
	<br>
	
	<br>

	    <form action="" method="POST">

		<button id="butt1" style="color:blue" type="submit"   name="F" >  Forward </button>
	<br>	
		<button id ="butt3" autofocus "autofocus" style="color:red" type="submit"   name="S"> STOP </button>
		<button id="butt4" style="color:blue" type="submit"   name="R"> Right </button>
		<button id="butt5" style="color:blue" type="submit"   name="L"> Left </button>
	<br>
	
		<button id ="butt2" style="color:blue" type="submit"   name="B"> Backward </button>

		 </form>


 </html>
 	
 	<?php


// Insert data into  database 

 	if(isset($_POST['B'])){

   

    $result = "B";
    
    //  query to insert data

$query = "INSERT INTO `RemoteControl`( 'Backward', `Forward `, `STOP `, `Right_`, `Left_`) VALUES ('$result', NULL,NULL,NULL,NULL)";
    
    $result = mysqli_query($connect,$query);
    
    // check the query 

    if($result)
    {
        echo 'Inserted successfuly';
        
    }
    
    else{
        echo 'Not Inserted';
    }
   header('location: REMOTE.php');
    
   mysqli_close($connect);
}

	if(isset($_POST['F'])){

   

    $result = "F";
    

$query = "INSERT INTO `remotecontrol' (`Backward, `Forward `, `STOP `, `Right_`, `Left_`) VALUES (NULL, '$result',NULL,NULL,NULL)";
    
    $result = mysqli_query($connect,$query);
   

    if($result)
    {
        echo ' Inserted successfuly';
    }
    
    else{
        echo 'Not Inserted';
    }
   header('location: Forward.php');
    
  mysqli_close($connect);
	}

	if(isset($_POST['S'])){

    

    $result  = "S";
    
    // query to insert data

$query = "INSERT INTO `RemoteControl`('Backward', `Forward `, `STOP `, `Right_`, `Left_`) VALUES (NULL, NULL,'$result',NULL,NULL)";
    
    $result = mysqli_query($connect,$query);
    
   

    if($result)
    {
        echo 'Inserted successfuly';
    }
    
    else{
        echo 'Not Inserted';
    }
    
    header('location:Stop.php');
   mysqli_close($connect);
}

if(isset($_POST['R'])){



    $result = "R";
    
    // mysql query to insert data
$query = "INSERT INTO `RemoteControl` ('Backward', `Forward `, `STOP `, `Right_`, `Left_`)  VALUES (NULL, NULL,NULL.'$result',NULL)";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Inserted successfuly ';
    }
    
    else{
        echo 'Not Inserted';
    }
    
   header('location: Right.php');
    mysqli_close($connect);
}
if(isset($_POST['L'])){

    // get values form input text and number

    $result = "L";
    
    // mysql query to insert data

$query = "INSERT INTO `RemoteControl`('Backward', `Forward `, `STOP `, `Right_`, `Left_` ) VALUES (NULL, NULL ,NULL,NULL,'$result')";
    
   
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo ' inserted successfuly';
    }
    
    else{
        echo 'Not Inserted';
    }
    
    header('location:Left.php');
    mysqli_close($connect);
}

?>
