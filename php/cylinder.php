<!doctype html>
<html lang="en">
<head>
  <title>Cylinder</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link href="../img/favicon.ico" rel="icon" type="image/x-icon" />
</head>

<body>
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.html">Petrolhead</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="../index.html">Main</a></li>
              <li><a href="../models.html">Models</a></li>
              <li><a href="../gallery.html">Gallery</a></li>
              <li><a href="../contact.html">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="../calculations.html">Calculations</a></li>
            </ul>
        </div>
      </div>
  </nav>

  <div class="container">
  <?php
    $cone_radius = $_POST['cone_radius'];
    $cone_height = $_POST['cone_height'];
    $cone_volume = (pi()*$cone_radius*$cone_radius*$cone_height)/3;
    $slant = sqrt($cone_radius*$cone_radius+$cone_height*$cone_height);
    $cone_surface = pi()*$cone_radius*($slant+$cone_radius);
    echo "<h3>Cone volume: $cone_volume </h3>";
    echo "<h3>Cone surface area: $cone_surface </h3>";
?>

<a class="btn btn-default" href="../calculations.html" role="button">Return to calculations</a>

</body>
</html>