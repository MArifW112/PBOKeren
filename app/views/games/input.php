<h2>Tambah Game</h2>

<form action="<?php echo URL; ?>/games/save" method="post">
    <table>
    <input type="hidden" name="id_games">
        <tr>
            <td>JENIS GAME</td>
            <td><input type="text" name="jenis_game" required></td>
        </tr>
        <tr>
            <td>NAMA GAME</td>
            <td><input type="text" name="nama_game" required></td>
        </tr>
        <tr>
            <td>DESKRIPSI</td>
            <td><input type="text" name="deskripsi" required></td>
        </tr>
        <tr>
            <td>TINGKAT KESULITAN</td>
            <td><input type="text" name="tingkat_kesulitan" required></td>
        </tr>
        <tr>
            <td>RATING</td>
            <td><input type="text" name="rating" required></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="password_game" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>