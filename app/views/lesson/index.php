<h2>Free Lesson</h2>

<a href="<?php echo URL; ?>/lesson/input" class="btn">Upload Free Lesson</a>

<table>
      <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>KATEGORI</th>
            <th>DESKRIPSI</th>
            <th>TANGGAL UPLOAD</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['judul']; ?></td>
                  <td><?php echo $row['kategori']; ?></td>
                  <td><?php echo $row['deskripsi']; ?></td>
                  <td><?php echo $row['tanggal_upload']; ?></td>
                  <td><a href="<?php echo URL; ?>/lesson/edit/<?php echo $row['id_lesson']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/lesson/delete/<?php echo $row['id_lesson']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>