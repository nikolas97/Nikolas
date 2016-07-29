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
	class input
	{
		public function input_Normal($id,$value,$resticion,$textoInput,$limite,$activo,$tipo,$tamano,$tipo_estilo)// creacion de input basico
		{
			if($tipo=="file")
			{
				$this->archivo_subir("id_1",1,"es",10,"tif jpg ");
			}
			else
			{
				$this->input = "<input class='form-control ".$this->tipo_div($tipo_estilo)."'";
				$this->input .= "type='".$tipo."'";
				$this->input .= "id='".$id."'";
				$this->input .= "pattern='".$resticion."{".$limite."}'";
				$this->input .= "value='".$value."'";
				$this->input .= "placeholder='".$textoInput."'";
				$this->input .= "onChange='Archivo(value.this);'";
				if ($activo=='true') {
					$this->input .= "disabled";
				}
				$this->input .= ">";
				echo $this->input;
			}
		}
	}
?>