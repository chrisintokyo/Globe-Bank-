<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}


function update_subjects($subject) {
  global $db;

  $sql = "INSERT INTO subjects ";
  $sql .= "(menu_name, position, visible) ";
  $sql .=VALUES (";
  $sql .= "'" . $subject['menu_name'] . "', ";
  $sql .= "'" . $subject['position'] . "', ";
  $sql .= "'" . $subject['visible'] . "', ";
$sql .= "WHERE id='" . $id . "' ";
$sql .= "LIMIT 1";

$result = mysqli_query()

// For UPDATE statements, $result is true/false

if($result) {
  return true;
  return true;
} else { 
  //UPDATE failed
  echo mysqli_error($db);
  exit;
}
}

function delete_subject($id) {
  global $db;
  $sql = "DELETE FROM subjects ";
$sql .= "WHERE id='" . $id . "' ";
$sql .= "LIMIT 1";

$result = mysqli_query($db, $sql);

if($result) {
    redirect_to(url_for('/staff/subjects/index.php'))
} else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;

}

?>
