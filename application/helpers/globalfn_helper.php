<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

#! Solo en Desarrollo.
/**
 * Enumerar un resultado query row.
 *
 * @param       String      $Text
 * @return      String
 */
if ( ! function_exists('EnumQuery'))
{
    function EnumQuery($Query){
        $result = '';
        $result .= "\n=============================\n";
        foreach ($EnumQuery as $key => $Var) {
            $result.= "$key : $Var\n";
        }
        $result .= "\n=============================\n";
        return $result;
    }
}
#! End Desarrollo.


/**
 * Verficar si los resultados de una Query o SP son correctos
 *
 * @param       Array      $Query
 * @return      Array
 */
if ( ! function_exists('isQueryOK'))
{
    function isQueryOK($Query){
        return !empty($Query) && is_array($Query) && isset($Query[0]) && $Query[0] != '00' && $Query[0] != 'ERROR' ? TRUE : FALSE;
    }
}

/**
 * Encryptar de forma corta para una Url.
 *
 * @param       String      $Text
 * @return      String
 */
if ( ! function_exists('UrlCrypt'))
{
    function UrlCrypt($Text){
        return hash_hmac('crc32',$Text,KEY_ENCRYPT_URL);
    }
}

/**
 * echo replace for compress gzip output.
 *
 * @param       [JSON,TEXT,NUM,ETC..]
 * @return      @param to view.
 */
if ( ! function_exists('set_output'))
{
    function set_output($data = ''){
		$CI =& get_instance();
        $param['output'] = $data;
		$CI->load->view('output',$param);
    }
}
