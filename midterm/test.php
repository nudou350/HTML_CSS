<?php
include 'randomWords.php'; 
?>

<?php  
  if(isset($_POST['submit'])){
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $answer5 = $_POST['answer5'];
    $countCorrect = 0;
    if ($answer1 == 'correct')
    {
      $countCorrect+=1;
    }
    if ($answer2 == 'correct')
    {
      $countCorrect+=1;
    }
    if ($answer3 == 'correct')
    {
      $countCorrect+=1;
    }
    if ($answer4 == 'correct')
    {
      $countCorrect+=1;
    }
    if ($answer5 == 'correct')
    {
      $countCorrect+=1;
    }


  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Test time!</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-12 mb-4">
          <h3 style="text-align: center;">Get ready to guess which Portuguese corresponds to the English word!</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <form method="POST" action="#">
            <div class="row">
              <div class="col-12">
                <h5>What does <?= $myEnglishWords[0] ?> means?</h5>
                <input required="true" type="radio" name="answer1" value="correct"><?= ' '.$myPortugueseWords[0] ?><br>
                <input required="true" type="radio" name="answer1" value="incorrect"><?php
                if (isset($myPortugueseWords[5])){
                  echo (' '.$myPortugueseWords[5]);
                }
                else{
                  echo (' '.'Conhecimento');
                }
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5>What does <?= $myEnglishWords[1] ?> means?</h5>
                <input required="true" type="radio" name="answer2" value="incorrect"><?php 
                if (isset($myPortugueseWords[6])){
                  echo (' '.$myPortugueseWords[6]);
                }
                else{
                  echo (' '.'Bruxa');
                } 
                ?><br>
                <input required="true" type="radio" name="answer2" value="correct"><?= ' '.$myPortugueseWords[1] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5>What does <?= $myEnglishWords[2] ?> means?</h5>
                <input required="true" type="radio" name="answer3" value="incorrect"><?php
                if (isset($myPortugueseWords[7])){
                  echo (' '.$myPortugueseWords[7]);
                }
                else{
                  echo (' '.'Ruiva');
                }
                ?><br>
                <input required="true" type="radio" name="answer3" value="correct"><?= ' '.$myPortugueseWords[2] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5>What does <?= $myEnglishWords[3] ?> means?</h5>
                <input required="true" type="radio" name="answer4" value="correct"><?= ' '.$myPortugueseWords[3] ?><br>
                <input required="true" type="radio" name="answer4" value="incorrect"><?php 
                if (isset($myPortugueseWords[8])){
                  echo (' '.$myPortugueseWords[8]);
                }
                else{
                  echo (' '.'Alface');
                }
                ?>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5>What does <?= $myEnglishWords[4] ?> means?</h5>
                <input required="true" type="radio" name="answer5" value="incorrect"><?php 
                if (isset($myPortugueseWords[9])){
                  echo (' '.$myPortugueseWords[9]);
                }
                else{
                  echo (' '.'Churrasco');
                }
                ?><br>
                <input required="true" type="radio" name="answer5" value="correct"><?= ' '.$myPortugueseWords[4] ?>
              </div>
            </div>

            <button type="submit" name="submit" class="btn btn-success float-left mt-2">Submit!</button>
         </form>
       </div>
       <div class="col-3">
        <h5>Correct:</h5>
        <p><?php
        if(isset($countCorrect)){
          echo "<p style='color:green'>$countCorrect</p>";
        }
        
        ?> 
        </p>
      </div>
      <div class="col-3">
        <h5>Incorrect:</h5>
        <p><?php
        if(isset($countCorrect)){
          echo "<p style='color:red'>".(5 - $countCorrect)."</p>";
        }
        
        ?> 
        </p>
      </div>
     </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
