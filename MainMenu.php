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

<nav>
    <a href="MainMenu.php">Home</a>
    <a href="#">Baseball Card</a>
    <a href="SelectCustomer.php">Customer</a>
    <a href="#">Player</a>
    <a href="SelectSalesRecord.php">Sales Record</a>
    <a href="#">Shipment</a>
    <a href="#">Supplier</a>
    <a href="#">Team</a>
</nav>

<div class="container">
    <h2>Search and Manage</h2>

    <form action="search.php" method="post">
        <label for="table">Select a table:</label>
        <select name="table" id="table" class="select-style">
            <option value="baseball_card">Baseball Card</option>
            <option value="customer">Customer</option>
            <option value="player">Player</option>
            <option value="sales_record">Sales Record</option>
            <option value="shipment">Shipment</option>
            <option value="supplier">Supplier</option>
            <option value="team">Team</option>
        </select>

        <label for="action">Select an action:</label>
        <select name="action" id="action" class="select-style">
            <option value="search">Search</option>
            <option value="add">Add Item</option>
            <option value="remove">Remove Item</option>
            <option value="view_all">View All Items</option>
        </select>


    <button type="submit" class="button" formaction=MenuRedirect.php>Go</button>
   
    </form>
    <br><br><br>
    <img src="team_logos.jpg" alt="Image 1" class="image">
    <!-- Add more image tags as needed -->

</div>

</body>
</html>
