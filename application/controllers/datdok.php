<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class datdok extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('form_validation');
    }

    public function dadok()
    {   
        $this->load->view("template/headerpasien"); 
        $this->load->view("template/sidebarpasien"); 
        $this->load->view("template/footer");

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));


        if ($q <> '') {
            $config['base_url'] = base_url() . 'dadok/' . urlencode($q);
            $config['first_url'] = base_url() . 'dadok/' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'dadok/';
            $config['first_url'] = base_url() . 'dadok/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Dokter_model->total_rows($q);
        $dokter = $this->Dokter_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'dokter_data' => $dokter,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('datdok/dokter_list', $data);


        
    }

    public function read($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'nama' => $row->nama,
		'jenkel' => $row->jenkel,
		'alamat' => $row->alamat,
		'no_tlp' => $row->no_tlp,
		'poliklinik' => $row->poliklinik,
	    );
            $this->load->view('datdok/dokter_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('datdok/dadok'));
        }
    }

    
    

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jenkel', 'jenkel', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('no_tlp', 'no tlp', 'trim|required');
	$this->form_validation->set_rules('poliklinik', 'poliklinik', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    

}