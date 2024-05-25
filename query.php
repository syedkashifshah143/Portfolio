<?php
include "dbcon.php";

if(isset($_POST['contactbtn'])){
    $name = $_POST['cName'];
    $email = $_POST['cEmail'];
    $address = $_POST['cAddress'];
    $phone = $_POST['cPhone'];
    $msg = $_POST['cMessage'];
    $query = $pdo->prepare("insert into customercontact (name, email, address, phone, message) value (:cname, :cemail, :caddress, :cphone, :cmsg)");
    $query->bindParam(':cname', $name);
    $query->bindParam(':cemail', $email);
    $query->bindParam(':caddress', $address);
    $query->bindParam(':cphone', $phone);
    $query->bindParam(':cmsg', $msg);
    $query->execute();
    echo "<script>alert('Message sent successfully')</script>";

}
?>