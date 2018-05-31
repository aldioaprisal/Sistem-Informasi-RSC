<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('form_validation');
    }

    public function dokter()
    {   
        $this->load->view("template/header"); 
        $this->load->view("template/sidebar"); 
        $this->load->view("template/footer");

        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));


        if ($q <> '') {
            $config['base_url'] = base_url() . 'dokter/' . urlencode($q);
            $config['first_url'] = base_url() . 'dokter/' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'dokter/';
            $config['first_url'] = base_url() . 'dokter/';
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
        $this->load->view('dokter/dokter_list', $data);


        
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
            $this->load->view('dokter/dokter_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('dokter/create_action'),
	    'id' => set_value('id'),
	    'nama' => set_value('nama'),
	    'jenkel' => set_value('jenkel'),
	    'alamat' => set_value('alamat'),
	    'no_tlp' => set_value('no_tlp'),
	    'poliklinik' => set_value('poliklinik'),
	);
        $this->load->view('dokter/dokter_form', $data);
        $this->load->view("template/header"); 
        $this->load->view("template/sidebar"); 
        $this->load->view("template/footer");
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'jenkel' => $this->input->post('jenkel',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_tlp' => $this->input->post('no_tlp',TRUE),
		'poliklinik' => $this->input->post('poliklinik',TRUE),
	    );

            $this->Dokter_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dokter/dokter'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dokter/update_action'),
		'id' => set_value('id', $row->id),
		'nama' => set_value('nama', $row->nama),
		'jenkel' => set_value('jenkel', $row->jenkel),
		'alamat' => set_value('alamat', $row->alamat),
		'no_tlp' => set_value('no_tlp', $row->no_tlp),
		'poliklinik' => set_value('poliklinik', $row->poliklinik),
	    );
            $this->load->view('dokter/dokter_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'jenkel' => $this->input->post('jenkel',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_tlp' => $this->input->post('no_tlp',TRUE),
		'poliklinik' => $this->input->post('poliklinik',TRUE),
	    );

            $this->Dokter_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dokter'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);

        if ($row) {
            $this->Dokter_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dokter'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
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

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "dokter.xls";
        $judul = "dokter";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Jenkel");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "No Tlp");
	xlsWriteLabel($tablehead, $kolomhead++, "Poliklinik");

	foreach ($this->Dokter_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenkel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_tlp);
	    xlsWriteLabel($tablebody, $kolombody++, $data->poliklinik);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-29 14:59:32 */
/* http://harviacode.com */