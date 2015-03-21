<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Form Validation Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Validation
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/form_validation.html
 */

class MY_Form_validation extends CI_Form_validation {
	// --------------------------------------------------------------------

	/**
     * validar si es una Fecha
     *
     * @access  public
     * @param   string
     * @param   string
     * @return  bool
     */
    public function is_date($str = '', $format = '')
    {
        $separator_type= array( "/", "-", "." );
        foreach ($separator_type as $separator) {
            $find= stripos($input,$separator);
            if($find<>false){
                $separator_used= $separator;
            }
        }
        $input_array= explode($separator_used,$input);
        if ($format=="mdy") {
            return (bool) checkdate($input_array[0],$input_array[1],$input_array[2]);
        } elseif ($format=="ymd") {
            return (bool) checkdate($input_array[1],$input_array[2],$input_array[0]);
        } else {
            return (bool) checkdate($input_array[1],$input_array[0],$input_array[2]);
        }
        $input_array=array();

        return (bool) FALSE;
    }

    /**
     * comparacion [0 - 1], [true - false]
     *
     * @access  public
     * @param   bool or [0 - 1]
     * @return  bool
     */
    public function is_bool($str = '')
    {
        return (bool) ($str == 0 || $str == 1 || $str == true || $str == false) ? true : false;
    }

    /**
     * comparacion [fijo = telefono fijo], [cel = telefono celular]
     *
     * @access  public
     * @param   string $str  [format: |0-9|(-)/( )|0-9|*]
     * @param   string $type [all,tel,cel] 
     * @return  bool
     */
    public function is_phone($str = '',$type = 'all')
    {
        $numero = str_replace('+', '', str_replace('-', '', str_replace(' ', '', $str)));
        
        if($type = 'all'):
            return (bool) (is_numeric($numero) && strlen($numero) >= 6 && strlen($numero) <= 11 );
        elseif($type = 'tel'):
            return (bool) (is_numeric($numero) && strlen($numero) >= 6 && strlen($numero) <= 9 );
        elseif($type = 'cel'):
            return (bool) (is_numeric($numero) && strlen($numero) >= 9 && strlen($numero) <= 11 );
        else:
            return (bool) (is_numeric($numero) && strlen($numero) > 6 && strlen($numero) <= 11 );
        endif;

        return (bool) false;
    }




}
// END MY Form Validation Class

/* End of file MY_Form_validation.php */
