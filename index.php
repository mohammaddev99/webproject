<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Holo Toast</title>

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- css folder -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <!-- nav bar -->

  <section>


    <nav class="navbar navbar-expand-lg navbar-light bg-light padding-zero">
      <a class="navbar-brand padding-zero" href="#"><img class=" nav-logo" src="images/nav-logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  nav-bar-cstm nav-height " id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              What We Have
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="recipes.php">Recipes</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="dark-cstm">
            <div>
              <button id="theme"class="button-dark" type="button" name="button"><i class="theme-img-color fas fa-adjust fa-lg"></i></button>

            </div>
          </li>
        </ul>
        <div class="log-spacing">
          <a href="login.php"> <button type="button" class="btn btn-outline-dark log-cstm-in">Login</button>
          </a>
          <a href="signin.php"> <button type="button" class="btn btn-dark log-cstm-up">Sign Up</button>
          </a>
        </div>

      </div>

    </nav>

  </section>

  <section class="section1">
    <div class="row">


      <div class="col-lg-4">
        <img class="sec1-img1" src="https://altonbrown.com/wp-content/uploads/2020/08/French-Toast-Stack_Lynne_resized.jpg" alt="">

      </div>
      <div class="col-lg-8 sec1-p1">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </section>

  <section class="section1">
    <div class="row">


      <div class="col-lg-4">
        <img class="sec1-img1" src="https://www.kingarthurbaking.com/sites/default/files/styles/featured_image/public/recipe_legacy/19928-3-large_0.jpg?itok=z6hrU9GQ" alt="">

      </div>
      <div class="col-lg-8 sec1-p1">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </section>
  <section class="footer">
    <div class="">
      <a href="admin.php"></a>
      <p class="footer-p1">@ copyright 2021 HoloToast</p>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
    $("#theme").on("click", function() {
      $("body").toggleClass('add-theme');
    });
  </script>
</body>

</html>
