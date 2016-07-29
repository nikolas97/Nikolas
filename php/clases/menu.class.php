<?php
	/**
	 * Controlador crear el menu desde la base de datos
	 * @package principal
	 * @access 	public
	 * @version	0.1
	 * @author 	Nicolas Gonzalez
	 * @since  	2016/03/24
	 */
	include 'php/clases/conexion.php';
	class menu
	{
		private $resultado = '';
		private $resultado1 = '';
		private $menu = '';
		private $sub_menu = '';
		public function consulta()
		{
			global $BaseDatos;
			/**
			* lo datos robenietes de la base de datos tales como 
			* empresa datos de la empresa y enlace principal
			* cantidad de nombres en el menu
			* nombres en el menu
			* enlaces del el menu
			* tipo del el menu de corrido o desplegable
			* cual de los menus se utilizara 
			*/
			$this->resultado = $BaseDatos->ejecutarQuery(" SELECT * FROM n_diseno order by tipos asc ");

			while ($this->resultado1 = $BaseDatos->recorreArreglo($this->resultado)) {
				
				if ($this->resultado1['tipos'] == 1)
				{
					if(!empty($this->resultado1['empresa']))
					{
						$empresaDatos = explode("||", $this->resultado1['empresa']);
						$this->menuInicio($empresaDatos['0'],$empresaDatos['1']);
					}
					$this->menuDeCorrido($this->resultado1['cantidad'],$this->resultado1['nombres'],$this->resultado1['enlaces']);
				}
				elseif ($this->resultado1['tipos'] == 2)
				{
					$nombrePrincipal = explode("?", $this->resultado1['nombres']);
					$this->menuDesplegable($nombrePrincipal['0'],$this->resultado1['cantidad'],$nombrePrincipal['1'],$this->resultado1['enlaces']);
				}
				elseif ($this->resultado1['tipos'] == 4)
				{
					$this->alienarDerecha($this->resultado1['cantidad'],$this->resultado1['nombres'],$this->resultado1['enlaces'],$this->resultado1['empresa']);
				}				
			}
			return $this->menuFin();
		}
		/**
		* MenuInicio carga el Inico del menu Nombre empresa y ruta hacia donde se dirige
		*/
		private function menuInicio($nombre_empresa,$ruta_inicio)
		{//navbar-fixed-top
			$this->menu = '
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"data-target=".navbar-ex1-collapse">
						<span class="sr-only">Desplegar navegación</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" onClick="slider();">'.$nombre_empresa.'</a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">';
		}
		private function menuDeCorrido($cantidad_titulo,$nombre_titulos,$enlace_titulos)
		{
			$this->crearNombre($cantidad_titulo,$nombre_titulos,$enlace_titulos,1);
		}
		/**
		* Menu deplegable se agregan centencias para el menu deplegable
		*/
		private function menuDesplegable($nombe_inicial,$cantidad_titulo,$nombre_titulos,$enlace_titulos)
		{
			$this->menu .='
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					'.$nombe_inicial.' <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						'.$this->crearNombre($cantidad_titulo,$nombre_titulos,$enlace_titulos,2).'
					</ul>
				</li>';
				return $this->menu;
		}
		private function alienarDerecha($cantidad,$nombres,$enlaces,$nombres_imagenes)
		{
				$this->menu .= '</ul>';
				$this->menu .= '<ul class="nav navbar-nav navbar-right">';
				$this->crearNombre($cantidad,$nombres,$enlaces,$nombres_imagenes);
				$this->menu .= '</ul>';
		}
		/**
		* Crea la estrutura principal del menu 
		*/
		private function crearNombre($cantidad,$nombres,$enlaces,$tipo)
		{
			for ($i=0; $i <$cantidad ; $i++)
			{
				$enlace = explode("||", $enlaces);
				$nombre = explode("||", $nombres);
				$nombre = trim($nombre[$i]);
				if ($tipo == 1 ) 
				{//que parte del menu se va a graficar
					$this->menu .= '<li id="'.$nombre.'" class="menu"><a href="#"  onClick="activar(\''.$nombre.'\');
					cambiar('.$i.',0,\''.$enlace[$i].'\')">'.$nombre.'</a></li>';
				}
				elseif ($tipo == 2 ) 
				{
					$this->sub_menu .= '<li id="'.$nombre.'" class="menu"><a href="#" onClick="activar(\''.$nombre.'\');
					cambiar('.$i.',1,\''.$enlace[$i].'\')"  >'.$nombre.'</a></li>';
				}
				else
				{
					$nombre_imagenes = explode("||", $tipo);
					$this->menu .= '<li  id="'.$nombre.'" class="menu"><a href="#" onClick="activar(\''.$nombre.'\');
					ingresar(\''.$enlace[$i].'\')">'.$nombre.' <span class="glyphicon '.$nombre_imagenes[$i].'"></span></a></li>';
				}
			}
			if ($tipo == 2 ) 
			{
				return $this->sub_menu;
			}
		}
		private function menuFin()
		{
			echo $this->menu .= '  </ul> </div> </nav>';
		}
	}
?>