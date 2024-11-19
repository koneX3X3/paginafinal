<?php
include("conexion.php");
 if(isset($_POST['Crear cuenta'])){
    if(
        strlen($_POST['id_usuarios']) >=1 &&
        strlen($_POST['nombres']) >=1 &&
        strlen($_POST['apellidos']) >=1 &&
        strlen($_POST['correoE']) >=1 &&
        strlen($_POST['Contraseña']) >=1 &&
    ){
$consulta = "INSERT INTO paginaregistro(id_usuarios,nombres,apellidos,correoE,Contraseña)
VALUES ('$id_usuarios','$nombres','$apellidos','$correoE','$Contraseña')";
$resultado= mysqli_connect($conexion,$consulta);
if($resultado){
?>
<h3 class="sucess"> Tu registro esta completo</h3

}else{
    <h3 class="error">ocurrio un error</h>
}else{
    <h3 class="error">llena los campos</h>
    <?php
}
    }

 }