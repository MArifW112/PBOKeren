<?php

namespace App\Models;

use App\Core\Model;

class Lesson extends Model
{

    public function show()
    {
            $query = "SELECT * FROM tb_lesson";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
    }

    public function save()
    {
            $id_lesson = $_POST['id_lesson'];
            $judul = $_POST['judul'];
            $kategori= $_POST['kategori'];
            $deskripsi = $_POST['deskripsi'];
            $tanggal_upload = $_POST['tanggal_upload'];

            $sql = "INSERT INTO tb_lesson
            SET id_lesson=:id_lesson, judul=:judul, kategori=:kategori, deskripsi=:deskripsi, tanggal_upload=:tanggal_upload";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_lesson", $id_lesson);
            $stmt->bindParam(":judul", $judul);
            $stmt->bindParam(":kategori", $kategori);
            $stmt->bindParam(":deskripsi", $deskripsi);
            $stmt->bindParam(":tanggal_upload", $tanggal_upload);

            $stmt->execute();
    }

    public function edit($id)
    {
            $query = "SELECT * FROM tb_lesson WHERE id_lesson=:id_lesson";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_lesson", $id);
            $stmt->execute();

            return $this->select($stmt);
    }

    public function update()
    {
        $id_lesson = $_POST['id'];
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal_upload = $_POST['tanggal_upload'];
    
        $sql = "UPDATE tb_lesson
                SET judul=:judul, kategori=:kategori, deskripsi=:deskripsi, tanggal_upload=:tanggal_upload
                WHERE id_lesson=:id_lesson";
    
        $stmt = $this->db->prepare($sql);
    
        $stmt->bindParam(":id_lesson", $id_lesson);
        $stmt->bindParam(":judul", $judul);
        $stmt->bindParam(":kategori", $kategori);
        $stmt->bindParam(":deskripsi", $deskripsi);
        $stmt->bindParam(":tanggal_upload", $tanggal_upload);
    
        $stmt->execute();
    }
    
    public function delete($id)
    {
            $sql = "DELETE FROM tb_lesson WHERE id_lesson=:id_lesson";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_lesson", $id);
            $stmt->execute();
    }
}
