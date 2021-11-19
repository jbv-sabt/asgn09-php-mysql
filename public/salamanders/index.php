 <?php require_once('../../private/initialize.php');  ?>


<?php

/*
  $salamanders = [
    ['id' => '1', 'position' => '1', 'visible'  => '1', 'type'  => 'Red-legged Salamander'],
    ['id' => '2', 'position' => '2', 'visible'  => '1', 'type'  => 'Pigeon Mountain Salamander'],
    ['id' => '3', 'position' => '3', 'visible'  => '1', 'type'  => 'ZigZag Salamander'],
    ['id' => '4', 'position' => '4', 'visible'  => '1', 'type'  => 'Slimy Salamander'],
  ];
  */
    ?>
    




<?php $page_title = 'Salamanders'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id = "content">
    <div class="pages listing">
      <h1> Salamanders</h1>

      <div class ="actions">
        <a class= "action" href="<?= url_for('/salamanders/new.php')?>">Create salamander</a>
      </div>

      <table class="list"
        <tr>
          <th>ID</th>
          <th>Position</th>
          <th>Visible</th>
          <th>Type</th>
          <th colspan = "3">Actions</th>
          
        </tr>

        <?php while($salamanders = mysqli_fetch_assoc($salamander_set)) { ?>
          <tr>
            <td><?php echo h($salamander['id']); ?></td>
            <td><?php echo h($salamander['position']); ?></td>
            <td><?php echo $salamander['visible'] == 1 ? 'true' : 'false'; ?></td>
            <td><?php echo h($salamander['type']); ?></td>
            <td><a class ="action" href="<?= url_for('salamanders/show.php?type=' .  h(u($salamander['type'])). '&id=' .h(u($salamander['id']))); ?>">
              View</a></td>
            <td><a class="action" href="<?= url_for('salamanders/edit.php?type=' .  h(u($salamander['type'])). '&id=' .h(u($salamander['id']))); ?>">Edit</a></td>
            <td><a class ="action" href="">Delete</a></td>
        </tr>     
        } ?>
        </table>
    </div>
  </div>

  <?php include(SHARED_PATH. '/salamanderfooter.php');?>