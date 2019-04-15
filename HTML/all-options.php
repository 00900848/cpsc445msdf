<?php
include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>My Website Guide :: Personal Website :: Virtual Resume</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
	function goToNextPage() {
		var url = document.getElementById('list').value;
		if (url != 'none') {
			window.location = url;
		}
	}
</script>
</head>
	<body>
	<a name="#top"></a>
	<div class="wrapper">
	<header>My Website Guide</header>
	<br>
	<nav><a href="index.html">Home</a></nav>
		<main>
			<p>Here are all of our options:</p>
			<br>
		</main>
		<h2>Managed Web Services</h2>
		<section class="flex-container">
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=01";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
            <?php 
                $query = "SELECT * FROM WebServices where w_id=02";
                $result = $conn->query($query);
                if($row=$result->fetch_assoc()) {
                    echo "<h3>Option 2</h3>";
                    echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
                    echo "<ul><li>". $row['feature1'] ."</li>";
                    echo "<li>". $row['feature2'] ."</li>";
                    echo "<li>". $row['feature3'] ."</li>";
                    echo "</ul>";
        		}
        	?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=03";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=04";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=05";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=06";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=07";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=08";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=09";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=10";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=11";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=12";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=13";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=14";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=15";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=16";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=17";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=18";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=19";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=20";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=21";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=22";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=23";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=24";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=25";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=26";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=33";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=34";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 1</h3>";
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		</section>
		<h2>Unmanaged Web Services</h2>
		<section class="flex-container">
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=28";
    			$result = $conn->query($query);
        		if($row=$result->fetch_assoc()) {
                	echo "<h3>Option 4</h3>";
                	echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
                	echo "<ul><li>". $row['feature1'] ."</li>";
                	echo "<li>". $row['feature2'] ."</li>";
                	echo "</ul>";
    			}
    		?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=30";
    			$result = $conn->query($query);
        		if($row=$result->fetch_assoc()) {
               		echo "<h3>Option 5</h3>";
                	echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
                	echo "<ul><li>". $row['feature1'] ."</li>";
                	echo "<li>". $row['feature2'] ."</li>";
                	echo "</ul>";
    			}
			?>
		</div>
		<div class="option">
			<?php 
				$query = "SELECT * FROM WebServices where w_id=32";
    			$result = $conn->query($query);
        		if($row=$result->fetch_assoc()) {
               		echo "<h3>Option 6</h3>";
                	echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
                	echo "<ul><li>". $row['feature1'] ."</li>";
                	echo "<li>". $row['feature2'] ."</li>";
                	echo "</ul>";
    			}
			?>	
		</div>
		</section>
		<br>
		<footer>
			<br><br><br><br><br><br><br><br><br><br><br><br>
			<a href="#top">Back to top of page</a><br><br>
			Creators’ E-Mail: <br><br>
			<a href="mailto:David.Farrell.15@cnu.edu">David.Farrell.15@cnu.edu</a> &nbsp;
			<a href="mailto:Matthew.Schuler.14@cnu.edu">Matthew.Schuler.14@cnu.edu</a><br>
		</footer>
	</div>
	</body>
</html>