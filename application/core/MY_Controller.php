<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Core Controller Extension
 *
 * @author Chris Pynegar <chris@chrispynegar.co.uk>
 */
class MY_Controller extends CI_Controller {

	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		// Only CLI requests can access the controllers/cli directory
		if ($this->router->directory === 'cli' && ! is_cli())
		{
			show_404();
		}
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */