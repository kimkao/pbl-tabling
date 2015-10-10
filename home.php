<!DOCTYPE HTML>
<head>
	<title>home page for tabling</title>

<!--Stylesheets-->
<link href= "/css/bootstrap.min.css" rel="stylesheet" />
<link href="/css/_bootswatch.scss" rel="stylesheet" />
<link href="/css/_variables.scss" rel="stylesheet" />
</head>

<body>
	<h1 class ="col-md-12 text-center">tabling</h1>

	<div class="container">

<!-- <div class="row">
	<div class="col-md-2 text-center">
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Available</button>
    </div>
</div> -->
<div class="row">
	<div class="col-md-12">
			<p>sign up for your tabling slot below. green means available slot, so you can click on drop down to sign up. red means unavailable.</p>
			<p>things to watch out for: </ br> put borders to divide between columns</p>
	</div>
</div>

<?php

	echo 'hello';
?>
<div class="row">
	<div class="col-md-2 text-center">
		<div class="btn-group">
		  <a href="#" class="btn btn-success">Available</a>
		  <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
		  <ul class="dropdown-menu">
		    <li>
		    	<!-- <a href="#">Sign up for this time slot</a> -->
		    	<a href="#" data-toggle="modal" data-target="myModal">Sign up for this slot</a>
		    </li>
  		</ul>
</div>
	</div>
</div>

<!--Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h4 class="modal-title">Are you sure?</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you wish to submit this album?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

</div>

<!--Scripts-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>

</body>