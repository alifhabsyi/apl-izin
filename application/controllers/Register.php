<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
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
		$this->load->view('register/reg1user');
	}
	public function id_regis()
	{
		$data = array();
		$where = array(
			'ID_REG' => $this->input->get('n'),
		);
		$data['regis'] = $this->m_main->getwhere('register', $where);

		$this->load->view('register/id_regis', $data);
	}
	public function reg1()
	{
		$this->load->view('register/reg1user');
	}
	public function addreg1()
	{


		$nik = $this->input->post('nik');
		$no_telp = $this->input->post('no_telp');
		// // var_dump($no_surat);
		// //Mulai inisiasi cek no agenda atau reset per tahun
		$where            = array(
			'NIK' => $nik,
			'NO_TELP' => $no_telp,
			// 'STATUS' => "REG",
		);
		$cek              = $this->m_main->cekada("register", $where)->num_rows();
		$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		// Output: video-g6swmAP8X5VG4jCi.mp4
		$reg = 'R1' . substr(str_shuffle($permitted_chars), 0, 4);
		// var_dump($cek > 4 );exit;
		if ($cek < 6) {
			$jenis = $this->input->post('jenis');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$kelurahan = $this->input->post('kelurahan');
			$kecamatan = $this->input->post('kecamatan');
			$kota = $this->input->post('kota');
			$provinsi = $this->input->post('provinsi');
			$penanggung_jawab = $this->input->post('penanggung_jawab');
			$nik = $this->input->post('nik');
			$no_telp = $this->input->post('no_telp');


			$table = "register";
			$dataup = array(
				'ID_REG' => $reg,
				'JENIS' => $jenis,
				'NAMA' => $nama,
				'ALAMAT' => $alamat,
				'KELURAHAN' => $kelurahan,
				'KECAMATAN' => $kecamatan,
				'KOTA' => $kota,
				'PROVINSI' => $provinsi,
				'PENANGGUNG_JAWAB' => $penanggung_jawab,
				'NIK' => $nik,
				'NO_TELP' => $no_telp,
				'STATUS' => "REG",
				'TGL_REG' => date("y-m-d"),


			);
			// var_dump($dataup);
			$this->m_main->insert($table, $dataup);
			redirect('register/id_regis?n=' . $reg);
			// var_dump($dataup);exit;
		} else {
?>
			<script languange='javascript'>
				window.alert('Anda Sudah Registrasi 5 Kali / Belum Selesai Proses');
				window.history.back();
			</script>
		<?php
		}
	}
	public function upl1()
	{
		$this->load->view('register/upl1');
	}

	public function upload1()
	{


		$id_reg = $this->input->post('id_reg');
		// // var_dump($no_surat);
		// //Mulai inisiasi cek no agenda atau reset per tahun
		$where  = array(
			'ID_REG' => $id_reg,
		);

		$config['upload_path'] = "./assets/documents";
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		// if (!$this->upload->do_upload('ktp')) {   untuk cek error
		// 	$error = array('error' => $this->upload->display_errors()); untuk display error tinggal dipanggil
		// 	$data = array('upload_data' => $this->upload->data());
		// 	$ktp = $data['upload_data']['file_name'];

		// }
		$cek              = $this->m_main->cekada("reglab", $where)->num_rows();
		// var_dump($id_reg);exit;
		if ($cek == 0) {

			$this->upload->do_upload("ktp");
			$data = array('upload_data' => $this->upload->data());
			$ktp = $data['upload_data']['file_name'];

			$this->upload->do_upload("npwp");
			$data = array('upload_data' => $this->upload->data());
			$npwp = $data['upload_data']['file_name'];

			$this->upload->do_upload("gmap");
			$data = array('upload_data' => $this->upload->data());
			$gmap = $data['upload_data']['file_name'];

			$this->upload->do_upload("sp_penanggungjawab");
			$data = array('upload_data' => $this->upload->data());
			$sp_penanggungjawab = $data['upload_data']['file_name'];

			$this->upload->do_upload("sp_kesediaan");
			$data = array('upload_data' => $this->upload->data());
			$sp_kesediaan = $data['upload_data']['file_name'];

			$this->upload->do_upload("data_bangunan");
			$data = array('upload_data' => $this->upload->data());
			$data_bangunan = $data['upload_data']['file_name'];

			$this->upload->do_upload("data_peralatan");
			$data = array('upload_data' => $this->upload->data());
			$data_peralatan = $data['upload_data']['file_name'];

			$this->upload->do_upload("sr_dinkes");
			$data = array('upload_data' => $this->upload->data());
			$sr_dinkes = $data['upload_data']['file_name'];

			$this->upload->do_upload("nib");
			$data = array('upload_data' => $this->upload->data());
			$nib = $data['upload_data']['file_name'];

			$this->upload->do_upload("imb");
			$data = array('upload_data' => $this->upload->data());
			$imb = $data['upload_data']['file_name'];

			$this->upload->do_upload("ukl_upl");
			$data = array('upload_data' => $this->upload->data());
			$ukl_upl = $data['upload_data']['file_name'];

			$table = "reglab";
			$dataup = array(
				'ID_REG' => $this->input->post('id_reg'),
				'KTP' => $ktp,
				'NPWP' => $npwp,
				'GMAP' => $gmap,
				'SP_PENANGGUNGJAWAB' => $sp_penanggungjawab,
				'SP_KESEDIAAN' => $sp_kesediaan,
				'DATA_BANGUNAN' => $data_bangunan,
				'DATA_PERALATAN' => $data_peralatan,
				'SR_DINKES' => $sr_dinkes,
				'NIB' => $nib,
				'IMB' => $imb,
				'UKL_UPL' => $ukl_upl,
				// 'NIP' => $this->session->userdata("NIP")
			);
			// var_dump($dataup);exit;
			$this->m_main->insert($table, $dataup);

			$where2 = array(
				'ID_REG' => $this->input->post('id_reg'),
			);
			$dataup = array(
				'STATUS' => "UPL",
			);
			$this->m_main->update($where2, $dataup, 'register');
			redirect('/');
			// var_dump($dataup);exit;
		} else {
		?>
			<script languange='javascript'>
				window.alert('Data sudah pernah diupload');
				window.history.back();
			</script>
		<?php
		}
	}


	public function reg2()
	{
		$this->load->view('register/reg2user');
	}
	public function upl2()
	{
		$this->load->view('register/upl2');
	}

	public function upload2()
	{


		$id_reg = $this->input->post('id_reg');
		// // var_dump($no_surat);
		// //Mulai inisiasi cek no agenda atau reset per tahun
		$where  = array(
			'ID_REG' => $id_reg,
		);

		$config['upload_path'] = "./assets/documents";
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		// if (!$this->upload->do_upload('ktp')) {   untuk cek error
		// 	$error = array('error' => $this->upload->display_errors()); untuk display error tinggal dipanggil
		// 	$data = array('upload_data' => $this->upload->data());
		// 	$ktp = $data['upload_data']['file_name'];

		// }
		$cek              = $this->m_main->cekada("reglab", $where)->num_rows();
		// var_dump($id_reg);exit;
		if ($cek == 0) {

			$this->upload->do_upload("akta_notaris");
			$data = array('upload_data' => $this->upload->data());
			$akta_notaris = $data['upload_data']['file_name'];

			$this->upload->do_upload("imb");
			$data = array('upload_data' => $this->upload->data());
			$imb = $data['upload_data']['file_name'];

			$this->upload->do_upload("sppl");
			$data = array('upload_data' => $this->upload->data());
			$sppl = $data['upload_data']['file_name'];

			$this->upload->do_upload("nib");
			$data = array('upload_data' => $this->upload->data());
			$nib = $data['upload_data']['file_name'];

			$this->upload->do_upload("sr_dispen");
			$data = array('upload_data' => $this->upload->data());
			$sr_dispen = $data['upload_data']['file_name'];

			$this->upload->do_upload("izin_usaha");
			$data = array('upload_data' => $this->upload->data());
			$izin_usaha = $data['upload_data']['file_name'];

			$this->upload->do_upload("izin_lokasi");
			$data = array('upload_data' => $this->upload->data());
			$izin_lokasi = $data['upload_data']['file_name'];

			$this->upload->do_upload("slf");
			$data = array('upload_data' => $this->upload->data());
			$slf = $data['upload_data']['file_name'];

			$this->upload->do_upload("sktu");
			$data = array('upload_data' => $this->upload->data());
			$sktu = $data['upload_data']['file_name'];

			$this->upload->do_upload("proposal_dispen");
			$data = array('upload_data' => $this->upload->data());
			$proposal_dispen = $data['upload_data']['file_name'];

			$this->upload->do_upload("sp_komitmen");
			$data = array('upload_data' => $this->upload->data());
			$sp_komitmen = $data['upload_data']['file_name'];

			$table = "regpend";
			$dataup = array(
				'ID_REG' => $this->input->post('id_reg'),
				'AKTA_NOTARIS' => $akta_notaris,
				'IMB' => $imb,
				'SPPL' => $sppl,
				'NIB' => $nib,
				'SR_DISPEN' => $sr_dispen,
				'IZIN_USAHA' => $izin_usaha,
				'IZIN_LOKASI' => $izin_lokasi,
				'SLF' => $slf,
				'SKTU' => $sktu,
				'PROPOSAL_DISPEN' => $proposal_dispen,
				'SP_KOMITMEN' => $sp_komitmen,
				// 'NIP' => $this->session->userdata("NIP")
			);
			// var_dump($dataup);exit;
			$this->m_main->insert($table, $dataup);

			$where2 = array(
				'ID_REG' => $this->input->post('id_reg'),
			);
			$dataup = array(
				'STATUS' => "UPL",
			);
			$this->m_main->update($where2, $dataup, 'register');
			redirect('/');
			// var_dump($dataup);exit;
		} else {
		?>
			<script languange='javascript'>
				window.alert('Data sudah pernah diupload');
				window.history.back();
			</script>
		<?php
		}
	}

	public function reg3()
	{
		$this->load->view('register/reg3user');
	}
	public function upl3()
	{
		$this->load->view('register/upl3');
	}

	public function upload3()
	{


		$id_reg = $this->input->post('id_reg');
		// // var_dump($no_surat);
		// //Mulai inisiasi cek no agenda atau reset per tahun
		$where  = array(
			'ID_REG' => $id_reg,
		);

		$config['upload_path'] = "./assets/documents";
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		// if (!$this->upload->do_upload('ktp')) {   untuk cek error
		// 	$error = array('error' => $this->upload->display_errors()); untuk display error tinggal dipanggil
		// 	$data = array('upload_data' => $this->upload->data());
		// 	$ktp = $data['upload_data']['file_name'];

		// }
		$cek              = $this->m_main->cekada("reglab", $where)->num_rows();
		// var_dump($id_reg);exit;
		if ($cek == 0) {

			$this->upload->do_upload("foto");
			$data = array('upload_data' => $this->upload->data());
			$foto = $data['upload_data']['file_name'];

			$this->upload->do_upload("ktp");
			$data = array('upload_data' => $this->upload->data());
			$ktp = $data['upload_data']['file_name'];

			$this->upload->do_upload("iujk");
			$data = array('upload_data' => $this->upload->data());
			$iujk = $data['upload_data']['file_name'];

			$this->upload->do_upload("sbujk");
			$data = array('upload_data' => $this->upload->data());
			$sbujk = $data['upload_data']['file_name'];

			$this->upload->do_upload("npwk");
			$data = array('upload_data' => $this->upload->data());
			$npwk = $data['upload_data']['file_name'];

			$this->upload->do_upload("sktu");
			$data = array('upload_data' => $this->upload->data());
			$sktu = $data['upload_data']['file_name'];

			$this->upload->do_upload("sertifikat_keahlian");
			$data = array('upload_data' => $this->upload->data());
			$sertifikat_keahlian = $data['upload_data']['file_name'];

			$this->upload->do_upload("daftar_pengalaman");
			$data = array('upload_data' => $this->upload->data());
			$daftar_pengalaman = $data['upload_data']['file_name'];

			$this->upload->do_upload("pjt");
			$data = array('upload_data' => $this->upload->data());
			$pjt = $data['upload_data']['file_name'];
			$table = "regkons";
			$dataup = array(
				'ID_REG' => $this->input->post('id_reg'),
				'FOTO' => $foto,
				'KTP' => $ktp,
				'IUJK' => $iujk,
				'SBUJK' => $sbujk,
				'NPWK' => $npwk,
				'SKTU' => $sktu,
				'SERTIFIKAT_KEAHLIAN' => $sertifikat_keahlian,
				'DAFTAR_PENGALAMAN' => $daftar_pengalaman,
				'PJT' => $pjt,
				// 'NIP' => $this->session->userdata("NIP")

			);
			// var_dump($dataup);exit;
			$this->m_main->insert($table, $dataup);

			$where2 = array(
				'ID_REG' => $this->input->post('id_reg'),
			);
			$dataup = array(
				'STATUS' => "UPL",
			);
			$this->m_main->update($where2, $dataup, 'register');
			redirect('/');
			// var_dump($dataup);exit;
		} else {
		?>
			<script languange='javascript'>
				window.alert('Data sudah pernah diupload');
				window.history.back();
			</script>
			<?php
		}
	}
	function saran()
	{
		$data = array();
		// $id_reg = $this->input->post("id_reg");
		// $table = "register";
		// $where = array(
		// 	'ID_REG' => $id_reg,
		// );

		// $data['cari'] = $this->m_main->get1data($table, $where);
		// var_dump($data);
		// exit;
		$where = array(
			'SARAN !=' => "",
		);
		$data['list'] = $this->m_main->getwhere('register', $where);
		$this->load->view('register/saran', $data);
	}
	function print_register()
	{
		$data = array();
		// $id_reg = $this->input->post("id_reg");
		// $table = "register";
		// $where = array(
		// 	'ID_REG' => $id_reg,
		// );

		// $data['cari'] = $this->m_main->get1data($table, $where);
		// var_dump($data);
		// exit;
		$where = array(
			'ID_REG' => $this->input->get("n"),
		);
		$data['reg'] = $this->m_main->getwhere('register', $where);
		$this->load->view('print/register', $data);
	}
	function addsaran()
	{
		$data = array();
		$id_reg = $this->input->post("id_reg");
		$saran = $this->input->post("saran");

		$table = "register";
		$where = array(
			'ID_REG' => $id_reg,
		);

		$data['cari'] = $this->m_main->getwhere($table, $where);
		$cek              = $this->m_main->cekada("register", $where)->num_rows();
		foreach ($data['cari'] as $a) :
			$status = $a->STATUS;
			$cari = $a->SARAN;

		endforeach;
		// var_dump($data);
		// exit;


		if ($cek > 0 && ($status == "SK" || $status == "BSL" || $status == "RJC" || $status == "SKK")) {

			if ($cari == "") {
				$where2 = array(
					'ID_REG' => $this->input->post('id_reg'),
				);
				$dataup = array(
					'SARAN' => $saran,
				);
				$this->m_main->update($where2, $dataup, 'register');
				redirect('register/saran');
			} else {
			?>
				<script languange='javascript'>
					window.alert('Data sudah Pernah ada');
					window.history.back();
				</script>
			<?php
			}
		} else {
			?>
			<script languange='javascript'>
				window.alert('Data Register Tidak Ditemukan / Belum Selesai');
				window.history.back();
			</script>
<?php
		}
	}
}
