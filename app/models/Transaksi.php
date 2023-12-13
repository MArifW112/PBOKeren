<?php

namespace App\Models;

use App\Core\Model;

class Transaksi extends Model
{
    public function show()
    {
        $query = "SELECT * FROM tb_transaksi";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $nama_pembeli = $_POST['nama_pembeli'];
        $alamat_pembeli = $_POST['alamat_pembeli'];
        $status_pembayaran = $_POST['status_pembayaran'];
        $tanggal_pesan = $_POST['tanggal_pesan'];
        $transfer_ke = $_POST['transfer_ke'];

        $sql = "INSERT INTO tb_transaksi
            SET nama_pembeli=:nama_pembeli, alamat_pembeli=:alamat_pembeli, status_pembayaran=:status_pembayaran, tanggal_pesan=:tanggal_pesan, transfer_ke=:transfer_ke";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama_pembeli", $nama_pembeli);
        $stmt->bindParam(":alamat_pembeli", $alamat_pembeli);
        $stmt->bindParam(":status_pembayaran", $status_pembayaran);
        $stmt->bindParam(":tanggal_pesan", $tanggal_pesan);
        $stmt->bindParam(":transfer_ke", $transfer_ke);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_transaksi WHERE id=:id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $id = $_POST['id']; // Assuming you have a form field for id

        $nama_pembeli = $_POST['nama_pembeli'];
        $alamat_pembeli = $_POST['alamat_pembeli'];
        $status_pembayaran = $_POST['status_pembayaran'];
        $tanggal_pesan = $_POST['tanggal_pesan'];
        $transfer_ke = $_POST['transfer_ke'];

        $sql = "UPDATE tb_transaksi
            SET nama_pembeli=:nama_pembeli, alamat_pembeli=:alamat_pembeli, status_pembayaran=:status_pembayaran, tanggal_pesan=:tanggal_pesan, transfer_ke=:transfer_ke
            WHERE id=:id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nama_pembeli", $nama_pembeli);
        $stmt->bindParam(":alamat_pembeli", $alamat_pembeli);
        $stmt->bindParam(":status_pembayaran", $status_pembayaran);
        $stmt->bindParam(":tanggal_pesan", $tanggal_pesan);
        $stmt->bindParam(":transfer_ke", $transfer_ke);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_transaksi WHERE id=:id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
