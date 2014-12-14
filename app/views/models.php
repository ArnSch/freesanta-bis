<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Potem</title>
	<!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.transitions.css">
	<link rel="stylesheet" href="css/models.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- JavaScript -->
	<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.js"></script>
</head>
<body>
	<div id="helper-start" class="container">
		<div class="row"><div class="column">
			<h1 class="how-to">Créez un cadeau personalisé</h1>
			<p class="description">Selectionez quatre objets qui vous plaisent.</p>
		</div></div>
	</div>

	<div id="selectedModels" class="container">
		<div class="row"><div class="column">
			<div class="selectedModelContainer"></div>
			<div class="selectedModelContainer"></div>
		</div></div>
		<div class="row"><div class="column">
			<div class="selectedModelContainer"></div>
			<div class="selectedModelContainer"></div>
		</div></div>
	</div>

	<div id="resultModel" class="container">
		<div class="row"><div class="column">
			<script src="https://embed.github.com/view/3d/ArnSch/freesanta-bis/master/public/stl/result.stl?height=300&width=450"></script>
		</div></div>
	</div>

	<div id="resultModel" class="container">
		<button id="btn_merge" class="btn btn-default">Merge</button>
	</div>

	<div class="row form-group">
		<div class="col-md-6 lbl_search">
			<label for="txt_search">Recherche d'un model: </label>
		</div>
		<div class="input-group txt_search col-md-6 verticalyCenteredColumn">
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
			<input id="txt_search" type="text" class="form-control"/>
		</div>
	</div>

	<div class="containerCarousel container">
		<div id="owl-demo" class="owl-carousel owl-theme">
			<div class="item"><script src="https://embed.github.com/view/3d/ArnSch/freesanta-bis/master/public/stl/key.stl?height=300&width=450"></script><button class="btn btn-default btn-add">Add</button></div>
			<div class="item"><script src="https://embed.github.com/view/3d/ArnSch/freesanta-bis/master/public/stl/3125-18_BOLT2.stl?height=300&width=450"></script><button class="btn btn-default btn-add">Add</button></div>
			<div class="item"><script src="https://embed.github.com/view/3d/ArnSch/freesanta-bis/master/public/stl/diamondring2.stl?height=300&width=450"></script><button class="btn btn-default btn-add">Add</button></div>
			<div class="item"><script src="https://embed.github.com/view/3d/ArnSch/freesanta-bis/master/public/stl/The_Banana.stl?height=300&width=450"></script><button class="btn btn-default btn-add">Add</button></div>
		</div>
	</div>

	<script src="js/models.js"></script>
</body>
</html>
