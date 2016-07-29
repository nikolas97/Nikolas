<?php
include 'archivo.class.php';
	/**
	* 
	*/
	class Imagen extends Archivo
	{

		public function imagenImprimir($ruta,$title,$tipos)
		{
			if($tipos==1)
			{
				$tipos='img-rounded';
			}
			else if($tipos==2)
			{
				$tipos='img-circle';
			}
			else if($tipos==3)
			{
				$tipos='img-thumbnail';
			}
			$this->imagen_titulo = '<img style="width: auto; height:auto"';
			$this->imagen_titulo .= 'src="'.$ruta.'" alt="'.$title.'" title="'.$title.'"';
			$this->imagen_titulo .= ' class="'.$tipos.' img-responsive">';
			echo $this->imagen_titulo;
		}
	}
?>