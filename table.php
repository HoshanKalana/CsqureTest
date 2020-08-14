<!-- PHP Code-->
<?php

include('DBconnect.php');

 if(isset($_POST['searchage'])){
	
		$valuesearch = $_POST['age'];
		$query = "SELECT * FROM user WHERE Age LIKE '%$valuesearch%'";
		$result =mysqli_query($conn,$query);

 	}else {
	$query="SELECT * FROM user";
	$result =mysqli_query($conn,$query);
 	}

 if(isset($_POST['searchname'])){
	
	$valuesearch = $_POST['uname'];
	$query = "SELECT * FROM user WHERE UserName LIKE '%$valuesearch%'";
	$result =mysqli_query($conn,$query);

 }else {
	$query="SELECT * FROM user";
	$result =mysqli_query($conn,$query);
 }
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Table</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="row m-5">
				<div class="col-md-6 justify-content-center">
						<form class="form-inline align-middle justify-content-center" method='POST'>
						<input class="form-control mr-sm-2" type="search" name="uname" placeholder="Search by Name"
								aria-label="Search" required>
							<button class="btn btn-primary my-2 my-sm-0" name="searchname" type="submit">Search</button>
						</form>
					</div>
					<div class="col-md-6 justify-content-center">
						<form class="form-inline align-middle justify-content-center" method='POST'>
						<input class="form-control mr-sm-2" type="search" name="age" placeholder="Search by Age"
								aria-label="Search" required>
							<button class="btn btn-primary my-2 my-sm-0" name="searchage" type="submit">Search</button>
						</form>
					</div>
				</div>
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name</th>
									<th class="cell100 column2">Address</th>
									<th class="cell100 column3">Gender</th>
									<th class="cell100 column4">BOB</th>
									<th class="cell100 column5">AGE</th>
									<th class="cell100 column6">Phone No</th>
								</tr>
							</thead>
						</table>
					</div>
					<?php 
					
					while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

						$uname = $row['UserName'];
						$uadress = $row['Address'];
						$ugender = $row['Gender'];
						$udob = $row['DOB'];
						$uage = $row['Age'];
						$uphoneno = $row['PhoneNo'];
						$uemailid = $row['Email_ID'];
						
					
					?>
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $uname ?></td>
									<td class="cell100 column2"><?php echo $uadress ?></td>
									<td class="cell100 column3"><?php echo $ugender ?></td>
									<td class="cell100 column4"><?php echo $udob ?></td>
									<td class="cell100 column5"><?php echo  $uage?></td>
									<td class="cell100 column6"><?php echo  $uphoneno?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php 
					}
					?>
				</div>

			</div>
		</div>
	</div>


	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function () {
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function () {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>