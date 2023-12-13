<h2>Edit Free Lesson</h2>

<form action="<?php echo URL; ?>/lesson/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_lesson']; ?>">
    <table>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="<?php echo $data['row']['judul']; ?>" required></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><input type="text" name="kategori" value="<?php echo $data['row']['kategori']; ?>" required></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" value="<?php echo $data['row']['deskripsi']; ?>" required></td>
        </tr>
        <tr>
            <td>Tanggal Upload</td>
            <td><input type="text" name="tanggal_upload" value="<?php echo $data['row']['tanggal_upload']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>