<?php
	include 'php/clases/formato.class.php';//se lla ma la clase de la estrutura basica de la pagina
	$principal = new principal();// instancia la clase
	include 'php/clases/menu.class.php';
	$menu = new menu();
	include 'php/clases/slider.class.php';
	$deslizador = new Deslizador();// instancia la clase
	include 'ajax/cargar_basica.class.php';	
	$ajax_div = new Ajax_Div();
	$menu->consulta();
	$principal->titulo_pagina("NIKO EL PRO");
	include 'php/menuDerecho.php';
	$principal->texto_div('Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro, surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a punto de escurrirse hasta el suelo. Numerosas patas, penosamente delgadas en comparación con el grosor normal de sus piernas, se agitaban sin concierto. - ¿Qué me ha ocurrido? No estaba soñando. Su habitación, una habitación normal, aunque muy pequeña, tenía el aspecto habitual. Sobre la mesa había desparramado un muestrario de paños - Samsa era viajante de comercio-, y de la pared colgaba una estampa recientemente recortada de una revista ilustrada y puesta en un marco dorado. La estampa mostraba a una mujer tocada con un gorro de pieles, envuelta en una estola también de pieles, y que, muy erguida, esgrimía un amplio manguito, asimismo de piel, que ocultaba todo su antebrazo. Gregorio miró hacia la ventana; estaba nublado, y sobre el cinc del alféizar repiqueteaban las gotas de lluvia, lo que le hizo sentir una gran melancolía. «Bueno -pensó-; ¿y si siguiese durmiendo un rato y me olvidase de','2');
	
	$ajax_div->div_cargador("slider",'');
		$deslizador->cargaBasica();
	$ajax_div->div_finalizadar();$ajax_div->div_finalizadar();

		//$principal->texto_div(' asd asd a s df sdf evftwe fw efwfe wf gw fegw fdf sd fs df s df ','2');
	$ajax_div->div_cargador("cambios",'');
	$ajax_div->div_finalizadar();$ajax_div->div_finalizadar();
	$ajax_div->div_cargador("modales",'');$ajax_div->div_finalizadar();

	$principal->texto_div('simulado
Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro, surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a punto de escurrirse hasta el suelo. Numerosas patas, penosamente delgadas en comparación con el grosor normal de sus piernas, se agitaban sin concierto. - ¿Qué me ha ocurrido? No estaba soñando. Su habitación, una habitación normal, aunque muy pequeña, tenía el aspecto habitual. Sobre la mesa había desparramado un muestrario','3');
	$principal->texto_div('simulado
Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro, surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a punto de escurrirse hasta el suelo. Numerosas patas, penosamente delgadas en comparación con el grosor normal de sus piernas, se agitaban sin concierto. - ¿Qué me ha ocurrido? No estaba soñando. Su habitación, una habitación normal, aunque muy pequeña, tenía el aspecto habitual. Sobre la mesa había desparramado un muestrario','2');
		$principal->texto_div('simulado
Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro, surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a punto de escurrirse hasta el suelo. Numerosas patas, penosamente delgadas en comparación con el grosor normal de sus piernas, se agitaban sin concierto. - ¿Qué me ha ocurrido? No estaba soñando. Su habitación, una habitación normal, aunque muy pequeña, tenía el aspecto habitual. Sobre la mesa había desparramado un muestrario','2');
			$principal->texto_div('simulado
Una mañana, tras un sueño intranquilo, Gregorio Samsa se despertó convertido en un monstruoso insecto. Estaba echado de espaldas sobre un duro caparazón y, al alzar la cabeza, vio su vientre convexo y oscuro, surcado por curvadas callosidades, sobre el que casi no se aguantaba la colcha, que estaba a punto de escurrirse hasta el suelo. Numerosas patas, penosamente delgadas en comparación con el grosor normal de sus piernas, se agitaban sin concierto. - ¿Qué me ha ocurrido? No estaba soñando. Su habitación, una habitación normal, aunque muy pequeña, tenía el aspecto habitual. Sobre la mesa había desparramado un muestrario','2');
	$principal->texto_Final();// se cierra las sentencias html faltantes 

?>
<link href="https://i.ytimg.com/vi/_Ar1oJhWshE/hqdefault.jpg" rel="icon">
<script>
    function activar (id) {
        $( ".menu" ).removeClass("active");
        $( "#"+id ).addClass("active");
    }
    function ingresar(tipo) {
        console.log($( "#modales").html());
        var parametros = {
            "cual":tipo
        }
        $.ajax({
            data: parametros,
            url: "ajax/cargar_datos.class.php",
            method: "POST",
        success: function(response) {
                $( "#modales" ).html(response);
            }
        });
        $( "#modales" ).dialog({
            autoOpen: true,
            height: 300,
            width: 350,
            modal: true,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
        });	
    }
    function cambiar(id,tipo,valor) {
        $( "#cambios" ).show();
        $( "#slider" ).hide();
        var parametros = {
            "cual":valor
        }
        $.ajax({
            data: parametros,
            url: "ajax/cargar_datos.class.php",
            method: "POST",
            success: function(response) {
            $( "#cambios" ).html(response);
        }
        });
    }
    function slider() {
        $( "#slider" ).show();
        $( "#cambios" ).hide();
    }
</script>
   
<a href="php/clases/menu/disenoMenuPHP.php">pasar</a>