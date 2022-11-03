<?php
	$con = mysqli_connect("127.0.0.1","usr_empresa","Empres@123");
	date_default_timezone_set ("America/Bogota");
	mysqli_select_db($con,"db_hospital");
	if(!$con){
			die("Failed to connect");
			}
?>
<?php
define ("HOSTNAME","127.0.0.1");
define ("USERNAME","usr_empresa");
define ("PASSWORD","Empres@123");
define ("DATABASE","db_hospital");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Incapaz de conectar a la base de datos");

if($dbhandle->connect_error){
	die("conexión fallida".$dbhandle->connect_error);
}
?>