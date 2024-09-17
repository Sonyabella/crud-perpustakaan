<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller
{
    public function index()
    {
        $model = new BukuModel();
        $data['bukus'] = $model->findAll();
        echo view('buku/index', $data);
    }

    public function create()
    {
        $data = [];
        echo view('buku/create', $data);
    }

    public function simpanan()
    {
        $model = new BukuModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];
        $model->insert($data);
        return redirect()->to('/buku');
    }

    public function update($BukuID)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($BukuID);
        echo view('buku/update', $data);
    }

    public function edit($BukuID)
    {
        $model = new BukuModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];
        $model->update($BukuID, $data);
        return redirect()->to('/buku');
    }

    public function hapus($BukuID)
    {
        $model = new BukuModel();
        $model->delete($BukuID);
        return redirect()->to('/buku');
    }
}