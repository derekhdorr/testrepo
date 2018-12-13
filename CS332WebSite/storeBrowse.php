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

  <!--Displaying tables-->
  <?php
  $query = "SELECT * FROM books;";
  $result = mysqli_query($conn, $query);
  $num = mysqli_num_rows($result);
  ?>

<div class="container">
<div class="row">
  <div class="col-12">

  <h4>Book's 4 Sale</h4>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ISBN</th>
        <th scope="col">AUTHOR</th>
        <th scope="col">TITLE</th>
        <th scope="col">PRICE</th>
        <th scope="col">SUBJECT</th>
      </tr>
    </thead>
    <?php
    $i = 0;
    while ($i < $num){
      $storeInfo = mysqli_fetch_assoc($result);
    ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $storeInfo['isbn']; ?></th>
        <?php $myisbn = $storeInfo['isbn']; ?>
        <td><?php echo $storeInfo['author']; ?></td>
        <td><?php echo $storeInfo['title']; ?></td>
        <td><?php echo $storeInfo['price']; ?></td>
        <td><?php echo $storeInfo['subject']; ?></td>
      </tr>
      <?php $i++;
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
        <form action="cart.inc.php" method="post" class="form-inline">
  <div class="form-group mb-2">
    <label for="staticISBN" class="sr-only">roISBN</label>
    <input type="text" readonly class="form-control-plaintext" id="staticISBN" value="Enter ISBN">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputISBN" class="sr-only">inISBN</label>
    <input type="inputISBN" class="form-control" name="inputISBN" placeholder="isbn">
  </div>
  <button type="submit" name="cart-submit" class="btn btn-primary mb-2">Add to cart</button>
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
