<?php
require("../conexion.php");

$nombreEmpresa = $_POST['nombreEmpresa'];
$direccion_Empresa = $_POST['direccion_Empresa'];
$Fecha_Fundacion = $_POST['Fecha_Fundacion'];
$telefono_Empresa = $_POST['telefono_Empresa'];
$correo_Empresa = $_POST['correo_Empresa'];





$consulta = "INSERT INTO tb_empresa (nombreEmpresa,direccion_Empresa,Fecha_Fundacion,telefono_Empresa,correo_Empresa) VALUES 
('".$nombreEmpresa."','".$direccion_Empresa."','".$Fecha_Fundacion."','".$telefono_Empresa."','".$correo_Empresa."')";


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
