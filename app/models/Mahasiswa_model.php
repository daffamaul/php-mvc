<?php

class Mahasiswa_model
{

    private $table = "mahasiswa",
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMhs()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMhsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahMahasiswa($data)
    {
        $this->db->query("INSERT INTO mahasiswa VALUES 
                          (NULL, :nama, :nim, :jurusan, :email)  
                        ");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusMahasiswa($id)
    {
        $this->db->query("DELETE FROM mahasiswa WHERE id = :id");
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
