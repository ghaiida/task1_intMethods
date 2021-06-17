<?php


try{
	$con= mysqli_connect('localhost','root', 'abc123','control_arm');

	echo "you have connected";
}catch(PDOException $e){
    $error_message=$e->getMessage();
    exit();
	
}

if(isset($_POST['submit'])){
    
   $motor1 = $_POST['volume1'];
   $motor2 = $_POST['volume2'];
   $motor3 = $_POST['volume3'];
   $motor4 = $_POST['volume4'];
   $motor5 = $_POST['volume5'];
   $motor6 = $_POST['volume6'];

$sql ="INSERT INTO motors(motor1, motor2, motor3, motor4, motor5, motor6) VALUES ('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')";

$run= mysqli_query($con,$sql) or die(mysqli_error($con));

   if($run){
      echo'don';
    }else{
      echo'No';
   }

}else{
    echo'fuals';
}

?>