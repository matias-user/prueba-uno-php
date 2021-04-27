
<?php 
//Conexion a BBDD
include 'connection.php';

//Si se envia el formulario aqui se tomaran las variables de entrada.
$user = $_POST['user']; 
$password = $_POST['password'];

$consulta = "SELECT * FROM login WHERE user = '$user' AND password = '$password' ";

$ejecutar = mysqli_query($connection, $consulta );

//Tomar las filas desde la BBDD
$result = mysqli_num_rows($ejecutar);

//Header es para redirigir a otra pagina.
if( $result > 0 ){
    while( $result = mysqli_fetch_array($ejecutar)  ){
        header("Location:exito.php");
    }
}else {
    echo 'Error your User or Password are incorrect mi king';
    header("Location:error.php?error=si");
}

?>
