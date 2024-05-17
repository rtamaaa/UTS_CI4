<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->findAll();

        $judul['title'] = 'Data Pengguna';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('user/index', $data);
        echo view('layout/footer');
    }

    public function create()
    {
        $judul['title'] = 'Tambah Pengguna';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('user/create');
        echo view('layout/footer');
    }

    public function store()
    {
        $model = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role')
        ];

        $model->insert($data);

        return redirect()->to(base_url('user'));
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);

        $judul['title'] = 'Edit Pengguna';
        echo view('layout/header', $judul);
        echo view('layout/lib', $judul);
        echo view('layout/sidebar', $judul);
        echo view('user/edit', $data);
        echo view('layout/footer');
    }

    public function update($id)
    {
        $model = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $this->request->getPost('role')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('user'));
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);

        return redirect()->to(base_url('user'));
    }
}
