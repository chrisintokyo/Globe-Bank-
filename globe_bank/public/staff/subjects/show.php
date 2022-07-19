

<?php require_once('../../../private/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? '1';
echo h($id);
?>
<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

<a class="back-link" href="<?php echo url_for('/staff/subjects/index.php');
?>&laquo; Back to List</a>

<div class="subject show">

Subject ID: <?php echo h($id); ?>


<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br />
<a href="show.php?name=<?php echo u('Widgets&More'); ?>">Link</a><br />
<a href="show.php?name=<?php echo u(' !#*?'); ?>">Link</a><br />