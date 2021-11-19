<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $type = $_POST['type'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "Form parameters<br />";
  echo "Type: " . $type. "<br />";
  echo "Position: " . $position . "<br />";
  echo "Visible: " . $visible . "<br />";
} else {
  redirect_to(url_for('/salamanders/new.php'));
}

?>
