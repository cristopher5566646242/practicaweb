<?php 
 if(isset($_POST['Accion'])){ 
 $alerta = "";
 $operador = 18;
 $Edad = $_POST['Edad'];
 $Genero = $_POST['Genero'];  
  if($Edad >= $operador){
    $alerta.="<script>
    alert('Eres Mayor de edad');
    </script>"; 
}else{
    $alerta.="<script>alert('No Eres Mayor de edad');</script>";
}
if($Genero == 'M'){
    $alerta.="<script>alert('Eres Hombre');</script>";
} 
else if($Genero == 'F'){
    $alerta.="<script>alert('Eres Mujer');</script>"; 
}
else{
    $alerta.="<script>alert('Dato no valido');</script>"; 
}  
 }
  
?>