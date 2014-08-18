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
    
    
        public function __construct()
        {
            parent::__construct();
            
            $this->load->model('Procesos_Vehiculo');

        }
    
	public function index($min = '')
	{   
        if(empty($min))
		{
			$min = 0;
		}

		$vehiculo['categorias'] = $this->Procesos_Vehiculo->categorias();
		$numeroVehiculos = $this->Procesos_Vehiculo->countVehiculo();
		
		$data = array( 
			'pagina' => 'vehiculos'
		);
		
		//paginacion
		$this->load->library('pagination');

		$config['base_url'] = base_url()."site/index";
		$config['total_rows'] = $numeroVehiculos;
		$config['per_page'] = 30;
		$config['num_links'] = 5;
		$config['full_tag_open'] = '<div class="btn-group page-group">'; // el contenedor de la paginacion
		$config['full_tag_close'] = '</div>';
        $config['anchor_class'] = 'class="btn btn-default"'; // clases usadas en todos los links menos el activo
        $config['cur_tag_open'] = '<a class="btn btn-default active">'; // clase usada para la paginacion activa
        $config['cur_tag_close'] = '</a>';

		$this->pagination->initialize($config);

		//desplegar vehiculos
		$vehiculo['vehiculos'] = $this->Procesos_Vehiculo->verVehiculo($min,$config['per_page']);

        
		$this->template->write('title', '');
        $this->template->write_view('content', 'site/vehiculo/list_vehiculo',$vehiculo);
        $this->template->render();
        
	}

	public function agregar()
	{
		$this->template->write('title', '');
        $this->template->write_view('content', 'site/vehiculo/add_vehiculo');
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