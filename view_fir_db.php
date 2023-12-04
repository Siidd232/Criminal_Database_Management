<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

.container {
  width: 80%;
  padding: 20px;
  background-color: #9E9EFF;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 70%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: center;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<center>
  <div class="container">
<h2>Cases</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Accused ID.." title="Type in ID">

<table border = "1" cellspacing = "5" width = "100%">
  <tr>
    <th>ID</th>
    <th>FIR Date</th>
    <th>Description</th>
    <th>Crime Date</th>
    <th>Crime Time</th>
    <th>Crime Location</th>
    <th>Police Station</th>
</tr>


<?php
$conn = mysqli_connect("localhost", "root", "", "criminals");
$sql = "SELECT * FROM fir";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result -> fetch_assoc()){
    echo "<tr><td>" . $row["fir_id"] . "</td><td>" . $row["fir_date"] . "</td><td>" . $row["crime_description"] . "</td><td>" . $row["crime_date"] . "</td><td>" . $row["crime_time"] . "</td><tr>" . $row["crime_location"] . "</td><tr>" . $row["police_station"] . "</td><tr>";
  }
}
else{
  echo "No Results";
}

$conn->close();
?>
  
</table>
</div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</center>
</body>
</html>