<?php
	include '../php/clases/formato.class.php';//se lla ma la clase de la estrutura baseca de la pagina
	include '../php/clases/conexion.php';
	/**
	* 
	*/
	$cual = $_POST['cual'];
	$textoCompleto = '';
	class Datos extends principal
	{
		public function llamarCotenido($cual)
		{
			global $textoCompleto,$BaseDatos;
			$this->resultado =  $BaseDatos->recorreArreglo($BaseDatos->ejecutarQuery(" SELECT * FROM n_diseno where tipos = '".$cual."'"));
			echo $this->texto_div($this->resultado["nombres"],'1');
			$this->registro($cual);
		}
		public function registro($cual)
		{
			echo $this->texto_div("Login ",'2');
			$this->input_Normal("login","","A-Za-z0-9","Nombre .",4,"false","text","","1");
			echo $this->texto_div("Contraseña ",'2');
			$this->input_Normal("pass","","A-Za-z0-9","Nombre .",4,"false","text","","1");
		}
	}
	$datos = new Datos();
	$datos->llamarCotenido($cual);
?>