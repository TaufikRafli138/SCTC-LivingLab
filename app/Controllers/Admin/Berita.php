<?php 
namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\Berita_model;
use App\Models\Kategori_model;

class Berita extends BaseController
{
	
	// index
	public function index()
	{
		checklogin();
		$m_berita 		= new Berita_model();
		$m_kategori 	= new Kategori_model();
		$berita 		= $m_berita->listing();
		$total 			= $m_berita->total();

		$data = [	'title'			=> 'Content Management ('.$total.')',
					'berita'		=> $berita,
					'content'		=> 'admin/berita/index'
				];
		echo view('admin/layout/wrapper',$data);
	}

	// Tambah
	public function tambah()
	{
		checklogin();
		$m_kategori 	= new Kategori_model();
		$m_berita 		= new Berita_model();
		$kategori 		= $m_kategori->listing();

		// Start validasi
		if($this->request->getMethod() === 'post' && $this->validate(
			[
				'judul_berita' 	=> 'required',
				'gambar'	 	=> [
					                'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
					                'max_size[gambar,4096]',
            					],
        	])) {
			if(!empty($_FILES['gambar']['name'])) {
				// Image upload
				$avatar  	= $this->request->getFile('gambar');
				$namabaru 	= str_replace(' ','-',$avatar->getName());
	            $avatar->move(WRITEPATH . '../assets/upload/image/',$namabaru);
	            // Create thumb
	            $image = \Config\Services::image()
			    ->withFile(WRITEPATH . '../assets/upload/image/'.$namabaru)
			    ->fit(100, 100, 'center')
			    ->save(WRITEPATH . '../assets/upload/image/thumbs/'.$namabaru);

			    $avatar1  	= $this->request->getFile('gambar2');
				$namabaru1 	= str_replace(' ','-',$avatar1->getName());
	            $avatar1->move(WRITEPATH . '../assets/upload/image/',$namabaru1);
	            // Create thumb
	            $image1 = \Config\Services::image()
			    ->withFile(WRITEPATH . '../assets/upload/image/'.$namabaru1)
			    ->fit(100, 100, 'center')
			    ->save(WRITEPATH . '../assets/upload/image/thumbs/'.$namabaru1);
	        	// masuk database
	        	$data = array(
	        		'id_user'		=> $this->session->get('id_user'),
					'id_kategori'	=> $this->request->getVar('id_kategori'),
					'slug_berita'	=> strtolower(url_title($this->request->getVar('judul_berita'))),
					'judul_berita'	=> $this->request->getVar('judul_berita'),
					'ringkasan'		=> $this->request->getVar('ringkasan'),
					'gambar2'		=> $namabaru1,
					'section2'		=> $this->request->getVar('section2'),
					'detail2'		=> $this->request->getVar('konten2'),
					'section3'		=> $this->request->getVar('section3'),
					'detail3'		=> $this->request->getVar('konten3'),
					'section4'		=> $this->request->getVar('section4'),
					'detail4'		=> $this->request->getVar('konten4'),
					'isi'			=> $this->request->getVar('isi'),
					'status_berita'	=> $this->request->getVar('status_berita'),
					'jenis_berita'	=> $this->request->getVar('jenis_berita'),
					'keywords'		=> $this->request->getVar('keywords'),
					'icon'			=> $this->request->getVar('icon'),
					'gambar' 		=> $namabaru,
					'tanggal_post'	=> date('Y-m-d H:i:s')
	        	);
	        	$m_berita->tambah($data);
	        	return redirect()->to(base_url('admin/berita'))->with('sukses', 'Data Berhasil di Simpan');
	        }else{
	        	$data = array(
	        		'id_user'		=> $this->session->get('id_user'),
					'id_kategori'	=> $this->request->getVar('id_kategori'),
					'slug_berita'	=> strtolower(url_title($this->request->getVar('judul_berita'))),
					'judul_berita'	=> $this->request->getVar('judul_berita'),
					'ringkasan'		=> $this->request->getVar('ringkasan'),
					'section2'		=> $this->request->getVar('section2'),
					'detail2'		=> $this->request->getVar('konten2'),
					'section3'		=> $this->request->getVar('section3'),
					'detail3'		=> $this->request->getVar('konten3'),
					'section4'		=> $this->request->getVar('section4'),
					'detail4'		=> $this->request->getVar('konten4'),
					'isi'			=> $this->request->getVar('isi'),
					'status_berita'	=> $this->request->getVar('status_berita'),
					'jenis_berita'	=> $this->request->getVar('jenis_berita'),
					'keywords'		=> $this->request->getVar('keywords'),
					'icon'			=> $this->request->getVar('icon'),
					'tanggal_post'	=> date('Y-m-d H:i:s')
	        	);
	        	$m_berita->tambah($data);
	        	return redirect()->to(base_url('admin/berita'))->with('sukses', 'Data Berhasil di Simpan');
	        }
	    }


		$data = [	'title'			=> 'Tambah Konten',
					'kategori'		=> $kategori,
					'content'		=> 'admin/berita/tambah'
				];
		echo view('admin/layout/wrapper',$data);
	}

	// edit
	public function edit($id_berita)
	{
		checklogin();
		$m_kategori 	= new Kategori_model();
		$m_berita 		= new Berita_model();
		$kategori 		= $m_kategori->listing();
		$berita 		= $m_berita->detail($id_berita);
		// Start validasi
		if($this->request->getMethod() === 'post' && $this->validate(
			[
				'judul_berita' 	=> 'required',
				'gambar'	 	=> [
					                'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
					                'max_size[gambar,4096]',
            					],
        	])) {
			if(!empty($_FILES['gambar']['name'])) {
				// Image upload
				$avatar  	= $this->request->getFile('gambar');
				$namabaru 	= str_replace(' ','-',$avatar->getName());
	            $avatar->move(WRITEPATH . '../assets/upload/image/',$namabaru);
	            // Create thumb
	            $image = \Config\Services::image()
			    ->withFile(WRITEPATH . '../assets/upload/image/'.$namabaru)
			    ->fit(100, 100, 'center')
			    ->save(WRITEPATH . '../assets/upload/image/thumbs/'.$namabaru);
	        	// masuk database
	        	$data = array(
	        		'id_berita'		=> $id_berita,
	        		'id_user'		=> $this->session->get('id_user'),
					'id_kategori'	=> $this->request->getVar('id_kategori'),
					'slug_berita'	=> strtolower(url_title($this->request->getVar('judul_berita'))),
					'judul_berita'	=> $this->request->getVar('judul_berita'),
					'ringkasan'		=> $this->request->getVar('ringkasan'),
					'isi'			=> $this->request->getVar('isi'),
					'status_berita'	=> $this->request->getVar('status_berita'),
					'jenis_berita'	=> $this->request->getVar('jenis_berita'),
					'keywords'		=> $this->request->getVar('keywords'),
					'icon'			=> $this->request->getVar('icon'),
					'gambar' 		=> $namabaru,
	        	);
	        	$m_berita->edit($data);
       		 	return redirect()->to(base_url('admin/berita'))->with('sukses', 'Data Berhasil di Simpan');
	        }else{
	        	$data = array(
	        		'id_berita'		=> $id_berita,
	        		'id_user'		=> $this->session->get('id_user'),
					'id_kategori'	=> $this->request->getVar('id_kategori'),
					'slug_berita'	=> strtolower(url_title($this->request->getVar('judul_berita'))),
					'judul_berita'	=> $this->request->getVar('judul_berita'),
					'ringkasan'		=> $this->request->getVar('ringkasan'),
					'isi'			=> $this->request->getVar('isi'),
					'status_berita'	=> $this->request->getVar('status_berita'),
					'jenis_berita'	=> $this->request->getVar('jenis_berita'),
					'keywords'		=> $this->request->getVar('keywords'),
					'icon'			=> $this->request->getVar('icon')
	        	);
	        	$m_berita->edit($data);
       		 	return redirect()->to(base_url('admin/berita'))->with('sukses', 'Data Berhasil di Simpan');
	        }
	    }

		$data = [	'title'			=> 'Edit Berita: '.$berita['judul_berita'],
					'kategori'		=> $kategori,
					'berita'		=> $berita,
					'content'		=> 'admin/berita/edit'
				];
		echo view('admin/layout/wrapper',$data);
	}
	
	// Delete
	public function delete($id_berita)
	{
		checklogin();
		$m_berita = new Berita_model();
		$data = ['id_berita'	=> $id_berita];
		$m_berita->delete($data);
		// masuk database
		$this->session->setFlashdata('sukses','Data telah dihapus');
		return redirect()->to(base_url('admin/berita'));
	}
}