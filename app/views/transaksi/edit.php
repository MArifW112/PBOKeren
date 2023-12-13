<h2>Edit Transaksi</h2>

<form action="<?php echo URL; ?>/Transaksip/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA PEMBELI</td>
            <td><input type="nama_pembeli" name="nama_pembeli" value="<?php echo $data['row']['nama_pembeli']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT PEMBELI</td>
            <td><input type="alamat pembeli" name="alamat pembeli"></td>
        </tr>
        <tr>
            <td>STATUS PEMBAYARAN</td>
            <td><input type="text" name="status pembayaran" value="<?php echo $data['row']['status_pembayaran']; ?>" required></td>
        </tr>
        <tr>
            <td>TANGGAL PESAN</td>
            <td><input type="tanggal pesan" name="tanggal pesan"></td>
        </tr>
        <tr>
            <td>TRANSFER KE</td>
            <td><input type="transfer ke" name="transfer ke"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>