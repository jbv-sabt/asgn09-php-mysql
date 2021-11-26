<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Salamanders'; ?> 

<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id ="content">
    <h1> Main menu</h1>
    <ul>
        <li><a href="<?= url_for('public/salamanders/index.php'); ?>">Salamanders</a></li>
    </ul>
</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>