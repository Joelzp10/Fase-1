<?php include 'lvlauth.php'; ?>
<?php include 'connect.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Clinica Privada</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<script type="text/javascript" src="js/rightde.js"></script>
<link rel="stylesheet" href="css/hide.css">
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>

</head>
<body>


<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>
<br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Clinica Privada<br /><small style="font-size:20px">Sistema Administrativo de Clinica San Francisco</small></h1></div>
</div>
</div>
<br><br><br>
<input id="admtee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patin.php"><strong>Registro de Pacientes</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patiinfo.php"><strong>Información de Pacientes</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="petsearch.php"><strong>Búsqueda de Pacientes</strong></a></li>
<li id="lock" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadm.php"><strong>Editar o Eliminar Información de Pacientes</strong></a></li>
</ul>
</div></div>

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Información de Pacientes</h3></div>
</div>
</div>
</div>
<div style="border-radius:10px; padding:25px;" class="container alert-success">
<div class="row" style="background-color:#A1F08C">
<div class="col-md-12 ">
<h4 style="font-family:calibri;" class="text-center" >Al hacer clic en "más información" se puede conocer al médico asignado. Puede generar una factura de paciente. Puede ingresar a un paciente para admitirlo en la clinica.</h4>
<br />

<table  style="background-color:#FFF; font-size:14px;" class="table table-striped table-hover">
<thead align="center">
<tr>
<th valign="" style="text-align: center"><strong>No</strong></th>
<th style="text-align: center"><strong>Número de Registro</strong></th>
<th style="text-align: center"><strong>Nombre Completo</strong></th>
<th style="text-align: center"><strong>Doctor asignado</strong></th>
<th style="text-align: center"><strong>Grupo de Sangre</strong></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT patient.pet_id,patient.pet_fn,patient.pet_sn,patient.Pet_opdid,patient.pet_bg,staff.smfname,staff.smlname
FROM staff
RIGHT JOIN patient
ON patient.Pet_opdid=staff.staffID ORDER BY `pet_id` DESC";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr valign="middle">
    <td  align="center"><strong><?php echo $count; ?></strong> </td>
    <td  align="center"><?php echo $row["pet_id"]; ?></td>
    <td  align="center"><?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?></td>
    <td  align="center"><?php echo $row["Pet_opdid"]?> | Dr.<?php echo $row["smfname"]?> <?php echo $row["smlname"]?> | <a target="_blank" href="admitdf.php?id= <?php echo $row["Pet_opdid"]; ?>" name="ad"> Más información </a> </td>
	  <td  align="center"><?php echo $row["pet_bg"]; ?></td>
    <td  align="center"><a target="_blank" href="opdinvo.php?id=<?php echo $row["pet_id"]; ?>" name="ad">Generar factura paciente</a></td>
    <td  align="center"><a target="_blank" href="admit.php?id=<?php echo $row["pet_id"]; ?>" name="ad">Ingresar a la clínica</a></td>

</tr>

<?php
$count++; } ?>
</tbody>
</table>

</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admtee").value == x)
{
 document.getElementById("lockk").style.display = 'none';
}else{
  document.getElementById("lockk").style.display;
}

</script>
</body>
<footer>
	<?php include 'footer.php';?>
</footer>
</html>