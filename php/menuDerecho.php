<script type="text/javascript">
	$(document).ready(function(){	 
		//Ocultamos el menú al cargar la página
		$("#menu").hide();
				
		// mostramos el menú si hacemos click derecho con el ratón 
		$(document).bind("contextmenu", function(e){
			$("#menu").css({'display':'block', 'left':e.pageX, 'top':e.pageY,'z-index':'10'});
			return false;
		});
		//cuando hagamos click, el menú desaparecerá
		$(document).click(function(e){
			if(e.button == 0){
				$("#menu").css("display", "none");
			}
		});
		//si pulsamos escape, el menú desaparecerá
		$(document).keydown(function(e){
			if(e.keyCode == 27){
				$("#menu").css("display", "none");
			}
		});
		//controlamos los botones del menú
		$("#menu").click(function(e){
			// El switch utiliza los IDs de los <li> del menú
			switch(e.target.id){
			case "copiar":
				alert("copiado!");
			break;      
			case "mover":
				alert("movido!");
			break;
			case "eliminar":
				alert("eliminado!");
			break;
			}
		});
	});     
</script>
	<style type="text/css">
	    .menu_ul{
			list-style: none;
			list-style-type: none;
			list-style-position: outside;
		}
		 
		.menu_li{
			line-height: 30px;
			font-size: 16px;
			cursor:pointer;
		}
		 
		.menu_div{
			width:250px;
			position:absolute;      
			border:1px solid black;
			/*background: rgba(0, 0, 225, 0.5);*/
			background: #f6f6f6;
			font-family: cursive;
						
			-moz-box-shadow: 0 0 5px #888;
			-webkit-box-shadow: 0 0 5px#888;
			box-shadow: 0 0 5px #888;
		}
	</style>
	<div id="menu" class="menu_div">
		<ul class="menu_ul">
			<li class="menu_li" id="copiar">Copiar</li>
			<li class="menu_li" id="mover">Mover</li>
			<li class="menu_li" id="eliminar">Eliminar</li>
		</ul>
	</div>