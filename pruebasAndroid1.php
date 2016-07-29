<?php /*
	$nombre = '';$apellido = '' ;$edad = '';$bd = '';
	$nombre = $_REQUEST['nombre'];
	$apellido = $_REQUEST['apellido'];
	$edad = $_REQUEST['edad'];
	$db = new mysqli("globaltica.com","globalt1_niko","97032206429","globalt1_pruebas");
	$resultado = mysqli_query($db,("select * from n_diseno"));
	while ($row = $resultado->fetch_assoc()) {
		$datos[] = $row;
	}
	//echo serialize($datos);
	$datos = json_encode($datos);
	echo $datos+"<br>";
	$datos = json_decode($datos);
	echo $datos+"<br>";
	//error_log(serialize(json_encode($datos)));
*/

?>
<?php
/*
header('Content-Type: application/json');
echo json_encode(array("usuarios"=>$datosarray));
*/
/*
$host = "globaltica.com";
$user = "globalt1_jose";
$pass = "Sevenet2016";
$db = "globalt1_jose";
*//*
$host = "globaltica.com";
$user = "globalt1_niko";
$pass = "97032206429";
$db = "globalt1_pruebas";
$resultado = '';
$sql = '';
$conexion = mysql_connect($host, $user, $pass);

if (!$conexion) {
    echo "No pudo conectarse a la BD: " . mysql_error();
    exit;
}

if (!mysql_select_db($db)) {
    echo "No ha sido posible seleccionar la BD: " . mysql_error();
    exit;
}

$sql = "select * from n_diseno";

$resultado = mysql_query($sql);

if (!$resultado) {
    echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
    exit;
}

// Mientras exista una fila de datos, colocar esa fila en $fila como un array asociativo
// Nota: Si solo espera una fila, no hay necesidad de usar un bucle
// Nota: Si coloca extract($fila); dentro del siguiente bucle,
//       estará creando $id_usuario, $nombre_completo, y $estatus_usuario
$arreglo_users=array();
$fila = '';
while ($fila = mysql_fetch_assoc($resultado)) {
	$arreglo_users[]=$fila["nombres"];
}
mysql_free_result($resultado);

header('Content-Type: application/json');
echo json_encode(array("usuarios"=>$arreglo_users));

*/
?>
<?php
/*
header('Content-Type: application/json');
echo json_encode(array("usuarios"=>$datosarray));
*/
/*
$host = "globaltica.com";
$user = "globalt1_jose";
$pass = "Sevenet2016";
$db = "globalt1_jose";
*/
$host = "globaltica.com";
$user = "globalt1";
$pass = "Sevenet2016";
$db = "globalt1_ocar380";

$conexion = mysql_connect($host, $user, $pass);

if (!$conexion) {
    echo "No pudo conectarse a la BD: " . mysql_error();
    exit;
}

if (!mysql_select_db($db)) {
    echo "No ha sido posible seleccionar la BD: " . mysql_error();
    exit;
}

$sql = "select * from tipovehiculos";

$resultado = mysql_query($sql);

if (!$resultado) {
    echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
    exit;
}

if (mysql_num_rows($resultado) == 0) {
    echo "No se han encontrado filas, nada a imprimir, asi que voy a detenerme.";
    exit;
}

// Mientras exista una fila de datos, colocar esa fila en $fila como un array asociativo
// Nota: Si solo espera una fila, no hay necesidad de usar un bucle
// Nota: Si coloca extract($fila); dentro del siguiente bucle,
//       estará creando $id_usuario, $nombre_completo, y $estatus_usuario
$arreglo_users=array();
while ($fila = mysql_fetch_assoc($resultado)) {
	$arreglo_users[]=$fila;
}
mysql_free_result($resultado);

header('Content-Type: application/json');
echo json_encode(array("usuarios"=>$arreglo_users));


?>