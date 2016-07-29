<?php
 //Recibimos el parametro des de Android
 $parametro = $_REQUEST['a'];

 //En este caso simplemente imprimimos una respuesta
 //Aqui podríais introducir/obetener datos de SQL
 //O cualquier otra cosa 

 //imprimimos el mensaje de que ha llegado correctamente
 //añadiendo el parametro 'a' también
 echo ("SERVER: ok, parametro recibido -> ".$parametro);
?>