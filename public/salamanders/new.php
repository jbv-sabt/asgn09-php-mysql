<?php

require_once('../../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('/salamanders/index.php'));
}
?>

<?php $page_title = 'Create salamander'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">

  <a class="back-link" href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

  <div class="salamander new">
    <h1>Create salamander</h1>

    <form action="<?= url_for('/salamanders/create.php'); ?>" method="post">
      <dl>
        <dt>Salamander Type</dt>
        <dd><input type="text" name="type" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Create salamander" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
