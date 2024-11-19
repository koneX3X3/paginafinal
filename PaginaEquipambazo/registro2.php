<?php
include("conexion.php");
 if(isset($_POST['submit'])){
    if(
        strlen($_POST['id_receta']) >=1 &&
        strlen($_POST['nombrereceta']) >=1 &&
        strlen($_POST['instrucciones']) >=1 &&
        strlen($_POST['porciones']) >=1 &&
        
    ){
$consulta = "INSERT INTO recetas-registro(id_receta,nombrereceta,instrucciones,porciones)
VALUES ('$id_receta','$nombrereceta','$instrucciones','$porciones')";
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