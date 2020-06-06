<?php

  if(isset($_POST['en']) and $_POST['pt'] != ''){
    if(strlen($_POST['en'])<2 or strlen($_POST['en'])>50){
      echo("<p style='color:red; text-align:center'>Please remember that the word needs to have between 2 and 50 characters.</p>");
    }
    else if(strlen($_POST['pt'])<2 or strlen($_POST['pt'])>50){
      echo("<p style='color:red; text-align:center'>Please remember that the word needs to have between 2 and 50 characters.</p>");
    }
    else{
      require 'db.php';
      include 'sendData.php';
      include 'getWords.php';
    }
    
  }
  else{
    echo('<p style="color:blue; text-align:center">Enter both fields</p>');
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

    <title>Create Words and Definitions</title>
  </head>
  <body>
    <div class="container">
      <form method="POST" action="#">
        <div class="row">
          <div class="col-6">
            <label for="en">Word in English</label>
            <input class="form-control" type="text" id="en" name="en">
          </div>
          <div class="col-6">
            <label for="pt">Word in Portuguese</label>
            <input class="form-control" type="text" id="pt" name="pt">
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <button class="btn btn-primary float-left mt-2" id="submit">Add!</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6">
          <h5>English words</h5>
          <p><?php
              require 'db.php';
              require_once 'getWords.php';
            if(isset($myEnglishWords))
            {
              $x = 0;
              while($x < sizeof($myEnglishWords))
              {
                echo $myEnglishWords[$x];
                echo "<br>";
                $x+=1;
              } 
            }
           ?></p>
        </div>
        <div class="col-6">
          <h5>Portuguese words</h5>
          <p><?php
              require 'db.php';
              require_once 'getWords.php';
            if(isset($myPortugueseWords))
            {
              $y = 0;
              while($y < sizeof($myPortugueseWords))
              {
                echo $myPortugueseWords[$y];
                echo "<br>";
                $y+=1;
              } 
            }
           ?></p>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

