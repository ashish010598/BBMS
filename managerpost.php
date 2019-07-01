<!DOCTYPE html>
<html>
	<head>
		<title>Success</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		 <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
		 <link rel="stylesheet" href="css/style.css">
		 <link rel="stylesheet" href="css/table.css">
	</head>
	<body>	
		<?php
		function Connect()
		{
		 $dbhost = "localhost";
		 $dbuser = "root";
		 $dbpass = "ashish";
		 $dbname = "bbms";
		 
		 // Create connection
		 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
		 
		 return $conn;
		}
		 
		$conn    = Connect();
		$fname    = $conn->real_escape_string($_POST['fname']);
		$lname    = $conn->real_escape_string($_POST['lname']);
		$bbnum    = $conn->real_escape_string($_POST['bbnum']);
		$bname    = $conn->real_escape_string($_POST['bname']);
		$city    = $conn->real_escape_string($_POST['city']);
		$email   = $conn->real_escape_string($_POST['email']);
		$phone   = $conn->real_escape_string($_POST['phone']);
		$password = $conn->real_escape_string($_POST['password']);
		$security = $conn->real_escape_string($_POST['security']);
		$securityans = $conn->real_escape_string($_POST['securityans']);
		$query   = "INSERT into blood_bank_manager (fname,lname,bno,email,phno,password,bname,city,security,securityans) VALUES('" . $fname . "','" . $lname . "','" . $bbnum . "','" . $email . "','" . $phone . "','" . $password . "','" . $bname . "','" . $city . "','" . $security . "','" . $securityans . "')";
		$success = $conn->query($query);
		 
		if (!$success) {
		    die("Couldn't enter data: ".$conn->error);
		 
		}
		 
		 ?>
		 <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-5">
              <ul class="social list-unstyled">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                  <li style="color:cyan;"><?php
                session_start();
                $_SESSION['email']=$email;
              echo "Hi!  " . $email .""; 
              ?></li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-7 text-right">
              <p class="mb-0">
                <a href="mlogout.php" class="cta-btn" style="font-size: 15px;">LOGOUT</a></p>
            </div>
          </div>
        </div>
      </div>
		<div class="container">
			<header class="jumbotron">
				<div class="container">
					<h1 style="text-align: center;"><i class="fa fa-tint"></i><?php echo  " $bname";  ?></h1>
				</div>
			</header>	
		</div>
		<h1 style="text-align: center">DONOR RECORD</h1>
		<?php 
			 $result = mysqli_query($conn,"SELECT donor.name,donor.address,donor.phno,donor.email,donor.age,donor.sex,donor.blood_group,donor.id,donor.empEmail,donor.ddate,receptionist.bno FROM donor INNER JOIN receptionist ON donor.empEmail = receptionist.email  WHERE bno = $bbnum");;
			
	
			echo "<table border='1'>
				<tr>
					<th>DATE</th>
					<th>NAME</th>
					<th>ADDRESS</th>
					<th>MOBILE</th>
					<th>EMAIL</th>
					<th>AGE</th>
					<th>SEX</th>
					<th>BLOOD GROUP</th>
					<th>ID</th>
					<th>REGISTERED BY</th>
				</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>" .$row['ddate'] . "</td>";
				echo "<td>" .$row['name'] . "</td>";
				echo "<td>" .$row['address'] . "</td>";
				echo "<td>" .$row['phno'] . "</td>";
				echo "<td>" .$row['email'] . "</td>";
				echo "<td>" .$row['age'] . "</td>";
				echo "<td>" .$row['sex'] . "</td>";
				echo "<td>" .$row['blood_group'] . "</td>";
				echo "<td>" .$row['id'] . "</td>";
				echo "<td>" .$row['empEmail'] . "</td>";
				echo "<tr>";
			}
			echo "</table>"	;
			?>
			<br>
			<br>
			<h1 style="text-align: center">BLOOD RECORD</h1> 
			<?php
		    $query = mysqli_query($conn,"SELECT * FROM blood_bank WHERE bno = '$bbnum'");
			
			?>

			<table border='1' id="t1">
			<?php	
			echo "<tr>
					<th>BLOOD GROUP</th>
					<th>QUANTITY</th>
				</tr>";
			$row = mysqli_fetch_array($query);
				echo "<tr>";
				echo "<td>A+</td>";
				echo "<td>" .$row['Ap'] . "</td>";
				echo "<tr>";
				echo "<td>A-</td>";
				echo "<td>" .$row['An'] . "</td>";
				echo "<tr>";
				echo "<td>B+</td>";
				echo "<td>" .$row['Bp'] . "</td>";
				echo "<tr>";
				echo "<td>B-</td>";
				echo "<td>" .$row['Bn'] . "</td>";
				echo "<tr>";
				echo "<td>O+</td>";
				echo "<td>" .$row['Op'] . "</td>";
				echo "<tr>";
				echo "<td>O-</td>";
				echo "<td>" .$row['Om'] . "</td>";
				echo "<tr>";
				echo "<td>AB+</td>";
				echo "<td>" .$row['ABp'] . "</td>";
				echo "<tr>";
				echo "<td>AB-</td>";
				echo "<td>" .$row['ABn'] . "</td>";
				echo "<tr>";
	
			echo "</table>"	
			?>
			<h1 style="text-align: center">PENDING ORDERS<span style= "font-size:20px; color: red;">(*City: <?php echo "$city"?>)</span></h1>
			<?php
		    $query = mysqli_query($conn,"SELECT * FROM blood_bank_manager INNER JOIN hospital INNER JOIN ordersblood ON blood_bank_manager.city = hospital.address AND ordersblood.hemail = hospital.email WHERE blood_bank_manager.city='$city'");
			
	
			echo "<table border='1'>
				<tr>
					<th>DATE</th>
					<th>HOSPITAL NAME</th>
					<th>HOSPITAL EMAIL</th>
					<th>ORDER ID</th>
					<th>BLOOD GROUP</th>
					<th>QUANTITY</th>
					<th>CLICK TO CONFIRM</TH>
				</tr>";
			while($row = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>" .$row['odate'] . "</td>";
				echo "<td>" .$row['name'] . "</td>";
				echo "<td>" .$row['hemail'] . "</td>";
				echo "<td>" .$row['oid'] . "</td>";
				echo "<td>" .$row['blood_type'] . "</td>";
				echo "<td>" .$row['quantity'] . "</td>";
				echo "<td><a href='delete1.php?id=".$row['oid']."'>"?> <i class="fa fa-check-circle"> CONFIRM </i> <?php "</a></td>";
				echo "<tr>";
			}
			echo "</table>"	
		?>
		<br>
		<br>

		<?php
		$query->free();
		mysqli_close($conn);
		 ?>
 	</body>
</html>
