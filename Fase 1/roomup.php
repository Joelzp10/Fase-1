<?php include 'connect.php';?>
<?php include 'roomupdb.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Clinica Privada</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
</head>
<body>
<?php include_once('navbar.php');?>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center ">Clinica Privada<br /><small style="font-size:20px">Sistema Administrativo de Clinica San Francisco</small></h1></div>

</div>
</div>
<br/>

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Actualización de Detalles de Habitación </h3></div>
<br/>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-push-4 col-xs-12 alert alert-success text-center">Seleccione Doctor para Revisar la Habitación.</div>
</div>
</div>
<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Formulario de Actualización de Detalles de la Habitación</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">Seleccionar Doctor</small>
<div>

<?php
$id=$_REQUEST['id'];
$query = "SELECT * FROM `hospi_room` WHERE `room_id`='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>
  <form method="post" action="">
  <div align="left">  ID Habitación :</div>
  <input hidden name="ridd" value="<?php echo $row["room_id"]; ?>" >
    <input name="adm_pid" disabled  value="<?php echo $row["room_id"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Patient ID" >
<div align="left">  Nombre de Habitación :</div>
    <input name="adm_name" Disabled   value="<?php echo $row["room_name"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Patient Name">
<div align="left"> Seleccionar Doctor para el horario matutino :</div>
    <select required  name="mrdo"  style="margin:5px;  border-radius:0px" class="form-control">
    <option value="">Seleccionar doctor para el horario matutino</option>
    <?php
        $count = 1;
        $sel_query="SELECT * FROM `staff` WHERE `smtype` = 'Doctor' && (smwoti = 'Mañana' || smwoti = 'Full')";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <option  value="<?php echo $row["staffID"]?>"> <?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?> </option>
            <?php $count++; } ?>
    </select>
    <div align="left"> Seleccionar doctor para el horario de la tarde :</div>
        <select required  name="erdo"  style="margin:5px;  border-radius:0px" class="form-control">
        <option value="">Seleccionar doctor para el horario de la tarde</option>
        <?php
            $count = 1;
            $sel_query="SELECT * FROM `staff` WHERE `smtype` = 'Doctor' && (smwoti = 'Evening' || smwoti = 'Tarde' || smwoti = 'Full')";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
                <option  value="<?php echo $row["staffID"]?>"> <?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?> </option>
                <?php $count++; } ?>
        </select>
  </div>

  <button name="submit"  class="btn btn-primary" onclick="">Enviar</button>
  </form>
<tr><td colspan="2" style="padding:5px">
<br /><br />
<script type="text/javascript">
document.write('<?php echo $success; ?>');
    </script>
</td>
  </tr>
</center>
<div class="panel-footer text-center">Presione el botón Enviar después de completar </div>
</div>
</div>
</div>
</center>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<footer>
  <?php include 'footer.php';?>
</footer>
</html>