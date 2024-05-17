<?php

namespace App\Controllers;

use App\Models\FakultasModel;
use CodeIgniter\Controller;

class Fakultas extends Controller
{
    public function index()
    {
        $model = new FakultasModel();
        $data['fakultas'] = $model->findAll();
        

        $judul['title'] = 'Data Fakultas';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/fakultas/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        $judul['title'] = 'Tambah Fakultas';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/fakultas/create');
        echo view('layout/footer');
    }

    public function store()
    {
        $model = new FakultasModel();

        $data = [
            'kode_fakultas' => $this->request->getPost('kode_fakultas'),
            'nama_fakultas' => $this->request->getPost('nama_fakultas')
        ];

        $model->insert($data);

        return redirect()->to(base_url('fakultas'));
    }

    public function edit($id)
    {
        $model = new FakultasModel();
        $data['fakultas'] = $model->find($id);

        $judul['title'] = 'Edit Fakultas';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/fakultas/edit', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $model = new FakultasModel();

        $data = [
            'kode_fakultas' => $this->request->getPost('kode_fakultas'),
            'nama_fakultas' => $this->request->getPost('nama_fakultas')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('fakultas'));
    }

    public function delete($id)
    {
        $model = new FakultasModel();
        $model->delete($id);

        return redirect()->to(base_url('fakultas'));
    }
}
