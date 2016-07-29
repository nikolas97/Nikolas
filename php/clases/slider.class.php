<?php
	/**
	 * Controlador crear el menu desde la base de datos
	 * @package principal
	 * @access 	public
	 * @version	0.1
	 * @author 	Nicolas Gonzalez
	 * @since  	2016/03/24
	 */	
class Deslizador
{
	private $deslizador;
	public function cargaBasica()
	{
		global $BaseDatos;
		$this->resultado =  $BaseDatos->recorreArreglo($BaseDatos->ejecutarQuery(" SELECT * FROM n_diseno where tipos='3'"));
		$nombre = $this->resultado['empresa'];
		$cuanto = $this->resultado['cantidad'];
		$nombre_alt_titulo = explode("?",$this->resultado['nombres']);
		$alt = $nombre_alt_titulo[1];
		$titulos = $nombre_alt_titulo[0];
		$enlaces = $this->resultado['enlaces'];
		$this->deslizador = '
		<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">';
				$this->indicador($cuanto, $nombre  , $alt , $titulos, $enlaces );
		$this->deslizador .= '
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>
	</div>';
	echo $this->deslizador;
	}
	private function indicador($cuantos, $nombre  , $alt , $titulos, $url)
	{
		$this->deslizador .= '<ol class="carousel-indicators">';
		for ($i=0; $i <$cuantos ; $i++) { 
			$activo = ($i == 0)?  " active " : '';
			$this->deslizador .= '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="'.$activo.'"></li>';
		}
		$this->deslizador .= '</ol>';
		$this->imagenesDeslizador($cuantos,$url,$alt,$titulos,$nombre);
	}
	private function imagenesDeslizador($cuantos,$enlaces,$alt,$titulo,$nombre)
	{
		$url =  explode("||", $enlaces);
		$alt =  explode("||", $alt);
		$titulo =  explode("||", $titulo);
		$nombre =  explode("||", $nombre);
		$this->deslizador .= '<div class="carousel-inner" role="listbox">';
		for ($i=0; $i < $cuantos ; $i++) { 
			$activo = ($i == 0)?  " active " : '';
			$this->deslizador .= '<div class="item '.$activo.'">
			<img src="'.$url[$i].'" alt="'.$alt[$i].'">
			<div class="carousel-caption">
				<h3>'.$titulo[$i].'</h3>
				<p>'.$nombre[$i].'</p>
			</div>      
			</div>';
		}
		$this->deslizador .= '</div>';
	}
}
?>