<!DOCTYPE html>
<html lang="en">
	<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Baseball Card Database</title>
            <link rel="stylesheet" href="styles.css">
	</head>
	<body>
       <header>
           <h1>Baseball Card Database</h1>           
       </header>
	   <nav>Delete Customer Records</nav>
		<?php
                 
		include ("ConnectBaseBallCardDB.php");
                $whereBlock="";
		$customerID=$_GET["customeridField"];
		$customerName=$_GET["customerName"];
		$address=$_GET["address"];
		$city=$_GET["city"];
		$state=$_GET["state"];
		$postal=$_GET["postal"];
		$email=$_GET["email"];
		

		if (empty($customerID)     &&
                    empty($customerName)   &&
                    empty($address)        &&
                    empty($city)           &&
                    empty($state)          &&
                    empty($postal)
                   )
                   {
                      echo ("Please Enter minimum of one search criteria");
                      exit();
                   }

                if (!empty($customerID))
                   $whereBlock=  $whereBlock . ' customerID   = ' . '\''   . $customerID  . '\''; 

                if (!empty($customerName))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' name    = '   . '\''   . $customerName    . '\''; 
                }
                if (!empty($address))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' address      = '   . '\''   . $address      . '\''; 
                }
                if (!empty($city))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' city = '   . '\''   . $city . '\''; 
                }
                if (!empty($state))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' state = '   . '\''   . $state . '\''; 
                }
                if (!empty($postal))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' postal = '   . '\''   . $postal . '\''; 
                }
                if (!empty($email))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' email = '   . '\''   . $email . '\''; 
                }


			//Create query
			$sqlEmp="DELETE FROM CUSTOMER WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			if ($conn->query($sqlEmp) == TRUE)  # or die('Could not run query: '.$conn->error);
			{
				// output data of each row
				echo '<br>';
				echo $sqlEmp;
				echo '<br>';
				echo "Customer Record Deleted";
			}
			else
			{
			        echo '<br>';
				echo "Customer Record Not Found for Deletion";
			}
			$conn->close();
		?>
	</body>
	<form>
	         <br><br>
		 <button type="submit" formaction="RemoveCustomer.php">Remove Customer Record</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

