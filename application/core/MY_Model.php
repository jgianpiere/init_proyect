<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY_Model.php
 *
 * @package     core
 * @subpackage  Model
 * @category    Extend Class
 * @author      Gianpiere Julio Ramos Bernuy
 * @link        -
 */
class MY_Model extends CI_Model{
     function __construct(){
        parent::__construct();
    }

    /**
     * Permite convertir un resultado de una sola fila en un arreglo para mostrarse al Controller
     *
     * @param       Array      Input Array
     * @return      Array
     */
    function QueryRows($Arreglo){
        if(is_array($Arreglo)):
            $arr = [];
            foreach ($Arreglo as $key => $Capa){
                $arr[] = $Capa;
            } return $arr;
        else:
            return false;
        endif;
    }

    /**
     * Funcion que permite convertir un resultado de multiples filas en un arreglo vidimencional
     *
     * @param       Array      Input Array
     * @return      Array
     */
    function QueryResult($Arreglo){
        if(is_array($Arreglo)):
           $arr = [];
            foreach ($Arreglo as $key => $Capa) {
                $subarr = [];
                if(is_array($Capa)):
                    foreach ($Capa as $scp => $SubCapa) {
                        $subarr[] = $SubCapa;
                    } $arr [] = $subarr;
                endif;
            } return $arr;
        else:
            return array('ERROR');
        endif;
    }

}