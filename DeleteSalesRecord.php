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
	   <nav>Delete Sales Records</nav>
		<?php
                 
		include ("ConnectBaseBallCardDB.php");
                $whereBlock="";
		$customerID=$_GET["customeridField"];
		$dateSold=$_GET["dateSold"];
		$itemID=$_GET["itemID"];
		$paymentType=$_GET["paymentType"];

		if (empty($customerID) &&
                    empty($dateSold)   &&
                    empty($itemID)     &&
                    empty($paymentType)
                   )
                   {
                      echo ("Please Enter Delete Criteria");
                      exit();
                   }

                if (!empty($customerID))
                   $whereBlock=  $whereBlock . ' customerID   = ' . '\''   . $customerID  . '\''; 
                if (!empty($dateSold))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';
                   $whereBlock=  $whereBlock . ' dateSold    = '   . '\''   . $dateSold    . '\''; 
                }
                if (!empty($itemID))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' item_ID      = '   . '\''   . $itemID      . '\''; 
                }
                if (!empty($paymentType))
                {
                   if (!empty($whereBlock))
                      $whereBlock=  $whereBlock . ' and ';                
                   $whereBlock=  $whereBlock . ' paymentType = '   . '\''   . $paymentType . '\''; 
                }

			//Create query
			$sqlEmp="DELETE FROM sales_record WHERE   $whereBlock ; " ;
			//Execute query
			#echo $sqlEmp;
			#echo '<br>';
			if ($conn->query($sqlEmp) == TRUE)  # or die('Could not run query: '.$conn->error);
			{
				// output data of each row
				echo '<br>';
				echo $sqlEmp;
				echo '<br>';
				echo "Record Deleted";
			}
			else
			{
			        echo '<br>';
				echo "No Record Found for Deletion";
			}
			$conn->close();
		?>
	</body>
	<form>
	         <br><br>
		 <button type="submit" formaction="RemoveSalesRecord.php">Remove another record</button>
		 <button type="submit" formaction="MainMenu.php">Main Page</button>
	 
        </form>
</html>

