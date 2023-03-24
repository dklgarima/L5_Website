<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style type="text/css">
		h2 {
			text-align: center;
		}
		table {
			width: 100%;
			text-align: center; 
			border-spacing: 5px;
		}
		.container {
			display: flex;
			flex-direction: row;
			justify-content: space-around;
			width: 90%;
			max-width: 1300px;
			margin: auto;
		}
		.sidebar {
			width: 30%;
			margin-right: auto;
		}
		.main {
			width: 70%;
			margin-left: auto;
		}
		.logout{
			display: flex;
			width: 90%
			max-width: 1300px;
			font-weight: bold;
			font-size: 20px;
		}

		.logout > a {
			margin-right: 5%;
			margin-left: auto !important;
			text-decoration: none;
			color: #000000;
		}
		.logout > a:hover {
			color: blue;
		}
	</style>
</head>
<body>
	<?php
	include 'connection.php'; 
	if (isset($_SESSION['user'])) {
		echo "<h2>Welcome ".$_SESSION['user']."</h2>";

	if ($_SERVER['HTTPS'] !== null && $_SERVER['HTTPS'] == 'on')
	{
		$baseURI = "https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	}else{
		$baseURI = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	}

	$category = $_GET['category'];
	$name     = $_GET['nameSearch'];
	$sort     = $_GET['sort'];

	$catAddr    = $baseURI.'?sort='.$sort.'&nameSearch='.$name;
	?>

	<div class="logout"><a href="logout.php">Logout</a></div>
	<div class="container">
		<div class="sideBar">
			<div class="vertical">
				<!-- Sortyt according to category-->
				<label>Category:</label><br>
				<select name="sortCat" onchange="handleOnChange(this);">
					<option value='<?php echo $catAddr; ?>'>All</option>
					<option value='<?php echo $catAddr."&category=book"; ?>' <?php if ($_GET['category']=='book') echo "selected"?>>Book</option>
					<option value='<?php echo $catAddr."&category=Mug"; ?>'<?php if ($_GET['category']=='Mug') echo "selected"?>>Mug</option>
					<option value='<?php echo $catAddr."&category=t-shirt"; ?>'<?php if ($_GET['category']=='t-shirt') echo "selected"?>>T-shirt</option>
				</select><br><br>

				<!-- Search by name-->
				<form method="GET" action="">
					<label>Search By Name:</label><br>
					<input type="text" name="nameSearch" value="<?php echo $_GET['nameSearch']?>">
					<input type="hidden" name="sort" value="<?php echo $sort?>">
					<input type="hidden" name="category" value="<?php echo $category?>">
					<input type="submit" value="search"><br><br>
				</form>

				<!-- Radio button-->
				<form method="GET" action="">
					<label>Sort By:</label><br>
					<input type="radio" name="sort" value="" <?php if ($sort == null || $sort == "") echo "checked"; ?>>
					<label for="none">None</label>
					<input type="radio" name="sort" value="name" <?php if ($sort != null && $sort == "name") echo "checked"; ?>>
					<label for="name">Name</label>
					<input type="radio" name="sort" value="price" <?php if ($sort != null && $sort == "price") echo "checked"; ?>>
					<label for="price">Price</label><br>
					<input type="hidden" name="nameSearch" value="<?php echo $name?>">
					<input type="hidden" name="category" value="<?php echo $category?>">
					<input type="submit" value="Submit"><br><br>
				</form>
				<br><br>
				<?php
				if (isset($_SESSION['role']) && $_SESSION['role']==1) {
					echo "<a href='insert.php'>Insert Iteam</a>";
				}
				?>
			</div>
		</div>
		<div class="main">
			<table border="1" cellpadding="15">
				<tr>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Category</th>
					<th>Product Image</th>
					<?php
					if (isset($_SESSION['role']) && $_SESSION['role']==1) {
						echo "<th>Amend</th>";
						echo "<th>Delete</th>";
					}
					?>
				</tr>
				<?php
				//dropdown menu search
				if (!empty($_GET['category'])) {
					$query="SELECT * FROM search WHERE category = '".$_GET['category']."'";
				} else{
					$query="SELECT * FROM search";	
				}
				//name search
				if (!empty($_GET['nameSearch'])) {
					if (!empty($_GET['category'])) {
						$query.= " AND name LIKE '%".$_GET['nameSearch']."%'";
					} else {
						$query.= " WHERE name LIKE '%".$_GET['nameSearch']."%'";
					}
				}

				//radio button
				if (!empty($_GET['sort'])) {
					$query.= ' ORDER BY '.$_GET['sort'].' asc';
				}
				$result=mysqli_query($connection, $query);
				While ($row=mysqli_fetch_assoc($result)){ 
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['price']."</td>";
					echo "<td>".$row['category']."</td>";
					echo '<td><img src="./images/' . $row['image'] . '" width="100" height="100" /></td>';
					if (isset($_SESSION['role']) && $_SESSION['role']==1) {
						echo '<td><a href="amendProduct.php?id='. $row['id'].'">Amend</a></td>';
						echo '<td><a href="deleteProduct.php?id='. $row['id'].'">Delete</a></td>';
					}
					echo "</tr>";
				}
				?>
			<br>
			<?php
			} else {
				include 'loginform.php';
				echo $_SESSION['error'];
			}
			?>
			</table>
		</div>
	</div>

	<script type="text/javascript">
		function handleOnChange(ev) {
			window.location = ev.value;
		}
	</script>

</body>
</html>