<!doctype html>
<html>
<head>
  <title>Main page</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="js/photo-gallery.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
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
            <a class="navbar-brand" href="index.html">Petrolhead</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="index.html">Main</a></li>
              <li><a href="models.html">Models</a></li>
              <li><a href="gallery.html">Gallery</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
      </div>
  </nav>

  <div class="container">
  <?php
    $email=$_POST['email'];
    $message=$_POST['message'];

    $from='From: $email\r\nReturn-path: $email'; 
        $subject="Someone from your website is contacting you"; 
        mail('osuch.ilona@gmail.com', $subject, $message, $from);
    echo "<h1>Email sent!</h1>";
  ?>

<a class="btn btn-default" href="../index.html" role="button">Return to main page</a>

</body>
</html>
