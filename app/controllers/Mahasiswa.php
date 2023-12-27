<?php

class Mahasiswa extends Controller
{
    public function index()
    {

        $data = [
            "title" => "Mahasiswa",
            "header" => "Mahasiswa",
            "mhs" => $this->model('Mahasiswa_model')->getAllMhs(),
        ];

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {

        $data = [
            "title" => "Mahasiswa",
            "header" => "Mahasiswa",
            "mhs" => $this->model('Mahasiswa_model')->getMhsById($id),
        ];

        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahMahasiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            die();
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            die();
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusMahasiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            die();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            die();
        }
    }
}
