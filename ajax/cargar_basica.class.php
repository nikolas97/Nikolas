<?php
	/**
	* 
	*/
	class Ajax_Div 
	{
		private $div;
		public function div_cargador($id,$click)
		{
			$this->div = "<div id='".$id."' name='".$id."' >";
			echo $this->div;
		}
		public function div_finalizadar()
		{
			$this->div = "</div>";
			echo $this->div;
		}
	}
?>