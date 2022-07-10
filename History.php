<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfers page</title>

    

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
   
    

</head>
<body>


<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    

    <nav class="navbar">
        <ul>
            <li><a  href="Home.php">home</a></li>
            <li><a  href="customers_list.php">Customers</a></li>
            <li><a  href="Transfers.php">Transfers</a></li>
            <li><a class="active" href="History.php">Transfers History</a></li>
            
        </ul>
    </nav>

 

</header>




<section class="customers" id="customers">
<table>
<tr>
<th>Sender Name</th>
<th>Receiver Name</th>
<th>Amount($) </th>

</tr>
<?php

include 'db/server.php';
$sql = "SELECT * From transfers ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['Sender_Name'] . "</td><td>" . $row['Receiver_name'] 
    . "</td><td> ".$row['Amount']. "</td></tr> ";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
    
      
   
  
</section>
</body>
</html>

