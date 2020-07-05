<?php

$conn= new mysqli('localhost', 'Saraom', 'sa123456' ,'task_2');
$sql=   "SELECT tright From first";
$result = $conn->query($sql);

if(mysqli_num_rows($result)){

// output data of each row
$row = mysqli_fetch_assoc($result);
echo "Right: " . $row["tright"];
}


else {
    echo "0 results";
  }



?>