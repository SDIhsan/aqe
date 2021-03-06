<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('Main_model', 'mm');
        $this->load->library('form_validation');
    }

    public function index() 
    {
        $data['title'] = 'Dashboard';
        $data['shohibul'] = $this->mm->count_shohibul();
		$this->db->join('tb_penimbangan', 'penimbangan_qurban = qurban_id');
		$this->db->where("exists (select * from tb_penimbangan where penimbangan_qurban = qurban_id and qurban_status = 'Kelompok')");
		$data['kelompok'] = $this->mm->count_where('tb_qurban', 'qurban_status', 'Kelompok');
		$data['tersembelih'] = $this->mm->count_tersembelih();
		$data['pengeletan'] = $this->mm->count_pengeletan();
		$data['daging'] = $this->mm->sum('tb_penimbangan', 'penimbangan_total');
		$data['penimbangan'] = $this->mm->get('tb_penimbangan');
		$data['active'] = "active";
		
		$data['qurban'] = $this->mm->get('tb_qurban');
		$data['dagingid'] = $this->mm->total_daging_shahibul('penimbangan_total');

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
		$this->load->view('templates/topbar.php', $data);
        $this->load->view('dashboard.php', $data);
		// $this->load->view('templates/script.php');
        $this->load->view('templates/footer.php');
    }

	public function get_tersembelih()
	{
		$tersembelih = $this->mm->count_tersembelih();
		// $pengeletan = $this->mm->count_pengeletan();
		$shohibul = $this->mm->count_shohibul();
		$data = [
			'tersembelih' => $tersembelih, 
			'shohibul' => $shohibul
		];
		echo json_encode($data);
	}
}