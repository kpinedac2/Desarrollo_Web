<?php
require("../conexion.php");

$nombreCompleto = $_POST['nombreCompleto'];
$direccion = $_POST['direccion'];
$Fecha_Registro = $_POST['Fecha_Registro'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];





$consulta = "INSERT INTO tb_personal (nombreCompleto,direccion,Fecha_Registro,telefono,correo) VALUES 
('".$nombreCompleto."','".$direccion."','".$Fecha_Registro."','".$telefono."','".$correo."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../index.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location=  '../index.php'
     </script>";

}

?>
