<?php
require("../conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$tema = $_POST['tema'];





$consulta = "INSERT INTO tb_msj (nombre,email,mensaje,tema) VALUES 
('".$nombre."','".$email."','".$mensaje."','".$tema."')";


$resultado = mysqli_query($conexion, $consulta) or die ( '<script> alert("vejigaaa"); window.location</script>');


if($resultado)
{

    echo "<script>
     alert('DATO INSERTADO CORRECTAMENTE');
      window.location= '../contact.php'
      </script>";


}
else 
{

    echo "<script>
    alert('DATO  NO INSERTADO CORRECTAMENTE');
     window.location=  '../contact.php'
     </script>";

}

?>
