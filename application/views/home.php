<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>Hello, world!</title>
</head>

<body>

  <form action="tampil" method="post">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localhost/igniter/index.php/homepage/hmpage#">UNJANI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="http://localhost/igniter/index.php/homepage/hmpage#" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/igniter/index.php/test/profil">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/igniter/index.php/calc">Kalkulator</a>
              </li>

              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="card" style="width: 60 rem;">
        <div class="card-body">
          <h5 class="card-title">Username</h5>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" aria-label="Username" name="text1">
          </div>
          <button type="submit" value="KIRIM" class="btn btn-dark tombol" >Sign in</button>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
      .navbar {
        box-shadow: 2px 4px 10px gray;
        border-radius: 15px;
        margin-top: 30px;
      }

      .card {
        box-shadow: 2px 4px 13px black;
        border-radius: 30px;
        margin-top: 20px;
        padding: 60px;
        text-align: center;


      }

      body {
        background-color: aquamarine;
      }
    </style>
  </form>
</body>

</html>