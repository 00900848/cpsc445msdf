<?php
include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>My Website Guide :: Business :: Large Business :: Home & Garden</title>
<meta charset="utf-8">
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
	<header>My Website Guide</header>
	<br>
	<nav><a href="index.html">Home</a></nav>
		<main>
			<p>For a large home & garden business website, we recommend the following options to you:</p>
			<br>
		</main>
		<h2>Managed Web Services</h2>
		<section class="flex-container">
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
				$query = "SELECT * FROM WebServices where w_id=11";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<h3>Option 3</h3>";
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
				$query = "SELECT * FROM WebServices where w_id=27";
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
				$query = "SELECT * FROM WebServices where w_id=29";
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
				$query = "SELECT * FROM WebServices where w_id=31";
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
		</section>
		<h3 align="center">Need help starting your website? Here is a list of freelance web developers who can help you if you choose to use unmanaged web services:</h3>
		<table align="center">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Website</th>
			</tr>
			<tr>
				<?php
					$query = "SELECT * FROM Freelancer where f_id=1";
					$result = $conn->query($query);
					if($row=$result->fetch_assoc()) {
						echo "<td>". $row['f_name'] ."</td>";
						echo "<td>". $row['f_email'] ."</td>";
						echo "<td>". $row['f_website'] ."</td>";
					}
				?>
			</tr>
			<tr>
				<?php
					$query = "SELECT * FROM Freelancer where f_id=2";
					$result = $conn->query($query);
					if($row=$result->fetch_assoc()) {
						echo "<td>". $row['f_name'] ."</td>";
						echo "<td>". $row['f_email'] ."</td>";
						echo "<td>". $row['f_website'] ."</td>";
					}
				?>
			</tr>
			<tr>
				<?php
					$query = "SELECT * FROM Freelancer where f_id=3";
					$result = $conn->query($query);
					if($row=$result->fetch_assoc()) {
						echo "<td>". $row['f_name'] ."</td>";
						echo "<td>". $row['f_email'] ."</td>";
						echo "<td>". $row['f_website'] ."</td>";
					}
				?>
			</tr>
		</table>
		<footer>
			<br><br><br><br><br><br><br><br><br><br><br><br>
			Creators’ E-Mail: <br><br>
			<a href="mailto:David.Farrell.15@cnu.edu">David.Farrell.15@cnu.edu</a> &nbsp;
			<a href="mailto:Matthew.Schuler.14@cnu.edu">Matthew.Schuler.14@cnu.edu</a><br>
		</footer>

	</body>
</html>