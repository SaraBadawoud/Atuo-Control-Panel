<!DOCTYPE html> 
<html> 
	
<head> 
	<title> 
		
	</title> 
</head> 

<body style="text-align:center;"> 
	
	<h1 style="color:burlywood;"> 
		Auto Control Panel
	</h1> 
	 
	<style>
   .button11{
	background-color: gray;
	color: white;
	border: none ;
	height: 40px;
    width: 50px;  
   }


   .button22{
	background-color: gray;
	color: white;
	border: none ;
	height: 40px;
    width: 50px; 
   }

   .button33{
border: none ;
color: white;
background-color: rgb(186, 205, 240);
height: 50px;
width: 75px;  
   }


   .button44{
border: none ;
color: white;
background-color: rgb(186, 205, 240);
height: 50px;
width: 75px;  
   }


   .button55{
border: none ;
color: black;
background-color:burlywood;
height: 50px;
width: 50px;
border-radius: 50%;

   }


img{
position: absolute;
margin: 10%; 
left: 400px;
top: 130px;
}
	</style>




	
	<?php
		if(array_key_exists('button1', $_POST)) { 
			button1(); 
		} 
		else if(array_key_exists('button2', $_POST)) { 
			button2(); 
        } 
        else if(array_key_exists('button3', $_POST)) { 
			button3(); 
		} 
		else if(array_key_exists('button4', $_POST)) { 
			button4(); 
		} 
		else if(array_key_exists('button5', $_POST)) { 
			button5(); 
        } 
         
###button1 Right
		function button1() { 
			$conn= new mysqli('localhost', 'Saraom', 'sa123456' ,'task_2');
           $sql=   "SELECT tright From first";
           $result = $conn->query($sql);

if (mysqli_num_rows($result)) {
    
    // output data of each row
    $row = mysqli_fetch_assoc($result);
        echo "Right: " . $row["tright"];
    
}


else {
    echo "0 results";
  }





  
 
  $s="INSERT INTO first (tright) VALUES ('R')";
  $r=$conn-> query($s);

  mysqli_close($conn);
        } 
        
            
###button1 Left

		function button2() { 
			$conn = mysqli_connect('localhost', 'Saraom', 'sa123456' ,'task_2');
           $sql="SELECT tleft From first";
           $result = $conn->query($sql);

if (mysqli_num_rows($result)) {
    
    // output data of each row
    $row = mysqli_fetch_assoc($result);
        echo "Left: " . $row["tleft"];
    
}


else {
    echo "0 results";
  }
 
  $s="INSERT INTO first (tleft) VALUES ('L')";
  $r=$conn-> query($s);

  mysqli_close($conn);
        } 
        




###button1 Backward

        function button3() { 
			$conn = mysqli_connect('localhost', 'Saraom', 'sa123456' ,'task_2');
			$sql="SELECT tbackward From first";
			$result = $conn->query($sql);
 
 if (mysqli_num_rows($result)) {
	 
	 // output data of each row
	 $row = mysqli_fetch_assoc($result);
		 echo "Backward: " . $row["tbackward"];
	 
 }
 
 
 else {
	 echo "0 results";
   }
  
   $s="INSERT INTO first (tbackward) VALUES ('B')";
   $r=$conn-> query($s);
 
   mysqli_close($conn);
		 } 
    


 ###button1 Forward

        function button4() { 
			$conn = mysqli_connect('localhost', 'Saraom', 'sa123456' ,'task_2');
			$sql="SELECT tforward From first";
			$result = $conn->query($sql);
 
 if (mysqli_num_rows($result)) {
	 
	 // output data of each row
	 $row = mysqli_fetch_assoc($result);
		 echo "Forward: " . $row["tforward"];
	 
 }
 
 
 else {
	 echo "0 results";
   }
  
   $s="INSERT INTO first (tforward) VALUES ('F')";
   $r=$conn-> query($s);
 
   mysqli_close($conn);
		 } 



		 ###button1 Stop

		 function button5() { 
			$conn = mysqli_connect('localhost', 'Saraom', 'sa123456' ,'task_2');
			$sql="SELECT tstop From first";
			$result = $conn->query($sql);
 
 if (mysqli_num_rows($result)) {
	 
	 // output data of each row
	 $row = mysqli_fetch_assoc($result);
		 echo "STOP ";
	 
 }
 
 
 else {
	 echo "0 results";
   }
  
   $s="INSERT INTO first (tstop) VALUES ('S')";
   $r=$conn-> query($s);
 
   mysqli_close($conn);
		 } 


	?> 





<img src="https://image.freepik.com/vecteurs-libre/robot-souriant-mignon-chat-bot-signes-communication-illustration-personnage-dessin-anime-plat-moderne-isole-blanc-bulle-parlee-service-support-vocal-communication-bot-discussion_92289-518.jpg"
    alt="robot" width="300"/>




	<form method="post"> 
		<input type="submit" name="button1"
				class="button11" value="Right" onclick="window.open('r.php' , '_blank' )"/> 

				<input type="submit" name="button4"
				class="button33" value="Forward" onclick="window.open('f.php' , '_blank' )"/> 

				<input type="submit" name="button5"
				class="button55" value="Stop" onclick="window.open('s.php' , '_blank' )"/> 

				<input type="submit" name="button3"
				class="button44" value="Backward"  onclick="window.open('b.php' , '_blank' )" /> 

				<input type="submit" name="button2"
                class="button22" value="Left" onclick="window.open('l.php' , '_blank' )"/> 
	</form> 
</head> 

</html> 
