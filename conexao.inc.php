<?php
$server = "localhost";
$user = "root";
$pass = "123";
$db = "p3_crud";

$conexao = mysqli_connect($server, $user, $pass, $db) or die ("Falha na conexao com o banco de dados!<br>");
if($conexao){
    mysqli_set_charset( $conexao, 'utf8');
    //echo "conexão!!!";
}else{
       echo "Falha na conexão!!!";
}
/*
@$conn = new mysqli($server, $user, $pass, $db, 3306);
if ($conn->connect_errno) {
    //echo "{'erro':{'status':'Falha na conexao com o banco de dados!'}}"; 	//"Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	die ("{'erro':{'status':'Falha na conexao com o banco de dados!'}}");
}else{
	$conn->set_charset('utf8');
}
*/
?>
