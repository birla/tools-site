<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json extends CI_Controller {

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
	public function index() {
		$context = $this->config->item('default_context');
		$context['title'] .= ' - JSON Visualizer';
		$context = array_merge($context, array(
			'top_menu' => 'tools',
			'sub_menu' => 'json',
			));
		$this->load->view('start.php', $context);
		$this->load->view('header.php', $context);

		$this->load->view('json/json.php');

		$this->load->view('footer.php');
		$this->load->view('end.php', array(
			'scripts' => array(
				'/js/jsonv.js'
				)
			));
	}
}

/* End of file welcome.php */
/* Location: ./btools/controllers/welcome.php */