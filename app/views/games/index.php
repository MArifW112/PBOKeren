<h2>Games</h2>

<a href="<?php echo URL; ?>/games/input" class="btn">Tambah Game</a>

<table>
      <tr>
            <th>NO</th>
            <th>JENIS GAME</th>
            <th>NAMA GAME</th>
            <th>DESKRIPSI</th>
            <th>TINGKAT KESULITAN</th>
            <th>RATING</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['jenis_game']; ?></td>
                  <td><?php echo $row['nama_game']; ?></td>
                  <td><?php echo $row['deskripsi']; ?></td>
                  <td><?php echo $row['tingkat_kesulitan']; ?></td>
                  <td><?php echo $row['rating']; ?></td>
                  <td><a href="<?php echo URL; ?>/games/edit/<?php echo $row['id_games']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/games/delete/<?php echo $row['id_games']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>