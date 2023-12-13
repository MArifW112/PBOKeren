<h2>Input transaksi</h2>

<form action="<?php echo URL; ?>/transaksip/save" method="post">
    <table>
        <tr>
            <td>NAMA PEMBELI</td>
            <td><input type="nama_pembeli" name="nama_pembeli" required></td>
        </tr>
        <tr>
            <td>ALAMAT PEMBELI</td>
            <td><input type="alamat_pembeli" name="alamat_pembeli" required></td>
        </tr>
        <tr>
            <td>STATUS PEMBAYARAN</td>
            <td><input type="status_pembayaran" name="status_pembayaran" required></td>
        </tr>
        <tr>
            <td>TANGGAL PESAN</td>
            <td><input type="date" name="tanggal_pesan" required></td>
        </tr>
        <tr>
            <td>TRANSFER KE</td>
            <td><input type="transfer_ke" name="transfer_ke" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>