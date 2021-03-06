<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * MY_Controller.php
 *
 * @package     core
 * @subpackage  Controller
 * @category    Extend Class
 * @author      Gianpiere Julio Ramos Bernuy
 * @link        -
 */
class MY_Controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){}

    public function Theme($view,$usepath = true){

        $theme =    $this->config->item('themes')[$this->config->item('ThemeActive')];
        
        $data['data']['css']			=	isset($this->css) 		? $this->css 		: false;
        $data['data']['csslib']			=	isset($this->css_lib) 	? $this->css_lib 	: false;
        $data['data']['js']				=	isset($this->js) 		? $this->js 		: false;
        $data['data']['jslib']			=	isset($this->js_lib) 	? $this->js_lib 	: false;
        $data['data']['urljs']			=	isset($this->urlscript) ? $this->urlscript 	: false;
        $data['data']['urlcss']			=	isset($this->urlstyle) 	? $this->urlstyle 	: false;

        $data['meta']['description']	=	isset($this->description) ? $this->description : false;

        $data['license']				=	'Themes/GlobalIncludes/license.php';
        $data['globalhead']				=	'Themes/GlobalIncludes/head.php';
        $data['globalmenu']				=	'Themes/GlobalIncludes/menu.php';
        $data['globalseo']				=	'Themes/GlobalIncludes/seo.php';
        $data['globalplugins']			=	'Themes/GlobalIncludes/plugins.php';
        $data['globalfooter']			=	'Themes/GlobalIncludes/footer.php';
        
        $data['config']					=	'Themes/'.$theme['folder'].'includes/config.php';
        $data['head']					=	'Themes/'.$theme['folder'].'includes/head.php';
        $data['menu']					=	'Themes/'.$theme['folder'].'includes/menu.php';
        $data['body']					=	'Themes/'.$theme['folder'].'includes/body.php';
        $data['seo']					=	'Themes/'.$theme['folder'].'includes/seo.php';
        $data['view']					=	$usepath ? 'Themes/'.$theme['folder'].'interfaces/'.$view : $view;
        $data['plugins']				=	'Themes/'.$theme['folder'].'includes/plugins.php';
        $data['footer']					=	'Themes/'.$theme['folder'].'includes/footer.php';

        $this->load->view('Themes/'.$theme['folder'].'template.php',$data);
    }

    public function Template($view,$usepath,$Params){
        $this->load->library('parser');
		$theme = THEME;
		$vista = $usepath ? 'Themes/'.$theme.'interfaces/'.$view : $view;
        $this->parser->parse($vista,$Params,FALSE);
    }

    public function innerView($view,$usepath = true){
        $theme = THEME;
        $data['data']['css']			=	isset($this->css) 		? $this->css 		: false;
        $data['data']['csslib']			=	isset($this->css_lib) 	? $this->css_lib 	: false;
        $data['data']['js']				=	isset($this->js) 		? $this->js 		: false;
        $data['data']['jslib']			=	isset($this->js_lib) 	? $this->js_lib 	: false;
        $data['data']['urljs']			=	isset($this->urlscript) ? $this->urlscript 	: false;
        $data['data']['urlcss']			=	isset($this->urlstyle) 	? $this->urlstyle 	: false;

        $data['view']					=	$usepath ? 'Themes/'.$theme.'interfaces/'.$view : $view;

        $this->load->view('Themes/'.$theme.'notemplate.php',$data);
    }

	public function includeView($view,$data = ''){
		$theme = THEME;
        return $this->load->view('Themes/'.$theme.'includes/html/'.$view,$data,TRUE);
	}

}
