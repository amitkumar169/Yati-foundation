<?php

	$useridE=$_POST["useridE"];
	$userpassE=$_POST["userpassE"];
	// This is for make connection
	$conn=mysql_connect("localhost","root","","yati");

	//check connection is established or not
	if($conn==true){
		// This is a querry for get data into array from database
		$sql ="select userid,password from login;";
		//This is for selecting database
		mysql_select_db("yati");
		// This is for taking data
		$retval=mysql_query($sql,$conn);
		//This is for checking error
		if(! $retval){
			die('could not get data:'.mysql_error());
		}
		//This is for give all data row by row from data bases 

		while ($row =mysql_fetch_array($retval,MYSQL_ASSOC)) {

			//This is for checking data is true or not
			 if($row['userid']==$useridE){
		 		if($row['password']==$userpassE){
		 			echo "You have successfully entered in your zone";
		 		}
		 		else{
		 				echo "please entered a valid userid or password\n";
		 		}
			 }
			 else{
		 				echo "please entered a valid userid or password\n";
		 		}

		}


	}
	else{
		mysql_error($conn);
	}





	mysql_close($conn);

?>
