<!doctype html>
	<html lang="en">
	<head>
	<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" 
		<title>ASE 230 - class of Fall 2021</title>
	</head>
<?php // This requires our needed php files
	require 'data.php';
	require 'functions.php';
	
?>

<?php
# Our student array
/*$student=[
	[
		'name'=>'Noah',
		'age'=>25,
		'gender'=>'male',
		'year'=>'$$$$',
		'pictures'=>[
			'ahrimanchibi.png',
		]
	],
	[
		'name'=>'Sean',
		'age'=>22,
		'gender'=>'male'
		'year'=>'$$$',
		'pictures'=>[
			'avatar.jpg',
		]
	],
	[
		'name'=>'Jason',
		'age'=>23,
		'gender'=>'male'
		'year'=>'$$$',
		'pictures'=>[
			'avatar1.jpg',
		]
	],
];*/
?>

<?php
	echo '<h1>$student[$_GET['$i']]['name'] </h1>';
	echo '<p>$student[$_GET['$i']]['age']</p>';
	echo '<p>$student[$_GET['$i']]['gender']</p>';
	echo '<p>$student[$_GET['$i']]['year']</p>';
	echo '<p>$student[$_GET['$i']]['pictures']</p>';
	/*/<a href="noah_gestiehr.php?index=<?= $i ?>">See student</a>
	<a href="noah_gestiehr.php?index=<?= $i ?>">See Student Info Test $GET</a>*/
}
?>
		
	<body>
	<pre>
		<link rel="stylesheet" href="assets/css/detail.css" />
		<?= '<title>ASE 230 - Noah R Gestiehr</title>'?>
		<div class="container text-center mb-5">
			
			<?php
				echo 'This is ASE 230 - Noah R Gestiehr';
				echo "<p>$student[$_GET[0]]['age']</p>";
				$give1 = $student[$_GET[0]]['age'];
				$give2 = $student[$_GET[0]]['DOB'];
				$difference = year_diff($give1, $give2);
				echo 'The difference in times is $difference';
				echo '<a href="index.php">Click to return to Index</a>';
			?>
		</div>
		<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="mb-2">
          <img class="w-100" src="ahrimanchibi.png" alt="">
        </div>
        <div class="mb-2 d-flex">
          <h4 class="font-weight-normal">Noah</h4>
		  <?php echo "Noah R Gestiehr"; ?>
          <div class="social d-flex ml-auto">
            <p class="pr-2 font-weight-normal">Follow on:</p>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-muted mr-1">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-muted">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
        <div class="mb-2">
          <ul class="list-unstyled">
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Dream profession:</span>
              <label class="media-body">Server-side developer</label>
			  <?php 
					echo "Dream Profession.";
					echo "My dream job would probably be a professor teaching history or entry level programming.";
					echo "Another dream job of mine would be an Exploitation engineer for the government as it is awesome."; ?>
			  
		   </li>
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Dream company: </span>
              <label class="media-body">Google</label>
			  <?php 
					echo "Dream Company.";
					echo "My dream Company for being a teacher I have never really thought about.";
					echo "For the Exploitation Engineer, either a government agency in the US or maybe a Private firm back in Europe."; ?>
            </li>
			
            <li class="media">
              <span class="w-25 text-black font-weight-normal">Email: </span>
              <label class="media-body">support@technol.com</label>
            </li>
			
          </ul>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 pl-xl-3">
	  
         '<h5 class="font-weight-normal">Short intro</h5>';
			<?= 'Along with your plans, you should consider developing an action orientation that will keep you motivated to move forward at all times. This requires a little self-discipline, but is a crucial component to achievement of any kind. Before starting any new activity, ask yourself if that activity will move you closer to your goals. If the answer is no, you may want to reconsider doing it at that time.'?></p>
			<?=  "Short Intro:"?>
			<?= "Hi, I am a triple major with CIT/CSS/HIS at NKU. I am a senior and really unsure of myself when it comes to php but its required sadly. Ill try not to be too awful." ?>
        <div class="my-2 bg-light p-2">
           '<p class="font-italic mb-0">The price is something not necessarily defined as financial. It could be time, effort, sacrifice, money or perhaps, something else.</p>';
        </div>
        <div class="mb-2 mt-2 pt-1">
           '<h5 class="font-weight-normal">Top skills</h5>';
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              '<div class="progress-bar-title">Finance</div>';
              <span class="progress-bar-number">85%</span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title">Information Technologies</div>
              <span class="progress-bar-number">70%</span>
            </div>
          </div>
        </div>
        <div class="py-1">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width:77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar-title">Education</div>
              <span class="progress-bar-number">77%</span>
            </div>
          </div>
        </div>
        <h5 class="font-weight-normal">Fun fact</h5>
        <p><?= 'It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!'?></p>
      </div>
	  
    </div>
  </div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<?php // Footer 
		echo "<p>Copyright &copy; 2017-" . date("Y") . " Noah Gestiehr</p>";
	?>
	</pre>
	</body>
</html>