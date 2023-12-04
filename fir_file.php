<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Case</title>
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: #f1f1f1;
  background: url(home.jpg);
}
.container {
  width: 50%;
  padding: 50px;
  background-color: #9E9EFF;
  border-radius: 20px;
  
}

input[type=text], textarea {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  opacity: 1;
}
input[type=text]:focus{
  background-color: #cecece;
  outline: none;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #50509c;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<form action="add_fir_db.php" method="post">
<center>
    <div class="container">
        <h1> First Information Report </h1>
        <hr>
        <!--input type="text" name="fir_dt" placeholder="FIR Date (yyyy-mm-dd)" size="4"required /-->
        <input type="text" name="crime_des" placeholder="Crime Description" size="4"required />
        <input type="text" name="crime_dt" placeholder="Crime Date (yyyy-mm-dd)" size="4"required />
        <input type="text" name="crime_t" placeholder="Crime Time" size="4"required />
        <input type="text" name="address" placeholder="Crime Location" size="35" required />
        <input type="text" name="police_st" placeholder= "Police Station" size="4" required />

    <button type="submit" class="registerbtn">File New FIR</button>
</center>
</form>
</body>
</html>