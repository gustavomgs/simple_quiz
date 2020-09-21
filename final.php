 <?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Create Select Query
	$query="select * from shouts order by time desc limit 100";
	$shouts = mysqli_query($con,$query);

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
	     <h2>Quiz finalizado.</h2>
	     <p>Parabéns, você respondeu todas as perguntas!</p>
       <div class="alert alert-success" role="alert">
	     <p>Pontuação final: <?php echo $_SESSION['score']; ?></p>
       </div>
	     <a href="question.php?n=1" class="btn btn-primary">Fazer o quiz novamente</a>
	     <?php session_destroy(); ?>
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