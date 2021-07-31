<?php
$user = "Nidhisha Rao";
?>
<!DOCTYPE html>
<html>
<head> 
	<title> program 6 </title>
	<style type="text/css">
		body{
			background-color: blue;
			color: white;
		}
	</style>
</head>
<body>
<h2> <?php echo '<center>'.$user; ?>,Welcome to Sample PHP Script.</center> </h2>

<?php
print"<h3>This program displays the number of page visits</h2>";
print "<h3> REFRESH PAGE </h3>";
$name="counter.txt";
$file = fopen($name,"r");
$hits = fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
fprintf($file,"%d",$hits[0]);
fclose($file);
print "Total number of views: ".$hits[0];
?>
</body>
</html>