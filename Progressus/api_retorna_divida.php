<?php

$servername = "mutavel.mysql.dbaas.com.br";
$username = "mutavel";
$password = "mutavel";

$link = mysqli_connect($servername, $username, $password);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
	echo "conectou";
}

$query = "select *  from devedor";

$result = mysqli_query($link, $query);

while($r = mysqli_fetch_array($result)){
    echo $r["dev_cpf"];
}
echo $r;

/* close connection */
mysqli_close($link);



