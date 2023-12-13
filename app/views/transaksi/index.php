<h2>Transaksi</h2>

<a href="<?php echo URL; ?>/transaksip/input" class="btn">Input Transaksi</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA PEMBELI</th>
            <th>ALAMAT PEMBELI</th>
            <th>STATUS PEMBAYARAN</th>
            <th>TANGGAL PESAN</th>
            <th>TRANSFER KE</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama_pembeli']; ?></td>
                <td><?php echo $row['alamat_pembeli']; ?></td>
                <td><?php echo $row['status_pembayaran']; ?></td>
                <td><?php echo $row['tanggal_pesan']; ?></td>
                <td><?php echo $row['transfer_ke']; ?></td>
                <td><a href="<?php echo URL; ?>/transaksip/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                <td><a href="<?php echo URL; ?>/transaksip/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>