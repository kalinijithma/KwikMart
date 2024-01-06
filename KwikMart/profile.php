<?php session_start(); ?>

<?php
	if(!isset($_SESSION['user_id'])){
		header('Location: logging.php');
	}
?>


<!-- Header Section -->
<?php
@include 'header.php';
?>




<!-- Footer Section -->
<?php
@include 'footer.php';
?>
