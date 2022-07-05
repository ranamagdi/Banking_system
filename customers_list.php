<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customers page</title>

    

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
            <li><a class="active" href="customers_list.php">Customers</a></li>
            <li><a href="course.html">Transfers</a></li>
            <li><a href="login.html">Transfers History</a></li>
            
        </ul>
    </nav>

 

</header>




<section class="customers" id="customers">
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone Number  </th>
<th>Current Balance ($)   </th>
<th>Location</th>
</tr>
<?php

include 'db/server.php';
$sql = "SELECT * From customers order by Name";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Email'] 
    . "</td><td> ".$row['Phone_number']. "</td><td> ".$row['CURRENT_Balance']
    . "</td><td> ".$row['Location']. "</td></tr> ";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
    
      
   
  
</section>
</body>
</html>

