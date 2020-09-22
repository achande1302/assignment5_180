
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<h1 class="text-dark text-center">Display Table</h1><br>
			<table class="table table-striped table-hover table-bordered">
				<tr>
					<th>ID</th>
					<th>Book name</th>
					<th>Author</th>
					<th>Shelf number</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>
				<?php
				include 'conn.php';
					$q="SELECT FROM `book_details`";
					$query= mysqli_query($conn,$q);
					while($res=mysqli_fetch_array($query)){

				?>
				<tr>
					<th><?php echo $res['book_id'];?></th>
					<th><?php echo $res['book_name'];?></th>
					<th><?php echo $res['author'];?></th>
					<th><?php echo $res['shelf_no'];?></th>
					<th><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['book_id'];?>" class="text-white"></a></button></th>
					<th><button class="btn-danger btn"><a href="update.php?id=<?php echo $res['book_id'];?>" class="text-white"></a></button></th>
				</tr>
			<?php }s ?>
			</table>
		</div>
		
	</div>
</body>
</html>