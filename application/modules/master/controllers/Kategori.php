<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in_admin();
        $this->load->model('master/Buku_model', 'BM');
    }


    public function index()
    {
        $valid = $this->form_validation;
        $valid->set_rules('kd_kategori', 'Kode Kategori', 'is_unique[tbl_kategori.kd_kategori]', array('is_unique' => '%s telah ada. Silahkan masukkan kode yang lain'));
        $valid->set_rules('nm_kategori', 'Nama Kategori', 'is_unique[tbl_kategori.nm_kategori]', array('is_unique' => '%s telah ada. Silahkan masukkan nama yang lain'));


        if ($valid->run() === false) {
            $tombol  = [
                'add'     => 'master/kategori/add',
                'edit'    => 'master/kategori/edit/',
                'delete'  => 'master/kategori/delete/'
            ];


            $is_parent = $this->BM->listParentKategori();
            $data = [

                'is_parent' => $is_parent,
                'tombol'   => $tombol,
                'content' => 'master/kategori/index'
            ];
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $i = $this->input;
            $data = [
                'nm_kategori'   => $i->post('nm_kategori'),
                'kd_kategori'   => str_replace(' ', '', $i->post('kd_kategori')),
                'is_parent'     => $i->post('is_parent')
            ];
            $this->Crud_model->add('tbl_kategori', $data);
            $this->session->set_flashdata('msg', 'kategori berhasil ditambah');
            redirect('master/kategori');
        }
    }


    function edit($kd_kategori)
    {
        $valid = $this->form_validation;
        // $valid->set_rules('kd_kategori', 'Kode Kaategori', 'macthes[tbl_kategori.kd_kategori]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
        // $valid->set_rules('nm_kategori', 'Nama Kaategori', 'macthes[tbl_kategori.nm_kategori]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


        if ($valid->run() === TRUE) {
            $this->index();
        } else {
            $i = $this->input;
            $data = [
                'nm_kategori'   => $i->post('nm_kategori'),
                'kd_kategori'   => $i->post('kd_kategori'),
                'is_parent'   => $i->post('is_parent')
            ];
            $this->Crud_model->edit('tbl_kategori', 'kd_kategori', $kd_kategori, $data);
            $this->session->set_flashdata('msg', 'kategori berhasil diedit');
            redirect('master/kategori');
        }
    }

    function delete($kd_kategori)
    {
        $kat_child = $this->Crud_model->listingOneAll('tbl_kategori', 'is_parent', $kd_kategori);
        foreach ($kat_child as $row) {
            $this->Crud_model->delete('tbl_kategori', 'kd_kategori', $row->kd_kategori);
        }
        $this->Crud_model->delete('tbl_kategori', 'kd_kategori', $kd_kategori);
        $this->session->set_flashdata('msg', 'data telah dihapus');

        redirect('master/kategori');
    }
}
