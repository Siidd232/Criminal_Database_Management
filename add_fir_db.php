<?php
    
    $crimdes = $_POST['crime_des'];
    $crimedt = $_POST['crime_dt'];
    $crimet = $_POST['crime_t'];
    $crimeloc = $_POST['address'];
    $polst = $_POST['police_st'];


    $conn = new mysqli('localhost','root','','criminals');
    if($conn->connect_error){
        die('Connection Failed: '.$conn->cnnect_error);
    }
    else{
        $stmt = $conn->prepare("insert into fir(crime_description, crime_date, crime_time, crime_location, police_station) values
        (?,?,?,?,?)");
        $stmt->bind_param("sssss",$crimdes,$crimedt,$crimet,$crimeloc,$polst);
        $stmt->execute();
        echo "Successfully Added!";
        $stmt->close();
        $conn->close();
    }

?>

