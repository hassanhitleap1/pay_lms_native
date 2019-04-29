<?php

require_once 'Payment.php';
require_once 'Connection.php';

$conn= new Connection();

$payment= new Payment($conn);

try
{
    $database = new Connection();
  
    $payment= new Payment($database);
   
    $cards=$payment->getAllCard();

    foreach ($cards  as $row) {
        echo " ID: ".$row['id'] ."\t";
        echo " number ".$row['number'] ."<br>";
        }

    $payment->genarateCode(100);

}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}


 






?>

