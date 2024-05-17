<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\ProdiModel;
use App\Models\FakultasModel;
use CodeIgniter\Controller;

class Mahasiswa extends Controller
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model
        ->select('mahasiswa.*, prodi.nama_prodi as nama_prodi, fakultas.nama_fakultas as nama-fakultas')
        ->join('prodi', 'mahasiswa.id_prodi = prodi.id')
        ->join('fakultas', 'mahasiswa.id_fakultas = fakultas.id')
        ->findAll();

        $judul['title'] = 'Data Mahasiswa';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('mahasiswa/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        $model = new ProdiModel();
        $fakultas = new FakultasModel();

        $data['prodi'] = $model->findAll();
        $fakultas = new FakultasModel();
        $data['fakultas'] = $fakultas->findAll();
        $judul['title'] = 'Tambah Mahasiswa';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('mahasiswa/create',$data);
    }

    public function store()
    {
        $model = new MahasiswaModel();

        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'id_prodi' => $this->request->getPost('id_prodi'),
            'id_fakultas' => $this->request->getPost('id_fakultas'),
            'semester' => $this->request->getPost('semester'),
            'alamat' => $this->request->getPost('alamat'),
            'status' => $this->request->getPost('status')
        ];

        $model->insert($data);

        return redirect()->to(base_url('mahasiswa'));
    }

    public function edit($id)
    {
        $model = new MahasiswaModel();
        $prodi = new ProdiModel();
        $data['prodi'] = $prodi->findAll();
        $fakultas = new FakultasModel();
        $data['fakultas'] = $fakultas->findAll();
        $data['mahasiswa'] = $model->find($id);

        $judul['title'] = 'Edit Mahasiswa';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $model = new MahasiswaModel();

        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'id_prodi' => $this->request->getPost('id_prodi'),
            'id_fakultas' => $this->request->getPost('id_fakultas'),
            'semester' => $this->request->getPost('semester'),
            'alamat' => $this->request->getPost('alamat'),
            'status' => $this->request->getPost('status')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('mahasiswa'));
    }

    public function delete($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);

        return redirect()->to(base_url('mahasiswa'));
    }
}
