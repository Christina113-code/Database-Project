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
               <nav>Delete Baseball Card Records</nav>
	       <form method="get" action="DeleteBaseballcard.php">
                     <tr>
                     <br>
		     <td>Card Id:
			  <input type="text" name="cardID"  >
		     </td>
		     <td>Serial Number:
			  <input type="text" name="serialNumber"  >
		     </td>
		     <td>Current Value:
			  <input type="text" name="currentValue"  >
		     </td>
		     <td>Manufactured Date:
			  <input type="date" name="mfrdDate"  >
		     </td>
		     <td>Grade:
			  <input type="text" name="grade"  >
		     </td>
		     <td>Supplier Id:
			  <input type="text" name="supplierID"  >
		     </td>                     		  
                     </tr>
                     <br><br><br>
                     
		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
               </form>
       </body>
</html>
