<h2>Users</h2>

<a href="<?php echo URL; ?>/users/input" class="btn">Input User</a>

<table>
      <tr>
            <th>NO</th>
            <th>KATEGORI</th>
            <th>JUDUL</th>
            <th>DESKRIPSI</th>
            <th></th>
            <th>EDIT</th>
            <th>HAPUS</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['lesson_id_cat']; ?></td>
                  <td><?php echo $row['lesson_title']; ?></td>
                  <td><?php echo $row['lesson']; ?></td>
                  <td><?php echo $row['lesson_title']; ?></td>
                  <td><?php echo $row['lesson_title']; ?></td>
                  <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>