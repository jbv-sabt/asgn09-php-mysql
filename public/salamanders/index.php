 <?php require_once('../../private/initialize.php');  ?>


<?php

$salamander_set = find_all_salamanders();

/* remove this array, now retrieving via db
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
          <th>Name</th>
          <th>Habitat</th>
          <th>Description</th>
          <th colspan = "3">Actions</th>
        </tr>

        <?php while($salamander = mysqli_fetch_assoc($salamander_set)) { ?>
          <tr>
            <td><?php echo h($salamander['id']); ?></td>
            <td><?php echo h($salamander['name']); ?></td>
            <td><?php echo $salamander['habitat']?></td>
            <td><?php echo h($salamander['description']); ?></td>
            <td><a class ="action" href="<?= url_for('salamanders/show.php?name=' .  h(u($salamander['name'])). '&id=' .h(u($salamander['id']))); ?>">
              View</a></td>
            <td><a class="action" href="<?= url_for('salamanders/edit.php?name=' .  h(u($salamander['name'])). '&id=' .h(u($salamander['id']))); ?>">Edit</a></td>
            <td><a class ="action" href="">Delete</a></td>
        </tr>     
        <?php } ?>
        </table>
          <?php mysqli_free_result($salamander_set); ?>
    </div>
    <cite>Thanks to <a href="https://herpsofnc.org/"> Amphibians and Reptiles of NC </a></cite>
  </div>

  <?php include(SHARED_PATH. '/salamanderfooter.php');?>