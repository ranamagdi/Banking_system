<?php 
session_start();
include 'db/server.php';


if(isset($_POST['save'])){
    $sender=$_POST['sender'];
    $receiver=$_POST['receiver'];
    $amount=$_POST['amount'];
    $query="INSERT INTO transfers(Sender_Name,Receiver_name,Amount)VALUES(' $sender','$receiver','$amount') ";
    $result = $conn->query($query);
    if($result){
        
        $_SESSION['status']=" Transfer Succesful.You can click on transfers history to see your transfer";
        header("Location:Transfers.php");
        
    }
    else{
        $_SESSION['status']="unsuccesful transfer";
        header("Location:Transfers.php");
    }
}


?>