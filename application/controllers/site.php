<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

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
		$this->template->write('title', '');
        $this->template->write_view('content', 'site/vehiculo/list_vehiculo');
        $this->template->render();
        
	}

	public function agregar()
	{
		$this->template->write('title', '');
        $this->template->write_view('content', 'site/vehiculo/add_vehiculo_2');
        $this->template->render();
	}
    
    public function agregar_categoria() 
    {
		$this->template->write('title', '');
        $this->template->write_view('content', 'site/categoria/add_categoria');
        $this->template->render();
    }

    public function presupuesto()
    {
    	$this->template->write('title', '');
        $this->template->write_view('content', 'site/presupuesto/list_presupuesto');
        $this->template->render();
    }

    public function agregar_presupuesto()
    {
    	$this->template->write('title', '');
        $this->template->write_view('content', 'site/presupuesto/add_vehiculo');
        $this->template->render();
    }

    public function fecha_promesa()
    {
    	$this->template->write('title', '');
        $this->template->write_view('content', 'site/fecha_promesa/list_fecha_promesa');
        $this->template->render();
    }

    public function reportes()
    {
    	$this->template->write('title', '');
        $this->template->write_view('content', 'site/reporte/list_reporte');
        $this->template->render();
    }

    public function usuarios()
    {
        $this->template->write('title', '');
        $this->template->write_view('content', 'site/usuario/list_usuario');
        $this->template->render();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */