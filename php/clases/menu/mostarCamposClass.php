<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mostarCamposClass
 *
 * @author DilanNicolas
 */
include_once  '../conexion.php';
include_once  '../formato.class.php';
include_once  'menuInterface.php';

class mostarCamposClass extends principal implements menuInterface {
    private $resultado = "";
    private $resultado1 = "";
    private $montageHtml = "";
    function __construct() {
        $this->resultado = NULL;
        $this->resultado1 = NULL;
        $this->montageHtml = NULL;
    }
    public function cargaMenuEditar (){
        global $BaseDatos;
        $this->resultado = $BaseDatos->ejecutarQuery
               ("  SELECT * FROM n_diseno order by tipos asc ");
        while ($this->resultado1 = $BaseDatos->recorreArreglo($this->resultado)) {
            $this->ordenarMenu();
        }
        echo $this->montageHtml;
        return true;
    }
    public function ordenarMenu() {
        if ($this->resultado1['tipos'] == 1)
        {
            if(!empty($this->resultado1['empresa']))
            {
                $empresaDatos = explode("||", $this->resultado1['empresa']);
                $this->pintar($empresaDatos['0'],$empresaDatos['1'],1);
            }
            $this->pintar($this->resultado1['nombres'],$this->resultado1['enlaces'],2);
        }
       elseif ($this->resultado1['tipos'] == 2)
        {
            $this->pintar($this->resultado1['nombres'],$this->resultado1['enlaces'],3);
        }
        elseif ($this->resultado1['tipos'] == 4)
        {
            $this->pintar($this->resultado1['nombres'],$this->resultado1['enlaces']."<<>>".$this->resultado1['empresa'],4);
        }
    }
    public function pintar($valorPinta ,$informacion , $tipo = 0) {
        $this->montageHtml .= "<ul  class=\"sortable\">";
        switch ($tipo) {
            case 1://nombre de la compañia
                $this->montageHtml .= $this->pintarLi(rand(0,5), $valorPinta, $informacion);
                break;
            case 2:// cuando el menu es de corrido
                $this->pintadaValoresMenuCorrido($valorPinta, $informacion);
                break;
            case 3:// cuando el menu es desplegable 
                $this->pintadaValoresSubMenuTotal($valorPinta, $informacion);
                break;
            case 4:// cuando el menu es la parte final
                $this->pintadaValoresMenuFinal($valorPinta, $informacion);
                break;
            default:
                break;
        }
        return $this->montageHtml .= "</ul>";
    }
    public function pintarLi($id,$nombre,$valor){
        $valorLi = "<li class=\"ui-state-default\"";
        $valorLi .= " id\".$id.\">";
        $valorLi .= " <span class=\"ui-icon ui-icon-arrowthick-2-n-s\"></span>";
        $valorLi .= "$nombre<input value='".$valor."'></li>";
        return $valorLi;
    }
    public function pintadaValoresSubMenu($valorNombre,$enlaces) {
        print_r($valorNombre);
        for ($j = 0; $j < count($valorNombre); $j++)
        {
            $this->montageHtml .= $this->pintarLi(rand(0,5), $valorNombre[$j], $enlaces);
        }
    }
    public function pintadaValoresSubMenuTotal($valorPinta, $informacion) {
        $valor = 0;
        $nombrePrincipal = explode("?", $valorPinta);
        $enlaces = explode("||", $informacion);
        for ($i = 0; $i < count($nombrePrincipal); $i++){
            if ($valor == 0)
            {
                $valor = 1;
                $this->montageHtml .= $this->pintarLi(rand(0,5), $nombrePrincipal[$i], $enlaces[$i]);
            }
            else
            {
                $valorOrginal = explode("||",$nombrePrincipal[$i]);
                $this->pintadaValoresSubMenu($valorOrginal, $enlaces[$i]);
            }
        }
    }
    public function pintadaValoresMenuFinal($valorPinta,$informacion) {
        $nombres = explode("||", $valorPinta);
        $arregloParaImg = explode("<<>>", $informacion);
        $enlaces = explode("||", $arregloParaImg[0]);
        //$cargaImg = explode("||", $arregloParaImg[1]);
        for ($i = 0; $i < count($nombres); $i++){
             $this->montageHtml .=  $this->pintarLi(rand(0,5), $nombres[$i], $enlaces[$i]);
        }
    }
    public function pintadaValoresMenuCorrido($valorPinta,$informacion) {
        $nombres = explode("||", $valorPinta);
        $enlaces = explode("||", $informacion);
        for ($i = 0; $i < count($nombres); $i++){
            $this->montageHtml .= $this->pintarLi(rand(0,5), $nombres[$i], $enlaces[$i]);
        }
    }
}