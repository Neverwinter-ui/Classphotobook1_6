<!doctype html>
	<html lang="en">
	<head>
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" 
		
	</head>

	<body>


		<?php //Funtions.php
		
			$date=time();
			echo "Today is " . date("Y/m/d") . "<br>";
			# Prints something like: Monday 8th of August 2005 03:12:46 PM
			echo date('l jS\of F Y h:i:s A');
			
			function year_diff($date1, $date2){ // Ill be honest, this function as I udnerstand it is a repeat of the next
			// Even in terms of reading Assignment 3 criteria.
				$diff=date_diff($date1, $date2);
				echo "$diff";
			}
			
			function calcAge($date1, $date2) {
				$diff=date_diff($date1,$date2);
				echo "$diff";
			}
		?>
	</body>
</html>