<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'mostarCamposClass.php';

$menuConstruccion = new mostarCamposClass();
$menuConstruccion->cargaMenuEditar();
?>
    <title>jQuery UI Sortable - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!--link rel="stylesheet" href="/resources/demos/style.css"-->
    <style>
        .sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        .sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        .sortable li span { position: absolute; margin-left: -1.3em; }
        .sortable div { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        .sortable div input { position: absolute; margin-left: -1.3em; }
    </style>
    
<!-- Javascript -->

    <script>
    $(function() {
        $( ".sortable" ).sortable();
        $( ".sortable" ).disableSelection();
    });
    /*$('#sortable').click().sortable({
        connectWith: '#sortable',
        update: function(event, ui) {
        var changedList = this.id;
        var order = $(this).sortable('toArray');
        var positions = order.join(';');
    console.log({ id: changedList,
        positions: positions  });
    }});*/
</script>