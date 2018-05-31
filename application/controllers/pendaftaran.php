<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model');
        $this->load->library('form_validation');
    }

    public function daftar()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        $this->load->view("template/headerpasien"); 
        $this->load->view("template/sidebarpasien"); 
        $this->load->view("template/footer");
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pendaftaran/daftar?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pendaftaran/daftarn?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pendaftaran/daftar';
            $config['first_url'] = base_url() . 'pendaftaran/daftar';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pasien_model->total_rows($q);
        $pasien = $this->Pasien_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pasien_data' => $pasien,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pendaftaran/pasien_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pasien_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pasien' => $row->id_pasien,
		'nama' => $row->nama,
		'jenkel' => $row->jenkel,
		'alamat' => $row->alamat,
		'umur' => $row->umur,
        'poliklinik' => $row->poliklinik,
		'no_tlp' => $row->no_tlp,
	    );
            $this->load->view('pendaftaran/pasien_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran/daftar'));


        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pendaftaran/create_action'),
	    'id_pasien' => set_value('id_pasien'),
	    'nama' => set_value('nama'),
	    'jenkel' => set_value('jenkel'),
	    'alamat' => set_value('alamat'),
	    'umur' => set_value('umur'),
        'poliklinik' => set_value('poliklinik'),
	    'no_tlp' => set_value('no_tlp'),
	);
        $this->load->view('pendaftaran/pasien_form', $data);
        $this->load->view("template/headerpasien"); 
        $this->load->view("template/sidebarpasien"); 
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
		'umur' => $this->input->post('umur',TRUE),
        'poliklinik' => $this->input->post('poliklinik',TRUE),
		'no_tlp' => $this->input->post('no_tlp',TRUE),
	    );

            $this->Pasien_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pendaftaran/daftar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pasien_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pendaftaran/update_action'),
		'id_pasien' => set_value('id_pasien', $row->id_pasien),
		'nama' => set_value('nama', $row->nama),
		'jenkel' => set_value('jenkel', $row->jenkel),
		'alamat' => set_value('alamat', $row->alamat),
		'umur' => set_value('umur', $row->umur),
        'poliklinik' => set_value('poliklinik', $row->poliklinik),
		'no_tlp' => set_value('no_tlp', $row->no_tlp),
	    );
            $this->load->view('pendaftaran/pasien_form', $data);
            $this->load->view("template/header"); 
            $this->load->view("template/sidebarpasien"); 
            $this->load->view("template/footer");
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran/daftar'));

        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pasien', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'jenkel' => $this->input->post('jenkel',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'umur' => $this->input->post('umur',TRUE),
        'poliklinik' => $this->input->post('poliklinik',TRUE),
		'no_tlp' => $this->input->post('no_tlp',TRUE),
	    );

            $this->Pasien_model->update($this->input->post('id_pasien', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pendaftaran/daftar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pasien_model->get_by_id($id);

        if ($row) {
            $this->Pasien_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pendaftaran/daftar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran/daftar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jenkel', 'jenkel', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('umur', 'umur', 'trim|required');
    $this->form_validation->set_rules('poliklinik', 'poliklinik', 'trim|required');
	$this->form_validation->set_rules('no_tlp', 'no tlp', 'trim|required');

	$this->form_validation->set_rules('id_pasien', 'id_pasien', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "daftar.xls";
        $judul = "pasien";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Umur");
    xlsWriteLabel($tablehead, $kolomhead++, "Poliklinik");
	xlsWriteLabel($tablehead, $kolomhead++, "No Tlp");

	foreach ($this->Pasien_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenkel);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->umur);
        xlsWriteNumber($tablebody, $kolombody++, $data->poliklinik);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_tlp);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-30 04:53:24 */
/* http://harviacode.com */