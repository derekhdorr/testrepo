<?php
require "storeHeader.php";
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
<?php echo '<br>' ?>
      </div>
    </div>
    
<!--Log in form-->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="logIn.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Already have an account? LogIn!</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
<?php echo '<br>' ?>
      </div>
    </div>

    <!--User Info Form-->
        <div class="container">
          <div class="row">
        <form action="signup.inc.php" method="post" >
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inFname">First Name</label>
              <input type="text" class="form-control" name="inFname" placeholder="First Name" required/>
            </div>
            <div class="form-group col-md-6">
              <label for="inLname">Last Name</label>
              <input type="text" class="form-control" name="inLname" placeholder="Last Name" required/>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inEmail">Email</label>
              <input type="text" class="form-control" name="inEmail" placeholder="Email" required/>
            </div>
            <div class="form-group col-md-6">
              <label for="inPwd">Password</label>
              <input type="password" class="form-control" name="inPwd" placeholder="Password" required/>
            </div>
          </div>
          <div class="form-group">
            <label for="inAddress">Address</label>
            <input type="text" class="form-control" name="inAddress" placeholder="1234 Main St" required/>
          </div>
          <div class="form-group">
            <label for="inPhone">Phone Number</label>
            <input type="number" class="form-control" name="inPhone" placeholder="xxx-xxx-xxxx">
          </div>
          <div class="form-group">
            <label for="inCredit">Credit Card No</label>
            <input type="number" class="form-control" name="inCredit" placeholder="xxxxxxxxxxxxxxxx">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inCity">City</label>
              <input class="form-control" name="inCity" required/>
            </div>
            <div class="form-group col-md-4">
              <label for="inState">State</label>
              <select name="inState" class="form-control">
                <option selected>Choose...</option>
                <option value = "ca">CA</option>
                <option value = "wa">WA</option>
                <option value = "or">OR</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="number" class="form-control" name="inZip" required/>
            </div>
          </div>
          <button type="submit" name="signup-submit" class="btn btn-info">SignUp</button>
        </form>
        </div>
        </div>

        <?php
        require "footer.php";
        ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
