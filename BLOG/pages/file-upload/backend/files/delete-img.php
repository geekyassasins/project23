<?php
session_start();
include "../../../../config.php";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

    	$sql=mysqli_query($conn,"select * from `PhotoVideoMaster` where `pvm_id`=".$_POST['id']." ");
    	while($row=mysqli_fetch_array($sql))
    	{
    		 $name=basename($row['path']);
    		@unlink($name);
    		
    	}
    	
    	$sql=mysqli_query($conn,"DELETE FROM `PhotoVideoMaster` WHERE `pvm_id`=".$_POST['id']."  ");
	
	    if($sql)
	    {    	
	
			echo "TRUE";    	
	    }    	
    	else
    	{
		    echo "FALSE";    	
    	}
?>
