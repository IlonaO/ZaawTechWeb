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
  <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
  <script>
  function cyl_calc() {
    var cyl_radius = document.getElementById('cyl_radius').value;
    var cyl_height = document.getElementById('cyl_height').value;
    surface=2*Math.PI*cyl_radius*(cyl_radius+cyl_height);
    volume=Math.PI*cyl_radius*cyl_radius*cyl_height;
    alert("Surface is: " + surface.toFixed(3) +"\nVolume is: " + volume.toFixed(3));
  }
  </script>
</head>

<body>
	<!--navbar-->
	<nav class="navbar navbar-default navbar-fixed-top">
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
              <li><a class="active" href="../contact.html">Contact</a></li>
      			</ul>
      			<ul class="nav navbar-nav navbar-right">
        			<li><a class="active" href="cylinder.html">Cylinder <span class="sr-only">(current)</span></a></li>
      			</ul>
    		</div>
  		</div>
	</nav>

  <div class="container" style="margin-top:10%;">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12">
        <h4>Volume and surface area of a cylinder (jQuery)</h4>
          <div class="form-group">
            <label>Radius</label>
            <input type="number" class="form-control" id="cyl_radius" placeholder="Enter radius" min="1" max="1000" required>
          </div>
          <div class="form-group">
            <label>Height</label>
            <input type="number" class="form-control" id="cyl_height" placeholder="Enter height" min="1" max="1000" required>
          </div>
          <div class="form-group">
            <button class="btn btn-primary pull-right" onclick="cyl_calc()">Calculate</button>
          </div>

        <div id="result"></div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12">
        <h4>Volume and surface area of the cone (PHP)</h4>
        <form method="post" action="cylinder.php">
          <div class="form-group">
            <label>Radius</label>
            <input type="number" class="form-control" name="radius" placeholder="Enter radius" min="1" max="1000" required>
          </div> 
          <div class="form-group">
            <label>Height</label>
            <input type="number" class="form-control" name="height" placeholder="Enter height" min="1" max="1000" required>
          </div>
          <div class="form-group">
            <button class="btn btn-primary pull-right" type="submit">Calculate</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>