<?php

namespace App\Controllers;

use App\Models\MatkulModel;
use App\Models\DosenModel;
use CodeIgniter\Controller;

class Matkul extends Controller
{
    public function index()
    {
        $model = new MatkulModel();
        $data['matkul'] = $model
        ->select('matkul.*, dosen.nama_dosen as id_dosen')
        ->join('dosen', 'matkul.id_dosen = dosen.id')
        ->findAll();

        $judul['title'] = 'Data Mata Kuliah';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/matkul/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {

        $dosen = new dosenModel();
        $data['dosen'] = $dosen->findAll();


        $judul['title'] = 'Tambah Mata Kuliah';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/matkul/create',$data);
        echo view('layout/footer');
    }

    public function store()
    {
        $matkul = new MatkulModel();

        $data = [
            'kode_matkul' => $this->request->getPost('kode_matkul'),
            'nama_matkul' => $this->request->getPost('nama_matkul'),
            'id_dosen' => $this->request->getPost('id_dosen')
        ];

        $matkul->insert($data);

        return redirect()->to(base_url('matkul'));
    }

    public function edit($id)
    {
        $matkul = new MatkulModel();
        $dosen = new DosenModel();

        $data['matkul'] = $matkul->find($id);
        $data['dosen'] = $dosen->findAll();


        $judul['title'] = 'Edit Mata Kuliah';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('admin/matkul/edit', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $matkul = new MatkulModel();
        $dosen = new DosenModel();

        $data = [
            'kode_matkul' => $this->request->getPost('kode_matkul'),
            'nama_matkul' => $this->request->getPost('nama_matkul'),
            'id_dosen' => $this->request->getPost('id_dosen')
        ];

        $matkul->update($id, $data);

        return redirect()->to(base_url('matkul'));
    }

    public function delete($id)
    {
        $matkul = new MatkulModel();
        $dosen = new DosenModel();

        $matkul->delete($id);

        return redirect()->to(base_url('matkul'));
    }
}
