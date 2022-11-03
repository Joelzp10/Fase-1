
<?php include ('lvlauth.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/hide.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript" src="js/rightde.js"></script>
<title>Clinica Privada</title>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>
<body>

<header class="nav-down ">

<?php include_once('navbar.php');?>


</header>

<main>
<div class="container-fluid" >
<div class="row">

<h1 class="text-center ">Clinica Privada<br /><small style="font-size:20px">Sistema Administrativo de Clinica San Francisco </small></h1></div>

<hr width="250px">
</div>
</div>




<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">

<table  class="table table-bordered" width="auto" border="0">
  <tr>
    <td><a href="patin.php"><img src="images/menu/infopacienteng.jpg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/infopaciente.jpg'"
            onMouseOut="src='images/menu/infopacienteng.jpg'"
            id="picture" /></a></td>

    <td><a href="roomavi.php"><img src="images/menu/Quirofanong.jpeg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/Quirofano.jpeg'"
            onMouseOut="src='images/menu/Quirofanong.jpeg'"
            id="picture"  /></a></td>
  </tr>
  <tr>
    <td><a href="invo.php"><img src="images/menu/Facturang.jpeg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/Factura.jpeg'"
            onMouseOut="src='images/menu/Facturang.jpeg'"
            id="picture" /></a></td>

    <td><a href="staff.php"><img src="images/menu/Personalinfong.jpeg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/Personalinfo.jpeg'"
            onMouseOut="src='images/menu/Personalinfong.jpeg'"
            id="picture" /></a></td>
  </tr>
  <tr>
    <td colspan="2"><a href="admite.php"><img src="images/menu/padinfob.jpg"
            class="img-responsive img-thumbnail"
            onMouseOver="src='images/menu/padinfo.jpg'"
            onMouseOut="src='images/menu/padinfob.jpg'"
            id="picture" /></a></td>

</tr>
</table>
</div>
</div>
</div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>

</main>
</body>
<footer class=" footer">
<?php include 'footer.php';?>
</footer>


</html>
