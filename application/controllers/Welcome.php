<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	public function __construct(){
        parent::__construct();
        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->title 		= 'title';
		$this->description 	= 'description';
		$this->css 			= array(/*'styles1','ejemplo','prueba'*/);
		$this->js 			= array(/*'script1','ejemplo','prueba'*/);
		$this->css_lib 		= array(/*'libcss1','libcss2'*/);
		$this->js_lib 		= array(/*'libcjs1','libcjs2'*/);
		$this->urlstyle		= array(/*'http://domain/style.css'*/);
		$this->urlscript 	= array(/*'http://domain/script.js'*/);

	/*
		# Example Template use
		$datos = array('nombre' => 'Gianpiere');
		$this->Template('landing/bienvenida',TRUE,$datos);
	*/

	/*
		# Cargar una vista fuera del folder Theme. [param2: FALSE]
		$this->Theme('welcome_message',FALSE);
	*/	

	/*
		# Cargarmos un include del template y lo agregamos como html
		# dentro de la siguiente vista usando {variable}
		$vista_activa = $this->includeView('business.php');
		$datos = array(
			'nombre'	=> $vista_activa
		);
		$this->Template('landing/bienvenida',TRUE,$datos);
	*/
	
	/*
		# Cargar una vissta dentro del theme template interface
		$this->Theme('landing/bienvenida',TRUE);
	*/
		
	/*
		# Cargar una vista sin el Template pero dentro del theme.
		$this->innerView('welcome_message',FALSE);
	*/


		#$this->config->item('prueba','template');
		

		// $theme =	$this->config->item('themes')[$this->config->item('ThemeActive')];
		// set_output(json_encode($theme));

		$this->Theme('welcome_message',FALSE);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */