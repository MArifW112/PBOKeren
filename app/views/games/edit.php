<h2>Edit Game</h2>

<form action="<?php echo URL; ?>/games/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_games']; ?>">
    <table>
        <tr>
            <td>JENIS GAME</td>
            <td><input type="text" name="jenis_game" value="<?php echo $data['row']['jenis_game']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA GAME</td>
            <td><input type="text" name="nama_game"></td>
        </tr>
        <tr>
            <td>DESKRIPSI</td>
            <td><input type="text" name="deskripsi" value="<?php echo $data['row']['deskripsi']; ?>" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password_game" value="<?php echo $data['row']['password_game']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>