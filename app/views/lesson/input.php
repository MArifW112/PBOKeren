<h2>Upload Free Lesson</h2>

<form action="<?php echo URL; ?>/lesson/save" method="post">
    <table>
    <input type="hidden" name="id_lesson">
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" required></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><input type="text" name="kategori" required></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" required></td>
        </tr>
        <tr>
            <td>Tanggal Upload</td>
            <td><input type="text" name="tanggal_upload" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>