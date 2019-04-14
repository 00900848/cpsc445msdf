<?php
include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>My Website Guide :: Blog :: Video-Based Blog</title>
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
			<p>For a video-based blog website, we recommend the following options to you:</p>
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
			<?php 
				$query = "SELECT * FROM WebServices where w_id=03";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
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
                $query = "SELECT * FROM WebServices where w_id=01";
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
        	<?php 
				$query = "SELECT * FROM WebServices where w_id=10";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		<div class="option">
    		<?php 
    			$query = "SELECT * FROM WebServices where w_id=01";
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
        	<?php 
				$query = "SELECT * FROM WebServices where w_id=07";
				$result = $conn->query($query);
				if($row=$result->fetch_assoc()) {
					echo "<a href='" . $row['domain'] . "'>" . $row['w_name'] . "</a>";
					echo "<ul><li>". $row['feature1'] ."</li>";
					echo "<li>". $row['feature2'] ."</li>";
					echo "<li>". $row['feature3'] ."</li>";
					echo "</ul>";
				}
			?>
		</div>
		</section>
		<p class="all-options">Need more options? Click <a href="all-options.php">here</a> to navigate to a page with all options displayed.</p>
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