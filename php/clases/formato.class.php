<?php
	/**
	 * Controlador para la creac ion de la parte incial de html
	 * @package principal
	 * @access 	public
	 * @version	0.1
	 * @author 	Nicolas Gonzalez
	 * @since  	2016/03/07
	 * Nota Esta clase crea la estrutura basica del html y boostrapp  
	 */
	include 'input.class.php';
	class principal extends input
	{
		public $body='';
		public $clase='';
		public $imagen_titulo='';
		public $archivo='';
		public function texto_div($cuerpo,$tipo)//crear los div necesarios 
		{
                        $cuerpo = html_entity_decode($cuerpo);
			/*text-primary / text-success / text-info / text-warning / text-danger"*/
			$this->body = "<div class='form-group ".$this->tipo_div($tipo)."'><p class='text-muted'>".$cuerpo."</p></div>";
			echo $this->body;
		}
		public function tipo_div($tipo)// estilos predeteminados boostrap
		{
			$tipo_estilo_div;
			if ($tipo=='1')
			{
				//anchura del contenedor //.col-xs- (auto) //.col-sm- 728px //.col-md- 940px //.col-lg- 1170px
				$tipo_estilo_div = "col-xs-12 col-lg-2 col-sm-6 col-md-5";
			}
			elseif ($tipo=='2') {
				$tipo_estilo_div = "col-xs-10 col-lg-4 col-sm-8 col-md-12";
			}
			elseif ($tipo=='3') {
				$tipo_estilo_div = "col-xs-12 col-lg-11 col-sm-10 col-md-11";
			}
			elseif ($tipo=='4') {
				$tipo_estilo_div = "col-xs-12 col-lg-12 col-sm-12 col-md-12";
			}
			return $tipo_estilo_div;
		}
		public function titulo_pagina($cuerpo)//inclusion archivos  js _ css estritura principal
		{
			include './inclusiones/inclusiones_css.php'; 
			include './inclusiones/inclusiones_js.php';
			$this->body = "<!DOCTYPE html>
			<html lang='en'>
			<head>
			<title>".$cuerpo."</title>
				<meta charset='UTF-8'>
				<meta http-equiv='X-UA-Compatible' content='IE=edge'>
				<meta name='viewport' content='width=device-width, initial-scale=1'>
			</head>
			<body class='container'>";
			echo $this->body;
		}
		public function texto_Final()//cierra de etiquetas html
		{
			$this->body = "</body> </html>";
			echo $this->body;
			
		}
	}
?>