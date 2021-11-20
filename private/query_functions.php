<?php
function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    // troubleshooting code commented out
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}
?>