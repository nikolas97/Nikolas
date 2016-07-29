<?php
$usuario = (!empty($_POST['login']))?$_POST['login']:'';
$contrasena = (!empty($_POST['contrasena']))?$_POST['contrasena']:'';

$host = "globaltica.com";
$user = "globalt1_niko";
$pass = "niko97032206429";
$db = "globalt1_niko";
$arreglo_users=array();


$conexion = mysql_connect($host, $user, $pass);

if (!$conexion) {
   // echo "No pudo conectarse a la BD: " . mysql_error();
    //exit;
}

if (!mysql_select_db($db)) {
   // echo "No ha sido posible seleccionar la BD: " . mysql_error();
    //exit;
}

$sql = "select * from n_user where usuario ='".$usuario."' and contrasena = '".$contrasena."' ";

$resultado = mysql_query($sql);

if (!$resultado) {
   // echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
    //exit;
}

if (mysql_num_rows($resultado) > 0) {
  $nombre = mysql_fetch_assoc($resultado);
	//echo "No se han encontrado filas, nada a imprimir, asi que voy a detenerme.";
	//exit;
  $nombre = $nombre['nombre'] ;
	$arreglo_users[] = ["ingreso"=>"1","nombre"=>$nombre];
	//$arreglo_users[] = ["nombre"=>$nombre]; 
}
else
{
	$arreglo_users[] = ["ingreso"=>"0","nombre"=>""];
}
 //$arreglo_users[] = ["ingreso"=>"true","nocas"=>"trese"];
// Mientras exista una fila de datos, colocar esa fila en $fila como un array asociativo
// Nota: Si solo espera una fila, no hay necesidad de usar un bucle
// Nota: Si coloca extract($fila); dentro del siguiente bucle,
//       estará creando $id_usuario, $nombre_completo, y $estatus_usuario
//$arreglo_users=array();
/*while ($fila = mysql_fetch_assoc($resultado)) {
	$arreglo_users[]=$fila;
}
mysql_free_result($resultado);*/


header('Content-Type: application/json');
echo json_encode($arreglo_users);


?>