<?php
$connect = mysqli_connect("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="bootstrap-4.5.2-dist/css/bootstrap-grid.min.css"
    />
    <link rel="stylesheet" href="bootstrap-4.5.2-dist/css/bootstrap.min.css" />

    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body class="signIn-body">
    <div class="container">
      <div class="row">
        <div class="col"></div>
        <div class="col-md-8">
          <div class="card sighin-card">
            <div class="card-block">
              <img src="abupix.png" class="img-fluid img-signIn" />
              <h4 class="h4 school-name">Ahmadu Bello University</h4>
              <h6 class="h6 name">Zaria Nigeria.</h6>

              <form
                action="include/login.php"
                method="post"
                class="form-signIn"
                autocomplete="off"
              >
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="username"
                    placeholder="Enter Username"
                    id="email"
                    required
                  />
                </div>
                <div class="form-group">
                  <input
                    type="password"
                    class="form-control"
                    name="user_password"
                    id="password"
                    placeholder="Enter Password"
                    required
                  />
                </div>
                <button
                  type="submit"
                  name="submit"
                  class="btn signIn-btn btn-lg"
                >
                  Sign In
                </button>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" /> Remember
                    Me <a href="#"> Need Help</a>
                  </label>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col"></div>
        <div></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
