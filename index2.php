<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagína uno </title>
</head>
<script type="text/javascript" src="librerias/jquery/external/jquery/jquery.js"></script>
<script type="text/javascript" src="librerias/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>
<link href="librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="librerias/jquery/jquery-ui.min.css" rel="stylesheet">
<link href="librerias/bootstrap/css/bootstrap.css.map" rel="stylesheet">
<link href="librerias/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<style type="text/css">
	.hide{
		display: none;
	}
	 input {
    background: #def3ca;
    margin: 3px;
    width: 80px;
    display: none;
    float: left;
    text-align: center;
  }
/*  li{
  	  background: #def3ca;
    margin: 3px;
    width: 80px;
    display: none;
    float: left;
    text-align: center;
  }*/
  nav{
  	  background: #def3ca;
    margin: 3px;
    width: 80px;
    display: none;
    float: left;
    text-align: center;
  }
</style>
<body>
	<!--div >
		<!--/*text-primary / text-success / text-info / text-warning / text-danger"*/-->
		<!--input id="nombre" class="form-control " >
		<div id="nombreTexto" class="hide" >Datos erroneos </div>
		<input class="form-control" >
	</div-->
	<script type="text/javascript">
		/*$( "#nombre" ).click(function() {
			$( "#nombreTexto" ).removeClass("hide");
			$( "$nombreTexto" ).show( "slow" );
			$( "#nombreTexto" ).addClass("text-warning");
		});
		//$( "#nombre" ).click(addClass("text-warning"));
	</script>
			<button id="showr">Show</button>
		<button id="hidr">Hide</button>

		<?php 
		date_default_timezone_set('America/Bogota');
		function microtime_float()
		{
		    list($usec, $sec) = explode(" ", microtime());
		    return ((float)$usec + (float)$sec);
		}
		$time_start = microtime_float();

		//echo "<br>inicio ".date("Ymd - h:m:s:u");
		for ($i=0; $i <600 ; $i++) { 
			echo "<input value='".rand()."'>";
		}
		//echo "<br>fin ".date("Ymd - h:m:s:u");
		$time_end = microtime_float();
		$time = $time_end - $time_start;

		echo "No se hizo nada en $time segundos\n";
		?>
		<script>
		/*$( "#showr" ).click(function() {
			$( "input" ).first().show( "fast", function showNext() {
				$( this ).addClass("form-control");
				$( this ).next( "input" ).show( "fast", showNext );
			});
		});*/
		$( "#showr" ).click(function() {
			$( "nav" ).first().show( "fast", function showNext() {
				$( this ).addClass("form-control");
				$( this ).next( "nav" ).show( "fast", showNext );
			});
		});
		 
		$( "#hidr" ).click(function() {
			$( "nav" ).hide( 1000 );
		});
	</script>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>

</body>
</html>