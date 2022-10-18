<?php
try{
    $conn = new PDO('mysql:host=tandm; dbname=tandm_db', 'root', 'root');    
    $query = "INSERT INTO contact (name, number) VALUES (?, ?)";
    $msg = $conn->prepare($query);
    $msg->execute([$_POST['fname'], $_POST['fnumber']]);
    header("Location: index.html");
}
catch (PDOException $e)
{
    echo "Error" .$e->getMessage();
}
?>