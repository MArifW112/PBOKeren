<?php

namespace App\Models;

use App\Core\Model;

class Game extends Model
{

    public function show()
    {
            $query = "SELECT * FROM tb_games";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
    }

    public function save()
    {
            $id_games = $_POST['id_games'];
            $jenis_game = $_POST['jenis_game'];
            $nama_game = $_POST['nama_game'];
            $deskripsi = $_POST['deskripsi'];
            $password_game = $_POST['password_game'];

            $sql = "INSERT INTO tb_games
            SET id_games=:id_games, jenis_game=:jenis_game, nama_game=:nama_game, deskripsi=:deskripsi, password_game=:password_game";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_games", $email);
            $stmt->bindParam(":jenis_game", $jenis_game);
            $stmt->bindParam(":nama_game", $nama_game);
            $stmt->bindParam(":deskripsi", $deskripsi);
            $stmt->bindParam(":password_game", $password_game);

            $stmt->execute();
    }

    public function edit($id)
    {
            $query = "SELECT * FROM tb_games WHERE id_games=:id_game";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_game", $id);
            $stmt->execute();

            return $this->select($stmt);
    }

    public function update()
    {
            $id_games = $_POST['id'];
            $jenis_game = $_POST['jenis_game'];
            $nama_game = $_POST['nama_game'];
            $deskripsi = $_POST['deskripsi'];
            $password_game = $_POST['password_game'];

            if (!empty($password)) {
                $sql = "UPDATE tb_games
                SET id_games=:id_games, jenis_game=:jenis_game, nama_game=:nama_game, deskripsi=:deskripsi, password_game=:password_game
                WHERE id_games=:id_games";
            } else {
                $sql = "UPDATE tb_games
                SET id_games=:id_games, jenis_game=:jenis_game, nama_game=:nama_game, deskripsi=:deskripsi, password_game=:password_game
                WHERE id_games=:id_games";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_games", $id_games);
            $stmt->bindParam(":jenis_game", $jenis_game);
            $stmt->bindParam(":nama_game", $nama_game);
            $stmt->bindParam(":deskripsi", $deskripsi);
            $stmt->bindParam(":password_game", $password_game);

            $stmt->execute();
    }

    public function delete($id)
    {
            $sql = "DELETE FROM tb_games WHERE id_games=:id_games";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_games", $id);
            $stmt->execute();
    }
}
