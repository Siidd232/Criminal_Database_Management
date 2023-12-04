<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>



  <style>
    body
{
  background: url(z_home.jpg);
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #ffffff;
}

.container
{
  perspective: 320px;
}

.btn
{
  display: block;
  margin: 40px 0;
  width: 240px;
  height: 80px;
  border: none;
  background-color: #827ffe;
  color: #fff;
  font-size: 18px;
  border-radius: 6px;
  outline: none;
  cursor: pointer;
  transition: .3s linear;
}



.btn1:hover {
  transform: rotateX(15deg);
  box-shadow: 0 15px 15px #8686b5;
}

.btn2:hover {
  transform: rotateX(15deg);
  box-shadow: 0 15px 15px #8686b5;
}

.btn3:hover {
  transform: rotateX(15deg);
  box-shadow: 0 15px 15px #8686b5;
}

.btn4:hover {
  transform: rotateX(15deg);
  box-shadow: 0 15px 15px #8686b5;
}

.btn5:hover {
    transform: rotateX(15deg);
    box-shadow: 0 15px 15px #8686b5;
  }
  </style>
</head>
<body>

<style>
  p {
    color : black;
    font-family : verdana;
    font-size : 150%;
  }
</style>
  <Center><p>Welcome!</p><Center>
  <center>
  <div class="btn-group-vertical">
    <a href="fir_file.php"><button class="btn btn1">File New FIR</button></a>
    <a href="criminal_file.php"><button class="btn btn2">Add a Criminal</button></a>
    <a href="view_criminal_db.php"><button class="btn btn3">View Criminal Databse</button></a>
    <a href="view_fir_db.php"><button class="btn btn4">View Case Status</button></a>
    <a href="index.php"><button class="btn btn5">LOGOUT</button></a>
    
  </div>
</center>
</body>
</html>
