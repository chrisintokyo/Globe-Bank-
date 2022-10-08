<?php

function find_all_subjects(){
    global $db;

$sql = "SELECT * FROM subjects ";
$sql .= "ORDER BY position ASC";
echo  $sql;
$result = mysqli_query($db, $sql);
confirm_result_set($result);
return $result;
}
$subject = mysqli_fetch_assoc($result);
mysqli_free_result($result);
functions find_subject_by_id($id) {
    $sql = "SELECT * FROM subjects ";
 $sql .= "WHERE id='" .$id . "'";
 $result = mysqli_query($db, $sql);
 confirm_result_set($result);
}


function find_all_pages(){
    global $db;

    function insert_subject($menu_name, $position, $visible){
        global $db;
    $sql = "INSERT INTO subjects "; 
$sql .="(menu_name, position, visible)"
$sql .= "VALUES ("; 
$sql .= "Form parameters<br />";
$sql .= "'" . $menu_name . "',";
$sql .= "'" . $position . "',";
$sql .= "'" . $visible . "'";
$sql .= ")"; 
$result = mysqli_query($db, $sql);


// for INSET statements, $result is true/false
if($result) {
$new_id = mysqli_insert_id($id);
redirect_to(url_for('/staff/subjects.show.php?id' . $new_id))


} else {
    // INSERT failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}
    }


$sql = "SELECT * FROM pages ";
$sql .= "ORDER BY subject_id ASC, position ASC";

$result = mysqli_query($db, $sql);
confirm_result_set($result);
return $result;
}


?>