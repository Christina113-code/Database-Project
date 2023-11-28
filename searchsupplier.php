<!DOCTYPE html>
<html lang="en">
    <!-- <!dress (varchar)
Columncard_id (MUL, int, nullable)
Columncard_purchased_price (decimal, nullable)
Columndate_purchased (date, nullable)
Columnname (varchar)
Columnshipment_id (MUL, int, nullable)
Columnsupplier_id (PRI, char) -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baseball Card Database</title>
    <link rel="stylesheet" href="styles.css">

</head>
       <body>
       <header>
           <h1>Search Suppliers</h1>
       </header>
               <nav>Search Suppliers</nav>
	       <form method="get" action="FindSupplier.php">
                     <tr>
                     <br>
		     <td>Supplier Id:
			  <input type="text" name="supplier_id"  >
		     </td>
		     <td>Purchased Price:
			  <input type="text" name="purchased_price"  >
		     </td>
		     <td>Date Purchased:
			  <input type="text" name="date_purchased"  >
		     </td>
		     <td>Card ID:
			  <input type="text" name="card_id"  >
		     </td>
		     <td>Shipment ID: 
			  <input type="text" name="shipment_id"  >
		     </td>
		     <td>Name:
			  <input type="text" name="name"  >
		     </td>
			  
                     </tr>
                     <br><br><br>
                     
		      <input type="submit" name="submit">
		      <button type="reset">Reset Search Fields</button>
		      <button type="submit" formaction="MainMenu.php">Main Page</button>
		      
               </form>
       </body>
</html>
