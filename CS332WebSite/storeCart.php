<?php
require "storeHeader.php";
require "dbh.inc.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col">
        <?php
        $name = 'anon';
        if (isset($_SESSION['userID'])) {
          $name = $_SESSION['name'];
          echo '<p>You are logged IN! '.$name.'</p>';
        }
        else {
          echo '<p>You are logged OUT! '.$name.'</p>';
        }
        ?>
      </div>
    </div>
  </div>

  <div class="container">
  <div class="row">
    <div class="col">
      <h1> </h1>
    </div>
    </div>
    </div>

  <div class="container">
  <div class="row">
    <div class="col-lg-8">

    <h4>Your Cart!</h4>

    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ISBN</th>
          <th scope="col">QUANTITY</th>
        </tr>
      </thead>
      <?php
      if(isset($_SESSION['userID'])){
      $uid = $_SESSION['userID'];
    }
    else{
      header("Location: ../bs2/logIn.php?error=must_LogIn");
      exit();
    }
      $i = 0;

      $sql = "SELECT * FROM cart WHERE userid = '$uid';";
      $result = mysqli_query($conn, $sql);
      if(!mysqli_query($conn, $sql)){
        die("FAILURE!");
      }
      else{
        $num = mysqli_num_rows($result);
      while ($i < $num){
        $cartInfo = mysqli_fetch_assoc($result);
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $cartInfo['isbn']; ?></th>
          <?php $myisbn = $cartInfo['isbn']; ?>
          <td><?php echo $cartInfo['qty']; ?></td>
        </tr>
        <?php $i++;
      }
    }
       ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col">
      <form action="change.inc.php" method="post" class="form-inline">
  <div class="form-group mb-2">
    <label for="inISBN" class="sr-only">ISBN</label>
    <input type="text" class="form-control" name="inISBN" placeholder="Enter ISBN">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="new-quantity" class="sr-only">Quantity</label>
    <input type="number" class="form-control" name="new-quantity" placeholder="Change Quantity">
  </div>
  <button type="submit" name="change-submit" class="btn btn-primary mb-2">Change Quantity</button>
</form>
    </div>
  </div>
</div>

<div class="container">
<div class="row">
  <div class="col">
    <form action="checkout.inc.php" method="post" class="form-inline">
    <button type="submit" name="checkout-submit" class="btn btn-info btn-lg btn-block">Check Out!</button>
  </form>
  </div>
  </div>
  </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
