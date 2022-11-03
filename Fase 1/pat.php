<?php
include 'connect.php';

if(isset($_POST['submit']))
  {
	  $pet_fname  = $_POST['fname'];
	  $pet_sname  = $_POST['lname'];
	  $pet_add    = $_POST['addr'];
	  $pet_type   = $_POST['bg'];
	  $pet_bd     = $_POST['smbdd'];
	  $pet_conta   = $_POST['tel'];
	  $pet_ema	 = $_POST['email'];
	  $pet_gender = $_POST['gender'];
	  $pet_opdid = $_POST['dnames'];
    $insittedby = $_POST["sadmun"];


	  //$trn_date = date("d-m-Y H:i:s");
	  $pet_age = ($pet_bd);

	  $checkeml="SELECT pet_em from patient where pet_em ='$pet_ema'";
	  $checktele="SELECT pet_con from patient where pet_con ='$pet_conta'";
	   //Execute select SQL Querry
   	$logPermition=mysqli_query($con,$checkeml);
		$logPermitiontel=mysqli_query($con,$checktele);

   		//read sigle row of result set
   	$row=mysqli_fetch_array($logPermition);
		$rowem=mysqli_fetch_array($logPermitiontel);

	  if($pet_type == "syst" | $pet_gender == "syg" | $pet_opdid == "setd" ){
		  $gestwterr = '<br/><div style="font-size:12px" align="center" class="alert alert-danger">Registro fallido, por favor complete todos los campos</div>';}
		  else{
			  if(($row['pet_em']==$pet_ema)){
			  $emlduperr = '<br/><div style="font-size:12px" align="center" class="alert alert-danger">¡La dirección de correo electrónico que ingresó ya está en uso!</div>';
			  if(($rowem['pet_con']==$pet_conta)){
				  $conduperr = '<br/><div style="font-size:12px" align="center" class="alert alert-danger">¡El número de contacto que ingresó ya está en uso!</div>';
			  }
		}else{

    $query = "INSERT INTO `patient`
	  ( `pet_fn`, `pet_sn`, `pet_addr`, `pet_con`, `pet_em`, `pet_gen`, `pet_bd`, `pet_age`, `pet_bg`,`Pet_opdid`,`Insert_admunname`)
	  VALUES
	  ('$pet_fname','$pet_sname','$pet_add','$pet_conta','$pet_ema','$pet_gender','$pet_bd',$pet_age,'$pet_type',$pet_opdid,'$insittedby')";

	  if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Registro Exitoso</div>';
				   echo '<script type="text/javascript">';

				   echo 'alert("' . $pet_opd . '")';
				   echo '</script>';
	  		}
		}
	  }
  }
?>
