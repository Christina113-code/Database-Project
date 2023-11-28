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
               <nav>Search Sales Records</nav>
	       <form method="get" action="FindSalesRecord.php">
                     <tr>
                     <br>
		     <td>Customer Id:
			  <input type="text" name="customeridField"  >
		     </td>
		     <td>Date Sold:
			  <input type="date" name="dateSold"  ID="date">
		     </td>
		     <td>Item ID:
			  <input type="text" name="itemID"  ID="nf">
		     </td>
        <label for="action">Payment Type:</label>
        <select name="paymentType" id="action" class="select-style">
            <option value="CCard">Credit Card</option>
            <option value="Check">Check</option>
            <option value="Wire">Wire Transfer</option>
            <option value="Bitc">Bitcoin</option>
            <option value="Cash">Cash</option>

        </select>
			  
		     </td>
                     </tr>
                     <br><br><br>
                     
		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
               </form>
       </body>
</html>
