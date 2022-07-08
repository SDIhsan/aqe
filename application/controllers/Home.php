<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Main_model', 'mm');
        $this->load->library('form_validation');
    }

    public function index() 
    {
        $data['title'] = 'Home';
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

        $this->load->view('home.php', $data);
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