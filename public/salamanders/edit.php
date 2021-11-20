<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}
$id = $_GET['id'];
$type = '';
$position = '';
$visible = '';

if(is_post_request()) {

  // Handle form values sent by new.php

  $type = $_POST['name'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "Form parameters<br />";
  echo "Name: " . $name . "<br />";
  echo "Position: " . $position . "<br />";
  echo "Visible: " . $visible . "<br />";
}

?>

<?php $page_title = 'Edit salamander'; ?>
<?php include(SHARED_PATH . '/salamanderheader.php'); ?>

<div id="content">

  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamander edit">
    <h1>Edit salamander</h1>

    <form action="<?= url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value="<?php echo h($name); ?>"/></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1"<?php if($position == "1") { echo " selected"; } ?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1"<?php if($visible == "1") { echo " checked"; } ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit salamander" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderfooter.php'); ?>
