<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
        $this->load->model('m_main');
        $this->load->library('session');
        // $this->load->library('curl');
        $this->load->library('pagination');
        // $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $data['list'] = $this->m_main->getapp1('register');
        // var_dump($data['list']);exit;
        $this->template->halaman('approve/app1', $data);
    }
    public function reg1()
    {
        $this->template->halaman('register/reg1');
    }
    public function app1()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $data['list'] = $this->m_main->getapp1('register');
        $this->template->halaman('approve/app1', $data);
    }
    public function lterima()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        if ($this->input->post("tahun")){
            $where=array(
                "YEAR(TGL_REG)" => $this->input->post("tahun"),
                "MONTH(TGL_REG)" => $this->input->post("bulan"),
                "STATUS !=" => "REG",
                "STATUS !=" => "RJC",
                "JENIS" => $this->input->post("jenis"),

            );
        }else{
            $where=array(
                "YEAR(TGL_REG)" => date('Y'),
                "MONTH(TGL_REG)" => date('m'),
                "STATUS !=" => "REG",
                "STATUS !=" => "RJC",
                // "JENIS" => $this->input->post("jenis"),

            );
        }
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($data['list'] );
        $this->template->halaman('approve/lterima', $data);
    }
    public function lskterbit()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        if ($this->input->post("tahun")){
            $where=array(
                "YEAR(TGL_REG)" => $this->input->post("tahun"),
                "MONTH(TGL_REG)" => $this->input->post("bulan"),
                "STATUS " => "SKK",
                "JENIS" => $this->input->post("jenis"),

                

            );
        }else{
            $where=array(
                "YEAR(TGL_REG)" => date('Y'),
                "MONTH(TGL_REG)" => date('m'),
                "STATUS " => "SKK",
                
            );
        }
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($data['list'] );
        $this->template->halaman('approve/lskterbit', $data);
    }
    public function lstbap()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $jenis=$this->input->post("jenis");
        if ($this->input->post("tahun")){
            $where=array(
                "YEAR(TGL_ST)" => $this->input->post("tahun"),
                "MONTH(TGL_ST)" => $this->input->post("bulan"),
                "HASIL !=" =>  '',
               
               
            );
            $tes = "ID_REG IN (SELECT ID_REG FROM REGISTER WHERE jenis='$jenis') ";
            $data['list'] = $this->m_main->getst('stbap',$where,$tes);
        
        }else{
            $where=array(
                "YEAR(TGL_ST)" => date('Y'),
                "MONTH(TGL_ST)" => date('m'),
                "HASIL !=" => '',
               
                
            );
            $tes="";
            $data['list'] = $this->m_main->getwhere('stbap',$where);
        }
        
        
        // var_dump($data['list'] );
        $this->template->halaman('approve/lstbap', $data);
    }
    public function lst()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $jenis=$this->input->post("jenis");
        if ($this->input->post("tahun")){
            $where=array(
                "YEAR(TGL_ST)" => $this->input->post("tahun"),
                "MONTH(TGL_ST)" => $this->input->post("bulan"),
                "HASIL" => '',
                
               
            );
            $tes = "ID_REG IN (SELECT ID_REG FROM REGISTER WHERE jenis='$jenis') ";
            $data['list'] = $this->m_main->getst('stbap',$where,$tes);
        }else{
            $where=array(
                "YEAR(TGL_ST)" => date('Y'),
                "MONTH(TGL_ST)" => date('m'),
                "HASIL" => '',
               
                
            );
            $tes = "";
            $data['list'] = $this->m_main->getwhere('stbap',$where);
        }
        
        // var_dump($data['list'] );
        $this->template->halaman('approve/lst', $data);
    }
    public function lsktolak()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        if ($this->input->post("tahun")){
            $where=array(
                "YEAR(TGL_REG)" => $this->input->post("tahun"),
                "MONTH(TGL_REG)" => $this->input->post("bulan"),
                "STATUS =" => "BSL",
                "JENIS" => $this->input->post("jenis"),

                
                

            );
        }else{
            $where=array(
                "YEAR(TGL_REG)" => date('Y'),
                "MONTH(TGL_REG)" => date('m'),
                "STATUS " => "BSL",
                
            );
        }
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($data['list'] );
        $this->template->halaman('approve/lsktolak', $data);
    }
    public function export_lterima()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_REG)" => $this->input->get("t"),
                "MONTH(TGL_REG)" => $this->input->get("b"),
                "STATUS !=" => "REG",
                "STATUS !=" => "RJC",

            );
        
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($where);
        $this->load->view('export/export_terima', $data);
    }
    public function export_clterima()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_REG)" => $this->input->get("t"),
                "MONTH(TGL_REG)" => $this->input->get("b"),
                "STATUS !=" => "REG",
                "STATUS !=" => "RJC",

            );
        
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($where);
        $this->load->view('export/export_cterima', $data);
    }

    public function export_lterbit()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_REG)" => $this->input->get("t"),
                "MONTH(TGL_REG)" => $this->input->get("b"),
                "STATUS " => "SKK",
                

            );
        
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($where);
        $this->load->view('export/export_terbit', $data);
    }
    public function export_clterbit()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_REG)" => $this->input->get("t"),
                "MONTH(TGL_REG)" => $this->input->get("b"),
                "STATUS " => "SKK",
                

            );
        
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($where);
        $this->load->view('export/export_cterbit', $data);
    }
    public function export_ltolak()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_REG)" => $this->input->get("t"),
                "MONTH(TGL_REG)" => $this->input->get("b"),
                "STATUS " => "BSL",
                

            );
        
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($where);
        $this->load->view('export/export_tolak', $data);
    }
    public function export_cltolak()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_REG)" => $this->input->get("t"),
                "MONTH(TGL_REG)" => $this->input->get("b"),
                "STATUS " => "BSL",
                

            );
        
        
        $data['list'] = $this->m_main->getwhere('register',$where);
        // var_dump($where);
        $this->load->view('export/export_ctolak', $data);
    }
    public function export_lstbap()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_ST)" => $this->input->get("t"),
                "MONTH(TGL_ST)" => $this->input->get("b"),
                "HASIL !=" => '',
               
                
                

            );
        
        
        $data['list'] = $this->m_main->getwhere('stbap',$where);
        // var_dump($where);
        $this->load->view('export/export_stbap', $data);
    }
    public function export_clstbap()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_ST)" => $this->input->get("t"),
                "MONTH(TGL_ST)" => $this->input->get("b"),
                "HASIL !=" => '',
               
                
                

            );
        
        
        $data['list'] = $this->m_main->getwhere('stbap',$where);
        // var_dump($where);
        $this->load->view('export/export_cstbap', $data);
    }
    public function export_lst()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_ST)" => $this->input->get("t"),
                "MONTH(TGL_ST)" => $this->input->get("b"),
                "HASIL" => '',
               
                
                

            );
        
        
        $data['list'] = $this->m_main->getwhere('stbap',$where);
        // var_dump($where);
        $this->load->view('export/export_st', $data);
    }
    public function export_clst()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
       
            $where=array(
                "YEAR(TGL_ST)" => $this->input->get("t"),
                "MONTH(TGL_ST)" => $this->input->get("b"),
                "HASIL" => '',
               
               
                
                

            );
        
        
        $data['list'] = $this->m_main->getwhere('stbap',$where);
        // var_dump($where);
        $this->load->view('export/export_cst', $data);
    }
    

    public function rjc()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $where = array(
            'STATUS' => "RJC",
        );
        $data['list'] = $this->m_main->getwhere('register',$where);
        $this->template->halaman('approve/rjc', $data);
    }
    public function appreg()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $where = array(
            'STATUS' => "REG",
        );
        $data['list'] = $this->m_main->getwhere('register',$where);
        $this->template->halaman('approve/appreg', $data);
    }
    public function verifikasi()
    {
        $data = array();
        $where2 = array(
            'ID_REG' => $this->input->post('id_reg'),
        );
        $dataup = array(
            'STATUS' => "APV",
            'NIP' => $this->session->userdata("NIP"),
        );
        // var_dump($dataup);exit;
        $this->m_main->update($where2, $dataup, 'register');
        redirect('admin/');
    }
    public function editregadmin()
    {
        $data = array();
        $id_reg=$this->input->post('id_reg');
        // $id_reg=$this->input->post('jenis')
        $NAMA=$this->input->post('nama');
        $ALAMAT=$this->input->post('alamat');
        $KELURAHAN=$this->input->post('kelurahan');
        $KECAMATAN=$this->input->post('kecamatan');
        $KOTA=$this->input->post('kota');
        $PROVINSI=$this->input->post('provinsi');
        $PENANGGUNG_JAWAB=$this->input->post('penanggung_jawab');
        $NO_TELP=$this->input->post('no_telp');
        $NIK=$this->input->post('nik');
        
        $where2 = array(
            'ID_REG' => $this->input->post('id_reg'),
        );
        $dataup = array(
            'NAMA' => $NAMA,
            'ALAMAT' => $ALAMAT,
            'KELURAHAN' => $KELURAHAN,
            'KECAMATAN' => $KECAMATAN,
            'KOTA' => $KOTA,
            'PROVINSI' => $PROVINSI,
            'PENANGGUNG_JAWAB' => $PENANGGUNG_JAWAB,
            'NO_TELP' => $NO_TELP,
            'NIK' => $NIK,

        );
        // var_dump($dataup);exit;
        $this->m_main->update($where2, $dataup, 'register');
        redirect('admin/');
    }
    public function approve()
    {

        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reglab'] = $this->m_main->getwhere('reglab', $where);

        $where = array(
            'id_reg' => $id_reg,
        );
        $data['regpend'] = $this->m_main->getwhere('regpend', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['regkons'] = $this->m_main->getwhere('regkons', $where);
        // var_dump($data['regkons']);exit;
        $this->template->halaman('approve/approve', $data);
    }
    public function approvest()
    {
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['nip'] = $this->m_main->getlist('user');

        // var_dump($data['nip']);exit;
        $this->template->halaman('approve/approvest', $data);
    }
    public function editst()
    {
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['stbap'] = $this->m_main->getwhere('stbap', $where);
        
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['nip'] = $this->m_main->getlist('user');

        // var_dump($data['nip']);exit;
        $this->template->halaman('approve/editst', $data);
    }
    public function approvesk()
    {
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['stbap'] = $this->m_main->getwhere('stbap', $where);
        foreach ($data['stbap'] as $a) :

            $nip1 = $a->NIP_PETUGAS1;
            $nip2 = $a->NIP_PETUGAS2;
        endforeach;

        $where = array(
            'NIP' => $nip1,
        );
        $data['nip1'] = $this->m_main->getwhere('user', $where);
        $where = array(
            'NIP' => $nip2,
        );
        $data['nip2'] = $this->m_main->getwhere('user', $where);


        // var_dump($data['nip']);exit;
        $this->template->halaman('approve/approvesk', $data);
    }
    public function approvebap()
    {
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['stbap'] = $this->m_main->getwhere('stbap', $where);
        foreach ($data['stbap'] as $a) :

            $nip1 = $a->NIP_PETUGAS1;
            $nip2 = $a->NIP_PETUGAS2;
        endforeach;
        $where = array(
            'NIP' => $nip1,
        );
        $data['nip1'] = $this->m_main->getwhere('user', $where);
        $where = array(
            'NIP' => $nip2,
        );
        $data['nip2'] = $this->m_main->getwhere('user', $where);


        // var_dump($data['nip']);exit;
        $this->template->halaman('approve/approvebap', $data);
    }

    public function reject()
    {
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reglab'] = $this->m_main->getwhere('reglab', $where);

        $where = array(
            'id_reg' => $id_reg,
        );
        $data['regpend'] = $this->m_main->getwhere('regpend', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['regkons'] = $this->m_main->getwhere('regkons', $where);
        // var_dump($data['regkons']);exit;
        $this->template->halaman('approve/reject', $data);
    }
    public function rejection()
    {
        $data = array();
        $where2 = array(
            'ID_REG' => $this->input->post('id_reg'),
        );
        $dataup = array(
            'STATUS' => "RJC",
        );
        // var_dump($dataup);exit;
        $this->m_main->update($where2, $dataup, 'register');
        redirect('admin/');
    }

    public function stbap()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);

        $data = array();
        $where = array(
            'STATUS' => "APV",
        );
        $data['list'] = $this->m_main->getstbap('register', $where);
        $this->template->halaman('approve/stbap', $data);
    }
    public function sk()
    {
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $where = array(
            'STATUS' => "SK",
        );
        $data['list'] = $this->m_main->getsk('register', $where);
        // var_dump($data['list']);exit;
        $this->template->halaman('approve/sk', $data);
    }
    public function bsl()
    {
        //$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $where = array(
            'STATUS' => "BSL",
        );
        $data['list'] = $this->m_main->getwhere('register', $where);
        $this->template->halaman('approve/bsl', $data);
    }
    public function survei()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $where = array(
            'STATUS' => "STBAP",
        );
        $data['list'] = $this->m_main->getsurvei('register', $where);
        $this->template->halaman('approve/survei', $data);
    }
    public function sklab()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['sk'] = $this->m_main->getwhere('sk', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['stbap'] = $this->m_main->getwhere('stbap', $where);
        foreach ($data['stbap'] as $a) :

            $nip1 = $a->NIP_PETUGAS1;
            $nip2 = $a->NIP_PETUGAS2;
        endforeach;
        $where = array(
            'NIP' => $nip1,
        );
        $data['nip1'] = $this->m_main->getwhere('user', $where);
        $where = array(
            'NIP' => $nip2,
        );
        $data['nip2'] = $this->m_main->getwhere('user', $where);

        $this->load->view('print/sklab', $data);
    }
    public function sktolak()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        // $where = array(
        //     'id_reg' => $id_reg,
        // );
        // $data['sk'] = $this->m_main->getwhere('sk', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['stbap'] = $this->m_main->getwhere('stbap', $where);
        foreach ($data['stbap'] as $a) :

            $nip1 = $a->NIP_PETUGAS1;
            $nip2 = $a->NIP_PETUGAS2;
        endforeach;
        $where = array(
            'NIP' => $nip1,
        );
        $data['nip1'] = $this->m_main->getwhere('user', $where);
        $where = array(
            'NIP' => $nip2,
        );
        $data['nip2'] = $this->m_main->getwhere('user', $where);

        $this->load->view('print/sktolak', $data);
    }
    public function pstlab()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['stbap'] = $this->m_main->getwhere('stbap', $where);
        foreach ($data['stbap'] as $a) :

            $nip1 = $a->NIP_PETUGAS1;
            $nip2 = $a->NIP_PETUGAS2;
        endforeach;
        $where = array(
            'NIP' => $nip1,
        );
        $data['nip1'] = $this->m_main->getwhere('user', $where);
        $where = array(
            'NIP' => $nip2,
        );
        $data['nip2'] = $this->m_main->getwhere('user', $where);

        $this->load->view('print/stlab', $data);
    }
    public function pstkons()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['stbap'] = $this->m_main->getwhere('stbap', $where);
        foreach ($data['stbap'] as $a) :

            $nip1 = $a->NIP_PETUGAS1;
            $nip2 = $a->NIP_PETUGAS2;
        endforeach;
        $where = array(
            'NIP' => $nip1,
        );
        $data['nip1'] = $this->m_main->getwhere('user', $where);
        $where = array(
            'NIP' => $nip2,
        );
        $data['nip2'] = $this->m_main->getwhere('user', $where);

        $this->load->view('print/stkons', $data);
    }
    public function pstpend()
    {
        $nama1 = $this->session->userdata("NAMA");

        if (is_null($nama1)) {
            redirect(base_url('login'));
        }
        $data = array();
        $id_reg = $this->input->get('n');
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['reg'] = $this->m_main->getwhere('register', $where);
        $where = array(
            'id_reg' => $id_reg,
        );
        $data['stbap'] = $this->m_main->getwhere('stbap', $where);
        foreach ($data['stbap'] as $a) :

            $nip1 = $a->NIP_PETUGAS1;
            $nip2 = $a->NIP_PETUGAS2;
        endforeach;
        $where = array(
            'NIP' => $nip1,
        );
        $data['nip1'] = $this->m_main->getwhere('user', $where);
        $where = array(
            'NIP' => $nip2,
        );
        $data['nip2'] = $this->m_main->getwhere('user', $where);

        $this->load->view('print/stpend', $data);
    }
    public function edit_st()
    {


        $id_reg = $this->input->post('id_reg');
        $nip1 = $this->input->post('nip1');
        $nip2 = $this->input->post('nip2');
        $tgl = $this->input->post('tgl');
        $where            = array(
            'ID_REG' => $id_reg,

        );
        $dataup = array(
            'NIP_PETUGAS1' => $nip1,
            'NIP_PETUGAS2' => $nip2,
            'TGL_ST' =>$tgl,
          
        );
        $this->m_main->update($where, $dataup, 'STBAP');
        redirect('admin/stbap');
    }
    public function addst()
    {


        $id_reg = $this->input->post('id_reg');
        $nip1 = $this->input->post('nip1');
        $nip2 = $this->input->post('nip2');
        $nama_pemohon = $this->input->post('penanggung_jawab');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $tgl = $this->input->post('tgl');



        $where            = array(
            'ID_REG' => $id_reg,

        );
        $cek              = $this->m_main->cekada("stbap", $where)->num_rows();
        $permitted_chars = '0123456789';

        $bulan = date('m');
        $tahun = date('Y');

        $no_bap = 'BAP/' . $id_reg . '/' . $tahun . $bulan . '/BJM/' . substr(str_shuffle($permitted_chars), 0, 4);

        $no_surat = 'ST/' . $id_reg . '/' . $tahun . $bulan . '/BJM/' . substr(str_shuffle($permitted_chars), 0, 4);
        if ($nip1 == $nip2) {
?>
            <script languange='javascript'>
                window.alert('Petugas Tidak Boleh Sama');
                window.history.back();
            </script>
        <?php
        } else if ($cek == 0) {



            $table = "stbap";
            $dataup = array(
                'ID_REG' => $id_reg,
                'NIP_PETUGAS1' => $nip1,
                'NIP_PETUGAS2' => $nip2,
                'NO_SURAT' => $no_surat,
                'NAMA_PEMOHON' => $nama,
                'NAMA_IZIN' => $nama,
                'ALAMAT_IZIN' => $alamat,
                'TGL_ST' => $tgl,
                'NO_BAP' => $no_bap,



            );
            // var_dump($dataup);
            $this->m_main->insert($table, $dataup);
            $where2 = array(
                'ID_REG' => $this->input->post('id_reg'),
            );
            $dataup = array(
                'STATUS' => "STBAP",
            );
            $this->m_main->update($where2, $dataup, 'register');
            redirect('admin/survei');
            // var_dump($dataup);exit;
        } else {
        ?>
            <script languange='javascript'>
                window.alert('Data sudah Pernah ada');
                window.history.back();
            </script>
        <?php
        }
    }
    public function addbap()
    {


        $id_reg = $this->input->post('id_reg');
        $hasil = $this->input->post('hasil');
        $keterangan_bap = $this->input->post('keterangan_bap');




        $where            = array(
            'ID_REG' => $id_reg,

        );
        $cek              = $this->m_main->cekada("stbap", $where)->num_rows();
        

        if ($cek != 0) {


            $where = array(
                'ID_REG' => $this->input->post('id_reg'),
            );
            $table = "stbap";
            $dataup = array(
                'TGL_BAP' => date("y-m-d"),
                'KETERANGAN_BAP' => $keterangan_bap,
                'HASIL' => $hasil,

            );
            $this->m_main->update($where, $dataup, 'stbap');
            $where2 = array(
                'ID_REG' => $this->input->post('id_reg'),
            );
            if ($hasil == "SK") {
                $dataup = array(

                    'STATUS' => "SK",
                );
                $this->m_main->update($where2, $dataup, 'register');
            } else if ($hasil == "BSL") {
                $dataup = array(

                    'STATUS' => "BSL",
                );
                $this->m_main->update($where2, $dataup, 'register');
            }

            redirect('admin/survei');
            // var_dump($dataup);exit;
        } else {
        ?>
            <script languange='javascript'>
                window.alert('Data sudah Pernah ada');
                window.history.back();
            </script>
        <?php
        }
    }
    public function addsk()
    {


        $id_reg = $this->input->post('id_reg');
        $jen = $this->input->post('jen');
        $tgl_sk = $this->input->post('tgl_sk');
        $nippp = $this->session->userdata("NIP");



        $where            = array(
            'ID_REG' => $id_reg,

        );
        $cek              = $this->m_main->cekada("stbap", $where)->num_rows();
        $permitted_chars = '0123456789';

        $bulan = date('m');
        $tahun = date('Y');


        $no_surat = 'SK/' . $jen . '/' . $tahun . $bulan . '/BJM/' . substr(str_shuffle($permitted_chars), 0, 4);
        if ($cek != 0) {


            $where = array(
                'ID_REG' => $this->input->post('id_reg'),
            );
            $table = "sk";
            $dataup = array(
                'ID_REG' => $this->input->post('id_reg'),
                'NO_SK' => $no_surat,
                'TGL_SK' => $tgl_sk,
                'NIP_PETUGAS' => $nippp,

            );
            $this->m_main->insert($table, $dataup);
            $dataup = array(
                'STATUS' => "SKK",
            );
            $where = array(
                'ID_REG' => $this->input->post('id_reg'),
            );
            $this->m_main->update($where, $dataup, 'register');

            redirect('admin/sk');
            // var_dump($dataup);exit;
        } else {
        ?>
            <script languange='javascript'>
                window.alert('Data sudah Pernah ada');
                window.history.back();
            </script>
<?php
        }
    }
}
