<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customers page</title>

    

 
    

</head>
<body>

<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    

    <nav class="navbar">
        <ul>
            <li><a  href="Home.php">home</a></li>
            <li><a class="active" href="customers_list.php">Customers</a></li>
            <li><a href="Transfers.php">Transfers</a></li>
            <li><a href="History.php">Transfers History</a></li>
            
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
<style>
    :root{
    --gradient:linear-gradient(90deg, #f10fd3, #4d012d);
}


*{
    font-family: 'Open Sans', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    border:none; outline: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
   
}


*::selection{
    background:#4d012d;
    color:#fff;
}
.card{
    color: #fff;
    display: block;
    background-color: rgba(245, 245, 245, 0.3);
    min-width: 500px;
    min-height: 500px;
    border-radius: 15px;
}


html{
    font-size: 62.5%;
    overflow-x: hidden;
}

html::-webkit-scrollbar{
    width:1.5rem;
}

html::-webkit-scrollbar-track{
    background:#333;
}

html::-webkit-scrollbar-thumb{
    background:linear-gradient(#f10fd3, #4d012d);
}

/*ShowCase Area Style*/
.showcase {
    text-align: center;
    color:#fffefd;
    padding-top: 15%;
    height: 400px;
    background-image:url(images/InvestmentBanks-750x400.jpg);
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
  }
  .showcase h1 {
    padding: 60px 0 20px 0;
    font-size: 60px;
  }
  .showcase p {
    padding: 10px;
    font-size: 20px;
  }
section{
    min-height: 100vh;
    padding:1rem 7%;
    padding-top:6rem;
}



.heading{
    color:#444;
    padding:1rem;
    font-size: 4rem;
    text-align: center;
}

/*Footer Style */
footer {
    padding: 27px;
    text-align: center;
    font-size: 16px;
    background-color:#20201e;
    color: #ffffff;
    display: block;
    width: 100%;
  }




header{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top:0; left: 0;
    z-index: 1000;
    padding:1.5rem 7%;
    background:var(--gradient);
    box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
}


header .navbar ul{
    display: flex;
    align-items: center;
    justify-content: center;
    list-style: none;
}

header .navbar ul li{
    margin:0 1rem;
}

header .navbar ul li a{
    font-size: 2rem;
    color:#fff;
}

header .navbar ul li a.active,
header .navbar ul li a:hover{
    color:rgb(29, 27, 27);
}


header #menu{
    font-size: 3rem;
    color:#fff;
    cursor: pointer;
    display: none;
}



body{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
   
    
    position: relative;
    text-align: center;
}


.home h1{
    font-size: 4rem;
    color:#35252f;
    padding:4rem 0;
    width:70rem;
}


.customers{
    display: flex;
    align-items:left;
    justify-content: center;
    flex-wrap: wrap;
    width: 100%;
    background:url(images/images.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}










.contact{
    color: rgb(240, 231, 231);
        background-color: rgba(45, 44, 73, 0.3);
        min-width: 500px;
        min-height: 200px;
        
}

.contact .heading{
    color:rgb(240, 235, 235);
}

.contact .row{
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-wrap: wrap;
}





table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 20px;
    color: #300e2a;
    width: 100%;
    font-family: sans-serif;
    border-collapse: collapse;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

    }
    th {
        background-color: #320233;
        color: #ffffff;
        text-align: center;
    }
    td{
        padding: 130x 15px;
    }
    tbody tr {
        border-bottom: 1px solid #dddddd;
    }
    tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }
    tbody tr:last-of-type {
        border-bottom: 2px solid #320233;
    }
    tbody tr.active-row {
        font-weight: bold;
        color: #320233;
    }
    table {
        border-collapse: collapse;
      }
      table, th, td {
        border: 1px solid;
      }







</style>
</body>
</html>

