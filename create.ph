<!-- Provides a user to log in -->
<?php
require_once('functions.php');
signin($_GET,'../data/users.csv.php');

if(!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "Please log in to view this page";
	header('location: signin.php');

?>
<!doctype html>
<html lang="en">
	<head>
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" 
		<title>ASE 230 - class of Fall 2021 Photobook - Create </title>
	</head>
	
	<?php
		
		include('json_util.php');
		
		
	?>
		<body style="text-align:center;">
		<!-- Page to modify a quote from an author -->
		<p>
			<?php
			$classarr = readjson();
			?>
			$index = 3;
			<h2>Would you like to add an element</h2>
			
			
			
			 <?php
				
				if(isset($_POST['added'])) {
					//echo "Modifying Element at Index block". $_POST['index'];
					$appendelement = $classarr[0];
					array_push($appendelement);
					echo 'An Element was added.';
					savephptojson($classarr);
				}
			?>
			
			
			<form method="post"	action="index.php">
				<p>
				<input type="submit" name="submit" value="Home">
				</p>
			</form>
			
			<form method="post"	action="<?= $_SERVER['PHP_SELF']?>">
				<br><br>
				<p>
				<input type="hidden" name="index" value=<?=$_POST['index']?>>
				<input type="submit" name="added" value="Modify Element">
				</p>
			</form>
			
			<?php //<a href="index.php">
				//<button>Delete</button>
			//</a>
				
				
			?>
		</p>
		
		<?php
			
			echo "<p>Copyright &copy; 2017-" . date("Y") . " Noah R Gestiehr</p>";
		?>
	</body>
</html>