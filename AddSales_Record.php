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
               <nav>Add Sales Records</nav>
	<body>
		<img src="bballBackground.jpg"  width="200" height="200" align=center> 
		      <form method="get" action="InsertSalesRecord.php">
		      <table style="width:100%;">
                     <tr style="width:100%;">
                     <br>
                     
		     <td>Customer Id:
			  <input type="text" name="customeridField" required >
		     </td>

		     <td>Date Sold:
			  <input type="date" name="dateSold"  ID="date" required>
		     </td>

		     <td>Item ID:
			  <input type="text" name="itemID"  ID="nf" required>
		     </td>

		     <td>Payment Type:
			  <input type="text" name="paymentType"  ID="nf" required>
		     </td>

		     <td>Sold Price:
			  <input type="text" name="soldPrice"  ID="nf" required>
		     </td>
                     </tr>
                     </table>
                     <br><br><br>
		      <input type="submit">
		      <button type="submit" formaction="SearchSalesRecord.php">Search Sales Records</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
		      </form>

	</body>
</html>
