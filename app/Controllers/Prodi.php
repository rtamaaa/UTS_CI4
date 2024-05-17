<?php

namespace App\Controllers;

use App\Models\ProdiModel;
use App\Models\FakultasModel;
use CodeIgniter\Controller;

class Prodi extends Controller
{
    public function index()
    {
        $model = new ProdiModel();

        $data['prodi'] = $model
        ->select('prodi.*, fakultas.nama_fakultas as nama_fakultas')
        ->join('fakultas', 'prodi.id_fakultas = fakultas.id')
        ->findAll();

        $judul['title'] = 'Data Program Studi';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/prodi/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        $model = new FakultasModel();
        $data['fakultas'] = $model->findAll();

        $judul['title'] = 'Tambah Program Studi';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/prodi/create', $data);
        echo view('layout/footer');
    }

    public function store()
    {
        $model = new ProdiModel();
        $fakultas = new FakultasModel();

        $data = [
            'kode_prodi' => $this->request->getPost('kode_prodi'),
            'nama_prodi' => $this->request->getPost('nama_prodi'),
            'id_fakultas' => $this->request->getPost('id_fakultas')
        ];

        $model->insert($data);

        return redirect()->to(base_url('prodi'));
    }

    public function edit($id)
    {
        $model = new ProdiModel();
        $fakultas = new FakultasModel();

        $data['prodi'] = $model->find($id);
        $data['fakultas'] = $model->findAll();

        $judul['title'] = 'Edit Program Studi';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/prodi/edit', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $model = new ProdiModel();
        $fakultas = new FakultasModel();

        $data = [
            'kode_prodi' => $this->request->getPost('kode_prodi'),
            'nama_prodi' => $this->request->getPost('nama_prodi'),
            'id_fakultas' => $this->request->getPost('id_fakultas')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('prodi'));
    }

    public function delete($id)
    {
        $model = new ProdiModel();
        $fakultas = new FakultasModel();

        $model->delete($id);

        return redirect()->to(base_url('prodi'));
    }
}
