 <?php include "database.php"; ?>

<?php
	//Get the total questions
	$query="select * from questions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;

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
        <h6>Teste o seu conhecimento.<h6>
	<p>Esse é um quiz de multipla escolha desenvolvido em PHP pelos alunos:</p>
  <p>Gustavo Messias - <strong>RA : 0040481821039</strong><br>
  Flávio Júnior - <strong>RA : 0040481821004</strong></p>
	<ul>
		<li><strong>Número de questões: </strong><?php echo $total; ?></ul>
		<li><strong>Tipo: </strong>Multipla Escolha</ul>
		<li><strong>Tempo estimado: </strong><?php echo $total*0.5; ?> minutos</ul>
	</ul>
  <br><br><br>	<a href="question.php?n=1" class="btn btn-primary">Começar Quiz</a>
  </div>
    </div>
    </main>


    <footer>
      <div class="container">
      <br><br><br><br><br>
      	   Todos os Direitos reservados: &copy; 2020, Flávio e Gustavo <3
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>