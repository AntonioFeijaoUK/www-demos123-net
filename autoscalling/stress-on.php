<?php
	# Get the instance ID from meta-data and store it in the $instance_id variable
  	$url = "http://169.254.169.254/latest/meta-data/instance-id";
  	$instance_id = file_get_contents($url);
		
	# Get the instance's availability zone from metadata and store it in the $zone variable
  	$url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
  	$zone = file_get_contents($url);
  
	## DANGER - test zone
	$start_stress = trim(shell_exec("sudo stress --cpu 4 --io 3 --vm 2 --vm-bytes 256M --timeout 3600s & /; uptime"));
	$cpu_usage = trim(shell_exec("iostat -xtc 5 1"));
	$top10_process = trim(shell_exec("ps -eo pcpu,pid,user,args | sort -k 1 -r | head -10"));
  
  	# Print the data
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Start Stress test</title>


<style>
body {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: right top;
  background-size: 100% 100%;
  height:100%;
  background-color: WhiteSmoke;
}

h1 {
    color: DodgerBlue;
    text-align: left;
}

h2 {
    color: green;
    text-align: left;
}
	
p {
    font-family: verdana;
    font-size: 20px;
    text-align: left;
}	

.main {
  padding: 16px;
  margin-top: 30px;
  margin-left:50px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>

</head>
<body>

<div class="main" align="left">
  <h1>Demos123.net</h1>
  <h2>Auto Scalling demo and Elastic load balancer demo</h2>
  
  <br/>
  <br/>
  <h1 style="display: inline">Instance ID: </h1>	<h2 style="display: inline"><?php echo $instance_id; ?></h2><br>
  <h1 style="display: inline">Zone: </h1>		<h2 style="display: inline"><?php echo $zone;        ?></h2><br>

<h2>Danger zone</h2>

<p>enable stress test as requested</p>
<pre>
  <?php echo $cpu_usage; ?>
  <?php echo $top10_process; ?>
</pre>

</div>

</body>
</html>
