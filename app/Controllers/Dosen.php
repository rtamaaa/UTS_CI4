<?php

namespace App\Controllers;

use App\Models\DosenModel;
use CodeIgniter\Controller;

class Dosen extends Controller
{
    public function index()
    {
        $model = new DosenModel();
        $data['dosen'] = $model->findAll();

        $judul['title'] = 'Data Dosen';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('dosen/index', $data);
        echo view('layout/footer');

    }

    public function create()
    {
        $judul['title'] = 'Data Dosen';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('dosen/create');
        echo view('layout/footer');
    }

    public function store()
    {
        $model = new DosenModel();

        $data = [
            'kode_dosen' => $this->request->getPost('kode_dosen'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'no_telp' => $this->request->getPost('no_telp')
        ];

        $model->insert($data);

        return redirect()->to(base_url('dosen'));
    }

    public function edit($id)
    {
        $model = new DosenModel();
        $data['dosen'] = $model->find($id);

        $judul['title'] = 'Data Dosen';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('dosen/edit', $data);
        echo view('layout/footer');    }

    public function update($id)
    {
        $model = new DosenModel();

        $data = [
            'kode_dosen' => $this->request->getPost('kode_dosen'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'no_telp' => $this->request->getPost('no_telp')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('dosen'));
    }

    public function delete($id)
    {
        $model = new DosenModel();
        $model->delete($id);

        return redirect()->to(base_url('dosen'));
    }
}
