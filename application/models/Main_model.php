<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_model extends CI_Model
{
    public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table,$data);
    }

    function insert_a($table, $post = array())
	{
		$table = $this->db->dbprefix($table);
		$insert = $this->db->insert($table, $post);
		if ($return = $this->db->insert_id()) {
			return $return;
		} else {
			return $insert;
		}
	}

    public function update($table, $pk, $id, $data)
    {
        $this->db->where($pk, $id);
        return $this->db->update($table, $data);
    }
    
    public function delete($table, $pk, $id)
    {
        return $this->db->delete($table, [$pk => $id]);
    }

    public function counts($table, $col, $like)
    {
		$this->db->select('*');
        $this->db->from($table);
        $this->db->like($col, $like);
        return $this->db->count_all_results();
    }

    public function count_where($table, $col, $like)
    {
		$this->db->select('*');
        $this->db->from($table);
        $this->db->where([$col => $like]);
        return $this->db->count_all_results();
    }

    public function count_shohibul()
    {
        $this->db->select('*');
        $this->db->from('tb_qurban');
        return $this->db->count_all_results();
    }

    public function count_tersembelih()
    {
		$this->db->select('*');
        $this->db->from('tb_qurban');
        $this->db->where('qurban_sembelih IS NOT NULL');
        return $this->db->count_all_results();
    }

    public function count_pengeletan()
    {
		$this->db->select('*');
        $this->db->from('tb_qurban');
        $this->db->where('qurban_pengeletan IS NOT NULL');
        return $this->db->count_all_results();
    }

    public function sum($table, $field)
    {
        $this->db->select_sum($field);
        return $this->db->get($table)->row_array()[$field];
    }

    public function total_daging_shahibul($field)
    {
        // $this->db->select('penimbangan_qurban, qurban_status, qurban_nomor, qurban_shohibul');
        $this->db->select('*');
        
        $this->db->join('tb_qurban', 'tb_penimbangan.penimbangan_qurban = tb_qurban.qurban_id');
        // $this->db->group_by('penimbangan_qurban, qurban_status, qurban_nomor, qurban_shohibul');
        $this->db->order_by('qurban_status, qurban_nomor');
        return $this->db->get('tb_penimbangan')->result_array();
    }

    public function max_ke($table, $field)
    {
        $this->db->select_max($field);
        return $this->db->get($table)->row_array()[$field];
    }

    public function rekap_daging()
    {
        // $this->db->select('*');
        // $this->db->join('tb_qurban as tq', 'tp.penimbangan_qurban = tq.qurban_id');
        // $this->db->group_by('tp.penimbangan_ke, tp.penimbangan_id, tq.qurban_id');
        // return $this->db->get('tb_penimbangan as tp')->result_array();
        return $this->db->query('select * from tb_penimbangan as tp join tb_qurban as tq on tp.penimbangan_qurban = tq.qurban_id order by tp.penimbangan_ke')->result_array();
    }

    public function rekap_daging_max($no)
    {
        // return $this->db->query('select * from tb_penimbangan as tp join tb_qurban as tq on tp.penimbangan_qurban = tq.qurban_id where penimbangan_ke =' . $no . ' order by tp.penimbangan_ke')->result_array();
        return $this->db->query('select penimbangan_qurban, penimbangan_jumlah from tb_penimbangan where penimbangan_ke = ' . $no . ' order by penimbangan_qurban')->result_array();
    }

    public function rekap_daging_max2($no)
    {
        return $this->db->query('select penimbangan_qurban, penimbangan_jumlah from tb_penimbangan where penimbangan_ke = ' . $no . ' order by penimbangan_qurban')->result();
    }

    public function count($table)
    {
        return $this->db->count_all($table);
    }

    public function timbangan_pi($pq)
    {
        return $this->db->query('select penimbangan_ke, penimbangan_qurban, penimbangan_jumlah from tb_penimbangan where penimbangan_qurban = ' . $pq . ' order by penimbangan_ke')->result_array();
    }

    public function get_select($table, $s)
    {
        return $this->db->query('select ' . $s . ' from ' . $table .' order by ' . $s . ';')->result_array();
    }

    public function count_row($table, $field, $id)
    {
        $this->db->where($field, $id);
        return $this->db->get($table)->num_rows();

    }

    function get_qurban(){
        $hasil = $this->db->query("SELECT * FROM tb_qurban");
        return $hasil->result();
    }
}