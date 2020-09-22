<?php
include 'conn.php';
if(isset($_POST['done'])){
	$bname=$_POST['bookName'];
	$aname=$_POST['authName'];
	$sno=$_POST['shelfNo'];
	$q="INSERT INTO `book_details`(`book_name`, `author`, `shelf_no`) VALUES ('$bname', '$aname', '$sno')";
	$query= mysqli_query($conn,$q);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Book maintenance</title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	<div class="col-lg-6 m-auto">
		<form method="post">
			<div class="card">
				<div class="card-header bg-dark">
					<h1 class="text-white text-center">Insert</h1>
				</div>	
				<input type="text" name="bookName" placeholder="Book Name" class="form-control mt-2"><br>
				<input type="text" name="authName" placeholder="Author" class="form-control mt-2"><br>
				<input type="Number" name="shelfNo" placeholder="Shelf Number" min="1" max="50" class="form-control mt-2"><br>
				<button class="btn btn-success mt-2" type="submit "name="done"> Add</button>
			</div>
		</form>
	</div>

</body>
</html>