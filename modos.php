<<<<<<< HEAD
<?php 

    $conexion=mysqli_connect('localhost','root','','comf');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Composer Of Music Face</title>
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	
</head>
<body>
<?php 
include "header.php"; 
?>
<div class="h-content">
	<div class="hl-cont">
		<table border="0">
			<tr >
				<th>Nº</th>
				<th>MODOS</th>
				<th>INTERVALOS</th>
				<th>GRADOS</th>
			</tr>

 
		<?php 
		$sql="SELECT * from modos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

			<tr>
				<td><strong><?php echo $mostrar['NUMERO'] ?></strong></td>
				<td><?php echo $mostrar['MODOS'] ?></td>
				<td><?php echo $mostrar['INTERVALOS'] ?></td>
				<td><?php echo $mostrar['GRADOS'] ?></td>
			</tr>
		<?php 
		}
	 	?>
		</table>	
	</div>
</div>


   
</body>
=======
<?php 

    $conexion=mysqli_connect('localhost','root','','comf');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Composer Of Music Face</title>
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	
</head>
<body>
<?php 
include "header.php"; 
?>
<div class="h-content">
	<div class="hl-cont">
		<table border="0">
			<tr >
				<th>Nº</th>
				<th>MODOS</th>
				<th>INTERVALOS</th>
				<th>GRADOS</th>
			</tr>

 
		<?php 
		$sql="SELECT * from modos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

			<tr>
				<td><strong><?php echo $mostrar['NUMERO'] ?></strong></td>
				<td><?php echo $mostrar['MODOS'] ?></td>
				<td><?php echo $mostrar['INTERVALOS'] ?></td>
				<td><?php echo $mostrar['GRADOS'] ?></td>
			</tr>
		<?php 
		}
	 	?>
		</table>	
	</div>
</div>


   
</body>
>>>>>>> e21df3ea3d160f0a4e76f9d1206540c53d165ed7
</html>