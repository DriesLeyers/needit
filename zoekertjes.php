<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="https://use.typekit.net/hay5vbn.css">

  <title>Document</title>
</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: white; box-shadow: 0px 3px 3px black; font-family: futura-pt, sans-serif;font-weight: 700;">

  <!-- Navbar brand -->

  <img class="logo" src="img/logo.png" alt="logo" style="margin-left: 10px;">
  <div class="center" style=" ">
    <form class="form-inline ">
      <div class="md-form my-0 ">
        <input class="form-control mr-sm-2 searchbar " style="width: 150%; " type="text" placeholder="Zoek" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapse button -->
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>




  <div class="navbar-collapse collapse" id="basicExampleNav" style="margin-left: 25%;">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link waves-effect waves-light" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="#">verzoek/toevoegen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="#">profiel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="#">Krediet: 10</a>
      </li>
    </ul>
  </div>
  <!-- Links -->

</nav>
<!-- Navbar -->

<body>
  <div class="filter">
    <div class="row" style="--bs-gutter-x: 0rem;">
      <div class="bg-image p-3 text-center shadow-1-strong col-md  text-white flex-item-left" style="background-color:#7a7f84 ;
        background-size: 110%;  height: 90vh; flex: 0 1 0%;">
        <h1>filters</h1>

      </div>



      <div class="col-md col-mobile">

        <div style="margin-left: 39%; margin-top: 2%">
          <a href="index.php" class="finders " style="text-decoration: none;  color:grey; margin-right:50px;">Artikelen </a><a href="" class="finders" style="text-decoration: none; color:black ;">Zoekertjes</a>
          <hr style="margin-right: 73%; marging-top: 0px">

        </div>

        <div class="d-flex fllex-wrap" style="margin-left: 2%;">
        <a href="" style="text-decoration: none;" class="article_clickable">
          <div class="article ">
          
            <img src="img/background.png" alt="" style="width: 200px; height: 200px;">
            <h4>Item 1</h4>
            <p>descr</p>
          </div>
          <div class="grey">
            <p>
            username
            </p>
          </div>
        </a>

        <a href="" style="text-decoration: none;" class="article_clickable">
          <div class="article ">
          
            <img src="img/background.png" alt="" style="width: 200px; height: 200px;">
            <h4>Item 2</h4>
            <p>descr</p>
          </div>
          <div class="grey">
            <p>
            username
            </p>
          </div>
        </a>

        

      </div>
    </div>

  </div>
</div>
</body>
<footer class="footer bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center text-white p-3" style="color:white; background-color: #252523; box-shadow: 0px 0px 6px grey;">
           
            <a class="text-white" style="color:white; text-decoration: none;" href="">© 2020 Copyright: Elias Valienne en Kevin Vanbockryck</a>
        </div>
        <!-- Copyright -->
    </footer>

</html>