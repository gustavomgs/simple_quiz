<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from questions";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from `choices` where question_number = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP - Quiz Interativo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
        <br>
          <h5>PHP - Quiz Interativo</h5>
          <hr>
	</div>
      </header>


      <main>
      <div class="container">
        <div class="current">Questão <?php echo $number; ?> de <?php echo $total; ?></div>

	<p class="question">
	   <?php echo $question['question'] ?>
	</p>
	<form method="post" action="process.php">
	      <ul class="list-group">
	        <?php while($row=$choices->fetch_assoc()): ?>
		<li class="list-group-item"><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
		  <?php echo $row['choice']; ?>
		</li>
		<?php endwhile; ?>
	      </ul>
		  <br>
	      <input class="btn btn-secondary" type="submit" value="Responder" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>
    </div>
    </main>


	<footer>
      <div class="container">
      <br><br><br><br><br>
      	   Todos os Direitos reservados: &copy; 2020, Flávio e Gustavo <3
      </div>
    </footer>
  </body>
</html>