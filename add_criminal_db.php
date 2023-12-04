<?php
    $accname = $_POST['acc_name'];
    $accage = $_POST['acc_age'];
    $accgender = $_POST['acc_gender'];
    $accadd = $_POST['acc_address'];



    $conn = new mysqli('localhost','root','','criminals');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->cnnect_error);
    }
    else{
        $stmt = $conn->prepare("insert into accused(acc_name, acc_age, acc_gender, acc_address) values
        (?,?,?,?)");
        $stmt->bind_param("ssss",$accname,$accage,$accgender,$accadd);
        $stmt->execute();
        echo "Successfully Added!";
        $stmt->close();
        $conn->close();
    }

?>
