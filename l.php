<?php

$conn= new mysqli('localhost', 'Saraom', 'sa123456' ,'task_2');
$sql=   "SELECT tleft From first";
$result = $conn->query($sql);

if(mysqli_num_rows($result)){

// output data of each row
$row = mysqli_fetch_assoc($result);
echo "Left: " . $row["tleft"];
}


else {
    echo "0 results";
  }



?>