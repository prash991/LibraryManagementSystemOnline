
<?php
	include("../dbConfig.php");

	$uid = $_SESSION['uid'];

	$query = mysql_query("Select firstName,lastName,username,mobile,email,pic From members Where id = '$uid'");
	$result = mysql_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
	<head>
	
			<style>
		body {
	
  
    background-image: url("https://abovethelaw.com/wp-content/uploads/2014/06/technology-todays-tech.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom;

    background-repeat: no-repeat;
    background-size: 1400px 500px;
}
</style>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../../css/title.css">
		<link rel="stylesheet" type="text/css" href="../../css/viewProfile.css">
	</head>
	<body>
		<div class="title">View Profile</div>
		<div class="infoContainer">
			<div class="userPic">
				<img src="pic/<?php print $result['pic']; ?>" alt="<?php echo ucfirst($result['firstName'])." ".ucfirst($result['lastName'])." Image"; ?>">
			</div>
			<div class="userName">
				<?php echo ucfirst($result['firstName'])." ".ucfirst($result['lastName']); ?>
			</div>
			<div class="info">
				<hr>
				<div class="label">Id</div>
				<div class="details"><?php echo $uid; ?></div>
				<hr>
				<div class="label">Username</div>
				<div class="details"><?php echo ucfirst($result['username']); ?></div>
				<hr>
				<div class="label">Mobile</div>
				<div class="details"><?php echo $result['mobile']; ?></div>
				<hr>
				<div class="label">Email</div>
				<div class="details"><?php echo ucfirst($result['email']); ?></div>
				<hr>
			</div>
		</div>
	</body>
</html>