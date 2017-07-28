<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="susters/css/bootstrap.min.css" rel="stylesheet">
    <link href="susters/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		<!-- Caroussell -->
			@include('layouts.caroussell')
			<!-- End Caroussell -->
			 {{--Pignation--}}
			@include('layouts.pignation')
			{{-- End Pignation--}}
			<ul class="breadcrumb">
			</ul>
			</div>
	</div>
</div>

    <script src="susters/js/jquery.min.js"></script>
    <script src="susters/js/bootstrap.min.js"></script>
    <script src="susters/js/scripts.js"></script>
  </body>
</html>