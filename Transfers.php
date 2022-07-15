<!DOCTYPE html>
<?php 
session_start();
include 'db/server.php';

$sql = "SELECT * From customers ";
$result = $conn->query($sql);
$result2 = $conn->query($sql);?>
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
            <li><a  href="index.php">home</a></li>
            <li><a  href="customers_list.php">Customers</a></li>
            <li><a class="active" href="Transfers.php">Transfers</a></li>
            <li><a href="History.php">Transfers History</a></li>
            
        </ul>
    </nav>

 

</header>




<section class="customers" id="customers">
<div class=" card"
>
<form action="insert_to_dB.php" method="post">
<label id="lab1" > Transfer operation</label> <br>  <br>  <br> <br>  <br>  <br>  
<label id="lab2" > Select The sender name</label>
<select id="selc"name="sender" >
    <?php while($row1 = mysqli_fetch_array($result)):;?>
    <option value="" selected="selected" disabled="disabled"></option>
    <option ><?php  echo $row1[1];?></option>

    <?php endwhile;?>
    
</select><br>  <br>  <br> <br>  <br>  <br> 
<label id="lab2" > Select The Receiver name</label>
<select id="selc" name="receiver">
    <?php while($row2 = mysqli_fetch_array($result2)):;?>
    <option value="" selected="selected" disabled="disabled" > </option>
    <option ><?php  echo $row2[1];?></option>

    <?php endwhile;?>
  
</select><br>  <br>  <br> <br>  <br>  <br>
<label id="lab2"> The amount of money</label>
<input id="selc" style="margin-left: 40px;" type="number" name="amount">
<button id="Transfer" name="save" type ="submit" >Transfer</button>   
    <style>
   
    </style>
</form>
</div>
</section>
<?php
 if(isset($_SESSION['status']))
 {  
    echo"<h2>".$_SESSION['status']."</h2>";
    unset($_SESSION['status']);
 }
?>
</body>
</html>