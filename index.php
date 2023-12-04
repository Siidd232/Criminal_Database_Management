<?php
    
    $passcode_error = "";
    $success = "";

    if(isset($_POST['submit'])){
        $passcode = $_POST["passcode"];
        if($passcode == 1234){
            $passcode_error = "";
            $success = "Welcome Admin!"; 
            header("Location: home.php");      
        }
        else{
            $passcode_error = "Invalid Passcode!";
            $success = "";
        }
    }
    


?>

<html>
    <head>
        <style>
            body{
    margin: 0;
    padding: 0;
    background: url(z_home2.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-sherif;
    
}


.loginbox{
    width: 320px;
    height: 420px;
    background: #000 ;
    opacity: 0.9;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
    box-shadow: 0 0 40px 20px rgba(0,0,0,0.26);
}


.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    opacity: 1;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 60px;
    text-align: center;
    font-size: 20px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    align-items: center;
    width: 160px;
    margin-bottom: 80px;    
}

.loginbox input[type="password"]{
    align-items: center;
    border:none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 80px;
    color: #fff;
    font-size: 16px;
}

.loginbox input[type="submit"]{
    border: none;
    outline:none;
    height: 40px;
    background: #827ffe;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.loginbox input[type='submit']:hover{
    cursor: pointer;
    background: #573ed6 ;
    color: #000;
}

.loginbox span{
    align-items: center;
    width: 160px;
    font-size: 16px;
}



        </style>
        <meta charset="utf-8">
        <title> ADMIN LOGIN </title>
        

        <body>
            <div class="loginbox">
                <img src ="z_Policelogo.png" class="avatar">
                <h1> Enter Passcode To Enter </h1>
                <center><p class="passcode_error"><?php echo $passcode_error; ?></p><p class = "success"><?php echo $success; ?></p></center>
                <form action="" method="post" auto_complete="off">
                    <center><p> Passcode </p>
                    <i class="fa fa-lock fa-2x cust" aria-hidden="true"></i>
                    <input type="password" name="passcode" placeholder="" require><br>
                    <input type = "submit" name="submit" value="Access Database">
                    </center>
                </form>    

            
</div>    
            

            
</body>
</head>
</html>

    