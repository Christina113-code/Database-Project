<!DOCTYPE html>
<html lang="en">
	<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Baseball Card Database</title>
            <link rel="stylesheet" href="styles.css">
	</head>
        <header>
           <h1>Baseball Card Database</h1>
        </header>
               <nav>Add Baseball Card Record</nav>
	<body>
		 
		      <form method="get" action="InsertBaseballcard.php">
		      <table style="width:100%;">
                     <tr style="width:100%;">
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
                     </table>
                     <br><br><br>
		      <input type="submit">
		      <button type="submit" formaction="Searchbaseball_card.php">Search Baseball Card Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
		      </form>

	</body>
</html>
