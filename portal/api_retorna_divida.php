<?php
$array = array();

if (isset($_POST["cpf"])) {
	$cpf = $_POST["cpf"];
}else{
	echo exit(json_encode($array));
}

$db = new mysqli('mutavel.mysql.dbaas.com.br', 'mutavel', 'mutavel', 'mutavel');
if(mysqli_connect_errno()){
echo mysqli_connect_error();
}
$result = $db->query("SELECT * FROM `devedor` where dev_cpf = $cpf limit 1");
if($result){


  while ($row = $result->fetch_assoc()){
   	
   	array_push($array, $row["dev_vl_debito"]);
   	  
   }
  $result->free();
}
$db->close();

header('Content-Type: application/json');
echo json_encode($array); 
?>