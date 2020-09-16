<?php

class Student_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getOne($id) {
        $this->db->query("SELECT * FROM ".$this->table." WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultOne();
    }

    public function insert($data) {
        $query = "INSERT INTO ".$this->table." VALUES ('', :nama, :nim, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();
        return $this->db->dataCount();
    }

    public function update($data) {
        $query = "UPDATE ".$this->table." SET
                    nama = :nama,
                    nim = :nim,
                    email = :email,
                    jurusan = :jurusan
                 WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->dataCount();
    }

    public function delete($id) {
        $query = "DELETE FROM ".$this->table." WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->dataCount();
    }
}