<!DOCTYPE html>
<html>
<head>
<title>Configurateur tarifs</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"></link>
<link rel="stylesheet" href="assets/bootstrap-slider.min.css"></link>
<link rel="stylesheet" href="assets/style.css"></link>
</head>

<body>
	<div class="container">
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Variable 1</div>
				<div class="col-lg-1 text-center minus"><a href="#"> - </a></div>
				<div class="col-lg-5"><input id="variable1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="10"/></div>
				<div class="col-lg-1 text-center plus"><a href="#"> + </a></div>
				<div class="col-lg-3 var1donnee valeur">10</div>
			</div>
		</div>
		<div class="slideOptions">
			<div class="row">
				<div class="col-lg-2">Variable 2</div>
				<div class="col-lg-1 text-center minus"><a href="#"> - </a></div>
				<div class="col-lg-5"><input id="variable2" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="10"/></div>
				<div class="col-lg-1 text-center plus"><a href="#"> + </a></div>
				<div class="col-lg-3 var2donnee valeur">10</div>
			</div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-slider.min.js"></script>
<script type="text/javascript">
	var slider1 = $("#variable1");
	slider1.slider();
	slider1.on('change', function() {
		var valeur1 = slider1.slider('getValue');
		$('.var1donnee').html(valeur1);
	})
	var slider2 = $("#variable2");
	slider2.slider();
	slider2.on('change', function() {
		var valeur2 = slider2.slider('getValue');
		$('.var2donnee').html(valeur2);
	})
	$('.minus').on('click', function() {
		addOrRemove('remove', $(this));
	});
	$('.plus').on('click', function() {
		addOrRemove('add', $(this));
	});

	function addOrRemove(symbole, selector) {
		var nouvelleValeur;
		var input = selector.parents('.slideOptions').children().children('.col-lg-5').children('input');
		var valeur1 = input.slider('getValue');
		if(symbole == 'add') {
			nouvelleValeur = valeur1+1;
		} else if(symbole == 'remove') {
			nouvelleValeur = valeur1-1;
		}
		else {
			nouvelleValeur = valeur1;
		}
		input.slider('setValue', nouvelleValeur);
		var valeur = selector.parents('.slideOptions').children().children('.col-lg-3');
		valeur.html(nouvelleValeur);
	}
</script>
</body>

</html>