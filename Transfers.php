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
            <li><a  href="Home.php">home</a></li>
            <li><a  href="customers_list.php">Customers</a></li>
            <li><a class="active" href="Transfers.php">Transfers</a></li>
            <li><a href="History.php">Transfers History</a></li>
            
        </ul>
    </nav>

 

</header>




<section class="customers" id="customers">
<div class=" card" style="color: #fff ;display: block; background-color: rgba(280, 240, 245, 0.3); min-width: 500px;
    min-height: 400px;
    border-radius: 15px;
    padding:60px;
    margin:60px;
   
">
<form action="insert_to_dB.php" method="post">
<label style="color: #4d012d;font-weight: 500 ; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif"> Transfer operation</label> <br>  <br>  <br> <br>  <br>  <br>  
<label style="color: black;padding:10px;font-weight: 500; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif"> Select The sender name</label>
<select id="selc"name="sender" >
    <?php while($row1 = mysqli_fetch_array($result)):;?>
    <option value="" selected="selected" disabled="disabled"></option>
    <option ><?php  echo $row1[1];?></option>

    <?php endwhile;?>
    
</select><br>  <br>  <br> <br>  <br>  <br> 
<label style="color: black;padding:10px;font-weight: 500; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif"> Select The Receiver name</label>
<select id="selc" name="receiver">
    <?php while($row2 = mysqli_fetch_array($result2)):;?>
    <option value="" selected="selected" disabled="disabled" > </option>
    <option ><?php  echo $row2[1];?></option>

    <?php endwhile;?>
  
</select><br>  <br>  <br> <br>  <br>  <br>
<label style="color: black;padding:10px;font-weight: 500; font-size:20px; font-family:Georgia, 'Times New Roman', Times, serif"> The amount of money</label>
<input id="selc" style="margin-left: 40px;" type="number" name="amount">
<button id="Transfer" name="save" type ="submit" >Transfer</button>   
    <style>
   #selc{
  margin-bottom: 1em;
  margin-left:10px;
  padding: 6px;
  border: 0;
  border-bottom: 2px solid currentcolor; 
  font-weight: bold;
  letter-spacing: .15em;
  border-radius: 0;
        }
    #Transfer {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #fff;
        background-color: #4d012d;
        border: none;
        border-radius: 15px;
        box-shadow: 0 7px #999;
        margin-top: 20%;       
        margin-left: 40%;
        margin-right: 40%;
    }
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