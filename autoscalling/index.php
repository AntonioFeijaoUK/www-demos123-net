<?php
  $bg = array('bg01.jpg', 'bg02.jpg', 'bg03.jpg', 'bg04.jpg', 'bg05.jpg', 'bg06.jpg', 'bg07.jpg', 'bg08.jpg', 'bg09.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<?php
	# Get the instance ID from meta-data and store it in the $instance_id variable
  	$url = "http://169.254.169.254/latest/meta-data/instance-id";
  	$instance_id = file_get_contents($url);
	
	# Get the instance public hostname from metadata and store it in the $pubhostname variable
  	$url = "http://169.254.169.254/latest/meta-data/public-hostname";
  	$pubhostname = file_get_contents($url);
	
	# Get the instance public IPv4 address from metadata and store it in the $pubipv4 variable
  	$url = "http://169.254.169.254/latest/meta-data/public-ipv4";
  	$pubipv4 = file_get_contents($url);
	
	# Get the instance type from metadata and store it in the $type variable
  	$url = "http://169.254.169.254/latest/meta-data/instance-type";
  	$type = file_get_contents($url);
	
	# Get the instance's availability zone from metadata and store it in the $zone variable
  	$url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
  	$zone = file_get_contents($url);
  
  	# Print the data
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Amazon EC2 instance</title>


<style>

body {
	background: url(https://raw.githubusercontent.com/feijaouk/demos123.net/master/autoscalling/images/<?php echo $selectedBg; ?>) no-repeat;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
	margin:0;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>

</head>


<body>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#Autoscalling">News</a>
  <a href="#contact">Contact</a>
</div>

<div class="main">
  <h1>Demos123.net</h1>
  <h2>Autoscalling demo (v0.1)</h2>
  
  

  <center>
  	<br/>
	<br/>
	<h1>Instance ID: </h1>		<h2><?php echo $instance_id; ?></h2>
	<h1>Public Hostname: </h1>	<h2><?php echo $pubhostname; ?></h2>
	<h1>Public IP Address: </h1><h2><?php echo $pubipv4; ?></h2>
	<h1>Instance Type: </h1>	<h2><?php echo $type; ?></h2>				
	<h1>Zone: </h1>				<h2><?php echo $zone; ?></h2>
		
  </center>

  
</div>

</body>
</html>
