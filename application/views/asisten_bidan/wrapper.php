<?php 
if($this->session->userdata('username') == "" && $this->session->userdata('akses_data')==""){
    $this->session->set_flashdata('sukses', 'Silakan login ');
    redirect(base_url('login'), 'refresh');

}


require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');
