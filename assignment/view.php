<?php
include './db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Resume Data </title>
	<link rel="stylesheet" type="text/css" href="./css/semantic.min.css">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/semantic.min.js"></script>
</head>
<style type="text/css">
	input{
		width: 2em;
	}
</style>
<body>
<div class="ui container"><br><br>	

<div class="ui center aligned raised inverted blue segment">
	<h1 class="ui header">
	View all Resume Data </h1>


</div>
<a href="./index.php" class="ui teal button ">back</a>
<form action="#" method="post" class="ui form">
<label>EmailID</label> <input type="email" name="email" style="width:30em;" placeholder="enter email ID............">
<input type="submit" class="ui button" name="sub"value="Search" style="width:10em;">
</form>
<?php
		if(isset($_POST['sub'])){
		$sql="select * from assignment where email='".$_POST['email']."'";
					$res=$con->query($sql);

					echo "<table class='ui table' class='ui center aligned table '>";
					echo "<thead>";
					echo "<th>S.No.</th>";
					echo "<th>Email</th>";
					echo "<th>Mobile No</th>";
					echo "<th>Resume</th>";
					echo "<th>Date and Time</th>";
					echo "</thead>";
					$s=0;

					if(mysqli_num_rows($res) >0){
									
						while ($row=$res->fetch_assoc()) {
						echo "<tr><td>".$s."</td><td>".$row['email']."</td><td>".$row['mobile']."</td>

							<td>
								<a href='".$row['resume']."'><button class='ui blue button'>Download</button></a>
							</td>
							<td>
							".$row['date']."
							</td>
						</tr>";
					$s+=1;
					}
					echo "</table>";
		?>

</div>
</body>
</html>
<?php
}
			else{
				echo "<h1 class='ui center aligned red header' style='margin-top:3em;'> ".$_POST['email']."Not Found</h1>";
				}
		}
					
					
			?>
