<a class="btn btn-primary" href="index.php?link=add_game">Add Game</a>

<h2>Section title</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Type</th>
              <th scope="col">Price</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i=0;
              $db_yourgamestore = "SELECT id_game, name_game, name_type , price_game FROM tb_game INNER JOIN tb_type ON tb_game.id_type = tb_type.id_type;";
              $query = mysqli_query($con,$db_yourgamestore);
              while($result=mysqli_fetch_array($query))
              {
            ?>
            <tr>
              <td><?php echo $result ['id_game']; ?></td>
              <td><?php echo $result ['name_game']; ?></td>
              <td><?php echo $result ['name_type']; ?></td>
              <td><?php echo $result ['price_game']; ?></td>
              <td><a class="btn btn-sm btn-outline-warning" href="index.php?link=edit_game&id_game=<?php echo $result['id_game'];?>">แก้ไข</a></td>
              <td><a class="btn btn-sm btn-outline-danger" href="index.php?link=delete_game&Action=Delete&id_game=<?php echo $result['id_game'];?>">ลบ</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>