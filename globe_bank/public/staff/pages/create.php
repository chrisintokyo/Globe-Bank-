<?php

require_once('../../../private/initialize.php');
if(is_post_request()) {
// Handle form values sent by new.php
$subject = [];
$subject['menu_name'] = $_POST['menu_name'] ?? '';
$subject ['position'] = $_POST['position'] ?? '';
$subject ['visible'] = $_POST['visible'] ?? '';


echo "Form parameters<br />";
echo "Menu name: " . $menu_name . "<br />";
echo "Position: " . $position . "<br />";
echo "Visible: " . $visible . "<br />";
$result = insert_subject($subject);
$new_id = mysqli_insert_id($id);

} else {
    redirect_to(url_for('/staff/pages/new.php'));
}
?>
