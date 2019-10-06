<?php 

class Mahasiswa extends Controller{
	public function index(){
		$data['judul'] = 'data mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('tamplates/header',$data);
		$this->view('mahasiswa/index',$data);
		$this->view('tamplates/footer');

	}
	public function detail($id){
		$data['judul'] = 'detail mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('tamplates/header',$data);
		$this->view('mahasiswa/detail',$data);
		$this->view('tamplates/footer');

	}
	public function tambah(){
		if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil','ditambahkan','success');
			header('Location: '. BASEURL . '/mahasiswa');
			exit;
		}else{
			Flasher::setFlash('gagal','ditambahkan','danger');
			header('Location: '. BASEURL . '/mahasiswa');
			exit;
		}
	}
}