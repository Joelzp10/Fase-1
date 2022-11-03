<?php include 'connect.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/rightde.js"></script>
<title>Clinica Privada</title>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}
</style>
</head>

<body>
<?php include 'slvlauth.php'; ?>
<div style="background-color: white; height: 40px; padding: 10px; z-index: 1; position:fixed; width: 1366px;">
De nada Nivel superior <?php echo $_SESSION['topadun']; ?> Opciones. <a href="dminlogout.php">Cerrar sesión</a>
</div><br><br><br>
<div class="container">
<div class="row">
<div class="col-md-12">

<h1 class="text-center ">Clinica Privada<br /><small style="font-size:20px">Sistema Administrativo de Clinica San Francisco</small></h1>
</div>
</div>
</div>
<br/><br/>
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadmopt.php"><strong>Opciones de Super Admin</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="basiadminopts.php"><strong>Opciones básicas de administración</strong></a></li>
</ul>
</div></div>
<hr>
<div class="container-fluid">
<div class="row col-md-8 col-md-offset-2 col-xs-12">
<ul class="nav  nav-justified" style="background-color:#FFF;">
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadmopt.php"><strong>Insertar superadministración</strong></a></li>
  <li class="active"  style="font-family:calibri; font-size:16px;"><a style="color:#000" href="deletesupad.php"><strong>Eliminar superadministración</strong></a></li>
</ul>
<hr>
</div></div>

<div style="border-radius:10px; padding:25px;" class="container alert-success">
<div class="row">
<div class="col-md-12 ">
<h4 style="font-family:calibri;" class="text-center">Al hacer clic en Eliminar, puede detele puede eliminar la cuenta de administrador</h4>
<br/>

<table  style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover">
<thead>
<tr>
<th valign=""><strong>No</strong></th>
<th><strong>Reg.No de superadministración</strong></th>
<th><strong>Nombre completo del superadministrador</strong></th>
<th><strong>Nombre de usuario del superadministrador</strong></th>
<th><strong>Correo electrónico de superadministrador</strong></th>
<th><strong>Fecha de creación del superadministrador</strong></th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `sup_admin` ORDER BY `sadid` desc";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr valign="middle">
    <td  align="left"><strong><?php echo $count; ?></strong> </td>
    <td  align="left"><?php echo $row["sadid"]; ?></td>
    <td  align="left"><?php echo $row["saname"]; ?> </td>
    <td  align="left"><?php echo $row["sadiun"]?> </td>
	  <td  align="left"><?php echo $row["sadem"]; ?></td>
    <td  align="left"><?php echo $row["cret_date"]; ?></td>
    <td  align="center"><a  href="delesup.php?id=<?php echo $row["sadid"]; ?>" name="ad">Eliminar</a></td>
</tr>
<?php
$count++; } ?>
</tbody>
</table>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>
<footer>
  <?php include 'footer.php';?>
</footer>
</html>