<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_pasien');
<<<<<<< HEAD
=======
        $this->load->model('m_imunisasi');
        $this->load->model('m_pegawai');
        $this->load->model('m_kb');
        $this->load->model('m_pemeriksaan');
        $this->load->model('m_periksa_kehamilan');
        $this->load->model('m_rekam_medis');
        $this->load->model('m_lahiran');
>>>>>>> 915d86c2b507fbf184a402d8aa16cb854bc29c4a
    }


    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('laporan/v_cetak_laporan');
<<<<<<< HEAD
        $this->load->view('laporan/v_cetak_laporan_lahiran');
        $this->load->view('laporan/v_cetak_laporan_imunisasi');
        $this->load->view('laporan/v_cetak_laporan_periksa_kehamilan');
        $this->load->view('laporan/v_cetak_laporan_kb');
        $this->load->view('laporan/v_cetak_laporan_rekam_medis');
        $this->load->view('layouts/header');
        
          
=======
        $this->load->view('layouts/header');
        redirect('  ');
    }

    public function data_pasien()
    {
        $data ['title'] = "Laporan Data Pasien";
        $data ['pasien'] = $this->m_pasien->tampilan_data()->result_array();
        $this->load->view('laporan/v_laporan_pasien',$data);
>>>>>>> 915d86c2b507fbf184a402d8aa16cb854bc29c4a
    }

}
