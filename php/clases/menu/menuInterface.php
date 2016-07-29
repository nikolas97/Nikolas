<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author DilanNicolas
 */
interface menuInterface {
    public function pintar($valorPinta ,$informacion , $tipo = 0);
    public function cargaMenuEditar ();
    public function pintarLi($id, $nombre, $valor);
    public function ordenarMenu();
    public function pintadaValoresSubMenu($valorNombre,$enlaces);
    public function pintadaValoresSubMenuTotal($valorPinta, $informacion);
    public function pintadaValoresMenuFinal($valorPinta,$informacion);
    public function pintadaValoresMenuCorrido($valorPinta,$informacion);
}
